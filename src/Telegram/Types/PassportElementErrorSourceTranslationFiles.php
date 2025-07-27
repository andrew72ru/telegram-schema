<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * The translation of the document contains an error. The error will be considered resolved when the list of translation files changes.
 */
class PassportElementErrorSourceTranslationFiles extends PassportElementErrorSource implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'passportElementErrorSourceTranslationFiles',
        ];
    }
}
