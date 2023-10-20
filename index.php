<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        h2 {
            font-size: 40px;
            font-weight: 600;
            text-align: center;
            color: #fff;
        }

        .name {
            position: absolute;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            border: 2px solid white;
            height: 130px;
            width: 50%;
            padding: 22px;
        }

        .name input {
            outline-color: #154a7c;
            border: none;
            font-size: 18px;
            height: 30px;
            width: 300px;
        }

        .questions {
            position: absolute;
            top: 85%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            border: 2px solid white;
            height: 950px;
            width: 50%;
            padding: 22px;
        }

        .questions h3 {
            font-weight: 500;
        }

        .questions .button {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }

        .button input {
            border: none;
            background: linear-gradient(90deg, #1CB5E0 0%, #000851 100%);
            height: 30px;
            width: 300px;
            border-radius: 30px;
            color: #fff;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h2>Quiz App</h2>

   <form action="quiz.php" method="post">
        <div class="name">
            Last Name: <input type="text" name="lname"><br><br>
            First Name: <input type="text" name="fname"><br><br>
        </div>
        <div class="questions">
                <h3>1. Which of the following is correct about PHP constants?</h3>
                <br>
                <input type="radio" id="a" name="ans_one" value="A">
                <label for="a">A) To define a constant you have to use define() function.</label><br>
                <input type="radio" id="b" name="ans_one" value="B">
                <label for="b">B) To retrieve the value of a constant, you have to simply specicy its name.</label><br>
                <input type="radio" id="c" name="ans_one" value="C">
                <label for="c">C) Both of the above</label>
                <br>
                <input type="radio" id="d" name="ans_one" value="D">
                <label for="d">D) None of the above.</label>
                <br><br>
                <h3>2. Firebase is a... </h3>
                <br>
                <input type="radio" id="a2" name="ans_two" value="A">
                <label for="a2">A) Server </label>
                <br>
                <input type="radio" id="b2" name="ans_two" value="B">
                <label for="b2">B) Database </label>
                <br>
                <input type="radio" id="c2" name="ans_two" value="C">
                <label for="c2">C) Programming Language  </label>
                <br>
                <input type="radio" id="d2" name="ans_two" value="D">
                <label for="d2">D) Digital Marketing </label>
                <br><br>
                <h3>3. PHP is a....</h3>
                <br>
                <input type="radio" id="a3" name="ans_three" value="A">
                <label for="a3">A) Server Side Script </label>
                <br>
                <input type="radio" id="b3" name="ans_three" value="B">
                <label for="b3">B) Programming Langauge </label>
                <br>
                <input type="radio" id="c3" name="ans_three" value="C">
                <label for="c3">C) Markup Language </label>
                <br>
                <input type="radio" id="d3" name="ans_three" value="D">
                <label for="d3">D) None of the above </label>
                <br><br>
                <h3>4. What Does PHP stands for? </h3>
                <br>
                <input type="radio" id="a4" name="ans_four" value="A">
                <label for="a4">A) Private Home Page</label>
                <br>
                <input type="radio" id="b4" name="ans_four" value="B">
                <label for="b4">B) Personal HyperText Preprocessor </label>
                <br>
                <input type="radio" id="c4" name="ans_four" value="C">
                <label for="c4">C) PHP: HyperText Preprocessor</label>
                <br>
                <input type="radio" id="d4" name="ans_four" value="D">
                <label for="d4">D) None of the above </label>
                <br><br>
                <h3>5. How will you concatenate two string? </h3>
                <br>
                <input type="radio" id="a5" name="ans_five" value="A">
                <label for="a5">A) Using . operator </label>
                <br>
                <input type="radio" id="b5" name="ans_five" value="B">
                <label for="b5">B) Using + operator </label>
                <br>
                <input type="radio" id="c5" name="ans_five" value="C">
                <label for="c5">C) Using add() function  </label>
                <br>
                <input type="radio" id="d5" name="ans_five" value="D">
                <label for="d5">D) Using append() function </label>

                <div class="button">
                    <input type="submit" name="submit" value="Submit Quiz"> 
                </div>
        </div>
   </form>
</body>
</html>
