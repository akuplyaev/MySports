<?php

class TeachersController {
    public function actionIndex() {
        require_once(ROOT . '/views/teachersview.php');
        return true;
    }
}

