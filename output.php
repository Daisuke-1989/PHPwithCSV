<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<li><a href="index.php">アンケート画面へ</a></li>
<table border='1'>
<tr><th>名前</th><th>mail</th><th>開始時期</th><th>一言</th></tr>
</body>
</html>
<?php
include("function.php");
if( ($fp = fopen("csv/inquiry.csv","r"))=== false ){
	die("CSVファイル読み込みエラー");
}
$count = 0;
$sum = "";
while (($array = fgetcsv($fp)) !== FALSE) {
  if ($count == 0) {
    ++$count;
    continue;
  }
	//空行を取り除く
	if(!array_diff($array, array(''))){
		continue;
	}
	echo "<tr>";
	for($i = 0; $i < count($array); ++$i ){
    $elem = $array[$i];
    if (($i+1)%3 ==0) {
      $startAge = startAge($elem);
      $elem = $startAge;
    }elseif (($i+1)%4 ==0) {
      $sum = $sum.$elem;
      continue;
    }
    echo("<td>".$elem."</td>");
	}
  echo "</tr>";
  ++$count;
}
fclose($fp);
echo "<table border='1'>";
echo "<tr><th>知り合いと</th><th>知らない人と</th><th>有名人と</th><th>情報源と</th></tr>";
$lCount = mb_substr_count($sum,"l");
$gCount = mb_substr_count($sum,"g");
$sCount = mb_substr_count($sum,"s");
$nCount = mb_substr_count($sum,"n");
echo "<tr>";
echo ("<td>".$lCount."</td><td>".$gCount."</td><td>".$sCount."</td><td>".$nCount."</td></tr>");
?>
