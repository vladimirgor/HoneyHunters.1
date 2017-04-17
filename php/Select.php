<?php

include_once('config.php');
require_once('functions.php');
/*
if ($session != session_id()) {
    $message[] = ['message' => "Возможно предпринята XSS атака."];
    echo json_encode($message);
    die;
}
*/
$link = dbLink();
$sql = "SELECT `name`,`comment`,`email` FROM " . TABLE . " ORDER BY `id` DESC";
$comment_list = Select($sql, $link);
echo json_encode($comment_list);

