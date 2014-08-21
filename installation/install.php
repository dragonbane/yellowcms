<?php

	require_once("../system/core/core.php");

	if(isset($_POST) && !empty($_POST["serverName"]))
	{
		$config = new YellowConfig($config);
		$config->setDefault("configDir", "system/config/");
		$config->setDefault("configFile", "config.ini");
		$config->setDefault("webinterfaceUserFile", "user.ini");
		$config->load("../".$config->get("configDir").$config->get("configFile"));
		$fileName = "../".$config->get("configDir").$config->get("webinterfaceUserFile");
		
		// Run a  quick check to make sure the file is writable.
		if(is_writable("../".$config->get("configDir").$config->get("configFile")) == true)
		{
			// Set config.ini variables
			$config->set("sitename", $_POST["sitename"]);
			$config->set("author", $_POST["author"]);
			$config->set("serverName", $_POST["serverName"]);
			$config->set("webinterfaceServerScheme", $_POST["webinterfaceServerScheme"]);
			$config->set("serverScheme", $_POST["webinterfaceServerScheme"]);
			$config->save("../".$config->get("configDir").$config->get("configFile"));
		} else {
			$_POST["error"] = "Config file is not writeable!";
		}
		
		echo $filename;
		$options = array("cost" => 11);
		$user = array(
			"name" 		=> $_POST["author"],
			"email" 	=> $_POST["email"],
			"hash"		=> password_hash($_POST["password"], PASSWORD_BCRYPT, $options),
			"language" 	=> "en",
			"home"		=> ""
		);
	}

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
			<div><?php echo $_POST["error"]; ?></div>
			<form class="pure-form pure-form-aligned" action="install.php" method="post">
				<fieldset>
					<div class="pure-control-group">
						<label>Server Scheme:</label>
						<input type="radio" name="webinterfaceServerScheme" value="http" <?php if($_POST["webinterfaceServerScheme"] != "https"){echo "checked";} ?>>&nbsp;http://&nbsp;&nbsp;&nbsp;<input type="radio" name="webinterfaceServerScheme" value="https" <?php if($_POST["webinterfaceServerScheme"] == "https"){echo "checked";} ?>>&nbsp;https://
					</div>
					<div class="pure-control-group">
						<label for="serverName">Server Name:</label>
						<input type="text" name="serverName" value="<?php echo $_POST["serverName"]; ?>">
					</div>
					<div class="pure-control-group">
						<label for="sitename">Site Name:</label>
						<input type="text" name="sitename" value="<?php echo $_POST["sitename"]; ?>">
					</div>
					<div class="pure-control-group">
						<label for="author">Author:</label>
						<input type="text" name="author" value="<?php echo $_POST["author"]; ?>">
					</div>
					<div class="pure-control-group">
						<label for="email">Email:</label>
						<input type="text" name="email" value="<?php echo $_POST["email"]; ?>">
					</div>
					<div class="pure-control-group">
						<label for="password">Password:</label>
						<input type="text" name="password">
					</div>
					<div class="pure-control-group">
						<label for="confirmPassword">Confirm:</label>
						<input type="text" name="confirmPassword">
					</div>
					<div class="pure-control-group">
						<label>&nbsp;</label>
						<input type="submit" value="Submit" class="pure-button">
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

