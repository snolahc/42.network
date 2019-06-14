<?php
  include("vars.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>42.network</title>
    <meta charset="utf-8">
    <style>
      <?php echo file_get_contents("style/layout.css"); ?>
    </style>
<!--    <link rel="stylesheet" type="text/css" href="style/style.css"> -->
    <link rel="stylesheet" type="text/css" href="style/colours.css">
    <link rel="stylesheet" type="text/css" href="style/forms.css">
    <script type="text/javascript" src="js/functions.js"></script>
  </head>
  <body>
    <div class="prompt">
      <a href="#" onclick="toggle(document.getElementById('window-user'));"><?php echo $login; ?></a>:
      <a href="#" onclick="toggle(document.getElementById('window-files'));">~</a> $
        <form class="form-discret shell" action="action/console" target="console" method="post" autocomplete="off">
          <label for="command" style="display:none">Command</label>
          <input class="shell" name="command" type="text" value="" autofocus>
        </form>
      <a href="action/console" target="console">v</a>&nbsp;<a href="action/time" target="time"><?php print date('H:i'); ?></a>
    </div>

    <span class="actions">
      <div class="window" id="window-files">
        <div class="window-head"><span class="window-title">&nbsp;files</span><span class="window-close"  onclick="document.getElementById('window-files').style.display = 'none';">x</span></div>
        <iframe name="cd" class="window-space files" src="files/"></iframe>
      </div>

      <div class="window" id="window-user">
        <div class="window-head"><span class="window-title">&nbsp;user</span><span class="window-close" onclick="document.getElementById('window-user').style.display = 'none';">x</span></div>
        <iframe name="user" class="window-space user" src="user/"></iframe>
      </div>

      <script type="text/javascript">
        document.getElementById('window-user').style.display = 'none';
        document.getElementById('window-files').style.display = 'none';
      </script>


      <div class="content" style="display:none;">
        <iframe name="console" class="window-space console" src="action/console"></iframe>
        <iframe name="time" class="window-space time" src="action/time"></iframe>
        <iframe name="42" class="window-space 42" src="action/42"></iframe>
      </div>
    </span>
    <div class="forty-two">
      <a href="action/42" target="42">42</a>
    </div>

  </body>
</html>
