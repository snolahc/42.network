<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>action/cd</title>
    <link rel="stylesheet" type="text/css" href="../style/colours.css">
    <script type="text/javascript" src="../js/functions.js"></script>

    <style>
    body {
      background-color: #282c34;
      color: #aaa;
    }
    </style>
  </head>
  <body>

<?php
$root = "data";
$path = "/";
$pwd = $root . $path;
$fh = scandir($pwd);

if (is_writable($pwd)) {
  echo "+ file<br />";
  echo "+ folder<br /><br />";
}
echo $path;
echo "<ul>";
foreach ($fh as $key => $value) {
  if ($value == "." || ($value == ".." && $path == "/")) {
    continue;
  }
  if (is_dir($pwd . $value)) {
    $link = '?path=' . $path . $value . '&oldpwd=' . $path . '&#47;';
    echo '<li><a href="' . $link . '">' . $value . '</a></li>';
  } else {
    echo "<li>" . $value . "</li>";
  }
}
echo "</ul>";
 ?>


  </body>
</html>
