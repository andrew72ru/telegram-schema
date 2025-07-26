<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An identity document to be saved to Telegram Passport
 */
class InputIdentityDocument implements \JsonSerializable
{
    public function __construct(
        /** Document number; 1-24 characters */
        #[SerializedName('number')]
        private string $number,
        /** Document expiration date; pass null if not applicable */
        #[SerializedName('expiration_date')]
        private Date|null $expirationDate = null,
        /** Front side of the document */
        #[SerializedName('front_side')]
        private InputFile|null $frontSide = null,
        /** Reverse side of the document; only for driver license and identity card; pass null otherwise */
        #[SerializedName('reverse_side')]
        private InputFile|null $reverseSide = null,
        /** Selfie with the document; pass null if unavailable */
        #[SerializedName('selfie')]
        private InputFile|null $selfie = null,
        /** List of files containing a certified English translation of the document */
        #[SerializedName('translation')]
        private array|null $translation = null,
    ) {
    }

    /**
     * Get Document number; 1-24 characters
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * Set Document number; 1-24 characters
     */
    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get Document expiration date; pass null if not applicable
     */
    public function getExpirationDate(): Date|null
    {
        return $this->expirationDate;
    }

    /**
     * Set Document expiration date; pass null if not applicable
     */
    public function setExpirationDate(Date|null $expirationDate): self
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * Get Front side of the document
     */
    public function getFrontSide(): InputFile|null
    {
        return $this->frontSide;
    }

    /**
     * Set Front side of the document
     */
    public function setFrontSide(InputFile|null $frontSide): self
    {
        $this->frontSide = $frontSide;

        return $this;
    }

    /**
     * Get Reverse side of the document; only for driver license and identity card; pass null otherwise
     */
    public function getReverseSide(): InputFile|null
    {
        return $this->reverseSide;
    }

    /**
     * Set Reverse side of the document; only for driver license and identity card; pass null otherwise
     */
    public function setReverseSide(InputFile|null $reverseSide): self
    {
        $this->reverseSide = $reverseSide;

        return $this;
    }

    /**
     * Get Selfie with the document; pass null if unavailable
     */
    public function getSelfie(): InputFile|null
    {
        return $this->selfie;
    }

    /**
     * Set Selfie with the document; pass null if unavailable
     */
    public function setSelfie(InputFile|null $selfie): self
    {
        $this->selfie = $selfie;

        return $this;
    }

    /**
     * Get List of files containing a certified English translation of the document
     */
    public function getTranslation(): array|null
    {
        return $this->translation;
    }

    /**
     * Set List of files containing a certified English translation of the document
     */
    public function setTranslation(array|null $translation): self
    {
        $this->translation = $translation;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputIdentityDocument',
            'number' => $this->getNumber(),
            'expiration_date' => $this->getExpirationDate(),
            'front_side' => $this->getFrontSide(),
            'reverse_side' => $this->getReverseSide(),
            'selfie' => $this->getSelfie(),
            'translation' => $this->getTranslation(),
        ];
    }
}
