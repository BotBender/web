<?php

function json_class(){
	//������ json
	$json ='{"a":1,"b":2,"c":3,"d":4,"e":5}';
	//���������� ������
	$array = json_decode($json);
	//���������� ��������
	return $array;
}
//�������� ������� � ������� �� ��������� � html
var_dump(json_class());

/*$json = '{[id] => �������� 1
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