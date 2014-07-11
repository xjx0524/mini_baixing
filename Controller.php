<?php
require_once('DAO.php');
$dao = new DAO();
$args = $dao->getItemFields($_POST['englishname']);
$data = array();
foreach ($args as $k) {
    $data[$k] = $_POST[$k];
}
$dao->addItem($_POST['englishname'], $data);
$tmp = $_POST['englishname'];
header("Location: fenye.php?englishname=$tmp");