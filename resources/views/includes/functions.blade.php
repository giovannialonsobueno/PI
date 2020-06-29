<?php
include("produtos/db.php");
function call_pdt($i){
  global $hoteis;
  foreach($hoteis as $item){if ($item["id"] == $i) {
  return $item;}}
}

?>
