<?php declare(strict_types=1);

class PayTollCommandHandler
{
    private $events = [];

    public function handle(PayTollCommand $command): void
    {
        // Here be decisions (if any)

        $this->emit(new TollPrepaidEvent($command->license(), $command->amount()));
    }

    public function events(): array
    {
        return $this->events;
    }

    private function emit(Event $event): void
    {
        $this->events[] = $event;
    }
}
