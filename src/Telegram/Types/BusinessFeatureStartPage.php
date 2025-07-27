<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The ability to customize start page.
 */
class BusinessFeatureStartPage extends BusinessFeature implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessFeatureStartPage',
        ];
    }
}
