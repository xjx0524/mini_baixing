<?php
require_once('DAO.php');
$dao = new DAO();
var_dump($dao->getCategory());
var_dump($dao->getList('nongchanpin'));
var_dump($dao->getItemFields('nongchanpin'));
var_dump($dao->getItem('nongchanpin', 1));
$data = array('标题'=> 'nongchangpin', '分类' => 'aaaaa', '价格' => '1234', 'QQ号' => '111111');
var_dump($dao->addItem('nongchanpin', $data));