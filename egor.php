<?php
$json = '{[id] => �������� 1
    [hid] => �������� 2
    [full_name] => �������� 3
    [address] => �������� 4
    [phone] => �������� 5}';

$array = json_decode($json, true);
print_r($array);

//"id":"�������� 1","hid":"�������� 2","full_name":"�������� 3","address":"�������� 4","phone":"�������� 5"
/**
(
    [id] => �������� 1
    [hid] => �������� 2
    [full_name] => �������� 3
    [address] => �������� 4
    [phone] => �������� 5
);
**/