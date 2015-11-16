<div class="jumbotron">
    <h1><?php echo $title; ?></h1>
</div>
<div class="row">
<!--    <div class="col-sm-4">-->
<!--        <h3>Column 1</h3>-->
<!--        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>-->
<!--        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>-->
<!--    </div>-->
<!--    <div class="col-sm-4">-->
<!--        <h3>Column 2</h3>-->
<!--        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>-->
<!--        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>-->
<!--    </div>-->
<!--    <div class="col-sm-4">-->
<!--        <h3>Column 3</h3>-->
<!--        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>-->
<!--        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>-->
<!--    </div>-->
<h2><?php echo $title; ?></h2>

<?php foreach ($news as $news_item): ?>

        <h3><?php echo $news_item['title']; ?></h3>
        <div class="main">
                <?php echo $news_item['text']; ?>
        </div>
        <p><a href="<?php echo site_url('news/view/'.$news_item['slug']); ?>">View article</a></p>

<?php endforeach; ?>
</div>

