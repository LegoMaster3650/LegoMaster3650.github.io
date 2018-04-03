<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

 <form id ="colors" name="colors">
 <!-- Just a simple form with three radio buttons. Note that there is no sumbit button or action attribute.-->
 <input type="radio" name="color" value="red" onclick="chooseColor(‘red’)">RED<br/>
 <input type="radio" name="color" value="green" onclick="chooseColor(‘green’)">GREEN<br/>
 <input type="radio" name="color" value="blue" onclick="chooseColor(‘blue’)">BLUE<br/>
 </form>

 function chooseColor(theValue) {
    if (theValue != '') {
        color = theValue;
        TouchCastvApps.doAuthoringAction({
            action: 'widgetIsReadyToGoLive',
            value: 1
        });
    }
}
});

function WidgetIsAboutToGoLive(){
    // !!!BE SURE TO REPLACE THIS URL TO MATCH YOUR ACTUAL DOMAIN 
    var theUrl = "http://http://legomaster3650.github.io/CPvApp/index.php?color="+color;
    return '{"url":"'+theUrl+'","reload-page":"1"}';
}
