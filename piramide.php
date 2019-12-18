<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>schaakbord</title>
<link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <table>
      <tbody>
          <?php
          $hb = 10;
          for ($i=1; $i <= $hb; $i++) {
          echo "<tr>";
          echo str_repeat( "<td class= 'black' ></td>" , $i);
          echo "</tr>";
          }
           ?>
      </tbody>
  </table>
  </body>
</html>
