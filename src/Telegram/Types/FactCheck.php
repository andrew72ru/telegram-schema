<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a fact-check added to the message by an independent checker
 */
class FactCheck implements \JsonSerializable
{
    public function __construct(
        /** Text of the fact-check */
        #[SerializedName('text')]
        private FormattedText|null $text = null,
        /** A two-letter ISO 3166-1 alpha-2 country code of the country for which the fact-check is shown */
        #[SerializedName('country_code')]
        private string $countryCode,
    ) {
    }

    /**
     * Get Text of the fact-check
     */
    public function getText(): FormattedText|null
    {
        return $this->text;
    }

    /**
     * Set Text of the fact-check
     */
    public function setText(FormattedText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get A two-letter ISO 3166-1 alpha-2 country code of the country for which the fact-check is shown
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * Set A two-letter ISO 3166-1 alpha-2 country code of the country for which the fact-check is shown
     */
    public function setCountryCode(string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'factCheck',
            'text' => $this->getText(),
            'country_code' => $this->getCountryCode(),
        ];
    }
}
