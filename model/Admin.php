<?php
class Admin
{
 static function checkAdmin($login,$password){
     $db=Db::getConnection();
     $queryString='Select * from admin WHERE login=:login ';
     $result=$db->prepare($queryString);
     $result->execute(array(':login'=>$login));
     $row=$result->fetch(PDO::FETCH_OBJ);
     if ($row==false){
         return false;
     }
     elseif($row->password!=$password){
         return false;
     }
     else {
         return true;
     }
 }
}