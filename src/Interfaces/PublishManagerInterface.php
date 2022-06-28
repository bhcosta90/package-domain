<?php

declare(strict_types=1);

namespace Core\Shared\Interfaces;

interface PublishManagerInterface
{
    /**
     * @param PubSubInterface[] $events
     * @return void
     */
    public function dispatch(array $events): void;
}
