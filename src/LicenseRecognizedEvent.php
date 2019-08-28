<?php declare(strict_types=1);

class LicenseRecognizedEvent implements Event
{
    /**
     * @var string
     */
    private $license;

    public function __construct(string $license)
    {
        $this->license = $license;
    }

    public function license()
    {
        return $this->license;
    }
}
