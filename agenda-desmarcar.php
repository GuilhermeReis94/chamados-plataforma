<?php 
require_once 'dao/AgendaDAO.php';

$codigo = $_GET['codigo'];
$agendaDAO = new AgendaDAO($codigo);
$agendaDAO->desmarcar();

header('Location: cadServ.php');
?>