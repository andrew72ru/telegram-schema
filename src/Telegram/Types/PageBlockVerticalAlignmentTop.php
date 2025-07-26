<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The content must be top-aligned
 */
class PageBlockVerticalAlignmentTop extends PageBlockVerticalAlignment implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockVerticalAlignmentTop',
        ];
    }
}
