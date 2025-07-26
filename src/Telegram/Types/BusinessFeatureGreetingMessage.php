<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The ability to set up a greeting message
 */
class BusinessFeatureGreetingMessage extends BusinessFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessFeatureGreetingMessage',
        ];
    }
}
