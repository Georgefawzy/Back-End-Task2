

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>

      <?php
            
      //:::::::Task Two :::::::

      // Question One
      
      $freq = 5;
      
      for ($i = 1; $i <= $freq; $i++){
        echo "$i<br/>";
      }
      echo "<hr/>";

  //================================================================
      // Question Two 
      
      $num = 10;
      
      for ($i = 1; $i <= $num; $i++) {
        if ($i % 2 == 0) {
              echo "$i<br/>";
          }
      }
      echo "<hr/>";

  //================================================================
      
      // Question Three (Task Two)
      
      $first = 5;
      $second = [1,8,5,7,5];
      
      $maxV= max($first,...$second);
      echo "The maximum number is: $maxV";
      echo "<hr/>";
      
      // other answer
      
      $maxValue = $first;
      foreach($second as $value){
        if($value > $maxValue){
          $maxValue = $value;
        }
      }
      echo "The maximum number is: $maxValue";
      echo "<hr/>";

//================================================================
      // Question Four
      
      $prime = 5;
      
      for ($i = 1; $i <= $prime; $i++) {
        if ($i % 2 !== 0) {
          echo "$i YES the number is prime <br/>";
        } else{
          echo "$i NO <br/>";
          }
        }
      echo "<hr/>";
      
//================================================================
      // Question Five 

      function checkPalindrome($number) {
        $reversed = strrev((string)$number);
                if ((string)$number === $reversed) {
            echo "$number YES </br/>" ;
        } else {
            echo "$number NO";
        }
    }
    checkPalindrome(13131);
    checkPalindrome(1900);

    echo "<hr/>";


//================================================================
      // Question Six 
$numbers= 7;

for ($i = 1; $i <= $numbers; $i++) {
  if($numbers% $i == 0) {
    echo "$i <br/>";

  }
}

//================================================================
echo "<hr/>";

      // Question Seven 

      // $positive= 19;

      // for ($i = 1; $i <= $positive; $i++) {
      //   if($positive% 2 == 0) {
      //     echo "$positive <br/>";
      
      //   }
      // }




//================================================================
echo "<hr/>";

      // Question Eight 

    $No_star = 4;

    for ($i = 1; $i <= $No_star; $i++) {
      echo str_repeat('*', $i);
            if ($i < $No_star) {
          echo "<br/> ";
      }
  }

      

            ?>







</body>

</html>