<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Deletes saved order information.
 */
class DeleteSavedOrderInfo extends Ok implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'deleteSavedOrderInfo',
        ];
    }
}
