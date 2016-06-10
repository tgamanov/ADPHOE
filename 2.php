<?php
//Написать код приведения даты формата “01/18/2013 01:02:03” к формату “2012-05-01 01:02:03”
$receivedTime = '01/18/2013 01:02:03';
$toUnixTime = strtotime($receivedTime);
$convertedTime = date('Y-m-d H:i:s', $toUnixTime);
echo $convertedTime;