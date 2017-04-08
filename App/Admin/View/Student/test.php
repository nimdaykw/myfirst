<?php
	header('content-type:text/html;charset=utf-8');
		$filename="C:/Users/alex/Documents/Rainmeter/Skins/Skins/NOTE/note.txt";
		$str=file_get_contents($filename);
		@$str.='\r\n'.$_POST['txt'];
		\r\n
		fie_put_contents($filename, $str);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<input type="text"  name="txt" placeholder="你需要添加的值" />
		<input type="submit" value="提交" />
	</form>
	
</body>
</html>