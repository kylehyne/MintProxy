<?php
/**
 * Tests for MintProxy
 */

use PHPUnit\Framework\TestCase;
use Mintproxy\Mintproxy;

class MintproxyTest extends TestCase {
    private Mintproxy $instance;

    protected function setUp(): void {
        $this->instance = new Mintproxy(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Mintproxy::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
