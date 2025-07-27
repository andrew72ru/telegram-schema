<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Translates a text to the given language. If the current user is a Telegram Premium user, then text formatting is preserved.
 */
class TranslateText extends FormattedText implements \JsonSerializable
{
    public function __construct(
        /** Text to translate */
        #[SerializedName('text')]
        private FormattedText|null $text = null,
        /** Language code of the language to which the message is translated. Must be one of */
        #[SerializedName('to_language_code')]
        private string $toLanguageCode,
    ) {
    }

    /**
     * Get Text to translate.
     */
    public function getText(): FormattedText|null
    {
        return $this->text;
    }

    /**
     * Set Text to translate.
     */
    public function setText(FormattedText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get Language code of the language to which the message is translated. Must be one of.
     */
    public function getToLanguageCode(): string
    {
        return $this->toLanguageCode;
    }

    /**
     * Set Language code of the language to which the message is translated. Must be one of.
     */
    public function setToLanguageCode(string $toLanguageCode): self
    {
        $this->toLanguageCode = $toLanguageCode;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'translateText',
            'text' => $this->getText(),
            'to_language_code' => $this->getToLanguageCode(),
        ];
    }
}
