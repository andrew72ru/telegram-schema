<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Fetches the latest versions of all strings from a language pack in the current localization target from the server.
 */
class SynchronizeLanguagePack extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Language pack identifier */
        #[SerializedName('language_pack_id')]
        private string $languagePackId,
    ) {
    }

    /**
     * Get Language pack identifier.
     */
    public function getLanguagePackId(): string
    {
        return $this->languagePackId;
    }

    /**
     * Set Language pack identifier.
     */
    public function setLanguagePackId(string $languagePackId): self
    {
        $this->languagePackId = $languagePackId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'synchronizeLanguagePack',
            'language_pack_id' => $this->getLanguagePackId(),
        ];
    }
}
