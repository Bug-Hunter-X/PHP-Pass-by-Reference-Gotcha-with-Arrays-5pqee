```php
<?php
function incrementArray(&$arr) {
  foreach ($arr as &$value) {
    $value++;
  }
}

$numbers = [1, 2, 3];
incrementArray($numbers);
print_r($numbers); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

$moreNumbers = [4, 5, 6];
incrementArray($moreNumbers);
print_r($moreNumbers); // Output: Array ( [0] => 5 [1] => 6 [2] => 7 )
?>
```