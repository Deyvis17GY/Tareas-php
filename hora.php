<?php
date_default_timezone_set  ('America/Bogota');
$time1=date('h:i:s',time());
$time2=date('Y-m-d, h:i:s', time());
echo date("g:i a", strtotime($time1));
print '<br>';
echo $time2.'<br>';

echo $time1;
 ?>
