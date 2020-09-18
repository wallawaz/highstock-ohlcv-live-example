<?php
require('db_config.php');

  header("Content-type: text/json");
  $sql = "SELECT ts * 1000 as ts, token_open, token_high, token_low, token_close, token_volume FROM eth_ohlcv ORDER BY ts";

  $res = mysqli_query($mysqli, $sql);
  $res = mysqli_fetch_all($res, MYSQLI_ASSOC);
  $res = json_encode($res, JSON_NUMERIC_CHECK); 

  echo $res;
  $mysql_close();
?>
