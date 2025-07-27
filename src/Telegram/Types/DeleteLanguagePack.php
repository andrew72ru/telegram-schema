<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Deletes all information about a language pack in the current localization target. The language pack which is currently in use (including base language pack) or is being synchronized can't be deleted.
 */
class DeleteLanguagePack extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the language pack to delete */
        #[SerializedName('language_pack_id')]
        private string $languagePackId,
    ) {
    }

    /**
     * Get Identifier of the language pack to delete.
     */
    public function getLanguagePackId(): string
    {
        return $this->languagePackId;
    }

    /**
     * Set Identifier of the language pack to delete.
     */
    public function setLanguagePackId(string $languagePackId): self
    {
        $this->languagePackId = $languagePackId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'deleteLanguagePack',
            'language_pack_id' => $this->getLanguagePackId(),
        ];
    }
}
