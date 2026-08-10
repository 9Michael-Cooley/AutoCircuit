<?php
/**
 * Tests for AutoCircuit
 */

use PHPUnit\Framework\TestCase;
use Autocircuit\Autocircuit;

class AutocircuitTest extends TestCase {
    private Autocircuit $instance;

    protected function setUp(): void {
        $this->instance = new Autocircuit(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Autocircuit::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
