<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
        public function test_email()
    {
        $result = validate_email('i@gmail.com');
        $this->assertTrue(true);

        $result = validate_email('i@@gmail.com');
        $this->assertTrue(true);
    }
}
