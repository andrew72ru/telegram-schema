<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Text that must be formatted as if inside a pre HTML tag
 */
class TextEntityTypePre extends TextEntityType implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'textEntityTypePre',
        ];
    }
}
