<?php
class Pattern{

    public function __construct() {}

    public function getPyramidPattern() {
        $n = 5;
        for($i = 0; $i < $n; $i++){
            for($j = 1; $j <= $n; $j++){
                if($j+$i < $n){
                    echo "&nbsp;";
                }else{
                    echo "*";
                }
            }
            for($k = 1; $k <= $n; $k++){
                if($k == $i){
                    echo "*";
                }
            }
            echo "<br>";
        }

        return;
    }

}
