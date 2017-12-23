<?php
mysql_connect("localhost","root","");
mysql_select_db("poemy");
$sec=mysql_query("select * from poem LIMIT 0,5");
//$dizi=mysql_fetch_array($sec);
 ?>
<html>
<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />
<link href="normalize.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">

                        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <head>
    <meta charset="utf-8">
    <title>Poemy</title>
  </head>
  <body style="text-align:center">
<img src="lusitana.regular.png"  style="margin-top:2%">

<div id="navbar" class="row" style="color:black; margin-top:5%; " >
    <div class="col-md-3">
<a style="text-decoration:none;color:black;  color: 928D88#; col-md" href="index.php">HOME</a>
</div><div class="col-md-3">
<a  style="text-decoration:none;color:black;color: 928D88#;" href="submit.php">ADD</a>
</div><div class="col-md-3">

<a style="text-decoration:none;color:black;color: 928D88#;" href="find.php">FIND</a>
</div>
<div class="col-md-3">
<a style="text-decoration:none;color:black;" href="about.php">ABOUT</a>

</div>
</div>

<div id="line">

</div>
<div id="tita">
ABOUT US <br>
</div>

<img src="rsz_dscn2236.jpg"  style="width:25%; height:auto; margin-top:1%">

<div id="context">

Under new direction as of the Spring of 2016, and with a client roster made up
of some of the most sought after poets making art today, POEMY’s focus
 is on discovering new talent and transforming them into pure Artists
 The website’s signature is a collective approach, leveraging the know-how and
 industry relationships of the team of developers rather than one representative,
  with a commitment to each person’s long-term objectives


</div>
<div id="line">

</div>
<img src="extasy.regular.png"  style="margin-top:2%">

<div class="footer">

Designed by <b href="mefa">Mehmet Can</b>
</div>

  </body>
</html>
