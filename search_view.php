<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sample 2_1</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript">
<!--
//Create a boolean variable to check for a valid Internet Explorer instance.
var xmlhttp = false;
//Check if we are using IE.
try {
//If the Javascript version is greater than 5.
xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
//alert ("You are using Microsoft Internet Explorer.");
} catch (e) {
    //alert(e);
//If not, then use the older active x object.
try {
//If we are using Internet Explorer.
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//alert ("You are using Microsoft Internet Explorer");
} catch (E) {
//Else we must be using a non-IE browser.
xmlhttp = false;
}
}
//alert(xmlhttp);
//alert(typeof XMLHttpRequest);
//If we are using a non-IE browser, create a javascript instance of the object.
if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
xmlhttp = new XMLHttpRequest();
//alert(xmlhttp);
//alert ("You are not using Microsoft Internet Explorer");
}

function makerequest(given_text, objID)
 {
	//var obj = document.getElementById(objID);
        //alert(given_text);
        //alert(given_text);
	serverPage='search.php?text='+given_text;
        //alert(serverPage);
        xmlhttp.open("GET", serverPage);
	xmlhttp.onreadystatechange = function()
	 {
	//alert(xmlhttp.readyState);
	//alert(xmlhttp.status);
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		 {
			document.getElementById(objID).innerHTML = xmlhttp.responseText;
			//document.getElementById(objcw).innerHTML = xmlhttp.responseText;
		 }
	}
xmlhttp.send(null);
}

//-->
</script>
<body onload="makerequest('','hw');" >
<div align="center">
<h1>My Search</h1>
<input type="text" name="given_text" onkeyup="makerequest(this.value,'hw');" >
    
<hr/>

<div id="hw"></div>




</div>
</body>
</html>