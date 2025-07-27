<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A mobile network.
 */
class NetworkTypeMobile extends NetworkType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'networkTypeMobile',
        ];
    }
}
