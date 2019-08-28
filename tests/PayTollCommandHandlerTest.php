<?php declare(strict_types=1);

class PayTollCommandHandlerTest extends \PHPUnit\Framework\TestCase
{
    public function testEmitsTollPrepaidEvent(): void
    {
        $license = 'M-PHP 2019';
        $amount = random_int(300, 1000);

        $command = new PayTollCommand($license, $amount);
        $commandHandler = new PayTollCommandHandler;
        $commandHandler->handle($command);
        $events = $commandHandler->events();

        $this->assertCount(1, $events);

        $event = $events[0];

        $this->assertInstanceOf(TollPrepaidEvent::class, $event);
        $this->assertEquals($license, $event->license());
        $this->assertEquals($amount, $event->amount());
    }
}
