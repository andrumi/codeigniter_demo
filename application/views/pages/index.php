<link rel="stylesheet" type="text/css" media="all" href="<?=base_url("css/styles.css")?>" />
<link rel="stylesheet" type="text/css" href="<?=base_url("css/formupload.css")?>">
<div class="row">
    <div class="col-sm-4">
      <h3>Register</h3>
       <h2>Log On</h2>
<!--        <form role="form">-->
<!--            <div class="form-group">-->
<!--                <label for="email">Email:</label>-->
<!--                <input type="email" class="form-control" id="email" placeholder="Enter email">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <label for="pwd">Password:</label>-->
<!--                <input type="password" class="form-control" id="pwd" placeholder="Enter password">-->
<!--            </div>-->
<!--            <div class="checkbox">-->
<!--                <label><input type="checkbox"> Remember me</label>-->
<!--            </div>-->
<!--            <button type="submit" class="btn btn-default">Submit</button>-->
<!--          </form>-->
        </div>
    <div class="col-sm-4">
<!--        **********NONSENSE WITH FORMS***************-->
    <form id="Form1" action="pages/index" method="post"></form>
    <form id="upload" action="upload" method="POST" enctype="multipart/form-data">
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
                        <input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="1000000" />

                        <div>
                            <label for="fileselect">Files to upload:</label>
                            <input type="file" id="fileselect" name="fileselect[]" multiple="multiple" form="upload"/>
                            <div id="filedrag">or drop files here</div>
                        </div>
                        <div id="submitbutton">
                            <button type="submit">Upload Files</button>
                        </div>
                    </fieldset>
                    <div id="progress"></div>
                    <div id="messages">
                        <p>Status Messages</p>
                    </div>
                </li>
            </ol>
        </fieldset>
        <fieldset>
<!--            <button type=submit>Register</button>-->
            <input type="submit" name="button1" value="Register" form="Form1" />

        </fieldset>
    </form>
    </form>
    </div>

    </div>
    <script type="text/javascript" src="<?=base_url("js/filedrag.js")?>" ></script>

<!-- Nested forms?
<form id="Form1" action="Action1.php" method="post"></form>
<form id="Form2" action="Action2.php" method="post"></form>

<input type="text" name="input_Form1_n1" form="Form1" />
<input type="text" name="input_Form2_n1" form="Form2" />
<input type="text" name="input_Form1_n2" form="Form1" />
<input type="text" name="input_Form2_n2" form="Form2" />

<input type="submit" name="button1" value="buttonVal1" form="Form1" />
<input type="submit" name="button2" value="buttonVal2" form="Form2" />
-->