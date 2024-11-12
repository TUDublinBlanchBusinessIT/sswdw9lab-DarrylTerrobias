<?php
class Team
{
    private $name="";
    private $totalGoals=0;
    private $totalGames=0;
    Private $totalPoints=0;

    
    // This is the FUNCTION 
    public function __construct($parm1)
    {
        $this->name = $parm1;
    }
    // This is the FUNCTION 
    public function finalScore($hts, $ats)
    {
        // This is the ATTRIBUTES
        $this->totalGames += 1;
        
        if ($hts > $ats) {
            $this->totalPoints += 3;
        }
   
        elseif ($hts < $ats) {
            $this->totalPoints += 0;

        }
        else {
            $this->totalPoints += 1;
        }
        $this->totalGoals += $hts;
    }

    public function getPoints()
    {
        return $this->totalPoints;
    }

    public function getGoalAverage()
    {
        return $this->totalGoals/$this->totalGames;

    public function finalScore()
    }
}
?>