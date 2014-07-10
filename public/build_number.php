<?php
$api_response = file_get_contents('http://octotentacle.samwong.hk/api/values');
$build_number= json_decode($api_response)->buildNumber;
print "The build number is: " . $build_number;
