<?php

// Variables.

//$name = "gokul";
//$age = 19;

//echo "My Name is $name and My age is $age";

//  Basic Data Types.
$string = " Hi this is gokul";
$number = 19;
$float_double = 2.9;
$isMale = True;

// Null is no value.
null;

// Working With strings.
$name = 'gokulapriyan';
//echo $name;

// string into lowercase
//echo  strtolower($name);

// string into uppercase
//echo  strtoupper($name);

// length of the string;
//echo  strlen($name);

// get the  characters of the string by using their indeces.
//echo $name[0];

// str replace
//echo str_replace('apriyan',"peace",$name);

// slice the string by using substr
//echo substr($name,0,2);


// Working With Numbers.

// Adding two numbers.
//echo 5+5;

// Multiplying the two numbers.
//echo 5.7 * 9;

// Modulus the two numbers.
//echo  10 % 3;

// Adding and multiplying the two numbers.

//echo (4 + 5) * 10;


// declaring variable for number.
// incrementing the number.
//$num = 10;
//$num++;
//echo $num;

// decrementing the number.
//$num = 10;
//$num++;
//echo $num;

//adding the number by variable.
$num = 10;
//$num = $num + 15;
//$num += 15;
//echo $num;


// Change the negative into positive number by Using abs().
//echo abs(-100);

// Exponent the number by using pow().
//echo pow(2,4);

// find the sq root for the number using sqrt().
//echo  sqrt(144);

// find the max number using max().
//echo max(4,5);


// find the max number using mim().
//echo min(4,5);

// round the number using round().
//echo  round(3.4);

// change the next whole number using ceil().
//echo ceil(3.4);

// change the previous whole number using floor().
//echo floor(3.8);
?>

<!--// Getting user input.-->
<!--<html>-->
<!--<body>-->
<!--<form action="basics.php" method="get">-->
<!--    Name: <input  type="text" name="username">-->
<!--    Age: <input  type="number" name="age">-->
<!--    <input type="submit"  >-->
<!--</form>-->
<!--<br>-->
<!--Your Name is --><?php //echo $_GET['username']; ?>
<!--<br>-->
<!--Your Age is --><?php //echo $_GET['age']; ?>
<!--</body>-->
<!--</html>-->


<!--// Building a Basic Calculator.-->
<!---->
<!--<html>-->
<!--<body>-->
<!--<form action="basics.php" method="get">-->
<!--    <input type="number"  name="num1">-->
<!--    <br>-->
<!--    <input type="number"  name="num2">-->
<!--    <select name="operator">-->
<!--        <option value="+">Add</option>-->
<!--        <option value="-">Sub</option>-->
<!--        <option value="*">Mul</option>-->
<!--        <option value="/">Div</option>-->
<!--        <option value="%">Modolus</option>-->
<!--        <option value="**">Pow</option>-->
<!--    </select>-->
<!--    <input type="Submit">-->
<!--</form>-->
<!--Answer: --><?php
// $operator = $_GET['operator'];
// switch ($operator){
//     case '+' : echo $_GET['num1'] + $_GET['num2'];
//     break;
//     case '-' : echo $_GET['num1'] - $_GET['num2'];
//     break;
//     case '*' : echo $_GET['num1'] * $_GET['num2'];
//     break;
//     case '/' : echo $_GET['num1'] / $_GET['num2'];
//     break;
//     case '%' : echo $_GET['num1'] % $_GET['num2'];
//     break;
//     case '**' : echo $_GET['num1'] ** $_GET['num2'];
// }
// ?>
<!--</body>-->
<!--</html>-->


<!--Building  Mad Libs Game-->
<!---->
<!--<html>-->
<!--<body>-->
<!--<form action="basics.php" method="get">-->
<!--    Color: <input type="text" name="color">-->
<!--    <br>-->
<!--    Plural Noun: <input type="text" name="pluralNoun">-->
<!--    <br>-->
<!--    things: <input type=text name="things">-->
<!--    <br>-->
<!--    <input type="submit">-->
<!--</form>-->
<!--<br><br>-->
<?php
//    $color = $_GET['color'];
//    $pluralNoun = $_GET['pluralNoun'];
//    $things = $_GET['things'];
//    echo "Roses are $color <br>";
//    echo "$pluralNoun are blue <br>";
//    echo "I Love $things  <br>";
//
//?>
<!---->
<!--</body>-->
<!--</html>-->


<!--URL Paramater-->
<!--<html>-->
<!--<body>-->
<!--<form action="basics.php" method="get">-->
<!--    <input type="text" name="name">-->
<!--    <input type="submit">-->
<!--</form>-->
<!--<br><br>-->
<!---->
<?php
//    echo $_GET['name'];
//?>
<!--</body>-->
<!--</html>-->


<!--GET VS POST-->

<!--When We use get method the data which was given by users is shown in URL this is insecure. Especially  password are more sensible so we use put method.-->

<!--<html>-->
<!--<body>-->
<!--<form action="basics.php" method="post">-->
<!--    <input type="password" name="password"> <br>-->
<!--    <input type="submit">-->
<!--</form>-->
<!--<br><br>-->
<!---->
<?php
//echo $_POST['password'];
//
//?>
<!--</body>-->
<!--</html>-->



<!--Arrays-->
<!---->
<!--<html>-->
<!--<meta charset="x-UTF-16LE-BOM">-->
<!--<body>-->
<?php
// $Cricket_players = array('Kohli','Pandya','Rohit');

// we can access the elements by using their  index.
// echo $Cricket_players[1];

 // we can reassign the elements by using their index.
// $Cricket_players[2] = "Rohit Sharma";
// echo $Cricket_players[2];

 // we can find the length of the array bu using the function count().

//echo count($Cricket_players);

//?>
<!--</body>-->
<!--</html>-->

<!--Using checkboxes-->
<!---->
<!--<html>-->
<!--<body>-->
<!--<form action="basics.php" method="post">-->
<!--    Dhoni<input type="checkbox" name="players[]" value="Dhoni"><br>-->
<!--    Rohit<input type="checkbox" name="players[]" value="Rohit"><br>-->
<!--    Pandya<input type="checkbox" name="players[]" value="Pandya"><br>-->
<!---->
<!--    <input type="submit">-->
<!--</form>-->
<!--<br><br>-->
<!---->
<?php
//$players = $_POST['players'];
////echo $players[0];
//var_dump($players);
//?>
<!--</body>-->
<!--</html>-->


<!--// Associative Arrays-->
<!--In Associative Arrays we can store series of key Values of Pair-->

<!--<html>-->
<!--<head>-->
<!--    <title>-->
<!--        Basics of PHP-->
<!--    </title>-->
<!--</head>-->
<!--<body>-->
<!--<form action="basics.php" method="post">-->
<!--    <input type="text" name="student">-->
<!--    <input type="submit">-->
<!--</form>-->
<!--</body>-->
<!--</html>-->

<?php
//$grades = array("gokul" => "A+", "Yuvaraj" => "B-", "DineshGokul"=> "C+");
//// Overwrite the values of key.
////$grades['DineshGokul'] = "F";
//// Printing the values using their Keys.
////echo $grades['DineshGokul'] ;
//// Printing the count of the Array.
////echo count($grades);
//
//echo $grades[$_POST['student']];
//?>
<!---->


<!--Functions-->
<!--<html>-->
<!--<head>-->
<!--    <title>-->
<!--        Basics of PHP-->
<!--    </title>-->
<!--</head>-->
<!--<body>-->
<!--<form action="basics.php" method="post">-->
<!--    --><?php
//function sayHi($name,$age){
//    echo "Hello $name, you are age is $age ";
//
//}
//sayHi("gokul",18)."\n";
//sayHi('yuvaraj',20)."\n";
//sayHi('dinesh',20)."\n";
//?>
<!--</form>-->
<!--</body>-->
<!--</html>-->


<!--Return Statements-->
<?php
//function cube($num){
//  return $num * $num *$num;
# Under the return key word that code didn't execute.
////  echo "hello";
//}
//echo cube(4);
////
////$cubeResult = cube(4);
////echo $cubeResult;
//?>


<!--If Statement-->
<!--<html>-->
<!--<head>-->
<!--</head>-->
<!--<body>-->
<?php
//$isMale = true;
//$isTall = false;
//// And must be two conditions will be true
//// and or conditions is either one condition will be true.
//if ($isMale && $isTall){
//    echo "Your Are a Tall Male";
//}
//// you can use the elseif for the additional conditions.
//elseif ($isMale && !$isTall){
//    echo "you are a short male";
//}
//else{
//    echo "Your Are Female";
//}
//?>
<!--</body>-->
<!--</html>-->



<!--If statements(con't)-->

<!--<html>-->
<!--<body>-->
<?php
//function getMax($num1,$num2){
//    if ($num1 > $num2){
//        return "$num1 is greater than $num2";
//    }
//    else{
//        return "$num2 is greater than $num1";
//    }
//}
//echo getMax(3,4);
//
//?>
<!--</body>-->
<!--</html>-->




<!--Building a Better Calculator-->
<!--<html>-->
<!--<head>-->
<!--    <title>Building a Better Calculator</title>-->
<!--</head>-->
<!--<body>-->
<!--<form action="basics.php" method="post">-->
<!--    First Num:<input type="number" name="num1"> <br>-->
<!--    OP: <input type="text" name="op"> <br>-->
<!--    Second Num:<input type="number" name="num2"> <br>-->
<!--    <input type="submit">-->
<!--</form>-->
<?php
//$num1 = $_POST['num1'];
//$num2 = $_POST['num2'];
//$op = $_POST['op'];
//
//
//if ($op == "+"){
//    echo  $num1 + $num2;
//}
//elseif ($op == "-"){
//    echo  $num1 - $num2;
//}
//elseif ($op == "*"){
//    echo  $num1 * $num2;
//}
//elseif ($op == "/"){
//    echo  $num1 / $num2;
//}
//else{
//    echo "Invalid Operator";
//}
//?>
<!--</body>-->
<!--</html>-->
<!---->

<!--Switch Statements-->
<!--<html>-->
<!--<head></head>-->
<!--<body>-->
<!--What was Your grade?-->
<!--<form action="basics.php" method="post">-->
<!--    <input type="text" name="grade">-->
<!--    <input type="submit">-->
<!--</form>-->
<?php
//$grade = $_POST['grade'];
//switch ($grade){
//    case "A":
//        echo "You did amazing";
//        break;
//    case "B":
//        echo "You did pretty Good";
//        break;
//    case "c":
//        echo "You did poorly";
//        break;
//    case "D":
//        echo "You did very bad";
//        break;
//    case "F":
//        echo "You Fail!";
//        break;
//    default:
//        echo "Invalid Grade";
//}
//?>
<!--</body>-->
<!--</html>-->



<!--Loops-->
<!---->
<!--<html>-->
<!--<body>-->
<?php
// while loops//
//$i =1;
//while ($i<=5){
//    echo $i."\n";
//    $i++;
//}

// do while//
//$i = 6;
//do{
//    echo $i."\n";
//    $i++;
//}
//while($i<=10);
//


//for loops//
//$luckyNumbers = array(9,8,4,34,56,78);
//
//for ($i = 0; $i<= count($luckyNumbers);$i++){
//    echo $luckyNumbers[$i]."\n";
//}
//?>
<!--</body>-->
<!--</html>-->

<?php
// comment is a fun; single line comment.

/*
 * Multi Line Comments
 * type your comments
 */
?>



<!--Including HTML-->

<!--What is Include?-->
<!-- The include statement basically allows us to include a another file inside of our php file.
 So I could set up like another php file or an HTML file and then i can use this include keyword in order to essentially just use all the code from that other file in my current file.-->

<!--Including Html Files-->
<!--<html>-->
<!--<head>-->
<!--</head>-->
<!--<body>-->
<?php
//include "header.html";
//echo "Hello, This is gokul ;)";
//include "footer.html";
//?>
<!--</body>-->
<!--</html>-->


<!--including Php Files-->
<!--<html>-->
<!--<head>-->
<!--    <meta charset="x-UTF-16LE-BOM">-->
<!--    <title></title>-->
<!--</head>-->
<!--<body>-->
<?php
////$title = "My First Blog";
////$author = "Gokul";
////$wordCount = 500;
////include "article-header.php";
////?>
<!---->
<?php
////include "usefultools.php";
////sayHi("gokul");
////echo $feetInMile;
////?>
<!--</body>-->
<!--</html>-->



<!--Classes and Objects-->

<!--What is class?-->
<!--Definition-->
<!--Class and object are basic building blocks in object-oriented programming languages.
 1) A class is written by a programmer in a defined structure to create an object (computer science) in an object oriented programming language.
 It defines a set of properties and methods that are common to all objects of one type.-->
<!-- 2) A class is essentially just a specification for a custom data type.
Using class we are able to create our own custom data.-->
<!--3) A class is basically just a blueprint it's specification for what a book is,in Book program written under the comments.-->

<!--<html>-->
<!--<head>-->
<!--<title>Classes and Objects</title>-->
<!--</head>-->
<!--<body>-->
<?php
//class Book {
//    public $title;
//    public $author;
//    public $pages;
//}
//$book1 = new Book(); // This is what we call an Object. So an object is an instance of a class.
//$book1->title = "Harry Potter";
//$book1->author = "JK Rowling";
//$book1->pages = 500;
//
////echo $book1->title;
//
//$book2 = new Book(); // This is what we call an Object. So an object is an instance of a class.
//$book2->title = "lord Of the Rings";
//$book2->author = "Tolkien";
//$book2->pages = 800;
//
//echo $book2->pages;
//?>
<!--</body>-->
<!--</html>-->


<!--Constructors-->

<!--Definition-->
<!--    A Constructor is basically just a special function that we can put inside of a class -->
<!--which is going to get called when we create an object of that class.-->


<!--<html>-->
<!--<head>-->
<!--    <title></title>-->
<!--</head>-->
<!--<body>-->
<?php
//class Book {
//    public $title;
//    public $author;
//    public $pages;
//
//    function __construct($aTitle,$aAuthor,$aPages)
//    {
//
//        $this->title = $aTitle;
//        $this->author = $aAuthor;
//        $this->pages = $aPages;
////        echo $name."\n";
////        echo "New Book Created"."\n";
//    }
//
//}
//$book1 = new Book("Harry Potter", "Jk Rowling",500); // This is what we call an Object. So an object is an instance of a class.
//echo $book1->title."\n".$book1->pages."\n".$book1->author."\n";
//$book2 = new Book("Lord if the Rings","Tolkein",800); // This is what we call an Object. So an object is an instance of a class.
//echo $book2->title."\n".$book2->pages."\n".$book2->author;
//?>
</body>
</html>



<!--Object Functions-->
<!--<html>-->
<!--<head>-->
<!--<body>-->
<?php
//class student{
//public $name;
//public $major;
//public $gpa;
//
//function __construct($name,$major,$gpa)
//{
//    $this->name = $name;
//    $this->major = $major;
//    $this->gpa = $gpa;
//}
//function hashonours(){
//    if ($this->gpa >= 3.5){
//        return "true";
//    }
//    else{
//        return "false";
//    }
//}
//}
//
//$student1 = new student("gokul","Business",4.5);
//$student2 = new student("akash","Diploma",3.4);
//echo $student2->hashonours();
//?>
<!--</body>-->
<!--</head>-->
<!--</html>-->




<!--Getters and setters-->
<!--<html>-->
<!--<head>-->
<!--<title>Getters and Setters</title>-->
<!--</head>-->
<!--<body>-->
<?php
//class Movie{
//    public $title;
//    private $rating;
//
//    function getRating(){
//        return $this->rating;
//    }
//    function setRating($rating){
//        if ($rating == "G" || $rating == "PG" || $rating == "R" ){
//        $this->rating = $rating;
//    }
//        else{
//            $this->rating = "NR"; // nr means not rated.
//        }
//}
//    function __construct($title,$rating)
//    {
//        $this->title = $title;
//        $this->rating = $rating;
//    }
//}
//$avengers = new Movie("Avengers","Dog");
//
////echo $avengers->rating; // it'll throw error because rating is private property.
//
//$avengers->setRating("Dog");
//echo $avengers->getRating();
//
//?>
<!--</body>-->
<!--</html>-->



<!--Inheritance-->

<!--Inheritance is basically where a class can inherit all of the functionality,
all the attributes from another class in php.-->


<html>
<head>
    <title>Inheritance</title>
</head>
<body>
<?php

class Chef{

    function makeChicken(){
        echo "The chef makes chicken"."\n";
    }
    function makeSalad(){
        echo "The Chef make Salad"."\n";
    }
    function makeSpecialDish(){
        echo "THe Chef makes bbq ribs"."\n";
    }
}

class italianChef extends Chef {

    function makePasta(){
        echo "The chef make pasta";
    }
    function makeSpecialDish()
    {
        echo "the chef make prawn";
    }
}

$chef= new Chef();
$chef->makeSpecialDish();


$italianChef = new italianChef();
$italianChef->makeSpecialDish();
?>
</body>
</html>
