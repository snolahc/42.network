<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>action/user</title>
    <link rel="stylesheet" type="text/css" href="../style/colours.css">
    <script type="text/javascript" src="../js/functions.js"></script>

    <style media="screen">
      body {
        background-color: #282c34;
        color: #ccc;
      }
    </style>

  </head>
  <body>

   <ul>
     <li><a href="#" onclick="toggle(getElementById('ul-login'))">login</a>
     <ul id="ul-login" style="display: flex; flex-direction: column;">
       <li><a href="#"><input type="text" /></a></li>
       <li><a href="#"><input type="text" /></a></li>
       <li><a href="#"><input type="button" value="login" /></a></li>
     </ul></li>
        <!-- <ul style="display: none;">
          <li><a href="#">google</a></li>
          <li><a href="#">facebook</a></li>
          <li><a href="#">github</a></li>
        </ul> -->
      <li><a href="#">register</a></li>
      <li>
        <a href="#">region</a>
      </li>
    </ul>
  </body>
</html>
