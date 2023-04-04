<?php
$scan = scandir('.');
foreach($scan as $file) {
   if (!is_dir("./$file")) {
      echo $file.'
    ';
   }
}
?>
