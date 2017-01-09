<?php

    include_once 'config.inc'; 
    include_once DOCUMENT_ROOT.'/controllers/GameController.php';
    include_once DOCUMENT_ROOT.'/models/game.php';
    
    $requestUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $requestString = substr($requestUrl, strlen(BASE_URL));
    $urlParams = explode('/', $requestString);

    $controllerName = ucfirst(array_shift($urlParams));
    $actionName     = strtolower(array_shift($urlParams));

    // rest of params we get them as  /key1/value1/key2/value2
        $params = array();
        for($i=0;$i<count($urlParams);$i++) {
                $params[$urlParams[$i++]] = $urlParams[$i];
        }

        // Merge params with $_POST y $_GET
        // TODO satinize index/ instead  /
        $c_params = array_merge($params, $_POST, $_GET);

    //Default values
    if(empty($controllerName)) $controllerName = "GameController";
    else $controllerName .= 'Controller';
    if(empty($c_params['actionName'])) $actionName = "initAction";
    else $actionName .='Action';

    // Here you should probably gather the rest as params

    // Call the action - DISPATCH
    
      $controller = new $controllerName;
      $controller->$actionName($c_params);
    

