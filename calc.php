<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

     <?php
       
       function calkk(int $a, int $b, string $operation ="all"){
           $operation = strtolower($operation);
           switch ($operation){
               case "add": 
                    $result = $a + $b;
                    echo "Add : $result <br>";
                break;
               case "sub": 
                    $result = $a- $b;
                    echo "sub : $result <br>";
                break;
                case "multi": 
                    $result = $a * $b;
                    echo "multi : $result <br>";
                break;
                case "divide": 
                    $result = $a / $b;
                    echo "divide : $result <br>";
                break;
                default: 
                       $result =$a + $b;
                       $result =$a - $b;
                       $result =$a * $b;
                       $result =$a / $b;
                echo "Add :$result <br>";
                echo "Sub :$result <br>";
                echo "Multiply :$result <br>";
                echo "divide :$result <br>";

           }
       } 
       echo calkk(24,45);
     
     
     
     ?>
    

</body>
</html>