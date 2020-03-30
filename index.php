<?

class item{
	public $id;
	public $hid;
	public $full_name;
	public $address;
	public $phone;
}

$item= new item;
$item->id='1';
$item->hid='1';
$item->full_name='1';
$item->address='1';
$item->phone='1';

echo $item->id;