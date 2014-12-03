<html>
<head>
{{ HTML::style('/packages/stylos/stblog/main.css') }}
<title>New Post</title>
</head>
<body>
<form action="insert.blade.php" method="post">
<!-- <div class="new_post"><textarea cols="10" rows="10"></textarea><div> -->
<p> Create new Post </p>
<p> Title :   
<input type="text" name="header"/></p>
<br>
<p> Link :   
<input type="text" name="link"/></p>
<br>
<p> Your message </p>
<p>
<textarea name="article" cols="40" rows="10">Текст по умолчанию</textarea> 
</p>
</br>
<input type="submit" value="Save" />
</form>
</body>
<html>
