<?php
function h($str){
  return htmlspecialchars($str,ENT_QUOTES);
}

function startAge($start){
  switch ($start) {
  case 'k':
    $startAge = "保育園・幼稚園";
    break;
  case 'j':
    $startAge = "小学校";
    break;
  case 'jh':
    $startAge = "中学校";
    break;
  case 'h':
    $startAge = "高校";
    break;
  case 'u':
    $startAge = "大学";
    break;
  default:
    $startAge = "社会人";
    break;
}
  return $startAge;
}

?>
