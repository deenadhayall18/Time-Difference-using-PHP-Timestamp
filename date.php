<!-- Method 1 -->
<?php
$t1 = 1537177577;
$t2 = 1537004777;
$datediff = ($t2 - $t1);
$day = round(($datediff % 604800) / 86400); 
$hours = round((($datediff % 604800) % 86400) / 3600); 
$minutes = round(((($datediff % 604800) % 86400) % 3600) / 60); 
$seconds = round(((($datediff % 604800) % 86400) % 3600 % 60) / 60); 


// Method 2
$start_date = new DateTime('2018-09-01 05:50:28');
$datediff = $start_date->diff(new DateTime('2018-09-11 09:55:40'));
echo $datediff->days.' days total<br>';
echo $datediff->y.' years<br>';
echo $datediff->m.' months<br>';
echo $datediff->d.' days<br>';
echo $datediff->h.' hours<br>';
echo $datediff->i.' minutes<br>';
echo $datediff->s.' seconds<br>';

?>