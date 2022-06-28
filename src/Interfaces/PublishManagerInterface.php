<?php

declare(strict_types=1);

namespace Core\Shared\Interfaces;

use Core\Shared\Abstracts\PublishAbstract;

interface PublishManagerInterface
{
    /**
     * @param PublishAbstract[] $events
     * @return void
     */
    public function dispatch(array $events): void;
}
