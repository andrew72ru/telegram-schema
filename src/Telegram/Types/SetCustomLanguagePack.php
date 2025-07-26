<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Adds or changes a custom local language pack to the current localization target
 */
class SetCustomLanguagePack extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Information about the language pack. Language pack identifier must start with 'X', consist only of English letters, digits and hyphens, and must not exceed 64 characters. Can be called before authorization */
        #[SerializedName('info')]
        private LanguagePackInfo|null $info = null,
        /** Strings of the new language pack */
        #[SerializedName('strings')]
        private array|null $strings = null,
    ) {
    }

    /**
     * Get Information about the language pack. Language pack identifier must start with 'X', consist only of English letters, digits and hyphens, and must not exceed 64 characters. Can be called before authorization
     */
    public function getInfo(): LanguagePackInfo|null
    {
        return $this->info;
    }

    /**
     * Set Information about the language pack. Language pack identifier must start with 'X', consist only of English letters, digits and hyphens, and must not exceed 64 characters. Can be called before authorization
     */
    public function setInfo(LanguagePackInfo|null $info): self
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get Strings of the new language pack
     */
    public function getStrings(): array|null
    {
        return $this->strings;
    }

    /**
     * Set Strings of the new language pack
     */
    public function setStrings(array|null $strings): self
    {
        $this->strings = $strings;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setCustomLanguagePack',
            'info' => $this->getInfo(),
            'strings' => $this->getStrings(),
        ];
    }
}
