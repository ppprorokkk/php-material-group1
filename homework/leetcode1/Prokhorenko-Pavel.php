<?php 

function isPalindrome($x): bool {     
      
    $sx = strval($x);
    $sxLenth = strlen($sx);
    $f = 0;  

    for ($i = $sxLenth; $i > 0 ; $i--) { 

        if($sx[$f] !== $sx[$i - 1]){
           
            return false;

        }
        $f++;
    } 

    return true;

}




 

