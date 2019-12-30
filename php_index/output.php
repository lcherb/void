<?php
require_once('dbconn.php');
$pdo=new PDO('mysql:host=localhost;dbname=user_info;charset=utf8',
	'herb4794', '4794bbvvhy');
$sql=$pdo->prepare('update userdate set name=?, date=? where id=?');
while (empty($_REQUEST['date'])) {
	echo '請輸入商品名稱。';
 } //else
if (!preg_match('/[0-9]+/', $_REQUEST['date'])) {
	echo '請以整數輸入。';
} else
if ($sql->execute(
	[htmlspecialchars($_REQUEST['name']),
	$_REQUEST['date'], $_REQUEST['id']]
)){
	echo '修改成功。';
} else {
	echo '修改失敗。';
}
require_once('index.php');
require_once('input.php');
return
?>