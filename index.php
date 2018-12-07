<?php 
echo "<h2>Curso Web Design Completo - Udemy</h2>";

foreach (scandir(__DIR__) as $key => $value) {
echo "<a href=".$value.">".$value."</a><br>";
}


 ?>