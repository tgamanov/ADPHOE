<?php
#3
//Оптимизировать код и найти ошибку
$data = [
    array('id' => 12345, 'topic' => 'text1', 'message' => 'text2'),
    array('id' => 23456, 'topic' => 'text3', 'message' => 'text4'),
    array('id' => 34567, 'topic' => 'text1', 'message' => 'text2'),
];
foreach ($data as $idx => $row) {
    foreach ($data as $dbx => $dbl) {
        if ($idx != $dbx && $dbl['topic'] === $row['topic'] && $dbl['message'] === $row['message']) {
            unset($data[$dbx]);
        }
    }
}

