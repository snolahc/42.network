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
  </head>
  <body>
    <div class="prompt">
      <a href="action/cd" target="cd">~</a> <a href="action/user" target="user">$</a>
        <form class="form-discret shell" action="action/console" target="console" method="post">
          <label for="command" style="display:none">Command</label>
          <input class="shell" name="command" type="text" value="" autofocus>
        </form>
      <a href="action/console" target="console">v</a>&nbsp;<a href="action/time" target="time"><?php print date('H:i'); ?></a>
    </div>

    <span class="actions">
      <iframe name="cd" class="window cd" src="action/cd"></iframe>
      <iframe name="user" class="window user" src="action/user"></iframe>
      <div class="content">
        <iframe name="console" class="window console" src="action/console"></iframe>
        <iframe name="time" class="window time" src="action/time"></iframe>
        <iframe name="42" class="window 42" src="action/42"></iframe>
      </div>
    </span>
    <div class="forty-two">
      <a href="action/42" target="42">42</a>
    </div>

  </body>
</html>
