<meta charset="UTF-8"> 
<?php
$user = $_POST['username'];
$comment = $_POST['comment'];
//print_r($_POST);
 
$con=@mysql_connect('localhost','root','root');

mysql_query('set names utf8');
if(mysql_select_db('comment',$con)){
    $sql="insert into comment(user,comment) values('$user','$comment')";
	
    if(mysql_query($sql)){
       ?><script type="text/javascript"> 
    alert("评论成功！"); 
    window.location.href="demo.php"; 
  </script> 
    <?php    
    }else{
        echo "failure";
    }

}
?>
