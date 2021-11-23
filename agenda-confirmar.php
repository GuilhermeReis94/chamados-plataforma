<?php 
require_once 'dao/AgendaDAO.php';

$codigo = $_GET['codigo'];
$agendaDAO = new AgendaDAO($codigo);
$agendaDAO->confirmar();

header('Location: cadServ.php');
?>