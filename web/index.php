<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>42.network</title>
    <meta charset="utf-8">
    <style>
      <?php echo file_get_contents("style/layout"); ?>
    </style>
<!--    <link rel="stylesheet" type="text/css" href="style/style.css"> -->
<!--    <link rel="stylesheet" type="text/css" href="style/colors.css"> -->
  </head>
  <body>
    <div class="header">

      <span class="login">
        <label for="login" style="display:none">Login</label>
        <input name="login" type="text" value="login">
        <label for="password"style="display:none">Password</label>
        <input name="password" type="password" value="password">
        <input type="button" name="submit" value=">">
      </span>

      <span class="menu">
        <a href="/info">info</a>
      </span>

    </div>

    <div class="main">
      42.network
    </div>

  </body>
</html>
