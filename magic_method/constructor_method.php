
<?php


// class Baseclass 
// {
//  function __construct(){
//     print"This is the construct magic method";
//  }   
// }
// $obj = new Baseclass;
// class BaseClass {
//     function __construct() {
//         print "In BaseClass constructor\n";
//     }
// }

// class SubClass extends BaseClass {
//     function __construct() {
//         parent::__construct();
//         print "In SubClass constructor\n";
//     }
// }

// class OtherSubClass extends BaseClass {
    
// }


// $obj = new BaseClass();
// $obj = new SubClass();
// $obj = new OtherSubClass();




//constructor using argument

class Point {
   protected int $x;
   protected int $y;

   public function __construct(int $x, int $y = 0) {
       $this->x = $x;
       $this->y = $y;
   }
}

$p1 = new Point(4, 5);
$p2 = new Point(4,6); // $y will take its default value of 0.
//$p3 = new Point(y: 5, x: 4);  // Named parameters (PHP 8.0+)












//new type constructore 
// class Point {
//    public function __construct(protected int $x, protected int $y = 0) {
//    }
// }



// All allowed:
// static $x = new Foo;

// const C = new Foo;
 
// function test($param = new Foo) {}
 
// #[AnAttribute(new Foo)]
// class Test {
//     public function __construct(
//         public $prop = new Foo,
//     ) {}
// }

// // All not allowed (compile-time error):
// function test(
//     $a = new (CLASS_NAME_CONSTANT)(), // dynamic class name
//     $b = new class {}, // anonymous class
//     $c = new A(...[]), // argument unpacking
//     $d = new B($abc), // unsupported constant expression
// ) {}














?>