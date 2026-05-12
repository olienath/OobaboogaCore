<?php
/**
 * Tests for Oobabooga
 */

use PHPUnit\Framework\TestCase;
use Oobabooga\Oobabooga;

class OobaboogaTest extends TestCase {
    private Oobabooga $instance;

    protected function setUp(): void {
        $this->instance = new Oobabooga(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Oobabooga::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
