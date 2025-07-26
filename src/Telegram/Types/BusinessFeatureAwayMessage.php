<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The ability to set up an away message
 */
class BusinessFeatureAwayMessage extends BusinessFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessFeatureAwayMessage',
        ];
    }
}
