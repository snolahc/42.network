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
$path = ($_GET['path'] ? $_GET['path'] : '/');
$pwd = $root . $path;
$fh = scandir($pwd);

echo $path;
echo "<ul>";
foreach ($fh as $key => $value) {
  if ($value == ".." && $path == "/") {
    continue;
  } elseif ($value == '.') {
    echo '<li>.</li>';
    continue;
  }
    elseif ($value == "..") {
    $newpwd = '/' . implode('/', array_pop(explode('/', $path)));
    $link = 'index.php?path=' . $newpwd . '&oldpwd=' . urlencode($path);
    echo '<li><a href="' . $link . '">' . $value . '</a></li>';
    continue;
  }
  if (is_dir($pwd . $value)) {
    $link = 'index.php?path=' . urlencode($path) . urlencode($value) . '&oldpwd=' . urlencode($path);
    echo '<li><a href="' . $link . '">' . $value . '</a></li>';
  } else {
    echo "<li>" . $value . "</li>";
  }
}
echo "</ul>";
if (is_writable($pwd)) {
  echo "+ upload files<br />";
  echo "+ text<br />";
  echo "+ folder<br /><br />";
}
 ?>


  </body>
</html>
