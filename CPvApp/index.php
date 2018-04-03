<!DOCTYPE html>
<html>
	<head>
		<!-- The viewport meta tag constrains the page to the vApp size, and prevents user scaling -->
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<title>Color vApp</title>
	</head>
	<body>
		<script type="text/javascript">
			//////////////// START CODE REQUIRED BY TOUCHCAST SDK	
			
			// This gets called when the user presses the 'preview' button in TouchCast. It returns a string formatted as a JSON object, with the URL of the live page, "live.php".
			// Color is a PHP GET variable appended to the URL.
			function WidgetIsAboutToGoLive(){

				// !!!BE SURE TO REPLACE THIS URL TO MATCH YOUR ACTUAL DOMAIN 
				var theUrl = "http://legomaster3650.github.io/CPvApp/live.php?color="+color;
				return '{"url":"'+theUrl+'","reload-page":"1"}';

			}						

			// this is being called automatically by the SDK when it's fully initialized
			window.tcvAppsAsyncInit = function () {
				// When the page loads, we use a widget action to make sure the preview button is inactive until user chooses a color
				TouchCastvApps.doAuthoringAction({
					action: 'widgetIsReadyToGoLive',
					value : 0
				});
			};

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

			var color = "" // default color

			// this is being called when the user clicks a color
			function chooseColor(theValue) {
				if (theValue != '') {
					color = theValue;
					TouchCastvApps.doAuthoringAction({
						action: 'widgetIsReadyToGoLive',
						value: 1
					});
				}
			}

		</script>
		<div id="color-box">
			<div id="form-wrapper">
				<h2>Choose a color:</h2>
				 <form id ="colors" name="colors">
					 <!-- Just a simple form with three radio buttons. Note that there is no sumbit button or action attribute. -->
					 <input type="radio" name="color" value="red" onclick="chooseColor('red')">RED<br/>
					 <input type="radio" name="color" value="green" onclick="chooseColor('green')">GREEN<br/>
					 <input type="radio" name="color" value="blue" onclick="chooseColor('blue')">BLUE<br/>
				 </form>
			</div>
		</div>
	</body>
</html>
