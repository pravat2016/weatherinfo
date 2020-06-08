<?php

//CODE FOR STRING REVERSE.

Class ReverseClass {
    public static function reverse($string){
        $reverse = is_integer($string) ? 0 : '';
        $i = 0;
       
        if(is_integer($string)){
            while ($string != 0)
            {
                $reverse = $reverse * 10 + $string % 10;
                $string = (int)($string / 10); 
            }
        }
        else{
            while(!empty($string[$i])){ 
                $reverse = $string[$i].$reverse; 
                $i++;
            }
        }
        return $reverse;
    }
}

//echo ReverseClass::reverse('Prabhat');
//CODE FOR PALINDROM.
Class PalindromeClass extends ReverseClass{
    public static function palindrome($string){   
        $new = ReverseClass::reverse($string);   
        if ($new == $string){   
            return "Palindrome";  
        } 
        else{ 
            return "Not a Palindrome";   
        } 
    }        
}

//echo PalindromeClass::palindrome('nitin');


?>