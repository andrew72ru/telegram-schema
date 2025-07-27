<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Return emojis matching the keyword. Supported only if the file database is enabled. Order of results is unspecified.
 */
class GetKeywordEmojis extends Emojis implements \JsonSerializable
{
    public function __construct(
        /** Text to search for */
        #[SerializedName('text')]
        private string $text,
        /** List of possible IETF language tags of the user's input language; may be empty if unknown */
        #[SerializedName('input_language_codes')]
        private array|null $inputLanguageCodes = null,
    ) {
    }

    /**
     * Get Text to search for.
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * Set Text to search for.
     */
    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get List of possible IETF language tags of the user's input language; may be empty if unknown.
     */
    public function getInputLanguageCodes(): array|null
    {
        return $this->inputLanguageCodes;
    }

    /**
     * Set List of possible IETF language tags of the user's input language; may be empty if unknown.
     */
    public function setInputLanguageCodes(array|null $inputLanguageCodes): self
    {
        $this->inputLanguageCodes = $inputLanguageCodes;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getKeywordEmojis',
            'text' => $this->getText(),
            'input_language_codes' => $this->getInputLanguageCodes(),
        ];
    }
}
