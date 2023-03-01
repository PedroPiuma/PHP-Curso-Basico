<?php
/*  ************************************
*   HTTP - GET, POST
*   Variável Global:
*   $_GET é uma variável global que retorna um Array com os Query Parameters
*/
var_dump($_GET);
?>

<h1><?php echo $_GET['name']; ?></h1>
<h1><?php echo $_GET['lastname']; ?></h1>