<?php
/**
 * Created by PhpStorm.
 * User: jiamingdong
 * Date: 3/15/16
 * Time: 11:32 AM
 */
$expression = json_decode($_POST["expression"]);
$numbers_stack = array();
$operands_stack = array();

function priority($op) {
    if ($op == "+" || $op == "-") return 0;
    else if ($op == "*" || $op == "/") return 1;
    else return -1;
}

function isOperand($item) {
    if ($item == "+" || $item == "-" || $item == "*" || $item == "/") {
        return true;
    } else return false;
}

function compute($op, $num1, $num2) {
    switch ($op) {
        case "+":
            return strval($num1 + $num2);
            break;
        case "-":
            return strval($num1 - $num2);
            break;
        case "*":
            return strval($num1 * $num2);
            break;
        case "/":
            return strval($num1 / $num2);
            break;
        default:
            return "ERROR";
            break;
    }
}

for ($i = 0; $i < count($expression); $i++) {
    $item = $expression[$i];

    if (isOperand($item)) {
        while (count($operands_stack) > 0 && priority(end($operands_stack)) >= priority($item)) {
            $operand = array_pop($operands_stack);
            $num2 = floatval(array_pop($numbers_stack));
            $num1 = floatval(array_pop($numbers_stack));
            array_push($numbers_stack, compute($operand, $num1, $num2));
        }

        array_push($operands_stack, $item);
    } else if ($item == "(") {
        array_push($operands_stack, $item);
    } else if ($item == ")") {
        while (end($operands_stack) != "(") {
            $operand = array_pop($operands_stack);
            $num2 = floatval(array_pop($numbers_stack));
            $num1 = floatval(array_pop($numbers_stack));
            array_push($numbers_stack, compute($operand, $num1, $num2));
        }

        array_pop($operands_stack);
    } else { // a number
        array_push($numbers_stack, $item);
    }
}

// now only +/- left
while (count($operands_stack) > 0) {
    $operand = array_pop($operands_stack);
    $num2 = floatval(array_pop($numbers_stack));
    $num1 = floatval(array_pop($numbers_stack));
    array_push($numbers_stack, compute($operand, $num1, $num2));
}

echo count($numbers_stack) > 0 ? array_pop($numbers_stack) : "ERROR";

?>