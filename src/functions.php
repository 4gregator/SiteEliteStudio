<?php
function p_($out){
  echo '<pre>';
  print_r($out);
  echo '</pre>';
}

// фильтрация пользовательского ввода
function user_input($input) {
  $output = trim($input);
  $output = strip_tags($output);
  $output = htmlspecialchars($output);
  return $output;
}
?>