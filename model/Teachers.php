<?php
class Teachers
{
    public static function getTeachersList()
    {
        $db = Db::getConnection();
        $queryString="SELECT * FROM teacher  Order by foto DESC LIMIT 16";
        $result=$db->prepare($queryString);
        $result->execute();
        $teachersList=$result->fetchAll(PDO::FETCH_OBJ);
        return $teachersList;
    }
    public static function getTeacherInfo($parametr)
    {
        $db = Db::getConnection();
        $queryString="SELECT * FROM teacher WHERE number_teacher=:number";
        $result=$db->prepare($queryString);
        $result->execute(array(':number'=>$parametr));
        $teacherInfo=$result->fetchAll(PDO::FETCH_OBJ);
        return $teacherInfo;
    }
}