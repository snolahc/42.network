<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>action/user</title>
    <link rel="stylesheet" type="text/css" href="../../style/colours.css">
    <script type="text/javascript" src="../../js/functions.js"></script>

    <style media="screen">
      body {
        color: #ccc;
      }
    </style>

  </head>
  <body>
    <ul>
      <li>
        <a href="#" onclick="toggle(getElementById('ul-login'))">login</a>
        <ul id="ul-login" style="display: none;">
          <li><a href="#">username</a></li>
          <li><a href="#">password</a></li>
          <li><a href="#">connect</a></li>
        </ul>
        <ul style="display: none;">
          <li><a href="#">google</a></li>
          <li><a href="#">facebook</a></li>
          <li><a href="#">github</a></li>
        </ul>
      </li>
      <li>
        <a href="#">register</a>
      </li>
      <li>
        <a href="#">region</a>
      </li>
    </ul>
  </body>
</html>
