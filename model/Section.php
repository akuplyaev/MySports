<?php
class Section
{
    public static function getSectionList()
    {
        // Соединение с БД

        $db = Db::getConnection();

        // Запрос к БД
        $result = $db->query('SELECT sec_name FROM section');

        // Получение и возврат результатов


        $categoryList=$result->fetchAll(PDO::FETCH_ASSOC);
        return $categoryList;
    }
}