<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php

        if (isset($_POST["submit"])) {
            $lastname = $_POST["lname"];
            $firstname = $_POST["fname"];
            $score = 5;
            $correctAnswer = 0;

            if(isset($_POST["ans_one"])) {
                $selectedAns = $_POST["ans_one"];
                $correctAns = "C";

                if ($selectedAns === $correctAns) {
                    $correctAnswer += 1;
                }
            }

            


            echo "Hello, " . $firstname . " " . $lastname . "."."<br>";
            echo "Your score is: " . "($correctAnswer/$score)";

        }

        ?>
</body>
</html>