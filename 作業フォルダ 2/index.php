
<meta charset="UTF-8">

<title>ループの使用例</title>
<html>
	<meta charset="UTF-8">
	<pre>
<?php

$host     = '210.239.38.240'; // データベースのホスト名又はIPアドレス ※CodeCampでは「localhost」で接続できます
$username = 'wakabayashi';  // MySQLのユーザ名
$passwd   = '11111111';    // MySQLのパスワード
$dbname   = 'TEST_2018-05-10';    // データベース名

$link = mysqli_connect($host, $username, $passwd, $dbname);

// 接続成功した場合
if ($link) {

	// 文字化け防止
	mysqli_set_charset($link, 'utf8');

	$query = 'SELECT id, name, kana, addr FROM user_list ';

	// クエリを実行します
	$result = mysqli_query($link, $query);

	// 1行ずつ結果を配列で取得します
	while ($row = mysqli_fetch_array($result)) {
		print $row['id'];
		print $row['name'];
		print $row['kana'];
		print $row['addr'];
		print "<br>";
	}

	// 結果セットを開放します
	mysqli_free_result($result);

	// 接続を閉じます
	mysqli_close($link);

// 接続失敗した場合
} else {
	print 'DB接続失敗';
}s

?>
</pre>
</html>