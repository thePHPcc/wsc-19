<?php declare(strict_types=1);

class TollPrepaidEventTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var string
     */
    private $license;

    /**
     * @var int
     */
    private $amount;

    /**
     * @var TollPrepaidEvent
     */
    private $event;

    protected function setUp(): void
    {
        $this->license = 'M-PHP 2019';
        $this->amount = random_int(300, 1000);

        $this->event = new TollPrepaidEvent($this->license, $this->amount);
    }

    public function testHasLicense(): void
    {
        $this->assertEquals($this->license, $this->event->license());
    }

    public function testHasAmount(): void
    {
        $this->assertEquals($this->amount, $this->event->amount());
    }
}
