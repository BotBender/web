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
	//���������� ������
	$array = json_decode($str);
	//���������� ��������
	return $array;
}
//�������� ������� � ������� �� ��������� � html
function class_json($object){
	$json=json_encode($object);
	$f=fopen("LPU.json",'w');
	fwrite($f,$json);
	fclose($f);
}

function json_item_add($id,$hid,$full_name,$address,$phone){
	$object=json_class();
	foreach ($object as $key => $value) {
		if($value->id == $id){
			return 0;
		} 
	}
	$new_item=new item_class;
	$new_item->id=$id;
	$new_item->hid=$hid;
	$new_item->full_name=$full_name;
	$new_item->address=$address;
	$new_item->phone=$phone;
	array_push($object, $new_item);
	class_json($object);
	return 1;
}

function json_item_update($id,$hid,$full_name,$address,$phone){
	$object=json_class();
	foreach ($object as $key => $value) {
		if($value->id == $id){
			$value->hid=$hid;
			$value->full_name=$full_name;
			$value->address=$address;
			$value->phone=$phone;
		} 
	}
	class_json($object);
	return 1;
}

 
function json_item_del($id){
	$object=json_class();

	foreach ($object as $key => $value) {
		if($value->id == $id){
			unset($object[$key]);
		} 
	}
	class_json($object);
	return 1;
}


function json_item_sel($bagin_i,$leng_i){
	$object=json_class();
	foreach ($object as $key => $value) {
		if($key == 0){
			return $object[$key];
		} 
	}
	return array_slice ($object,$bagin_i,$leng_i);
}

?>