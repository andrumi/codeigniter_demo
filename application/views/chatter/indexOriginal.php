<!DOCTYPE HTML>
<html>
<head>
    <title>Not happy though</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <link rel="stylesheet" type="text/css" href="<?=base_url("css/chat.css")?>" />
    <script src="http://js.pusher.com/2.1/pusher.min.js"></script>
    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script type="text/javascript" src="<?=base_url("js/websockets.js")?>" ></script>
</head>
<body>
<header>
    <h1>Not a happy thought</h1>
    <p>An idea, a saying, a funny quote, a link... anything!</p>

</header>

<section id="new_message">
    <form>
        <input type="text" id="name" name ="name" placeholder="Your name">
        <input type="text" id="yourmessage" name = "yourmessage" placeholder="Your happy thought">
        <input type="button" id="postit" value="Post">
        <span id="debugmessage"></span>
    </form>
</section>
<section id="messages" aria-live="polite" ></section>
<footer>
    Powered by
    <a href="http://www.html5rocks.com/en/">HTML5</a>,
    <a href="http://dev.w3.org/html5/websockets/">Web Sockets</a>,
    <a href="http://pusher.com/">Pusher</a>,
    <a href="http://jquery.com/">JQuery</a> and
    <a href="http://www.css3.info/">CSS3</a>.
    Copyright 2011 by Alix Bergeret. All Rights Reserved.
</footer>
</body>
</html>