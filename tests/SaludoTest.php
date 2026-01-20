<?php
use PHPUnit\Framework\TestCase;
use App\Saludo;
class SaludoTest extends TestCase
{
 public function testGenerarSaludoAleatorio()
 {
 $saludo = new Saludo();
 $resultado = $saludo->generarSaludoAleatorio();
 $this->assertIsString($resultado['saludo']);
 $this->assertNotEmpty($resultado['saludo']);
 $this->assertIsString($resultado['codigo']);
 $this->assertNotEmpty($resultado['codigo']);
 }
}