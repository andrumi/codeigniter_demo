<link rel="stylesheet" type="text/css" media="all" href="<?=base_url("css/styles.css")?>" />
<!--<link rel="stylesheet" type="text/css" href="--><?//=base_url("css/formupload.css")?><!--">-->
<link rel="stylesheet" type="text/css" href="<?=base_url("css/formuploadMob.css")?>">
<div class="row">
        <div class="col-sm-3">
        <form id="Form2" action="<?=base_url("index.php/pages/logOn")?>" method="post">
            <fieldset>
                <legend><h2>Log On</h2></legend>
                <ol>
                    <li>
                        <label for="emailLog">Email:</label>
                        <input type="email" class="form-control" name ="emailLog" id="emailLog" placeholder="Enter email" form="Form2" >

                    </li>
                    <li>
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" name ="pwd" id="pwd" placeholder="Enter password" form ="Form2">
                    </li>
                    <li>
                        <div class="checkbox">
                            <label>Remember Me<input type="checkbox" name="checkbox" value="value"></label>
                        </div>
                    </li>
                    <li>
                        <button type="submit" class="btn btn-default"  form="Form2"> Submit</button>
                    </li>
                </ol>
            </fieldset>
        </form>
    </div><!--end col-->


    <div class="col-sm-2">
    <form id="Form1" action="<?=base_url("index.php/pages/index")?>" method="post"></form>

    <form id="upload" action="<?=base_url("js/upload")?>" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend><h2>Register<h2></legend>
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
            <legend>Register</legend>
            <ol>
                <li>
                    <input type="submit" name="button1" value="Register" form="Form1" />
                    <button type="submit" class="btn btn-default"  form="Form1"> Register</button>
                </li>
            </ol>
        </fieldset>
    </form>
</div><!--end col2-->
</div><!--end row-->
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