<html>
<head>
</head>
<body>
<?php

if(!isset($_SESSION["session_ID"])) {
	$SESSION["session_ID"] = rand(10000, 200000);
}
echo $SESSION["session_ID"];
unset($SESSION["session_ID"]);
 ?>

</body>

</html>
