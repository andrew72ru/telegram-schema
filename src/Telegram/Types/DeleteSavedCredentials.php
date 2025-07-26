<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Deletes saved credentials for all payment provider bots
 */
class DeleteSavedCredentials extends Ok implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'deleteSavedCredentials',
        ];
    }
}
