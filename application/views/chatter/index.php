<!-- Edited from original 'Happy Thoughts' web sockets example, provided in workshop, created by Alix Bergeret, 2011-->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="<?=base_url("css/chat.css")?>" />
<script src="http://js.pusher.com/2.1/pusher.min.js"></script>
<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="<?=base_url("js/websockets.js")?>" ></script>


<div class="jumbotron">
    <h1><?php echo $title; ?></h1>
    

</div>
<div class="row">
    <div class="col-sm-5">
      <section id="new_message">
        <form>
            <input type="text" id="name" name ="name" placeholder="Your name">
            <input type="text" id="yourmessage" name = "yourmessage" placeholder="Comment">
            <input type="button" id="postit" value="Post">
            <span id="debugmessage"></span>
        </form>
    </section>
    <section id="messages" aria-live="polite" ></section>
    </div>
    <div class ="col-sm-3" >
        <h2><p id="demo" >Find SmurfFriends.</p></h2>

        <button onclick="getLocation()">Try It</button>

        <div id="mapholder"></div>

        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="<?=base_url("js/getlatlong.js")?>" ></script>
    </div>
</div>

