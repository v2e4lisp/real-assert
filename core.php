<?php

class AssertionException extends Exception {}

function realAssert($stmt, $message="failed.") {
    if(!$stmt) {
        throw new AssertionException($message);
    }
}

function assertTrue($stmt, $message=null) {
    realAssert($stmt === true, $message);
}

function assertFalse($stmt, $message=null) {
    realAssert($stmt === false, $message);
}

function assertEmpty($stmt, $message=null) {
    realAssert(empty($stmt), $message);
}

function assertNotEmpty($stmt, $message=null) {
    realAssert(!empty($stmt), $message);
}

function assertNull($stmt, $message=null) {
    realAssert(is_null($stmt), $message);
}

function assertNotNull($stmt, $message=null) {
    realAssert(!is_null($stmt), $message);
}

function assertEqual($op1, $op2, $message=null) {
    realAssert($op1 == $op2, $message);
}

function assertRealEqual($op1, $op2, $message=null) {
    realAssert($op1 === $op2, $message);
}

function assertLessThan($op1, $op2, $message=null) {
    realAssert($op1 < $op2, $message);
}

function assertNotLessThan($op1, $op2, $message=null) {
    realAssert($op1 >= $op2, $message);
}

function assertGreaterThan($op1, $Op2, $message=null) {
    realAssert($op1 > $op2, $message);
}

function assertNotGreaterThan($op1, $Op2, $message=null) {
    realAssert($op1 <= $op2, $message);
}

function assertArrayHasValue($arr, $value, $message=null) {
    realAssert(in_array($value, $arr), $message);
}

function assertArrayNotHasValue($arr, $value, $message=null) {
    realAssert(!in_array($value, $arr), $message);
}

function assertArrayHasKey($arr, $key, $message=null) {
    realAssert(array_key_exsits($key, $arr) $message);
}

function assertArrayNotHasKey($arr, $key, $message=null) {
    realAssert(!array_key_exsits($key, $arr) $message);
}

function assertInstanceOf($obj, $klass, $message=null) {
    realAssert($obj instanceof $klass, $message);
}

function assertNotInstanceOf($obj, $klass, $message=null) {
    realAssert(!($obj instanceof $klass), $message);
}