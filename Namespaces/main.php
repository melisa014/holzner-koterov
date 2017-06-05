<?php
namespace test\namespaces;

include 'classOne.php';
include 'classTwo.php';
include 'rootSpace.php';

// далее две инструкции об одном и том же (импрорт в обоих случая будет осуществлен от корня):
//use classOneNamespace  as rel;
//use \classOneNamespace as abs;


$a = new \classOneNamespace\One(); // использует  класс  \classOneNamespace\One
$b = new classOneNamespace\One(); // использует  класс  test\namespaces\classOneNamespace\One
$a = new \MyRootClass(); // использует  класс  MyRootClass (из корневого пространства)
