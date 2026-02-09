<?php
/**
 * Tests for HyperMesh
 */

use PHPUnit\Framework\TestCase;
use Hypermesh\Hypermesh;

class HypermeshTest extends TestCase {
    private Hypermesh $instance;

    protected function setUp(): void {
        $this->instance = new Hypermesh(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Hypermesh::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
