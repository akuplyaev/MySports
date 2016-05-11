<?php
require_once ROOT.'/model/Admin.php';
class AdminController{
    public function actionLogin()
    {
        // Обработка формы
        if (isset($_POST['Login'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $login = $_POST['Login'];
            $password = $_POST['Password'];
            if (Admin::checkAdmin($login,$password)){

                require_once ROOT.'/views/admin.php';
                return true;
            }
            die('Access denied');

        }

    }
}
