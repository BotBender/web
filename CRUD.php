<?
switch ( $_GET['deist']) {
case 'add':
  echo(json_item_add(id,hid,full_name,address,phone));
  break;
case 'update':
  echo(json_item_update(id,hid,full_name,address,phone));
  break;
case 'del':
  echo(json_item_del(id));
  break;
case 'sel':
  echo(json_item_sel(bagin_i,end_i));
  break;
default:
  echo(json_item_sel(bagin_i,end_i));
  break;