<?php
$to = "kkraggal.art@gmail.com";
$subject = "Exa Test";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>etstsdfsdfsdfs sdfs</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <hello@exallion.com>' . "\r\n";

mail($to,$subject,$message,$headers);
?>