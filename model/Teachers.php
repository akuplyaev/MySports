<?php
class Teachers
{
    public static function getTeachersListFirst()
    {
        $db = Db::getConnection();
        $queryString="SELECT * FROM teacher  Order by foto DESC LIMIT 8";
        $result=$db->prepare($queryString);
        $result->execute();
        $teachersList=$result->fetchAll(PDO::FETCH_OBJ);
        return $teachersList;
    }
    public static function getTeachersListSecond()
    {
        $db = Db::getConnection();
        $queryString="SELECT number_teacher FROM teacher  Order by foto DESC LIMIT 8";
        $res=$db->prepare($queryString);
        $res->execute();
        $test=$res->fetchAll(PDO::FETCH_ASSOC);
        foreach ($test as $tr){
            $v[]=$tr['number_teacher'];
        }
        $tr=implode($v,',' );
        $queryString="SELECT * FROM teacher WHERE number_teacher NOT in ($tr) Order by foto DESC LIMIT 8";
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