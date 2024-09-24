<?php
// Include necessary classes
include_once 'A.php';
include_once 'B.php';
include_once 'C.php';
include_once 'I.php';

class Demo {
    // Truong hop A: 
     public function typeAReturnA(C $x): C {
        echo __FUNCTION__ . "<br>";
        return new A();  
    }

    public function typeAReturnB(C $x): C {
        echo __FUNCTION__ . "<br>";
        return new B();  
    }

    public function typeAReturnC(C $x): C {
        echo __FUNCTION__ . "<br>";
        return new C();  
    }

    public function typeAReturnI(C $x) {
        echo __FUNCTION__ . "<br>";
        return null;  
    }

    public function typeAReturnNull(C $x) {
        echo __FUNCTION__ . "<br>";
        return null;  
    }


    //Truong hop B:
    public function typeBReturnA(C $x): C {
        echo __FUNCTION__ . "<br>";
        return new B();  
    }

    public function typeBReturnB(C $x): C {
        echo __FUNCTION__ . "<br>";
        return new B();  
    }

    public function typeBReturnC(C $x): C {
        echo __FUNCTION__ . "<br>";
        return new B();  
    }

    public function typeBReturnI(C $x) {
        echo __FUNCTION__ . "<br>";
        return new B();  
    }

    public function typeBReturnNull(C $x) {
        echo __FUNCTION__ . "<br>";
        return null;  
    }


    //Truong hop C:
    public function typeCReturnA(C $x): C {
        echo __FUNCTION__ . "<br>";
        return new C();  
    }

    public function typeCReturnB(C $x): C {
        echo __FUNCTION__ . "<br>";
        return new C();  
    }

    public function typeCReturnC(C $x): C {
        echo __FUNCTION__ . "<br>";
        return new C();  
    }

    public function typeCReturnI(C $x) {
        echo __FUNCTION__ . "<br>";
        return new C();  
    }

    public function typeCReturnNull(C $x) {
        echo __FUNCTION__ . "<br>";
        return null;  
    }
   
    //Truong hop I:
    public function typeIReturnA(C $x): C {
        echo __FUNCTION__ . "<br>";
        return new I();  
    }

    public function typeIReturnB(C $x): C {
        echo __FUNCTION__ . "<br>";
        return new I();  
    }

    public function typeIReturnC(C $x): C {
        echo __FUNCTION__ . "<br>";
        return new I();  
    }

    public function typeIReturnI(C $x) {
        echo __FUNCTION__ . "<br>";
        return new I();  
    }

    public function typeIReturnNull(C $x) {
        echo __FUNCTION__ . "<br>";
        return null;  
    }

    //truong hop null:
    public function typeNullReturnA(C $x): C {
        echo __FUNCTION__ . "<br>";
        return new A();  
    }

    public function typeNullReturnB(C $x): C {
        echo __FUNCTION__ . "<br>";
        return new B();  
    }

    public function typeNullReturnC(C $x): C {
        echo __FUNCTION__ . "<br>";
        return new C();  
    }

    public function typeNullReturnI(C $x) {
        echo __FUNCTION__ . "<br>";
        return new I();  
    }

    public function typeNullReturnNull(C $x) {
        echo __FUNCTION__ . "<br>";
        return null;  
    }
}

 $demo = new Demo();

 $x = new C();
 $b = new C();
 
echo " <br>";
$y = $demo->typeAReturnA($x);

echo " <br>";
$y = $demo->typeBReturnB($x);

echo " <br>";
$y = $demo->typeCReturnC($x);

echo "<br>";
$y = $demo->typeNullReturnNull($x);
    



 


 if ($y instanceof A) {
    echo " <br>This is function a1 from class A\n";
} elseif ($y instanceof B) {
    echo "<br>This is function b1 from class B\n";
} elseif ($y instanceof C) {
    echo "Returned object is of class C\n";
}
?>
