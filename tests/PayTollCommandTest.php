<?php declare(strict_types=1);

class PayTollCommandTest extends \PHPUnit\Framework\TestCase
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
     * @var PayTollCommand
     */
    private $command;

    protected function setUp(): void
    {
        $this->license = 'M-PHP 2019';
        $this->amount = random_int(300, 1000);

        $this->command = new PayTollCommand($this->license, $this->amount);
    }

    public function testHasLicense(): void
    {
        $this->assertEquals($this->license, $this->command->license());
    }

    public function testHasAmount(): void
    {
        $this->assertEquals($this->amount, $this->command->amount());
    }
}
