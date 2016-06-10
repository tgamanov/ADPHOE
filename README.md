Тестовое задание для Junior PHP разработчика

PHP

#1
Написать функцию преобразования строки, содержащей число в непосредственно число, не используя стандартные функции приведения типов (например “1252абв” в 1252)

#2
Написать код приведения даты формата “01/18/2013 01:02:03” к формату “2012-05-01 01:02:03”

#3
Оптимизировать код и найти ошибку
$data = array(
	array('id'=>12345, 'topic' => 'text1', 'message' => 'text2'),
	array('id'=>23456, 'topic' => 'text3', 'message' => 'text4'),
	array('id'=>34567, 'topic' => 'text1', 'message' => 'text2'),
	...
);
foreach ($data as  $idx=>$row) {
	foreach ($data as $dbx=>$dbl)
		if ( $idx != $dbx && $dbl['topic'] == $row['topic'] && $dbl['message'] == $row['message'] )
			unset($data[$dbx])
}

#4
Написать абстрактный класс кеширования и одну реализацию на базе файлов или sqllite. Интерфейс класса:
interface I {
public function put($key, $value, $expire = null);
public function get($key);
}

SQL
Базируется на PostgreSQL, успешное выполнение будет плюсом.

#5
Напишите запрос получения строки пути к категории, если дерево категорий представлено таблицей
CREATE TABLE categories
(
  id bigserial NOT NULL,
  parent_id bigint,
  name character varying(128),
  CONSTRAINT categories_pk_id PRIMARY KEY (id),
  CONSTRAINT categories_fk_parent_id FOREIGN KEY (parent_id)
      REFERENCES categories (id) MATCH SIMPLE
      ON UPDATE CASCADE ON DELETE RESTRICT
)


JavaScript

#6
Напишите модуль клиентской валидации данных.
Правила валидации и тексты ошибок должны указываться, как атрибуты поля ввода.
Реализуйте проверку ввода только чисел, проверку на валидность e-mail и проверку на ограничение количества символов.
Можно пользовать jQuery для манипуляций с DOM.



Пример html кода:

<div> 	<input id="first" type="text" validate='digits' validate-message='Digits only'> </div> <div> 	<input id="second" type="text" validate='email' validate-message='Invalid email'> </div> <div> 	<textarea validate='length-max-10' validate-message='Max 10 symbols'></textarea> </div>
<div> 	<input type="text" validate='digits' validate-message='Digits only'> </div>
