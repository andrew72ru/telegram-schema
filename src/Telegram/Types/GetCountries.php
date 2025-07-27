<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Returns information about existing countries. Can be called before authorization.
 */
class GetCountries extends Countries implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getCountries',
        ];
    }
}
