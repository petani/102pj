<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>測試</title>
</head>

<body>
<?php
require_once("dbtools.inc.php");
      $link = create_connection();
      //建立資料庫連結
      $sql = "SELECT * FROM `ex1` where 學號 like '499511%'";
      $result = execute_sql("test", $sql, $link);
      /*echo "ex1 = 「國外」 的記錄有 " . mysql_num_rows($result) . " 筆";*/
	  echo "<table border='1' align='center'><tr align='center'>";
	  for ($i = 0; $i < mysql_num_fields($result); $i++)   
	  // 顯示欄位名稱
      echo "<td>" . mysql_fetch_field($result, $i)->name. "</td>";		
	  for ($j = 0; $j < mysql_num_rows($result); $j++)    
	  // 顯示欄位內容
      {
      echo "<tr>";				
      for ($k = 0; $k < mysql_num_fields($result); $k++)
      echo "<td>" . mysql_result($result, $j, $k) . "</td>";				
      }
      echo "</table>" ;
      mysql_free_result($result);
      mysql_close($link);
?>
</body>
</html>
