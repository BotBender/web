<?php
include 'egor.php';
switch ( $_GET['deist']) {
case 'add':
  echo(json_item_add($_GET['id'],$_GET['hid'],$_GET['full_name'],$_GET['address'],$_GET['phone']));
  break;
case 'update':
  echo(json_item_update($_GET['id'],$_GET['hid'],$_GET['full_name'],$_GET['address'],$_GET['phone']));
  break;
case 'del':
  echo(json_item_del($_GET['id']));
  break;
case 'sel':
  echo(json_item_sel($_GET['bagin_i'],$_GET['end_i']));
  break;
default:
  echo('eror_deist');
  break;
}
?>