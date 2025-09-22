<?php

// Simple Function
// function sayHello () { 
//   echo "Hello World";
// }
// sayHello(); // Output: Hello, world;

// With Parameter
// function greet($name) {
//    echo "Hello, $name,!";
// } 
//  greet("Alice"); // Output: Hello, Alice!
// greet("Bob"); // Output: Hello, Bob!

// Parameter default value
// function greet($name = 'Guest') {
//    echo "Hello, $name!";
// }
// greet();        // Output: Hello, Guest!
// greet("Alice"); // Output: Hello, Guest!

// Return from function
function multiply($a, $b) {
    return $a * $b;
}
$result = multiply(4, 3);
echo $result; // Output: Result: 12