<?php
$json = '{"id":"�������� 1","hid":"�������� 2","full_name":"�������� 3","address":"�������� 4","phone":"�������� 5"}';
$array = json_decode($json, true);
Array
(
    [id] => �������� 1
    [hid] => �������� 2
    [full_name] => �������� 3
    [address] => �������� 4
    [phone] => �������� 5
)
print_r($array);