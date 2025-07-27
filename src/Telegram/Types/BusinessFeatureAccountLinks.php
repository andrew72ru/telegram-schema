<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The ability to create links to the business account with predefined message text.
 */
class BusinessFeatureAccountLinks extends BusinessFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessFeatureAccountLinks',
        ];
    }
}
