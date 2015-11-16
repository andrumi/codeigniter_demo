<div class="jumbotron">
    <h1><?php echo $title; ?></h1>
</div>
<div class="row">
        <div class="col-sm-4">
            <?php echo '<h2>'.$news_item['title'].'</h2>';?>
            <?php echo '<p>'.$news_item['text'].'</p>';?>
        </div>
        <div class="col-sm-4">
            <img src="<?=base_url("images/".$news_item['image'])?>" width = "460" height = "345">
        </div>
        <div class="col-sm-4">
            <h3>Column 3</h3>
            <p>words go here</p>
        </div>

</div>