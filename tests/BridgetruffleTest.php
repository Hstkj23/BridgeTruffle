<?php
/**
 * Tests for BridgeTruffle
 */

use PHPUnit\Framework\TestCase;
use Bridgetruffle\Bridgetruffle;

class BridgetruffleTest extends TestCase {
    private Bridgetruffle $instance;

    protected function setUp(): void {
        $this->instance = new Bridgetruffle(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Bridgetruffle::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
