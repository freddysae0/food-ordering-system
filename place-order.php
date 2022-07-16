

<?php

include 'includes/connect.php';



$query1  = mysqli_query($con, 'INSERT INTO tabla (campo1, campo2, campo3) VALUES (valor1, valor2, valor3);');

while ($row = mysqli_fetch_array($query1)) {
}
