<link rel="stylesheet" type="text/css" media="all" href="<?=base_url("css/styles.css")?>" />
<div class="row">
    <div class="col-sm-4">
      <h3>Register</h3>
       <h2>Log On</h2>
        <form role="form">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password">
            </div>
            <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
        </div>
    <div class="col-sm-4">
    <link rel="stylesheet" type="text/css" href="<?=base_url("css/form.css")?>">
    <form id=payment>
        <fieldset>
            <legend>Your details</legend>
            <ol>
                <li>
                    <label for=username>Username</label>
                    <input id=username name=username type=text placeholder="username" required autofocus>
                </li>
                <li>
                    <label for=email>Email</label>
                    <input id=email name=email type=email placeholder="example@domain.com" required>
                </li>
                <li>
                    <label for=town>Town</label>
                    <input id=town name=town type=text placeholder="town" required>
                </li>
                <li>
                    <label for=password>Password</label>
<!--                    <input id=password name=password type=tel placeholder="town" required>-->
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" required>
                </li>
            </ol>
        </fieldset>
        <fieldset>
            <legend>Upload Photo</legend>
            <ol>
                <li>
                    <label for=address>Upload</label>
                    <textarea id=address name=address rows=5 required></textarea>
                </li>
                <li>
                    <input type="file" id="files" name="files[]" multiple />
                    <output id="list"></output>

<!--                    <script>-->
<!--                        function handleFileSelect(evt) {-->
<!--                            var files = evt.target.files; // FileList object-->
<!---->
<!--                            // files is a FileList of File objects. List some properties.-->
<!--                            var output = [];-->
<!--                            for (var i = 0, f; f = files[i]; i++) {-->
<!--                                output.push('<li><strong>', escape(f.name), '</strong> (', f.type || 'n/a', ') - ',-->
<!--                                    f.size, ' bytes, last modified: ',-->
<!--                                    f.lastModifiedDate ? f.lastModifiedDate.toLocaleDateString() : 'n/a',-->
<!--                                    '</li>');-->
<!--                            }-->
<!--                            document.getElementById('list').innerHTML = '<ul>' + output.join('') + '</ul>';-->
<!--                        }-->
<!---->
<!--                        document.getElementById('files').addEventListener('change', handleFileSelect, false);-->
<!--                    </script>-->
                </li>
<!--                <li>-->
<!--                    <label for=country>Country</label>-->
<!--                    <input id=country name=country type=text required>-->
<!--                </li>-->
            </ol>
        </fieldset>
        <fieldset>
            <button type=submit>Register</button>
        </fieldset>
    </form>

        </div>
        <div class="col-sm-4">
            <h3>Register</h3>
            <form id="upload" action="upload" method="POST" enctype="multipart/form-data">

                <fieldset>
                    <legend>HTML File Upload</legend>

                    <input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="1000000" />

                    <div>
                        <label for="fileselect">Files to upload:</label>
                        <input type="file" id="fileselect" name="fileselect[]" multiple="multiple" />
                        <div id="filedrag">or drop files here</div>
                    </div>

                    <div id="submitbutton">
                        <button type="submit">Upload Files</button>
                    </div>

                </fieldset>
            </form>
            <div id="progress"></div>
            <div id="messages">
                <p>Status Messages</p>
            </div>

        </div>

    </div>
    <script type="text/javascript" src="<?=base_url("js/filedrag.js")?>" ></script>