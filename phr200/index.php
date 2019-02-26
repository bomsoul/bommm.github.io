<?php
    
    require 'vendor/autoload.php';
    
    use \Controller\HomeController;
    use \Model\Country;
    
    $country = new Country();
    $country_data = $country->findAll();
    var_dump($country_data);