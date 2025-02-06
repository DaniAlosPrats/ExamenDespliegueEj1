<?php
use PHPUnit\Framework\TestCase;
use App\DNI;
class DNITest extends TestCase {
    
 public function testDNI() {
 $calc = new DNI();
 $this-> assertEquals(Z, $calc->getDNIConLetra(12345678));
 }
}
