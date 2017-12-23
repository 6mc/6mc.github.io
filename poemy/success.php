
<!DOCTYPE html>

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
<a style="text-decoration:none;color:black;  color: 928D88#; col-md" href="HOME">HOME</a>
</div><div class="col-md-3">
<a  style="text-decoration:none;color:black;color: 928D88#;" href="ADD">ADD</a>
</div><div class="col-md-3">

<a style="text-decoration:none;color:black;color: 928D88#;" href="FIND">FIND</a>
</div>
<div class="col-md-3">
<a style="text-decoration:none;color:black;" href="ABOUT">ABOUT</a>

</div>
</div>



<div id="sine">

</div>

<div id="line">

</div>





<?php

$poet=$_GET["poet"];
$name=$_GET["name"];
$poem=$_GET["poem"];

if (empty($poet) || empty($name) || empty($poem) ) {
    //Empty
echo "please fill all the fields ";


}
else {
    //Not Empty
    echo "success!";
    mysql_connect("localhost","root","");
    mysql_select_db("poemy");
    mysql_query("INSERT INTO poem(id,poet,poem,pdate,sdate,name) VALUES ('','$poet','$poem','','','$name') ");

}











 ?>

  </body>
</html>
