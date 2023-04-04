<?php
if( isset($argv[1]) ){
    $d = $argv[1];
    } else {
    $d = "*";
    }
$scan = glob($d, GLOB_BRACE);
foreach($scan as $file) {
   if (!is_dir("./$file")) {
      echo $file.'
';
   }
}
?>
