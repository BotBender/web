<?php
$array = fopen("LPU.json", 'r') or die("�� ������� ������� ����");
while(!feof($fd))
{
$str = $str + htmlentities(fgets($fd));
echo $str;

fclose($fd);


function json_class()
	//������ json
	$json ='{"a":1,"b":2,"c":3,"d":4,"e":5}';
	//���������� ������
	$array = json_decode($json);
	//���������� ��������
	return $array;
}
//�������� ������� � ������� �� ��������� � html
var_dump(json_class());

?>