<?php
include_once 'include/processes.php';
$Login_Process = new Login_Process;
$Status = $Login_Process->welcome_note();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Welcome to My Web site</title>
</head>
<body>

<p>
Status: <?php echo $Status; ?>
</p>

</body>
</html>
