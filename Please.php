<!DOCTYPE html>

<html>
<head>
	<title>ULTIMATE PHP TEST</title>
</head>
<body>

	<?php
	
		$doDisplayForm = true;
		
		if(isset($_POST['submit'])) {
			
			$url = $_POST['url'];
			
			if (empty($url)) {
				$url = "https://www.bing.com";
				$doDisplayForm = false;
			}
			
			$url = "http://" . $url;
		
		} else {
			$url = "https://www.bing.com";
		}
	
			?>
				<form name="generate" method="POST" action='<?php echo $_SERVER["SCRIPT_NAME"]; ?>'>
					Enter URL:<input type="text" name="url" placeholder="Enter your address"><input type="submit" name="submit" value="GO!"/>
					<iframe src=<?php echo $url;?> width="100%" height="720px">
					</iframe>
				</form>
			<?php	
	?>
	
</body>
</html>