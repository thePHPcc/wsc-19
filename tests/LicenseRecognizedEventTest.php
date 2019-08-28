<?php declare(strict_types=1);

class LicenseRecognizedEventTest extends \PHPUnit\Framework\TestCase
{
    public function testHasLicense(): void
    {
        $license = 'M-PHP 2019';
        $event = new LicenseRecognizedEvent($license);
        $this->assertEquals($license, $event->license());
    }
}
