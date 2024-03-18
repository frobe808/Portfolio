<?php 

class Controller {

    public static function dispatch($page) {
        include_once('models/'.$page.'.php'); // include de juiste file voor onze mmodel
        $model_name = "model_".$page;         // bouw de class name op die we nodig gaan hebben
        $model = new $model_name();           // maak een object van onze model class
        return $model->getData();             // geef de data terug via de getData method van het model
    }

}