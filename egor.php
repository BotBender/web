<?php

class item_class{
	public $id;
	public $hid;
	public $full_name;
	public $address;
	public $phone;
}

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
function class_json($object){
	$json=json_encode($object);
	$f=fopen("LPU.json",'w');
	fwrite($f,$json);
	fclose($f);
}

function json_item_add($id,$hid,$full_name,$address,$phone){
	$object=json_class();
	foreach ($object as $key => $value) {
		if($key == 0){
			foreach ($value as $key2 => $value2) {
				if($value2->id == (string) $id){
					return 0;
				}
			}
		} 
	}
	$new_item=new item_class;
	$new_item->id=$id;
	$new_item->hid=$hid;
	$new_item->full_name=$full_name;
	$new_item->address=$address;
	$new_item->phone=$phone;
	array_push($object->LPU[], $new_item);
	class_json($object);
	return 1;
}

function json_item_update($id,$hid,$full_name,$address,$phone){
	$object=json_class();
	foreach ($object as $key => $value) {
		if($key == 0){
			foreach ($value as $key2 => $value2) {
				if($value2->id == (string) $id){
					echo $key2.'</br>';
					$value2->hid=$hid;
					$value2->full_name=$full_name;
					$value2->address=$address;
					$value2->phone=$phone;
				}
			}
		} 
	}
	class_json($object);
	return 1;
}

 
function json_item_del($id){
	$object=json_class();
	foreach ($object as $key => $value) {
		if($key == 0){
			foreach ($value as $key2 => $value2) {
				if($value2->id == (string) $id){
					echo $key2.'</br>';
					unset($object->LPU[$key2]);
				}
			}
		} 
	}
	class_json($object);
	return 1;
}


function json_item_sel($bagin_i,$leng_i){
	$object=json_class();
	foreach ($object as $key => $value) {
		echo $key."{";
		if($key == 0){
			foreach ($value as $key2 => $value2) {
				echo $key2."[";
				if($key2 == (string) $bagin_i){
					return $value2;
				}
				echo "]";
			}
		} 
		echo "}";
	}
	return 0;
}

?>