<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The content must be bottom-aligned
 */
class PageBlockVerticalAlignmentBottom extends PageBlockVerticalAlignment implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockVerticalAlignmentBottom',
        ];
    }
}
