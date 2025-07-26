<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Uses the current IP address to find the current country. Returns two-letter ISO 3166-1 alpha-2 country code. Can be called before authorization
 */
class GetCountryCode extends Text implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getCountryCode',
        ];
    }
}
