<?php
class MainController
{
     public function actionIndex() {  
       require_once(ROOT . '/views/mainview.php');
       return true;
    }

    public function actionTeachers() {
        require_once (ROOT.'/model/Teachers.php');
        require_once(ROOT . '/views/teachersview.php');
        return true;
    }
    public function actionContacts() {
        require_once(ROOT . '/views/contactsview.php');
        return true;
    }
    public function actionChair() {
        require_once(ROOT . '/views/chairview.php');
        return true;
    }

}
