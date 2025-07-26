<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns an HTTP URL which can be used to automatically log in to the translation platform and suggest new emoji replacements. The URL will be valid for 30 seconds after generation
 */
class GetEmojiSuggestionsUrl extends HttpUrl implements \JsonSerializable
{
    public function __construct(
        /** Language code for which the emoji replacements will be suggested */
        #[SerializedName('language_code')]
        private string $languageCode,
    ) {
    }

    /**
     * Get Language code for which the emoji replacements will be suggested
     */
    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    /**
     * Set Language code for which the emoji replacements will be suggested
     */
    public function setLanguageCode(string $languageCode): self
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getEmojiSuggestionsUrl',
            'language_code' => $this->getLanguageCode(),
        ];
    }
}
