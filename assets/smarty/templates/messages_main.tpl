<html>
<head>
<link rel="stylesheet" type="text/css" href="../assets/css/master.css" />
<link rel="stylesheet" type="text/css" href="../assets/css/master_list.css" />
<title>I Must Confess</title>
</head>
<body>

{include file='header.tpl'}

		<!-- The list of messages -->
		<div class="content">
			{assign var=i value=0}
			{foreach from=$messages item=msg}
				<div class="message">
					<div class=author>{$msg->author}</div>
					<p>
					{$msg->body}, {$i}
					</p>
			
					<p class="timestamp"> Timestamp </p>
					<button onclick="loadXMLDoc()">Submit</button><button>Trash</button>
		
				</div>
				
				{assign var=i value=$i+1}
			{/foreach}
		</div>

{include file='footer.tpl'}

</body>
</html>