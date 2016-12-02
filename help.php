
<html>
<head>
  <title>Haltom Robotics Help</title>
</head>
<body>
  <h1>Your Request Has Been Submitted!</h1>
  <br>A Representative Will Come To Your Pit ASAP
<?php
$teamID = $_GET["teamID"];
exec("./help.sh $teamID");
exec("echo $teamID");

?>
</body>
</html>
