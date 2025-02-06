# PHP Ternary Operator and Null Object Property Access

This repository demonstrates a common error in PHP when using the ternary operator with null objects, and provides a solution using the null coalescing operator.

## Bug

The `bug.php` file shows how attempting to access a property of a null object within a ternary expression results in a fatal error. This is because the ternary operator evaluates both the true and false expressions, even if the condition is false.

## Solution

The `bugSolution.php` file illustrates how to avoid this error using PHP's null coalescing operator (`??`). This operator allows checking for null values before accessing properties, preventing fatal errors.