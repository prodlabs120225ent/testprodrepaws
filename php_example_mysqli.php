
<html>
<header>
  <title>PHP on OCI with MySQL Database Service</title>
</header>
<body>
<center><h1>PHP on OCI with MySQL Database Service</h1></center>
<hr>
<?php
$user = "";
$pwd  = "";
$mds  = "";
$session = new mysqli($mds, $user, $pwd);
if ($con->connect_errno) {
    echo ("Connection could not be established to MySQL");
}
else {
    $result = $session->query('select @@version_comment as name, @@version as version');
    $row = $result->fetch_row();
    echo "<h3>You are connected successfully to <i>" . $row[0] . " " . $row[1] . "</i></h3>";
}
?>
</body>
</html>
