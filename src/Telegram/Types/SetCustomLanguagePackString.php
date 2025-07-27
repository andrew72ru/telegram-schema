<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Adds, edits or deletes a string in a custom local language pack. Can be called before authorization @language_pack_id Identifier of a previously added custom local language pack in the current localization target @new_string New language pack string.
 */
class SetCustomLanguagePackString extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('language_pack_id')]
        private string $languagePackId,
        #[SerializedName('new_string')]
        private LanguagePackString|null $newString = null,
    ) {
    }

    public function getLanguagePackId(): string
    {
        return $this->languagePackId;
    }

    public function setLanguagePackId(string $languagePackId): self
    {
        $this->languagePackId = $languagePackId;

        return $this;
    }

    public function getNewString(): LanguagePackString|null
    {
        return $this->newString;
    }

    public function setNewString(LanguagePackString|null $newString): self
    {
        $this->newString = $newString;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setCustomLanguagePackString',
            'language_pack_id' => $this->getLanguagePackId(),
            'new_string' => $this->getNewString(),
        ];
    }
}
