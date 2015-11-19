 <!-- application/views/search/form.php -->

<h2>News Search</h2>

<script>

   // This is the jQuery Ajax call
   function doSearch()
   {
      $.ajax({
         type: "GET",
         url:"http://mi-linux.wlv.ac.uk/~1228264/codeigniter/index.php/ajax/getdata/" + $("#mysearch").val(),
         success:function(result){
         $("#searchresults").html(result);
      }});
   }

</script>

<!-- Search box -->
<input type="search" id="mysearch" placeholder="Search">

<!-- Search button -->
<input type="button" id="searchbutton" value="Search" onClick="doSearch();">

<!-- The DIV that will contain the search results -->
<div id="searchresults"></div>