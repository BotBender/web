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
	//���������� ������
	$array = json_decode($str);
	//���������� ��������
	return $array;
}
//�������� ������� � ������� �� ��������� � html


?>