<?php

declare(strict_types=1);

namespace Core\Shared\Interfaces;

use Core\Shared\Abstracts\PubSubAbstract;

interface PublishManagerInterface
{
    /**
     * @param PubSubAbstract[] $events
     * @return void
     */
    public function dispatch(array $events): void;
}
