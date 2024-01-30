<?php

class MyClass {
    public static function __callStatic($name, $arguments) {
        echo "Calling static method '$name' with arguments: " . implode(', ', $arguments);
    }
}

MyClass::undefinedStaticMethod(2, 'xyz');
// Output: Calling static method 'undefinedStaticMethod' with arguments: 2, xyz

echo"<br>";
class MynewClass {
    public function __call($name, $arguments) {
        echo "Calling object method '$name' with arguments: " . implode(', ', $arguments);
    }
}

$obj = new MynewClass();
$obj->undefinedMethod(1, 'abc');
// Output: Calling object method 'undefinedMethod' with arguments: 1, abc











?>
