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
                    <label for=address>Address</label>
                    <textarea id=address name=address rows=5 required></textarea>
                </li>
<!--                <li>-->
<!--                    <label for=postcode>Post code</label>-->
<!--                    <input id=postcode name=postcode type=text required>-->
<!--                </li>-->
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
    </div>