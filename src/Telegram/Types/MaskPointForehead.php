<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The mask is placed relatively to the forehead.
 */
class MaskPointForehead extends MaskPoint implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'maskPointForehead',
        ];
    }
}
