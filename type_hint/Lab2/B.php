<?php
// Include the C class, using include_once to avoid redeclaration
include_once 'C.php';

class B extends C {
    public function b10() {
        echo "<br>This is function b1 from class B\n";
    }
}
?>
