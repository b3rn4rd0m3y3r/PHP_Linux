<?php
$db = new SQLite3('Banco.db');

$results = $db->query('SELECT * FROM Teste');
echo str_pad("Id", 4, ' ',STR_PAD_LEFT) . "|" . str_pad("          D e s c r i ç ã o", 42, ' ', STR_PAD_RIGHT) . "|" ."\n";
while ($row = $results->fetchArray()) {
    echo str_pad($row["Id"], 4, ' ',STR_PAD_LEFT) . "|" . str_pad($row["Descri"], 40, ' ', STR_PAD_RIGHT) . "|" ."\n";
}
?>
