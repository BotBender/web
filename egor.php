<?php
$array = fopen("LPU.json", 'r') or die("не удалось открыть файл");
while(!feof($fd))
{
$str = $str + htmlentities(fgets($fd));
echo $str;

fclose($fd);


function json_class()
	//строка json
	$json ='{"a":1,"b":2,"c":3,"d":4,"e":5}';
	//декодируем строку
	$array = json_decode($json);
	//возвращаем значение
	return $array;
}
//вызываем функцию и выводим ее результат в html
var_dump(json_class());

?>