<!doctype html> 
<html> 
<head> 
<meta charset="UTF-8"> 
  <title>register</title> 
</head> 
<body> 
  <?php 
    session_start(); 
    $username=$_REQUEST["username"]; 
    $password=$_REQUEST["password"]; 
  
    $con=mysql_connect("localhost","root","root"); 
    if (!$con) { 
      die('链接失败'.mysql_error()); 
    } 
    mysql_select_db("user_info",$con); 
    $dbusername=null; 
    $dbpassword=null; 
    $result=mysql_query("select * from user_info where username ='{$username}'"); 
    while ($row=mysql_fetch_array($result)) { 
      $dbusername=$row["username"]; 
      $dbpassword=$row["password"]; 
    } 
    if(!is_null($dbusername)){ 
  ?> 
  <script type="text/javascript"> 
  
    alert("用户名已经存在"); 
    window.location.href="register.html"; 
  </script>  
  <?php 
    } 
    mysql_query("insert into user_info (username,password) values('{$username}','{$password}')") or die("存入数据库失败".mysql_error()) ; 
    mysql_close($con); 
  ?> 
  <script type="text/javascript"> 
    alert("注册成功！"); 
    window.location.href="demo.html"; 
  </script> 
    
    
        
      
      
</body> 
</html> 