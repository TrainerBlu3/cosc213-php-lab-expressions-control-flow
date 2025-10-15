# cosc213-php-lab-expressions-control-flow
Lab 5 213

Why prefer === ?
- The === operator checks if two values are identical, meaning they are equal and have the same type. Its better to use === for strict comparisons, as it reduces unexpected behaviour from the program and improves security.

Why prefer == ?
- The == operator checks if two values are equal, regardless of type. These are generally not intended for usage as if you ($userInput == 0), it can accept values like "0", 0 or false.

Precedence: Calculates items in the absence of parenthesis. (e.g. 2 + 3 * 4 would return 14)
Parenthesis: Calculates items with rounded brackets, this gives precedence to operators that would normally be considered last. (e.g. (2 + 3) * 4 would instead return 20)

Strict Comparison: === This would compare 2 values to check if they are both equal and have the same type.
Loose Comparison: == This would compare 2 values to check only if they are both equal.

Using Null Coalescing ?? returns value 1 if the expression is not null and exists but if it doesnt exist or is null it returns value 2.
We used this alot for making defaults e.g. $view = $_GET['view'] ?? 'times'. In this case if $view exists then we would get the view otherwise we would set it to times.
You don't need a full if-else statement block to determine this, which would reduce lines and make the code more readable.
Another instance where we used ?? was in part 4 where we instansiated the $score variable with either whatever value the user inputted or null. ($score = $score ?? null;)

One bug that I prevented by using break or continue was in part 4 where if I didn't use break after each case in the "$grade" switch statement at the end, it would run through all of the cases and run all of the echo commands from each case including default.
