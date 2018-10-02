<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
  //  var_dump ($_POST['Question1']);

  $answer1 = $_POST['Question1'];
  $answer2 = $_POST['Question2'];
  $answer3 = $_POST['Question3'];
  $answer4 = $_POST['Question4'];
  $answer5 = $_POST['Question5'];
  $answer6 = $_POST['Question6'];
  $answer7 = $_POST['Question7'];
  $answer8 = $_POST['Question8'];
  $answer9 = $_POST['Question9'];
  $answer10 = $_POST['Question10'];
  $answer11 = $_POST['Question11'];
  $answer12 = $_POST['Question12'];
  $answer13 = $_POST['Question13'];
  $answer14 = $_POST['Question14'];
  $answer15 = $_POST['Question15'];
  $answer16 = $_POST['Question16'];
  $answer17 = $_POST['Question17'];
  $answer18 = $_POST['Question18'];
  $answer19 = $_POST['Question19'];
  $answer20 = $_POST['Question20'];
  
  




  $score = 0;





  if ($answer1 == "CorrectAnswer1"){
    $score++;
  } 
  
  if ($answer2 == "CorrectAnswer2"){
    $score++;
  }

  if ($answer3 == "CorrectAnswer3"){
    $score++;
  }

  if ($answer4 == "CorrectAnswer4"){
    $score++;
  }

  if ($answer5 == "CorrectAnswer5"){
    $score++;
  }

  if ($answer6 == "CorrectAnswer6"){
    $score++;
  }

  if ($answer7 == "CorrectAnswer7"){
    $score++;
  }

  if ($answer8 == "CorrectAnswer8"){
    $score++;
  }

  if ($answer9 == "CorrectAnswer9"){
    $score++;
  }

  if ($answer10 == "CorrectAnswer10"){
    $score++;
  }

  if ($answer11 == "CorrectAnswer11"){
    $score++;
  }

  if ($answer12 == "CorrectAnswer12"){
    $score++;
  }

  if ($answer13 == "CorrectAnswer13"){
    $score++;
  }

  if ($answer14 == "CorrectAnswer14"){
    $score++;
  }

  if ($answer15 == "CorrectAnswer15"){
    $score++;
  }

  if ($answer16 == "CorrectAnswer16"){
    $score++;
  }

  if ($answer17 == "CorrectAnswer17"){
    $score++;
  }
  if ($answer18 == "CorrectAnswer18"){
    $score++;
  }

  if ($answer19 == "CorrectAnswer19"){
    $score++;
  }

  if ($answer20 == "CorrectAnswer20"){
    $score++;
  }


    echo "Congratulations, you got $score/20." ."<br><br>";

    if ($score >= 15) {
        echo "You did Very well";
        } elseif ($score >= 10 && $score < 15 ) {
            echo "You scored averagely";
        } elseif ($score < 10) {
           echo  "You scored below average, Try again"; 
        }
    
    
    
    
    
    ?>
</body>
</html>