<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * Represents an unknown option or an option which has a default value.
 */
class OptionValueEmpty extends OptionValue implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'optionValueEmpty',
        ];
    }
}
