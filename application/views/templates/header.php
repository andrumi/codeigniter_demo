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
                     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                         <ul class="dropdown-menu">
                             <li><a href="dan.php">Page 1-1</a></li>
                             <li><a href="#">Page 1-2</a></li>
                             <li><a href="#">Page 1-3</a></li>
                         </ul>
                     </li>
                     <li><a href="#">Page 2</a></li>
                     <li><a href="#">Page 3</a></li>
                 </ul>
                 <ul class="nav navbar-nav navbar-right">
                     <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
<!--                     <li><a href="../../pages/view/logon"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
                     <li><a href="<?php echo site_url('pages/view/logon/'); ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

                 </ul>
             </div>
         </div>
     </nav>
     <div class ="container-fluid">
<!--     <div class ="fixed-bg">-->


