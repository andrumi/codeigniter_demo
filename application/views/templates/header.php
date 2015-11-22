<!DOCTYPE html>
<html lang="en">
 <?$this->load->helper('url');?>
<html>
     <head>
       <title><?php echo $title; ?></title>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
       <link rel="stylesheet" type="text/css" href="<?=base_url("css/New2.css")?>">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
       <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    </head>
     <body>
     <nav class="navbar navbar-default">
         <div class="container-fluid">
             <div class="navbar-header">
                 <a class="navbar-brand" href="#">WebSiteName</a>
             </div>
             <div>
                 <ul class="nav navbar-nav">
                     <li class="active"><a href="<?php echo site_url('news/'); ?>">Home</a></li>
                     <li><a href="<?php echo site_url('news/create'); ?>">Create</a></li>
                     <li><a href="<?php echo site_url('chatter/'); ?>">Chat</a></li>
                 </ul>
                 <ul class="nav navbar-nav navbar-right">
<!--                     <li><a href="--><?php //echo site_url('news/register'); ?><!--"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
                     <li><a href="<?php echo site_url('pages/view/index'); ?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
<!--                     <li><a href="../../pages/view/logon"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
                     <li><a href="<?php echo site_url('pages/view/logon/'); ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                     <li class="dropdown">
                         <a class="dropdown-toggle" href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login<strong class="caret"></strong></a>
                         <div class="dropdown-menu" style="padding: 15px; padding-bottom: 5px;">
                             <form method="post" action="login" accept-charset="UTF-8">
                                 <input style="margin-bottom: 15px;" type="text" placeholder="Username" id="username" name="username">
                                 <input style="margin-bottom: 15px;" type="password" placeholder="Password" id="password" name="password">
                                 <input style="float: left; margin-right: 10px;" type="checkbox" name="remember-me" id="remember-me" value="1">
                                 <label class="string optional" for="user_remember_me"> Remember me</label>
                                 <input class="btn btn-primary btn-block" type="submit" id="sign-in" value="Sign In">
                             </form>
                         </div>
                     </li>

                 </ul>
             </div>
         </div>
     </nav>
     <div class ="container-fluid">
<!--     <div class ="fixed-bg">-->


