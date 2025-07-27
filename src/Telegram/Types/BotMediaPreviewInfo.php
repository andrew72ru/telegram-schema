<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of media previews of a bot for the given language and the list of languages for which the bot has dedicated previews.
 */
class BotMediaPreviewInfo implements \JsonSerializable
{
    public function __construct(
        /** List of media previews */
        #[SerializedName('previews')]
        private array|null $previews = null,
        /** List of language codes for which the bot has dedicated previews */
        #[SerializedName('language_codes')]
        private array|null $languageCodes = null,
    ) {
    }

    /**
     * Get List of media previews.
     */
    public function getPreviews(): array|null
    {
        return $this->previews;
    }

    /**
     * Set List of media previews.
     */
    public function setPreviews(array|null $previews): self
    {
        $this->previews = $previews;

        return $this;
    }

    /**
     * Get List of language codes for which the bot has dedicated previews.
     */
    public function getLanguageCodes(): array|null
    {
        return $this->languageCodes;
    }

    /**
     * Set List of language codes for which the bot has dedicated previews.
     */
    public function setLanguageCodes(array|null $languageCodes): self
    {
        $this->languageCodes = $languageCodes;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'botMediaPreviewInfo',
            'previews' => $this->getPreviews(),
            'language_codes' => $this->getLanguageCodes(),
        ];
    }
}
