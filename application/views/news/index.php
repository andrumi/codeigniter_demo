<div class="jumbotron">
    <h1><?php echo $title; ?></h1>
</div>
<div class="row">
    <div class="col-sm-4">
        <h2>Share Your News</h2>
        <form id="localStorageTest" method="post" action="<?=base_url("index.php/news/")?>">

            <p><label>Title:</label></p>
            <p><input type="title" name="title" id="title" class="stored" value="" /></p>
            <p><label>News:</label></p>
            <p><input type="textarea" spellcheck="true" rows="4" size="20" name="text" id="text" class="stored" value="" /></p>
            <input type="submit" class="demo-button" value="Submit" />
        </form>
    </div>

    <div class="col-sm-4">
        <h2><?php echo $title; ?></h2>
        <?php foreach ($news as $news_item): ?>
            <h3><?php echo $news_item['title']; ?></h3>
            <?php echo $news_item['date']; ?>
            <div class="main">
                <?php echo $news_item['text']; ?>
            </div>
            <p><a href="<?php echo site_url('news/view/'.$news_item['slug']); ?>">View article</a></p>
        <?php endforeach; ?>
    </div>

    <div class="col-sm-4">
            <h2><?php echo "Search News"; ?></h2>
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

            function doDateSearch()
            {
                $.ajax({
                    type: "GET",
                    url:"http://mi-linux.wlv.ac.uk/~1228264/codeigniter/index.php/ajax/getDatedata/" + $("#mydatesearch").val(),
                    success:function(result){
                        $("#searchresults").html(result);
                    }});
            }
        </script>

        <!-- Search box -->
        <p>
        <input type="search" id="mysearch" placeholder="Search by Title">

        <!-- Search button -->
        <input type="button" id="searchbutton" value="Search" onClick="doSearch();">
        </p>
        <p>
            <input type="date" id="mydatesearch" placeholder="Search by Date">
            <input type="button" id="searchbutton" value="Search" onClick="doDateSearch();">
        </p>

        <!-- The DIV that will contain the search results -->
        <div id="searchresults"></div>
    </div>





</div>
<script type="text/javascript" src="<?=base_url("js/formSaver.js")?>" ></script>
