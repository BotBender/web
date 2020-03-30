<?php
$json = '{[id] => Значение 1
    [hid] => Значение 2
    [full_name] => Значение 3
    [address] => Значение 4
    [phone] => Значение 5}';

$array = json_decode($json, true);
print_r($array);

//"id":"Значение 1","hid":"Значение 2","full_name":"Значение 3","address":"Значение 4","phone":"Значение 5"
/**
(
    [id] => Значение 1
    [hid] => Значение 2
    [full_name] => Значение 3
    [address] => Значение 4
    [phone] => Значение 5
);
**/