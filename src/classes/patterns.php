<?php
class Pattern{
    public $n = 25;
    public function __construct() {}

    public function getPyramidPattern() {
        for($i = 0; $i < $this->n; $i++){
            for($j = 1; $j <= $this->n; $j++){
                if($j+$i < $this->n){
                    echo "&nbsp;";
                }else{
                    echo "*";
                }
            }
            for($k = 1; $k <= $this->n; $k++){
                if($k == $i){
                    echo "*";
                }
            }
            echo "<br>";
        }

        return;
    }

    public function getSquarePattern() {
        
        for($i = 1; $i <= $this->n; $i++){
            for($j = 1; $j <= $this->n; $j++){
                if($i == 1 || $i == $this->n || $j == 1 || $j == $this->n){
                    echo "*";
                }else{
                    echo '&nbsp;&nbsp;';
                }
                
            }
            echo "<br>";
        }

        return;
    }

}
