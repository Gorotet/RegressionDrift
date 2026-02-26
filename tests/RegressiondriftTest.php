<?php
/**
 * Tests for RegressionDrift
 */

use PHPUnit\Framework\TestCase;
use Regressiondrift\Regressiondrift;

class RegressiondriftTest extends TestCase {
    private Regressiondrift $instance;

    protected function setUp(): void {
        $this->instance = new Regressiondrift(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Regressiondrift::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
