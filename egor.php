<?php



function json_class(){
	$fd = fopen("LPU.json", 'r') or die("?? ??????? ??????? ????"); 
	$str ='';
	while(!feof($fd)) 
	{ 
		//echo fgets($fd);
		$str = $str . fgets($fd);  
	} 
	fclose($fd); 
	//декодируем строку
	$array = json_decode($str);
	//возвращаем значение
	return $array;
}
//вызываем функцию и выводим ее результат в html


?>