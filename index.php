<?
include 'CRUD.php';
include 'egor.php';
include 'stas.php';
////dada

var_dump(json_class());

//json_class();
//выводит данные тип object из json-файла

//class_json(object);
//перезаписывает(удаляет файл LPU.json и создает новый. Записываем туда данные полученны при содирование из object в json)  



//json_item_add(id,hid,full_name,address,phone);
//добавленее json-элемента в файле LPU.json ;
//с помощью функкции json_class();
//и процедуры class_json(object);

//json_item_update(id,hid,full_name,address,phone);
//редактирование json-элемента в файле LPU.json ;
//с помощью функкции json_class();
//и процедуры class_json(object);
 
//json_item_del(id);
//Удалить json-элемента в файле LPU.json ;
//с помощью функкции json_class();
//и процедуры class_json(object);

//json_item_sel(bagin_i,end_i);
//вывод json-элементов с bagin_i по end_i из файла LPU.json ;
//с помощью функкции json_class();
