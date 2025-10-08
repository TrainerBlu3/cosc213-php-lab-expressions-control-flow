# cosc213-php-lab-expressions-control-flow
Lab 5 213

Why prefer === ?
- The === operator checks if two values are identical, meaning they are equal and have the same type. Its better to use === for strict comparisons, as it reduces unexpected behaviour from the program and improves security.

Why prefer == ?
- The == operator checks if two values are equal, regardless of type. These are generally not intended for usage as if you ($userInput == 0), it can accept values like "0", 0 or false.
