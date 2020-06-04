<?php
include("function.php");
$name = $_POST["name"];
$mail = $_POST["mail"];
$start = $_POST["start"];
$detail = $_POST["detail"];

startAge($start);

$purpose = "";
$modifiedPurpose = "";
if (isset($_POST["purpose"]) && is_array($_POST["purpose"])) {
  foreach ($_POST["purpose"] as $value) {
    $purpose = $purpose.$value;
    switch ($value) {
      case 'l':
        $p = "知り合いと";
        break;
      case 'g':
        $p = "知らない人と";
        break;
      case 's':
        $p = "有名人と";
        break;
      case 'n':
        $p = "情報源と";
        break;
      default:
        $p = "情報源と";
        break;
    }
    $modifiedPurpose =$modifiedPurpose." ".$p;
  }
}
$fileDir = "csv/inquiry.csv";
if (file_exists($fileDir) == false) {
  $headerAry = array("name","mail","start","purpose","detail");
  $initialfile = fopen($fileDir,"w");
  if ($initialfile) {
    fputcsv($initialfile,$headerAry);
    fclose($initialfile);
  }else {
    echo "error";
  }
}
$ary = array($name,$mail,$start,$purpose,$detail);
// mb_convert_variables('SJIS', 'UTF-8', $ary);
$file = fopen($fileDir, "a");
if ($file) {
  fputcsv($file,$ary);
  fclose($file);
}else {
  echo "error";
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h2>ご協力ありがとうございます。</h2>
<h3>登録内容</h3>
<p>名前： <?=h($name)?></p>
<p>メール： <?=h($mail)?></p>
<p>開始時期： <?=$startAge?></p>
<p>目的： <?=$modifiedPurpose?></p>
<p>一言： <?=h($detail)?></p>
<li><a href="output.php">集計</a></li>
</body>
</html>
