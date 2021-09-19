<!DOCTYPE html>
<html lang="ja">
  
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- 問題① -->
  <div>
    <table style="border-collapse: collapse">
      <?php
      for ($a = 1; $a < 10; $a++) {
        echo '<tr>';
        for ($b = 1; $b < 10; $b++) {
          echo '<td style="border:1px solid">' . $a * $b . '</td>';
        }
        echo '</tr>';
      }
      ?>
    </table>
  </div>
</body>

</html>