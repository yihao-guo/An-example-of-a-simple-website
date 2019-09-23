<html>
<head>
<title>
comment
</title>
<style>
p,textarea{vertical-align:top;}
</style>
</head>

<body>
<form action="edit.php" method="post">
<p>name:<input type="text" name="username" /></p>
<p>comment:<textarea cols="30" rows="5" name="comment" /></textarea></p>
<input type="submit" value="submit"/>
</form>
<!--前端展示代码-->
<?php  
$con=@mysql_connect('localhost','root','root');
mysql_query('set names utf8');
mysql_select_db('comment',$con);
$sql='select * from comment';
$res=mysql_query($sql);
$array=array();
/*while($row=@mysql_fetch_array($res)){?>
   <b><?php echo $row['user'] ?></b>说:
   <p><?php echo $row['comment'] ?></p>
<?php
}*/
?>

</body>
</html>