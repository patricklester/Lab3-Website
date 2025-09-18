<!DOCTYPE html>
<html>
<head>
  <title>Practice 4 - PHP Multiplication Table</title>
</head>
<body>
  <h1>Multiplication Table</h1>
  <form method="get">
    Enter a number: <input type="number" name="num" min="1">
    <input type="submit" value="Generate">
  </form>
  <br>
  <?php
    if (isset($_GET["num"])) {
      $num = intval($_GET["num"]);
      echo "<table border='1' cellpadding='5'>";
      echo "<tr><th>*</th>";
      for ($i = 1; $i <= $num; $i++) {
        echo "<th>$i</th>";
      }
      echo "</tr>";
      for ($i = 1; $i <= $num; $i++) {
        echo "<tr><th>$i</th>";
        for ($j = 1; $j <= $num; $j++) {
          echo "<td>" . ($i * $j) . "</td>";
        }
        echo "</tr>";
      }
      echo "</table>";
    }
  ?>
</body>
</html>
