```php
<?php
function incrementArrayCopy(array $arr) {
  $newArray = [];
  foreach ($arr as $value) {
    $newArray[] = $value + 1;
  }
  return $newArray;
}

$numbers = [1, 2, 3];
$incrementedNumbers = incrementArrayCopy($numbers);
print_r($numbers); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 )
print_r($incrementedNumbers); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

$moreNumbers = [4, 5, 6];
$incrementedMoreNumbers = incrementArrayCopy($moreNumbers);
print_r($moreNumbers); // Output: Array ( [0] => 4 [1] => 5 [2] => 6 )
print_r($incrementedMoreNumbers); // Output: Array ( [0] => 5 [1] => 6 [2] => 7 )
?>
```