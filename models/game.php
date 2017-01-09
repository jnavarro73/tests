<?php


//TODO maybe static some
/**
 * This is 5 figures scissors-paper-rock game
 * every figure wins and lost against two other figures
 * @author jjj
 * 
● Scissors cuts Paper 
● Paper covers Rock  
● Rock crushes Lizard 
● Lizard poisons Spock  
● Spock smashes Scissors 
● Scissors decapitates Lizard 
● Lizard eats Paper 
● Paper disproves Spock 
● Spock vaporizes Rock 
● Rock crushes Scissors 

 */
class Game {
   
    private  $aFigures = ["scissors","paper","rock","lizard","spock"];
    // Array by position shows us my $aFigures index wins to..(scissors(0) wins
    // to 1 and 3 paper and lizard
    private  $aFiguresWinsTo      = array(array("1","3"),array("2","4"),
                                          array("3","0"),array("4","1")
                                        ,array("0","2"));
    protected $idPcFigure;
   
    /**
     * Get and id rando for pc
     * @return type
     */
    public function getPCRandomIdFigure()
    {
        $iRandom = mt_rand(0, count($this->aFigures)-1);
        $this->idPcFigure =$iRandom;
        //return self::$sFigure[$iRandom];
        return $iRandom;
    }
    
    /**
     * Get name figure to create image
     * @return type
     */
    public function getPCRandomFigureImageName()
    {
        return $this->aFigure[$iRandom];
    }
    
    /**
     * 
     * @param int $userFigure
     * @param int $pcFigure
     * @return array  $state $message $nameFigure
     */
    public function whoisTheWinnerAction($userFigure)
    {
        //TODO error control $userFigure 0-4
        $pcFigure = $this->getPCRandomIdFigure($userFigure);
   
        if(in_array($pcFigure,$this->aFiguresWinsTo[$userFigure])){
            $state = 1;
            $message = "You win";
        }
        elseif(in_array($userFigure,$this->aFiguresWinsTo[$pcFigure])){
            $state = 2; 
             $message = "You lose";
            }
        else{
            $state = 0;
            $message = "Draw";
        }
        //Error controlif
        //$key_figure= array_column
        return array("state"=>$state,"message"=>$message,"pcFigureName"=>$this->aFigures[$pcFigure]);
    }
}