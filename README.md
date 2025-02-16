# PHP Pass-by-Reference with Arrays: A Subtle Bug

This repository demonstrates a common yet subtle bug in PHP related to pass-by-reference and array manipulation.

The `incrementArray` function intends to increment each element of an array. However, due to the use of pass-by-reference (`&`), modifications made within the function directly affect the original array outside the function's scope.

This can lead to unexpected behavior if not carefully considered, especially in larger codebases.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the output, noting how the original arrays are modified in unexpected ways.

## Solution

The solution involves creating a copy of the array before making any modifications within the function. This ensures that the original array remains unchanged.  See `bugSolution.php` for a corrected version of the code.