<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<h1 align="center" size="9"> 登入成功</h1>
<?php
	require_once("dbtools.inc.php");
      session_start();
	  if (isset($_SESSION["student_id"]))
	  {
        $student_id = $_SESSION["student_id"];
	  }
	else
	{
	    header("location:index.php");
	}
			  	  
      $link = create_connection();		//建立資料庫連結	  
      $sql = "SELECT * FROM `im` WHERE student_id = '$student_id'";
      $result = execute_sql("License", $sql, $link);
	  $row = mysql_fetch_assoc($result);
?>	  
</body>
<body>
      <table border='1' width="20%" align="center">
        <tr bgcolor="#99FF99"> 
          <td align="right">帳號：</td>
          <td><?php echo $row['student_id'] ?></br></td>
        </tr>
        <tr bgcolor="#99FF99"> 
          <td align="right">姓名：</td>
          <td><?php echo $row['name'] ?></br></td>
        </tr>
        <tr bgcolor="#99FF99"> 
          <td align="right">學制：</td>
          <td><?php echo $row['class'] ?></br></td>
        </tr>
      </table>
<?php
      $sql = "SELECT * FROM `data` where 學號 = '$student_id'";
      $result = execute_sql("License", $sql, $link);
	  echo "<table border='1' align='center'><tr align='center' bgcolor='FF8F19'>";
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
      <table width="40%" align="center">
        <tr>
          <td align="center">
	   <p> 
	    <a href="logout.php">登出網站</a>
          </td>
        </tr>
      </table>
</body>
</html>
