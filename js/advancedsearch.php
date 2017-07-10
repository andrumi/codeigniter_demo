<?php

require_once('DisplayUtils.php');  // functions to aid with display of information

error_reporting(E_ALL);  // turn on all errors, warnings and notices for easier debugging

$results = '';

if(isset($_POST['Query']))
{
  $endpoint = 'http://svcs.ebay.com/services/search/FindingService/v1';  // URL to call
  $responseEncoding = 'XML';   // Format of the response

  $safeQuery = urlencode (utf8_encode($_POST['Query']));
  $site  = $_POST['GlobalID'];

  $priceRangeMin = 0.0;
  $priceRangeMax = $_POST['MaxPrice'];
  $itemsPerRange = $_POST['ItemsPerRange'];
  $debug = (boolean) $_POST['Debug'];

  $rangeArr = array('Low-Range', 'Mid-Range', 'High-Range');

  $priceRange = ($priceRangeMax - $priceRangeMin) / 3;  // find price ranges for three tables
  $priceRangeMin =  sprintf("%01.2f", 0.00);
  $priceRangeMax = $priceRangeMin;  // needed for initial setup

  foreach ($rangeArr as $range)
  {
    $priceRangeMax = sprintf("%01.2f", ($priceRangeMin + $priceRange));
    $results .=  "<h2>$range : $priceRangeMin ~ $priceRangeMax</h2>\n";
    // Construct the FindItems call
    $apicall = "$endpoint?OPERATION-NAME=findItemsAdvanced"
         . "&SERVICE-VERSION=1.0.0"
         . "&GLOBAL-ID=$site"
         . "&SECURITY-APPNAME=Andr*************-89c3-a081c9d72a82" //replace with your app id
         . "&keywords=$safeQuery"
         . "&paginationInput.entriesPerPage=$itemsPerRange"
         . "&sortOrder=BestMatch"
         . "&itemFilter(0).name=ListingType"
         . "&itemFilter(0).value=FixedPrice"
         . "&itemFilter(1).name=MinPrice"
         . "&itemFilter(1).value=$priceRangeMin"
         . "&itemFilter(2).name=MaxPrice"
         . "&itemFilter(2).value=$priceRangeMax"
         . "&affiliate.networkId=9"  // fill in your information in next 3 lines
         . "&affiliate.trackingId=1234567890"
         . "&affiliate.customId=456"
         . "&RESPONSE-DATA-FORMAT=$responseEncoding";

    if ($debug) {
      print "GET call = $apicall <br>";  // see GET request generated
    }
    // Load the call and capture the document returned by the Finding API
    $resp = simplexml_load_file($apicall);

    // Check to see if the response was loaded, else print an error
    // Probably best to split into two different tests, but have as one for brevity
    if ($resp && $resp->paginationOutput->totalEntries > 0) {
      $results .= 'Total items : ' . $resp->paginationOutput->totalEntries . "<br />\n";
      $results .= '<table id="example" class="tablesorter" border="0" cellpadding="0" cellspacing="1">' . "\n";
      $results .= "<thead><tr><th /><th>Title</th><th>Price &nbsp; &nbsp; </th><th>Shipping &nbsp; &nbsp; </th><th>Total &nbsp; &nbsp; </th><th><!--Currency--></th><th>Time Left</th><th>End Time</th></tr></thead>\n";

      // If the response was loaded, parse it and build links
      foreach($resp->searchResult->item as $item) {
        if ($item->galleryURL) {
          $picURL = $item->galleryURL;
        } else {
          $picURL = "http://pics.ebaystatic.com/aw/pics/express/icons/iconPlaceholder_96x96.gif";
        }
        $link  = $item->viewItemURL;
        $title = $item->title;

        $price = sprintf("%01.2f", $item->sellingStatus->convertedCurrentPrice);
        $ship  = sprintf("%01.2f", $item->shippingInfo->shippingServiceCost);
        $total = sprintf("%01.2f", ((float)$item->sellingStatus->convertedCurrentPrice
                      + (float)$item->shippingInfo->shippingServiceCost));

        // Determine currency to display - so far only seen cases where priceCurr = shipCurr, but may be others
        $priceCurr = (string) $item->sellingStatus->convertedCurrentPrice['currencyId'];
        $shipCurr  = (string) $item->shippingInfo->shippingServiceCost['currencyId'];
        if ($priceCurr == $shipCurr) {
          $curr = $priceCurr;
        } else {
          $curr = "$priceCurr / $shipCurr";  // potential case where price/ship currencies differ
        }

        $timeLeft = getPrettyTimeFromEbayTime($item->sellingStatus->timeLeft);
        $endTime = strtotime($item->listingInfo->endTime);   // returns Epoch seconds
        $endTime = $item->listingInfo->endTime;


        $results .= "<tr><td><a href=\"$link\"><img src=\"$picURL\"></a></td><td><a href=\"$link\">$title</a></td>"
             .  "<td>$price</td><td>$ship</td><td>$total</td><td>$curr</td><td>$timeLeft</td><td><nobr>$endTime</nobr></td></tr>";
      }
      $results .= "</table>";
    }
    // If there was no response, print an error
    else {
      $results = "<p><i><b>No items found<b></i></p>";
    }
    $priceRangeMin = $priceRangeMax; // set up for next iteration
  } // foreach

} // if

?>
