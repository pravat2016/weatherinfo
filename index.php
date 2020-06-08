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
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<form action="" method="POST">
  <label for="fname">Enter City Name:</label><br>
  <input type="text" id="city" name="city" value=""><br>
  <br>
  <input type="button" id="fetch" value="Get weather">
</form>

<div id="weatherInfo"></div>


<script type="text/javascript">
    $(document).ready(function(){
        $("#fetch").click(function(){
           let city= $("#city").val();
            $.ajax({
                type: 'POST',
                data: "city="+city,
                url: 'fetchWeather.php',
                success: function(res) {
                    $("#weatherInfo").html(res);
                    console.log(res);
                   
                }
            });
   });
});

</script>
</body>