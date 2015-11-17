<div class="jumbotron">
    <h1><?php echo $title; ?></h1>
</div>
<div class="row">

    <div class="col-sm-4">
        <h3>Column3</h3>
        <h2><?php echo $title; ?></h2>
        <?php echo validation_errors(); ?>
        <?php echo form_open('news/'); ?>

        <label for="title">Title</label>
        <input type="input" name="title" /><br />

        <label for="text">Text</label>
        <textarea name="text"></textarea><br />

        <input type="submit" name="submit" value="Create news item" />

        </form>

    </div>
    <div class="col-sm-4">
        <h3>Column 4</h3>
        <p>words go here</p>
    </div>
</div>
<div class="row">

    <div class="col-sm-4">
        <h3>Column 1</h3>
        <h3><?php echo $title; ?></h3>

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
        <h3>Column 2</h3>
        <p>words go here</p>
    </div>
</div>

