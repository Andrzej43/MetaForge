<?php
/**
 * Tests for MetaForge
 */

use PHPUnit\Framework\TestCase;
use Metaforge\Metaforge;

class MetaforgeTest extends TestCase {
    private Metaforge $instance;

    protected function setUp(): void {
        $this->instance = new Metaforge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Metaforge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
