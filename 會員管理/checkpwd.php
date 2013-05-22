<?php
	require_once("dbtools.inc.php");
	header("Content-type: text/html; charset=utf-8");
		
	$student_id = $_POST["student_id"];	 	
	$password = $_POST["password"];		//取得表單資料

	$link = create_connection();		//建立資料連接
	
	$sql = "SELECT * FROM im WHERE student_id = '$student_id' AND password = '$password'";  //檢查帳號密碼是否正確
	$result = execute_sql("License", $sql, $link);
	
  

  if (mysql_num_rows($result) == 0)			//如果帳號密碼錯誤
  {
    
    mysql_free_result($result);				//釋放 $result 佔用的記憶體
    	
    mysql_close($link);						//關閉資料連接
    
    echo "<script type='text/javascript'>";	//顯示訊息要求使用者輸入正確的帳號密碼
    echo "alert('帳號或密碼錯誤');";
    echo "history.back();";
    echo "</script>";
  }
  
  else			//如果帳號密碼正確
  {
    session_start();
    $_SESSION["student_id"] = mysql_result($result, 0, "student_id");	
		//將使用者資料加入 session
    mysql_free_result($result);			//釋放 $result 佔用的記憶體    	
    mysql_close($link);					//關閉資料連接
    header("location:main.php");

  }
?> 
