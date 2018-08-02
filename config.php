<?
ini_set('default_charset', 'UTF-8');


$dbname="goumrah";
$dbuser="root";
$dbpass="123";
$dbserver="localhost";

 try{
  $pdo = new PDO("mysql:host=$dbserver;dbname=$dbname",$dbuser,$dbpass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $pdo->exec("set names utf8");

 }catch(PDOException $e) {

  echo $e->getMessage();
  exit;
 }


$temp_name="hackathon1";


if($adminHere != 1){
 include_once( "template/class.TemplatePower.inc.php" );
 //include_once('include/function.php');

};
?>