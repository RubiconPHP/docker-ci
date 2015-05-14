<?php

namespace App;

require dirname(__DIR__) . '/vendor/autoload.php';

class ReportTest extends \PHPUnit_Framework_TestCase
{
    public function testIsActuallyReporting()
    {
        $reporter = new Report();
        $this->assertInternalType('string', (string) $reporter);
    }
}