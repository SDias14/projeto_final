<?php
if(isset($_POST["btnPrimeiroAcesso"]))
{
include_once 'view/primeiroAcesso.php';
}
else
{
include_once 'view/login.php';
}

?>