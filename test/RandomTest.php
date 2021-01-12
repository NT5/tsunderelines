<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use NT5\TsundereLines\TsundereLines;

class RandomTest extends TestCase {

    private function verbose($method, $text) {
        fwrite(STDERR, $method . "\n");
        fwrite(STDERR, print_r($text, TRUE));
    }

    public function testRandom() {
        $line = TsundereLines::pick();
        $this->assertNotEmpty($line);

        $this->verbose(__METHOD__, $line);
    }

}
