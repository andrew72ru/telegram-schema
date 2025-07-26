<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns application config, provided by the server. Can be called before authorization
 */
class GetApplicationConfig extends JsonValue implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getApplicationConfig',
        ];
    }
}
