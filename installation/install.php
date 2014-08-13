<?php

	require_once("../system/core/core.php");

?>

<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Your website works! You can now edit this page or use your text editor. For more information see Yellow documentation." />
	<meta name="keywords" content="home" />
	<meta name="author" content="Yellow" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Yellow Setup</title>
	<link rel="shortcut icon" href="/media/images/icon.png" />
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
	
	<link rel="stylesheet" type="text/css" media="all" href="/media/styles/default.css" />
</head>
<body>
	<div class="page">
		<div class="header"><h1><a href="/">Yellow Setup</a></h1></div>
		<div class="header-banner"></div>
		<div class="content">
			<h1>Installation</h1>
			<form class="pure-form pure-form-aligned">
				<fieldset>
					<div class="pure-control-group">
						<label>Server Scheme:</label>
						<input type="radio" name="ServerScheme" value="http" checked>&nbsp;http://&nbsp;&nbsp;&nbsp;<input type="radio" name="ServerScheme" value="https">&nbsp;https://
					</div>
					<div class="pure-control-group">
						<label for="ServerName">Server Name:</label>
						<input type="text" name="ServerName">
					</div>
					<div class="pure-control-group">
						<label for="sitename">Site Name:</label>
						<input type="text" name="sitename">
					</div>
					<div class="pure-control-group">
						<label for="author">Author:</label>
						<input type="text" name="author">
					</div>
					<div class="pure-control-group">
						<label for="email">Email:</label>
						<input type="text" name="email">
					</div>
					<div class="pure-control-group">
						<label for="password">Password:</label>
						<input type="text" name="password">
					</div>
					<div class="pure-control-group">
						<label for="confirmPassword">Confirm:</label>
						<input type="text" name="confirmPassword">
					</div>
				</fieldset>
			</form>
		</div>
		<div class="footer">
			&copy; 2014 Yellow. <a href="http://datenstrom.se/yellow">Made with Yellow</a>.
		</div>
	</div>
</body>
</html>