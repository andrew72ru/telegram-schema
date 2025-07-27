<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The ability to use quick replies.
 */
class BusinessFeatureQuickReplies extends BusinessFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessFeatureQuickReplies',
        ];
    }
}
