<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>action/cd</title>
    <style>
    body {
      background-color: #282c34;
      color: #aaa;
    }
    </style>
  </head>
  <body>

<?php
$json = '[{"id":3,"children":[{"id":4,"children":[{"id":5}]}]},{"id":6},{"id":2},{"id":4}]';

function createOLList($group) {
    $output = (is_array($group)) ? "<ol>" : "";
    foreach($group as $attr => $item) {
        if(is_array($item) || is_object($item)) {
            $output .= createOLList($item);
        } else {
            if($attr == "id") {
                $output .= "<li>$item</li>";
            }
        }
    }
    $output .= (is_array($group)) ? "</ol>" : "";
    return $output;
}

print(createOLList(json_decode($json)));

 ?>



    <ul>
     <li>First</li>
     <li>Second
     <ul style="nested: active;list-style-type: lower-alpha; padding-bottom: 0;">
      <li style="margin-left:2em">Sub of Second</li>
      <li style="margin-left:2em; padding-bottom: 0;">Another Sub</li>
    </ul>
     </li>
     <li>Third</li>
     <li>Fourth </li>
   </ul>
  </body>
</html>
