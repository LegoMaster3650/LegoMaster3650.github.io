<!DOCTYPE html>

<?php
	// Use the PHP GET variable to retrieve the color
	$color = $_GET['color'];
?>

<html>
	<head>
		<title>Color</title>
		<!-- Again we are using jQuery, and using the viewport meta tag to constrain page size and user scaling-->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<meta content='width=device-width, user-scalable=0' name='viewport' />
	</head>
	<body>
		<script type="text/javascript">
			//////////////// START CODE REQUIRED BY TOUCHCAST SDK	
			
			// This gets called when the user presses the 'Edit' button in TouchCast. It returns a string formatted as a JSON object, with the URL of the edit page, "index.php".
			function WidgetIsAboutToSwitchToEditing(){

				// !!!BE SURE TO REPLACE THIS URL TO MATCH YOUR ACTUAL DOMAIN 
				return '{"url":"https://legomaster3650.github.io/CPvApp/index.php","reload-page":"1"}';

			}

			// the code snippet that's used to initialize the vApps SDK
	        (function (d, s, id) {
	            var js, tjs = d.getElementsByTagName(s)[0];
	            if (d.getElementById(id)) {
	                return;
	            }
	            js = d.createElement(s);
	            js.id = id;
	            js.src = "//sdk.touchcast.com/vapps_sdk.min.js";
	            tjs.parentNode.insertBefore(js, tjs);
	        }(document, 'script', 'touchcast-vapps-jssdk'));
	        
	        //////////////// STOP CODE REQUIRED BY TOUCHCAST SDK
		</script>
		<div id="color-box" style="background: <?php echo $color; ?>;"></div>
	</body>
</html>


