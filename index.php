<?php  
    include_once 'config.inc'; 
    include_once DOCUMENT_ROOT.'/controllers/GameController.php';
    include_once DOCUMENT_ROOT.'/models/game.php';
    include_once DOCUMENT_ROOT.'/helpers/utils.php';
    
        
    $requestUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $requestString = substr($requestUrl, strlen(BASE_URL));
    $urlParams = explode('/', $requestString);
    
    $controllerName = '';
    $actionName = ''; 
    
    $controllerName = ucfirst(array_shift($urlParams));
    $actionName     = strtolower(array_shift($urlParams));
    
     // rest of params we get them as  /key1/value1/key2/value2
    $params = array();
    for($i=0;$i<count($urlParams);$i++) {
            $params[$urlParams[$i++]] = $urlParams[$i];
    }
    $c_params = array_merge($params,$_POST,$_GET);
    
    //Define final controller and action
    if( empty($controllerName)){
        if(array_key_exists('controllerName',$c_params)){
            if (empty($c_params['controllerName'])) {
                $controllerName = "GameController";
            }else {
                $controllerName = ucfirst($c_params['controllerName']).'Controller';
            }
        }else{
            $controllerName = "GameController";
        }
    
    }else{
        $controllerName = $controllerName."Controller";
    }
    
    if( empty($actionName)){
        if(array_key_exists('actionName',$c_params)){
            if (empty($c_params['actionName'])) {
                $actionName = "initAction";
            }else {
                $actionName = ucfirst($c_params['actionName']).'Action';
            }
        }else{
            $actionName = "initAction";
        }
    
    }else{
        $actionName = $actionName."Action";
    }

    // Call the action - DISPATCH

    $controller = new $controllerName;
    $controller->$actionName($c_params);
    


    

