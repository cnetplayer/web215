<!doctype html>
<html>

<head>
<meta charset="UTF-8">
<title>Tea Total</title>
<link href="_styles/brand.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="page_wrapper">

<?php
include("_includes/header.txt");
?>

<div id="page_body">
<!--Content Area-->
<h1>Basic CRUD 
  with Node.js &amp; MongoDB<br>
  Hosted on NodeJitsu.com
</h1>
<p>I took my CRUD application and deployed it to NodeJitsu.com. I've also used MongoLab.com to host my MongoDB database. This has eliminated the need to install MongoDB locally, as I can connect to MongoLab via my command line interface. This means I'm only working with one database, instead of one local and another hosted.</p>
<p>An active version of the this app may be seen <a href="http://tea-inventory.nodejitsu.com/" target="_blank">here</a>.</p>
<hr>
<h2>The login and beginning of the deployment of the app on nodejitsu</h2>
<p><img src="_images/nodejitsu_login_deploy.png" alt="Login &amp; Deployment" width="650" height="543" title="Login &amp; Deployment"/></p>
<hr>
<h2>Deployment success!</h2>
<p><img src="_images/nodejitsu_deploy_success.png" alt="Deployment success" width="413" height="87" title="Deployment success"/></p>
<hr>
<h2>NodeJitsu Account View - Showing active application</h2>
<p><img src="_images/nodejitsu_ss.png" alt="NodeJitsu Account" width="800" height="556" title="NodeJitsu Account"/></p>
<hr>
<h2>MongoLab Account View - Showing active database and collection</h2>
<p><img src="_images/mongolab_ss.png" alt="MongoLab" width="800" height="617" title="MongoLab"/></p>
<!--END Content Area-->
</div>

<?php
include("_includes/footer.txt");
?>
