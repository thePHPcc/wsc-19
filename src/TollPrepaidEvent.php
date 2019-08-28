<?php declare(strict_types=1);

class TollPrepaidEvent implements Event
{
    /**
     * @var string
     */
    private $license;

    /**
     * @var int
     */
    private $amount;

    public function __construct(string $license, int $amount)
    {
        // We should be using a money object here, but we simplified!

        $this->license = $license;
        $this->amount = $amount;
    }

    public function license(): string
    {
        return $this->license;
    }

    public function amount(): int
    {
        return $this->amount;
    }
}
