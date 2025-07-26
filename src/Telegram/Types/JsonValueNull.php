<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a null JSON value
 */
class JsonValueNull extends JsonValue implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'jsonValueNull',
        ];
    }
}
