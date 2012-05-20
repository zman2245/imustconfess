<html>
<head>
<link rel="stylesheet" type="text/css" href="assets/css/master.css" />
<link rel="stylesheet" type="text/css" href="assets/css/master_list.css" />
<title>Smarty test for imustconfess</title>
</head>
<body>

<!--
<header>
	<a href="www.google.com">Privacy Policy</a>
	<a href="www.yahoo.com">Privacy Policy</a>
</header>
-->
{include file='header.tpl'}

		<!-- The list of messages -->
		<div class="content">
			{foreach from=$messages item=msg}
				<div class="message">
		
					<p>
					This is the text of a message
					</p>
			
					<p class="timestamp"> Timestamp </p>
		
				</div>
			{/foreach}
		</div>

</body>
</html>