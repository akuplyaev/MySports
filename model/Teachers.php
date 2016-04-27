<?php
class Teachers
{
    public static function getTeachersList()
    {
        // Соединение с БД

        $db = Db::getConnection();

        // Запрос к БД
        $result = $db->query('SELECT last_name,first_name,patronymic,description FROM teacher LIMIT 18');

        // Получение и возврат результатов


        $teachersList=$result->fetchAll(PDO::FETCH_ASSOC);
        return $teachersList;
    }
}