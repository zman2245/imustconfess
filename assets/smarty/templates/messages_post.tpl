<html>
<head>
<link rel="stylesheet" type="text/css" href="assets/css/master.css" />
<link rel="stylesheet" type="text/css" href="assets/css/messages_post.css" />
<title>I Must Confess</title>
</head>
<body>

{include file='header.tpl'}

<form action="post_new" method="post">
	<label for="body">Confession:</label>
	<input type="text" id="body" name="body" />
	
	<label for="author">Author:</label>
	<input type="text" id="author" name="author" />
	
	<label for="title">Title:</label>
	<input type="text" id="title" name="title" />
<input type="submit" />
</form>

{include file='footer.tpl'}

</body>
</html>