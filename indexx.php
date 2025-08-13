<?php
// Syntax Varibles, and data type
// $name = "John";        // String
// $age = 25;             // Integer
// $price = 10.5;         // Float
// $isAdmin = true;       // Boolean

// echo "Name: $name, Age: $age";


// // Operators & Expressions
// $x = 10;
// $y = 3;
// echo $x + $y;  // 13
// echo $x - $y;  // 7
// echo $x * $y;  // 30
// echo $x / $y;  // 3.33
// echo $x % $y;  // 1


// //Display the value of a variable.
// // Comparision Operators
// var_dump($x == $y);   // false
// var_dump($x != $y);   // true
// var_dump($x > $y);    // true
// var_dump($x < $y);    // false


// Logical Operators
// $loggedIn = true;
// $isAdmin = false;

// if ($loggedIn && $isAdmin) {
//     echo "Welcome Admin!";
// } else {
//     echo "Access Denied";
// }


// Conditional Statements
// $score = 75;

// if ($score >= 90) {
//     echo "Grade: A";
// } elseif ($score >= 70) {
//     echo "Grade: B";
// } else {
//     echo "Grade: C or lower";
// }



// // else if 
// $score = 85;

// if ($score >= 90) {
//     echo "Grade: A";
// } elseif ($score >= 80) {
//     echo "Grade: B";  // This will execute
// } elseif ($score >= 70) {
//     echo "Grade: C";
// } else {
//     echo "Grade: D";
// }


// // SWITCH

// $day = "Monday";

// switch ($day) {
//     case "Monday":
//         echo "Start of week";
//         break;
//     case "Friday":
//         echo "Almost weekend!";
//         break;
//     default:
//         echo "Just another day";
// }


// //FOR LOOP
// for ($i = 1; $i <= 5; $i++) {
//     echo "Number: $i <br>";
// }



// // WHILE LOOP
// $count = 1;

// while ($count <= 50) {
//     echo "Count: $count <br>";
//     $count++;
// }


// //FOREACH  LOOP
// $fruits = ["Apple", "Banana", "Cherry"];

// foreach ($fruits as $fruit) {
//     echo "$fruit <br>";
// }


// // With keys
// $person = ["name" => "John", "age" => 30, "city" => "New York"];
// foreach ($person as $key => $value) {
//     echo "$key: $value <br>";
// }

// // Combining Everything
$users = [
    ["name" => "Alice", "age" => 20],
    ["name" => "Bob", "age" => 30],
    ["name" => "Charlie", "age" => 17],
];

foreach ($users as $user) {
    echo $user["name"] . ": ";

    if ($user["age"] >= 18) {
        echo "Adult<br>";
    } else {
        echo "Minor<br>";
    }
}


// // functioN Basic 
// function greet($name) {
//     return "Hello, $name!";
// }

// echo greet("Alice"); // Output: Hello, Alice!

// function multiply($x, $y){
//     return $x * $y;
// }

// echo multiply(10, 100);
// Function with Default Parameter

// function sayHello($name = "Guest") {
//     echo "Hello, $name!";
// }

// sayHello();       
// sayHello("Bob");  


// // Function with Return Value
// function addNumbers($a, $b) {
//     return $a + $b;
// }

// $result = addNumbers(5, 3);
// echo $result; // Output: 8

// //Function with Multiple Return Values (using array)
function calculate($a, $b) {
    $sum = $a + $b;
    $product = $a * $b;
    return [$sum, $product];
}
// print_r(calculate(5,9));
list($s, $p) = calculate(4, 5);
echo "Sum: $s, Product: $p"; // Output: Sum: 9, Product: 20


// // Variable Scope Example
// $globalVar = "I'm global";

// function testScope() {
//     $localVar = "I'm local";
//     global $globalVar; // Access global variable
//     echo $globalVar;  // Works
//     echo $localVar;   // Works
// }

// testScope();
// echo $globalVar;     // Works
// echo $localVar;      // Error - undefined


// //User Authentication Check
// function checkUser($username, $password) {
//     $valid_users = [
//         "admin" => "secret123",
//         "alice" => "password456"
//     ];
    
//     if (array_key_exists($valid_users, $valid_users)) {
//         if ($valid_users[$username] === $password) {
//             return "Login successful!";
//         } else {
//             return "Invalid password!";
//         }
//     } else {
//         return "User not found!";
//     }
// }

// echo checkUser("admin", "secret123"); // Login successful!
// echo checkUser("bob", "test");       // User not found!


// // Shopping Cart Calculation
function calculateTotal($items, $discount = 0) {
    $subtotal = 0;
    
    foreach ($items as $item) {
        $subtotal += $item['price'] * $item['quantity'];
    }
    
    $discountAmount = $subtotal * ($discount / 100);
    $total = $subtotal - $discountAmount;
    
    return [
        'subtotal' => $subtotal,
        'discount' => $discountAmount,
        'total' => $total
    ];
}

$cart = [
    ['name' => 'Shirt', 'price' => 25, 'quantity' => 2],
    ['name' => 'Pants', 'price' => 40, 'quantity' => 1]
];

$totals = calculateTotal($cart, 10);
print_r($totals);
/*
Output:
Array
(
    [subtotal] => 90
    [discount] => 9
    [total] => 81
)
*/