<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>會員登入</title>
    <script type="text/javascript">
      function check_data()
      {
        if (document.myForm.student_id.value.length == 0)
          alert("帳號不可以空白");
        else if (document.myForm.password.value.length == 0)
          alert("密碼不可以空白");
        else 
          myForm.submit();
      }
    </script>  
</head>
 
<body>
    <form action="checkpwd.php" method="post" name="myForm">

      <table border='0' width="75%" align="center">

          <td align="left"> 
            <p align="left"><img src="images/tpcu_logo.png" width="230px" height="94px"></p>
	<td align="center">
		<font size="8">臺北城市科技大學</font>
	<p>
		<font size="1">Taipei Chengshih University of Science and Technology</font>
	</td>
	<td align="right" >
		<font size="4">臺北城市科技大學 | 聯絡我們</font>
	</td>
	  <tr>
          <td>
            <p align="left"><img src="images/登入.png"></p>
	    <font color="#3333FF">帳號：</font> 
            <input name="student_id" type="text" size="15">
	<p>
            <font color="#3333FF">密碼：</font> 
            <input name="password" type="password" size="15">
          </td>
	<td align="center">
		<font size="20">資訊管理系</font>
	<p>
		<font size="1">Department of Information Management</font>
	</td>
        <tr>
          <td align="left"> 
            <input type="button" value="登入" onClick="check_data()">      　 
            <input type="reset" value="重填">
          </td>
	<td align="center">
		<font size="6">證照查詢系統</font></td>
        </tr>

      </table>
    </form>
</body>
</html>
