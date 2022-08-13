<p align="left"><a href="https://www.itsecurity.id/"><img height="150" title="Xcod3bughunt3r" src="/img/face.png"/></a></p>

# ``Anti DDoS``
#### `A simple way to protect your web application from DDOS attack(FREELY) in` *1 line*.
### `How it work?`
<p align="center"><a href="https://www.itsecurity.id/"><img height="480" title="Xcod3bughunt3r" src="/img/icon.png"/></a></p>

#### `At each connection, the system temporarily saves the ip address of the client and monitors its connection frequency, if this connection frequency is abnormal, then the system considers it as a black ip address and sends a verification request in the form of a verification. Captcha integrated into the system, if he passes this check, then it is a human and not a robot!`

### `Testing...`
<p align="center"><a href="https://www.itsecurity.id/"><img height="480" title="Xcod3bughunt3r" src="/img/Antiddos.gif"/></a></p>

#### `"This project has been tested by severals ddos software with a score of 77%."`

___

### `How to use it?`
### `Basic USAGE`
```php
<?php
	include ("antiddos/start.php"); //write this at the top of your PHP application and all is done!!!
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Example Web page protected!
	</title>
</head>
	<body>
		...
		<h2>LPK Prisma</h2>
		...
	</body>
</html>
```

___

### `Advance USAGE:`
```php
<?php
	try{
		if (!file_exists('antiddos/start.php'))
			throw new Exception ('antiddos/start.php does not exist');
		else
			require_once('antiddos/start.php'); 
	} 
	//CATCH the exception if something goes wrong.
	catch (Exception $ex) {
		// et's print a message saying there is an error
		echo '<div style="padding:10px;color:white;position:fixed;top:0;left:0;width:100%;background:black;text-align:center;">The <a href="https://github.com/Xcod3bughunt3r/Anti-DDoS" target="_blank">"Anti DDoS"</a> failed to load properly on this Web Site, please de-comment the \'catch Exception\' to see what happening!</div>';
		//Print out the exception message.
		//echo $ex->getMessage();
	}
	// cp -r Anti-DDoS/ /var/www/html/
?>
---- THE HTML PAGE CONTENT ----
```

___

#### ``PLEASE CHECK`` *[LICENSE](LICENSE)*
#### ``DEVELOPERS:``*[Xcod3bughunt3r](https://github.com/Xcod3bughunt3r/Xcod3bughunt3r)*
