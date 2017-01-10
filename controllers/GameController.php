<?php
//TODO autoloader

include_once DOCUMENT_ROOT."/models/game.php";

//namespace Games;

class GameController 
{
    public  $userFigure; //set public we need set it outside the class
                           //From the form
    protected $oGame; //MOdel object with logic
    protected $bRender = true;
    
    public function __construct() {
        $this->oGame = new Game;
    }
    public function initAction(){
        $this->renderAction();
    }

    /**
     * Return figure´s id user chosen
     * @param type $params
     * @return int idFigure
     */ 
    protected function getUserFigureAction($params)
    {
        if(key_exists("figure", $params)){
          
            return $params['figure'];
        }
        else{
            //TODO ERROR
        }
    }

    /**
     * MEthod that calls the logic and gets a response with info to the view
     * @param type $params
     */
    
    public function whoistheWinnerAction($params){
        //control $request 
        $this->userFigure = $this->getUserFigureAction($params);
 
        $aMessage['datos']= $this->oGame->whoisTheWinnerAction($this->userFigure);
        //is an ajax method
        echo json_encode($aMessage);
        
    }
    
    public function renderAction(){
       ob_start();
       include_once DOCUMENT_ROOT.'/views/default.php';
       $content = ob_get_contents();
       ob_end_clean();
       if($this->bRender == true) echo $content;
    }
}