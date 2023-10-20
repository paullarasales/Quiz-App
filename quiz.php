<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;1,600&display=swap');

        ::-webkit-scrollbar {
            display: none;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Poppins, 'sans-serif';
            height: 100vh;
            background-color: #020024;
        }

        .result {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 60%;
            height: 200px;
            border: 2px solid white;
            color: #fff;
            text-align: center;
            font-size: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .result p {
            margin-top: 30px;
            font-size: 18px;
        }

        p a {
            text-decoration: none;
        }

        p a:active {
            color: blue;
        }


    </style>
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

            if (isset($_POST["ans_two"])) {
                $selectedAns = $_POST["ans_two"];
                $correctAns = "B";

                if ($selectedAns === $correctAns) {
                    $correctAnswer += 1;
                }
            }

            if (isset($_POST["ans_three"])) {
                $selectedAns = $_POST["ans_three"];
                $correctAns = "A";

                if ($selectedAns === $correctAns) {
                    $correctAnswer += 1;
                }
            }

            if (isset($_POST["ans_four"])) {
                $selectedAns = $_POST["ans_four"];
                $correctAns = "C";

                if ($selectedAns === $correctAns) {
                    $correctAnswer += 1;
                }
            }

            if (isset($_POST["ans_five"])) {
                $selectedAns = $_POST["ans_five"];
                $correctAns = "A";

                if ($selectedAns === $correctAns) {
                    $correctAnswer += 1;
                }
            }

        }
        ?>
        <div class="result">
            <?php
                 echo "Hello, " . $firstname . " " . $lastname . "." . "<br>";
                 echo "Your score is: " . "($correctAnswer/$score)";
            ?>
            <p>Ready for a second attempt?<a href="index.php">Go Back</a></p>
        </div>

</body>
</html>