<?php
header("Content-Type: text/plain");

$words = array();
if (($handle = fopen("taxonomy.txt", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, "\t")) !== FALSE) {
      $explode = array();
      $explode += explode(' ',$data[6]);     
      $explode += explode(' ',$data[7]);
      $explode += explode(' ',$data[8]);
      foreach($explode as $word) {
        if (!in_array(strtolower($word), $words)) {
          $words[] = strtolower($word);
        }
      }
    }
    fclose($handle);
}

if (($handle = fopen("brands.txt", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, "\t")) !== FALSE) {
      $explode = array();
      $explode += explode(' ',$data[3]);    
      foreach($explode as $word) {
        if (!in_array(strtolower($word), $words)) {
          $words[] = strtolower($word);
        }
      }
    }
    fclose($handle);
}

$words = array_diff($words, array("-", "--", "&", "category", "name", "/"));

//echo '<pre>';
//print_r($words);
//echo '</pre>';

echo 'array(';
foreach ($words as $word) {
  echo "\t" . '"' . $word . '", ' . "\n";
}
echo "\t" . '"joecode"' . "\n";
echo ')';

?>