<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about the current temporary password
 */
class GetTemporaryPasswordState extends TemporaryPasswordState implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getTemporaryPasswordState',
        ];
    }
}
