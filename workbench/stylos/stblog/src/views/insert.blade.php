<html>
	<head>
	{{ HTML::style('/packages/stylos/stblog/main.css') }}
	<title>Вставка данных в БД</title>
	</head>
		<body>
			<?php
			$header = Input::all();
			return $header;
			//$link = $_POST['link'];
			//$article = $_POST['article'];
						
	//protected $ar = array('header' => $header, 'link' => $link, 'article' => $article);
	
			//DB::table('posts')->insert($ar);
	//mysql_connect("localhost", "root", "qwerty76") or die (mysql_error ());

	// Выбор БД
	//mysql_select_db("habr") or die(mysql_error());
	//$sql = 'INSERT INTO posts(header, article)
 	//VALUES('$header','$atricle')';
	//mysql_query($sql) or die (mysql_error());
	//$sql = "INSERT INTO posts (header, link, article) VALUES ('$header','$link','$article');";
	//var_dump($sql);
	//mysql_query($sql) or die (mysql_error());
	// Закрытие соединения
	//mysql_close();   
			?>
				<h1>БД обновлена!</h1> 
			<link title = "back to blog" href="post.blade.php">
		</body>
</html>
