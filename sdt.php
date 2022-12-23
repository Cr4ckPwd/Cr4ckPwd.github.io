<form method="post">
  <label for="number_count">Enter the number of phone numbers you want to generate:</label><br>
  <input type="number" id="number_count" name="number_count"><br>
  <input type="submit" value="Generate">
</form>
<?php

if (isset($_POST['number_count'])) {
  $numberCount = $_POST['number_count'];

  $prefixes = array(
    '086', '096', '097', '098', '039', '038', '037', '036', '035', '034', '033', '032',
    '091', '094', '088', '083', '084', '085', '081', '082', '070', '079', '077', '076',
    '078', '089', '090', '093', '092', '052', '056', '058', '099', '059'
  );

  $numbers = array();

  for ($i = 0; $i < $numberCount; $i++) {
    $prefix = $prefixes[array_rand($prefixes)];
    $number = $prefix . mt_rand(1000000, 9999999);
    $numbers[] = $number;
  }

  echo '<textarea rows="10" cols="50">';
  echo implode(PHP_EOL, $numbers);
  echo '</textarea>';
}

?>
