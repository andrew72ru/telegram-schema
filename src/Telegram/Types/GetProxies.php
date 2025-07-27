<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns the list of proxies that are currently set up. Can be called before authorization.
 */
class GetProxies extends Proxies implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getProxies',
        ];
    }
}
