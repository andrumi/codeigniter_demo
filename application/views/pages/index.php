<link rel="stylesheet" type="text/css" media="all" href="<?=base_url("css/styles.css")?>" />
<link rel="stylesheet" type="text/css" href="<?=base_url("css/formupload.css")?>">
<div class="row">
    <div class="col-sm-4">
      <h3>Register</h3>
       <h2>Log On</h2>
<!--        <form role="form">-->
        <form id="Form2" action="<?=base_url("index.php/pages/logOn")?>" method="post"></form>
            <div class="form-group">
                <label for="emailLog">Email:</label>
                <input type="email" class="form-control" name ="emailLog" id="emailLog" placeholder="Enter email" form="Form2" >
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" name ="pwd" id="pwd" placeholder="Enter password" form ="Form2">
            </div>
            <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-default"  form="Form2"> Submit</button>
          </form>
        </div>
    <div class="col-sm-4">
<!--        **********NONSENSE WITH FORMS***************-->
    <form id="Form1" action="<?=base_url("index.php/pages/index")?>" method="post"></form>
<!--    <form id="upload" action="upload" method="POST" enctype="multipart/form-data">-->
        <form id="upload" action="<?=base_url("js/upload")?>" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Your details</legend>
            <ol>
                <li>
                    <label for=username>Username</label>
                    <input id=username name=username type=text placeholder="username" required autofocus form="Form1"  >
                </li>
                <li>
                    <label for=email>Email</label>
                    <input id=email name=email type=email placeholder="example@domain.com" form="Form1" required >
                </li>
                <li>
                    <label for=town>Town</label>
                    <input id=town name=town type=text placeholder="town" required form="Form1" >
                </li>
                <li>
                    <label for=password>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password" required form="Form1" >
                </li>
            </ol>
        </fieldset>
        <fieldset>
            <legend>Upload Photo</legend>
            <ol>
                <li>
                    <fieldset>
                        <input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="10000000" />

                        <div>
                            <label for="fileselect">Files to upload:</label>
                            <input type="file" id="fileselect" name="fileselect[]" multiple="multiple" form="upload"/>
                            <div id="filedrag" >or drop files here</div>
                        </div>
                        <div id="submitbutton">
                            <button type="submit" form="upload" >Upload Files</button>
                        </div>
                    </fieldset>
                    <div id="progress"></div>
                    <div id="messages">
                        <p>Status Messages</p>
                    </div>

                    <input id="filename" name="filename" type="text" form = "Form1"/>
                </li>
            </ol>
        </fieldset>
        <fieldset>
<!--            <button type=submit>Register</button>-->
            <input type="submit" name="button1" value="Register" form="Form1" />

        </fieldset>

    </form>

    </div>

    </div>
    <script type="text/javascript" src="<?=base_url("js/filedrag.js")?>" ></script>

<script>//jquery
    $('#fileselect').change(function() {
        var filename = $(this).val();
        var lastIndex = filename.lastIndexOf("\\");
        if (lastIndex >= 0) {
            filename = filename.substring(lastIndex + 1);
        }
        $('#filename').val(filename);
    });

</script>