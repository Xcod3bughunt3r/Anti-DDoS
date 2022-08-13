<?php
	try{
		if (!file_exists('antiddos/start.php'))
			throw new Exception ('antiddos/start.php does not exist');
		else
			require_once('antiddos/start.php'); 
	} 
	//CATCH the exception if something goes wrong.
	catch (Exception $ex) {
		echo '<div style="padding:10px;color:white;position:fixed;top:0;left:0;width:100%;background:black;text-align:center;">'.
			'The <a href="https://github.com/Xcod3bughunt3r/Anti-DDoS" target="_blank">"Anti DDoS"</a> failed to load '.
			'properly on this Web Site, please de-comment the \'catch Exception\' to see what happening!</div>';
		//Print out the exception message.
		//echo $ex->getMessage();
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/flottant.css">
		<title>Anti DDoS Webpage</title>
	</head>
	<body>
		<center>
			<div class="container">
				<a href="https://github.com/Xcod3bughunt3r">
					<img src="https://avatars1.githubusercontent.com/u/22576758?s=400&v=4" style="border-radius: 100%;width:200px;"><br>
					Xcod3bughunt3r Github
				</a>
				<h1>LPK Prisma</h1>
				<p>This web Site is protected by Anti DDoS PHP.</p>
			</div>
		</center>
	</body>
</html>
