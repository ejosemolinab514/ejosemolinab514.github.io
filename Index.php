<!DOCTYPE html>
<html>

<head>
	<title>Redes de datos seguras</title>
        <style>body{font-family:Verdana;font-size:20pts;text-align:justify;}</style>
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <meta charset="UTF-8">
<script>
function myFunction1() {
    //alert("Hello! I am an alert box!!");
    document.getElementById('iframe').src="_iframe1.php";
}
function myFunction2() {
    //alert("Hello! I am an alert box!!");
    document.getElementById('iframe').src="_iframe2.php";
}
function myFunction3() {
    //alert("Hello! I am an alert box!!");
    document.getElementById('iframe').src="_iframe3.php";
}


</script>

</head>

<body>
<div id="container" style="width:100%; margin-left:auto; margin-right:auto;">

<div id="header" style="width:100%; height:18%; background-color:#78D4EC; valign:middle; text-align:Center"><h1 style="    margin-top: -1%;
    padding-top: 2%; font-size:35pts; margin-bottom:2px;"><img onclick="myFunction1()" src="Images/wifi.png" width="80px" height="80px" style="cursor:pointer; cursor: hand; "><font color= #E7F5F5 face="MS UI Gothic" size="10px">Redes de Datos Seguras</font></h1>

<br/>
<br/>



</div>

<div id="menu" style="width:20%; height:1200px; background-color:#49CACA;text-align:center; font-size:20px; float:left;">

<div onclick="myFunction2()" style="cursor:pointer; cursor: hand;">

<br/>
<br/>
<br/>
<strong><font color=#E7F5F5 face="Gadugi" size="6px">Subneteo</font></strong>
<br/>
<br/>
<br/>

<hr/>
</div>

<div onclick="myFunction3()" style="cursor:pointer; cursor: hand;">
<br/>
<br/>
<br/>
<strong><font color=#E7F5F5 face="Gadugi" size="6px">Sumarización de rutas</font></strong>
<br/>
<br/>
<br/>
<hr/>
</div>


</div>

<div id="content" style="width:80%; height:75%;text-align:justify; font-size:15px; float:left; backround-color:white;">

<iframe id="iframe" src="_iframe1.php" height="1200px" width="100%" frameborder:"2px"></iframe>

</div>


</body>
</html>
