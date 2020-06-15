*/
Crée Par ありがと ございます
GitHub : https://github.com/Cleaner-Discord
Discord : @ありがと ございます#9878
*\

<?php $ports = 
array(8080,80,81,1080,6588,8000,3128,553,554,4480); 
foreach($ports as $port) {
    if (@fsockopen($_SERVER['REMOTE_ADDR'], $port, $errno, $errstr, 1)) {
        die(include('vpn.php'));
    } else {
        include('site.php');
    }
}

