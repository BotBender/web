<?php

function json_class(){
	//строка json
	$json ='{"a":1,"b":2,"c":3,"d":4,"e":5}';
	//декодируем строку
	$array = json_decode($json);
	//возвращаем значение
	return $array;
}
//вызываем функцию и выводим ее результат в html
var_dump(json_class());

/*$json = '{[id] => Значение 1
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