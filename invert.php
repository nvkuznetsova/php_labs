<?php
// SERVER

if(getenv('REQUEST_METHOD') == 'POST') {
	$client_data = file_get_contents("php://input");
	echo "
		<SERVER>
			Hallo, I am server
			This is what I've got from you
			$client_data
		</SERVER>
	";
	exit();
}
?>

<!-- CLIENT -->

<script>
function sendAndLoad(sURL, sXML) {
	var r = null;
	if(!r) try { r = new ActiveXObject("Msxml2.XMLHTTP") } catch (e){}
	if(!r) try { r = new XMLHttpRequest() } catch (e){}
	if(!r) return null;
	r.open("POST", sURL, false);
	r.send(sXML);
	return r.responseText;
}
</script>

<button onclick="
	alert(sendAndLoad(
			location.href,
			'<xml><sample>data</sample></xml>'
	))">
Test
</button>
