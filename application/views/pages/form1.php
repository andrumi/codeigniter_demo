
<link rel="stylesheet" type="text/css" href="<?=base_url("css/form.css")?>">
<form id=payment>
    <fieldset>
        <legend>Your details</legend>
        <ol>
            <li>
                <label for=name>Name</label>
                <input id=name name=name type=text placeholder="First and last name" required autofocus>
            </li>
            <li>
                <label for=email>Email</label>
                <input id=email name=email type=email placeholder="example@domain.com" required>
            </li>
            <li>
                <label for=phone>Phone</label>
                <input id=phone name=phone type=tel placeholder="Eg. +447500000000" required>
            </li>
        </ol>
    </fieldset>
    <fieldset>
        <legend>Delivery address</legend>
        <ol>
            <li>
                <label for=address>Address</label>
                <textarea id=address name=address rows=5 required></textarea>
            </li>
            <li>
                <label for=postcode>Post code</label>
                <input id=postcode name=postcode type=text required>
            </li>
            <li>
                <label for=country>Country</label>
                <input id=country name=country type=text required>
            </li>
        </ol>
    </fieldset>
    <fieldset>
        <button type=submit>Buy it!</button>
    </fieldset>
</form>
