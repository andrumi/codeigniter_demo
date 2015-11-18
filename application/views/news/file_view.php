<html>
<head>
    <title>Upload Form</title>
</head>
<body>
<?php echo $error;?> <!-- Error Message will show up here -->
<?php echo form_open_multipart('upload_controller/do_upload');?>

<?php echo "<input type='file' name='userfile' size='20' >"; ?>
<?php echo "<input type='submit' name='submit' value='upload' > ";?>
<?php echo "</form>"?>
</body>
</html>

<!--<form action="" method="POST" enctype="multipart/form-data" >-->
<!--    Select File To Upload:<br />-->
<!--    <input type="file" name="userfile"  />-->
<!--    <br /><br />-->
<!--    <input type="submit" name="submit" value="upload" " />-->
<!--<!--    class="btn btn-success-->-->
<!--</form>-->