<?php 
 define('__HOST', 'localhost');  
 define('__DBNAME', 'viagem_certa');  
 define('__CHARSET', 'utf8');  
 define('__USER', 'root');  
 define('__PASSWORD', '');
 
 try {  
   $opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8');  
   $pdo = new PDO("mysql:host=" . __HOST . "; dbname=" . __DBNAME . "; charset=" . __CHARSET . ";", __USER, __PASSWORD, $opcoes);  
   /*$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/
   /*echo "Conectou";*/
 } catch (PDOException $e) {  
   echo "Erro: " . $e->getMessage();  
 }  
