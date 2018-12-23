<?php 

try {
    $db = new PDO("mysql:host=localhost;dbname=test","root","usbw");
if ($db) {
    echo " connected";
}
  
}

catch (PDOException $e){
    echo $e->getMessage();
      }
$rs = $db->query('SELECT * FROM user LIMIT 0');
for ($i = 0; $i < $rs->columnCount(); $i++) {
    $col = $rs->getColumnMeta($i);
    $columns[] = $col['name'];
    
}
print_r($columns);
$column_length = count($columns);?>

<table class="table table-light" border="1">
    <thead class="thead-light">
        
        <tr>
        <?php
        for ($x = 0; $x < $column_length; $x++) {
    echo "<th>$columns[$x]</th>";
} ?>

            
        </tr>
    </thead>
    <tbody>

    </tbody>

</table>


