<!doctype HTML>
<!--Ne pas modifier index.php et les autres pages-->
<head>
<title>Erreur !</title>
</head>

<body>
<h1><center><strong>Erreur de Connexion</strong></center></h1>
<br>
<br>
<center><h3>Les VPN/Proxy ne sont pas autoriser sur ce site web !</h3></center>
<br>
<hr/>
<br>
<center><strong>Votre IP :  
<?php
echo $_SERVER["REMOTE_ADDR"];
?>
<br>

<?php
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

echo "Votre nom d'hôte : $hostname";
?>
<br>
Votre FAI est : 
<br>
Votre pays est :
<?php

if (isset($_SERVER['HTTP_CLIENT_IP']))
{
    $real_ip_adress = $_SERVER['HTTP_CLIENT_IP'];
}

if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
{
    $real_ip_adress = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
else
{
    $real_ip_adress = $_SERVER['REMOTE_ADDR'];
}

$cip = $real_ip_adress;
$iptolocation = 'http://api.hostip.info/country.php?ip=$cip';
$creatorlocation = file_get_contents($iptolocation);

?>
<?php 
$file = fopen ('administration/ip.logs', 'a+'); 
fwrite($file, $_SERVER['REMOTE_ADDR']."\r\n<br>")
?>
</storng></center>
</body>

