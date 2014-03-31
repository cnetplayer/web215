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
<h1>Basic CRUD (Create &amp; Read Only)<br>
  with Node.js &amp; MongoDB</h1>
<p>I used Node.js, Express, Jade, MongoLab (to host my MongoDB) &amp; Monk (to connect MongoDB to Node.js).</p>
<p>I reused my 'Essential Training' app to handle the data via MongoDB. However, I did not remove some of the older code which sometimes is not used in this current configuration. Also, I was  pressed for time and didn't get to adding 'update' and 'delete' functionality yet. Will be working on that as soon as I can make time.</p>
<p>I have tried to comment the code to make clear which elements pertain to the MongoDB functions.</p>
<p>An active version of the this app may be seen <a href="http://tea-inventory.nodejitsu.com/" target="_blank">here</a>.</p>
<hr>
<h2>App.js File which runs the server and handles connection to MongoLab via Monk</h2>
<p><img src="_images/crud_server_app.png" alt="App.js File" width="650" height="705" title="App.js File"/></p>
<hr>
<h2>Routes File which sends the user requests to the appropriate Jade views or handles the CRUD functions to MongoDB</h2>
<p><img src="_images/crud_routes.png" alt="Routes File" width="650" height="1146" title="Routes File"/></p>
<hr>
<h2>List Jade View - To Show Current Data in MongoDB</h2>
<p><img src="_images/crud_list_jadeview.png" alt="List Jade View" width="458" height="426" title="List Jade View"/></p>
<hr>
<h2>New Tea Form Jade View - To Show Form for Inserting New Data in MongoDB</h2>
<p><img src="_images/crud_newtea_jadeview.png" alt="New Tea Form Jade View" width="650" height="425" title="New Tea Form Jade View"/></p>
<!--END Content Area-->
</div>

<?php
include("_includes/footer.txt");
?>
