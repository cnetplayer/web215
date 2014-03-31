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
<h1>An HTTP Server with Node.js</h1>
<p>I probably went a little further with this assignment than I needed to. I wanted to do more than show just a plain white page with some text, but had trouble when trying to load the stylesheet to the browser. Once I figured out how to teach the server to recognize and serve up different MIME types, I decided to get rid of the ugly HTML written in JavaScript and just load an actual HTML page with an image and stylesheet. I 'console.log' the mess out of the code so I could follow the path of requests through the code.</p>
<p>Below are some screenshots of how this all worked out. As usual, click for a larger version of the screenshot.</p>
<hr>
<h2>My Node.js Server Code</h2>
<p><a href="_images/nodeserver_code_large.png"><img src="_images/nodeserver_code_small.png" alt="Node.js Server Code" width="500" height="599" title="Node.js Server Code"/></a></p>
<hr>
<h2>My Node.js Server Running in Terminal</h2>
<p><img src="_images/nodeserver_in_terminal.png" alt="Node.js Server in Terminal" width="669" height="273" title="Node.js Server in Terminal"/></p>
<hr>
<h2>My Simple HTML Page Served on Localhost from Node.js Server</h2>
<p><a href="_images/nodeserver_page_in_browser_large.png"><img src="_images/nodeserver_page_in_browser_small.png" alt="Page in Browser Served from Node.js Server" width="500" height="237" title="Page in Browser Served from Node.js Server"/></a></p>
<!--END Content Area-->
</div>

<?php
include("_includes/footer.txt");
?>
