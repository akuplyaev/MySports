<?php

class MainController {
     public function actionIndex() {  
       require_once(ROOT . '/views/mainview.php');
       return true;
    }

    public function actionTeachers() {
        require_once(ROOT . '/views/teachersview.php');
        return true;
    }
}
