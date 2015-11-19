 <!-- application/views/ajax/index.php-->

  <p>
      <?
      echo $ajaxdata1.'<br>';
      $arrlength = count($ajaxdata);

      if ($arrlength > 0) {
          foreach ($ajaxdata as $ajaxdata_item) {

      ?>
        <a href="<?php echo site_url('news/view/'.$ajaxdata_item['slug']); ?>"> <?echo $ajaxdata_item['title'].'<br>';?> </a>
      <?
          }
      }
      else echo "No matches found.."
     ?>
  </p>
