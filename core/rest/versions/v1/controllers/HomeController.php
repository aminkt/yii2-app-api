<?php
namespace rest\versions\v1\controllers;

use yii\rest\Controller;

/**
 * Class HomeController
 * @package rest\versions\v1\controllers
 */
class HomeController extends Controller
{
    /**
     * This method implemented to demonstrate the receipt of the token.
     * Do not use it on production systems.
     *
     * @return array
     */
    public function actionIndex()
    {
        return ['Welcome to Rest API'];
    }
}