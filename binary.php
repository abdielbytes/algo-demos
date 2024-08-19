<?php

//  0 1 0 1 1 0 1 1 1 0 1 1 1 1 
    class Binary 
    {


        public function binary($num)
        {
            $i = 0;
            $j = 0;
            $k = 2;

            $numsArr = array();

            while($i < $num) {
                if ($i == $j ){
                    $numsArr[] = 0;
                    $j = $j + $k;
                    $k += 1;
                } else {
                    $numsArr[] = 1;
                }
                $i += 1;
            }
            print_r($numsArr);
        }
    }
    $binary = new Binary();
    $binary->binary(10);
?>