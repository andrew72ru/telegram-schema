<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Adds a custom server language pack to the list of installed language packs in current localization target. Can be called before authorization @language_pack_id Identifier of a language pack to be added.
 */
class AddCustomServerLanguagePack extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('language_pack_id')]
        private string $languagePackId,
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'addCustomServerLanguagePack',
            'language_pack_id' => $this->getLanguagePackId(),
        ];
    }
}
