<?php

$json1 = '["h\u1ea1 long","h\u00e0 n\u1ed9i","h\u1ed3 ch\u00ed minh"]';
$json2 = '{"name":"nguy\u1ec5n v\u0103n an","age":21,"location":"h\u1ea1 long"}';

$convert1 = json_decode($json1);
$convert2 = json_decode($json2);

echo "<pre>";
print_r($convert1);
echo "</pre>";

echo "<pre>";
print_r($convert2);
echo "</pre>";
