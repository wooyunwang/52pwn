<!DOCTYPE html> 
<html> 
<head> 
 <meta charset="UTF-8"> 
 <title>显示文件</title> 
</head> 
<body> 
<?php
  
//print_r($_FILES); 
  
//获取到临时文件 
$file=$_FILES['file']; 
//获取文件名 
$fileName=$file['name']; 
//移动文件到当前目录 
move_uploaded_file($file['tmp_name'],$fileName); 
  
//显示文件 
echo "<img src='$fileName'>"; 
?> 
</body> 
</html>
