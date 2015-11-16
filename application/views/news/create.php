<div class="jumbotron">
    <h1><?php echo $title; ?></h1>
</div>
<div class="row">
    <div class="col-sm-4">
        <h2><?php echo $title; ?></h2>
        <?php echo validation_errors(); ?>
        <?php echo form_open('news/create'); ?>

        <label for="title">Title</label>
        <input type="input" name="title" /><br />

        <label for="text">Text</label>
        <textarea name="text"></textarea><br />

        <input type="submit" name="submit" value="Create news item" />

        </form>
    </div>
    <div class="col-sm-4">
        <h3>Column 2</h3>
    </div>
    <div class="col-sm-4">
        <h3>Column 3</h3>
        <p>words go here</p>
    </div>

</div>


