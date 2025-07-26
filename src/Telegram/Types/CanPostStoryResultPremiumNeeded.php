<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user must subscribe to Telegram Premium to be able to post stories
 */
class CanPostStoryResultPremiumNeeded extends CanPostStoryResult implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'canPostStoryResultPremiumNeeded',
        ];
    }
}
