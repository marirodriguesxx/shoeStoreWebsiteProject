<?php
echo "VOCÊ CONSEGUE SUA DESGRAMADA\n";
// Connecting, selecting database
$conn = pg_connect("host=localhost port=5432 user=postgres password=228456 dbname=postgres");
if ( !$conn){
    die("PostgreSQL connection failed");
}
echo "PostgreSQL connection sucessfully";

$result = pg_query($conn, "SELECT * FROM client");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}

echo "<table>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";
?>



