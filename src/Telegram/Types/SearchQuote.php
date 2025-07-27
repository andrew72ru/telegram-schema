<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Searches for a given quote in a text. Returns found quote start position in UTF-16 code units. Returns a 404 error if the quote is not found. Can be called synchronously.
 */
class SearchQuote extends FoundPosition implements \JsonSerializable
{
    public function __construct(
        /** Text in which to search for the quote */
        #[SerializedName('text')]
        private FormattedText|null $text = null,
        /** Quote to search for */
        #[SerializedName('quote')]
        private FormattedText|null $quote = null,
        /** Approximate quote position in UTF-16 code units */
        #[SerializedName('quote_position')]
        private int $quotePosition,
    ) {
    }

    /**
     * Get Text in which to search for the quote.
     */
    public function getText(): FormattedText|null
    {
        return $this->text;
    }

    /**
     * Set Text in which to search for the quote.
     */
    public function setText(FormattedText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get Quote to search for.
     */
    public function getQuote(): FormattedText|null
    {
        return $this->quote;
    }

    /**
     * Set Quote to search for.
     */
    public function setQuote(FormattedText|null $quote): self
    {
        $this->quote = $quote;

        return $this;
    }

    /**
     * Get Approximate quote position in UTF-16 code units.
     */
    public function getQuotePosition(): int
    {
        return $this->quotePosition;
    }

    /**
     * Set Approximate quote position in UTF-16 code units.
     */
    public function setQuotePosition(int $quotePosition): self
    {
        $this->quotePosition = $quotePosition;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchQuote',
            'text' => $this->getText(),
            'quote' => $this->getQuote(),
            'quote_position' => $this->getQuotePosition(),
        ];
    }
}
