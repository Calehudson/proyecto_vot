<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

<?php
$conn = new mysqli("127.0.0.1", "root", "", "bdpvot", 3307);

if ($conn->connect_error) {
    die("Error en la conexi�n: " . $conn->connect_error);
}
echo " Conexi�n exitosa a MySQL.";
?>

</body>
</html>
