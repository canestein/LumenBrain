<?php
/**
 * Tests for LumenBrain
 */

use PHPUnit\Framework\TestCase;
use Lumenbrain\Lumenbrain;

class LumenbrainTest extends TestCase {
    private Lumenbrain $instance;

    protected function setUp(): void {
        $this->instance = new Lumenbrain(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Lumenbrain::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
