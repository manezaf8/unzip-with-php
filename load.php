<?php

include "index.php";


$check = new Test("Maneza f8", 2000, true);
$check->checkTheFile(true);

echo "we all know that " . $check->getName() . " was born in " . $check->getDateOfBirth() . "\n";





 ?>
