<?php
//                            First Exam
//            [Hamza Ibrahim Ahmad - PHP C49(Online) - Exam 1]
//=================================================================================
//
//Q1- Write a PHP script using a nested for loop that creates a chessboard
//Ans for q1:
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = 1>  
        <?php 
        for ($i=0; $i < 8; $i++) { 
            echo"<tr>";
            for ($j=0; $j < 8 ; $j++) { 
                echo"<td>";
                if (($i + $j)% 2) {
                    echo "<td style='background-color: #000000; width: 30px; height: 30px;'></td>";
                }else {
                    echo "<td style='background-color: #FFFFFFF; width: 30px; height: 30px;'></td>";
                }
            }
            echo"</tr>";
        }
        ?>
    </table>
    <hr>
</body>
</html>

<?php
//============================================================================================
//
//2- write a PHP program to print this shape (using nested loop)
//
//Ans for q2:
    //shape: 1
    //   *
    //  * *
    // * * *
    //* * * *
    // * * *
    //  * *
    //   * 
for ($line = 1; $line <= 5; $line++) {
    for ($space = 5 - $line; $space > 0; $space--) {
        echo "&nbsp;&nbsp;";
    }
    for ($star = 1; $star <= $line; $star++) {
        echo "* ";
    }
    echo "<br>";
}

for ($line = 4; $line >= 1; $line--) { 
    for ($space = 5 - $line; $space > 0; $space--) {
        echo "&nbsp;&nbsp;";
    }
    for ($star = 1; $star <= $line; $star++) {
        echo "* ";
    }
    echo "<br>";
}
echo "<b>Shape 1 Printed</b>";
echo "<br>";
echo "<br>";

//shape: 2
//   *
//   * *
//   * * *
//   * * * *
//   * * * * *
//   * * * * *
//   * * * *
//   * * *
//   * *
//   *
for ($shape2 = 1; $shape2 <= 5; $shape2++) {
    for ($star2 = 1; $star2 <= $shape2; $star2++) {
        echo "* ";
    }
    echo "<br>";
}
for ($shape2 = 4; $shape2 >= 1; $shape2--) {
    for ($star2 = 1; $star2 <= $shape2; $star2++) {
        echo "* ";
    }
    echo "<br>";
}
echo "<b>Shape 2 Printed</b>";
echo "<br>";
echo "<br>";

//shape: 3
//   *
//   * * *
//   * * * *
//   * * *
//   *
for ($shape3 = 1; $shape3 <= 3; $shape3++) { 
    for ($star3 = 1; $star3 <= (2 * $shape3 - 1); $star3++) { 
        echo "* ";
    }
    echo "<br>";
}
for ($shape3 = 2; $shape3 >= 1; $shape3--) { 
    for ($star3 = 1; $star3 <= (2 * $shape3 - 1); $star3++) { 
        echo "* ";
    }
    echo "<br>";
}
echo "<b>Shape 3 Printed</b>";
echo "<br>";
echo "<br>";

//============================================================================================
//
//Q3- $array = [2,4,3,1,6,7,5,8,0,9] .
//Write a PHP program to sort this array to ASC and also sort it as DESC(without using built in functions)
//
//Ans for q3: 
    $array = [2,4,3,1,6,7,5,8,0,9];
    for ($i=0; $i < count($array) ; $i++) { 
        for ($j=$i+1; $j < count($array); $j++) { 
            if ($array[$i] > $array[$j]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    echo "Array sorted in ascending order: ";
    foreach ($array as $value) {
        echo $value . " ";
    }
    echo "<br>";
    echo "<br>";
    for ($i=0; $i < count($array) ; $i++) { 
        for ($j=$i+1; $j < count($array); $j++) { 
            if ($array[$i] < $array[$j]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    echo "Array sorted in descending order: ";
    foreach ($array as $value) {
        echo $value . " ";
    }   
    echo "<hr>";
    //============================================================================================
    //
    //Q4- write a program to calculate the avg of numbers array
    $array = [2,4,3,1,6,7,5,8,0,9];
    $sum = array_sum($array);
    $avg = $sum / count($array);
    echo "<br>";
    echo "The average of the numbers in the array is: " . $avg;
    echo "<hr>";
    //============================================================================================
    //
    //Q5- write a program to filter even numbers from an array, delete all even numbers
    //
    //Ans for q5:
    $array = [1,2,3,4,5,6,7,8,9,10];
    $filteredArray = array_filter($array, function($value){ return $value % 2 !== 0;});
    echo "Array after filtering even numbers: ";
    foreach ($filteredArray as $value) {
        echo $value . " ";
    }
    echo "<hr>";
    //============================================================================================
    //
    //Q6- write a program to find the max number of numbers group [10,30,20], using if statement
    //
    //Ans for q6:
    $numbers = [10,30,20];
    $max = $numbers[0];
    if ($numbers[1] > $max) {
        $max = $numbers[1];
    }
    if ($numbers[2] > $max) {
        $max = $numbers[2];
    }
    echo "The maximum number in the array is: " . $max;
    echo "<hr>";
    //===========================================================================================
    //
    //     Q7-Write a PHP script to increment date by one month
    // Sample date : 2012-12-21
    // Expected Output : 2013-01-21.
    //
    //Ans for q7:
    $date = "2012-12-21";
    $newDate = date("Y-m-d", strtotime("+1 month", strtotime($date)));
    echo "Original date: " . $date . "<br>";
    echo "Date after incrementing by one month: " . $newDate;
    echo "<hr>";
    //===========================================================================================
    //
    //Q8- Write a PHP script to get the number of the month before the current month.
    //
    //Ans for q8:
    $currentMonth = date("m");
    $previousMonth = $currentMonth - 1;
    if ($previousMonth == 0) {
        $previousMonth = 12;
    }
    echo "The number of the month before the current month is: " . $previousMonth;
    echo "<hr>";
    //===========================================================================================
    //
    //Q9-Write a PHP script that checks if a string contains another string.(using regularexpression).
    //
    //Ans for q9:
    $string = "Hello, from exam 1, World!";
    $substring = "exam 1";
    if (preg_match("/ $substring/", $string)) {
        echo "The string contains the substring: " . $substring;
    } else {
        echo "The string does not contain the specified substring.";
    }
    echo "<hr>";
    //===========================================================================================
    //
    //Q10- Write a function to check whether a number is prime or not.
    // Note: A prime number (or a prime) is a natural number greater than 1 that has no
    // positive divisors other than 1 and itself.
    //
    //Ans for q10:
    function isPrime($number) {
        if ($number <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }
    $number = 27;
    if (isPrime($number)) {
        echo $number . " is a prime number.";
    } else {
        echo $number . " is not a prime number.";
    }
    echo "<hr>";
    //===========================================================================================
    //
    //Q11- Use a cookie to change the default website background color. choose the
    //new color from a dropdown menu of colors.
    //
    //Ans for q11:
        ?>

       <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $backgroundColor = $_POST['color'] ?? '#ffffff';
    setcookie('bgcolor', $backgroundColor, time() + (60 * 60 * 24), "/");
    
    $_COOKIE['bgcolor'] = $backgroundColor; 
} else {
    $backgroundColor = $_COOKIE['bgcolor'] ?? '#ffffff';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Background Color</title>
    <style>
        body {
            background-color: <?= $backgroundColor ?>;
        }
    </style>
</head>
<body>

    <form method="post">
        <label for="color">Choose a background color:</label>
        <input type="color" name="color" id="color" value="<?= $backgroundColor ?>">
        <input type="submit" name="submit" value="Change Color">
    </form>

</body>
</html>
<?php
//===========================================================================================
//                            End of Exam 1
// by [Hamza Ibrahim Ahmad - PHP C49(Online) - Exam 1]
