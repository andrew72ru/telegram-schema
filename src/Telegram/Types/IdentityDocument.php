<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An identity document.
 */
class IdentityDocument implements \JsonSerializable
{
    public function __construct(
        /** Document number; 1-24 characters */
        #[SerializedName('number')]
        private string $number,
        /** Document expiration date; may be null if not applicable */
        #[SerializedName('expiration_date')]
        private Date|null $expirationDate = null,
        /** Front side of the document */
        #[SerializedName('front_side')]
        private DatedFile|null $frontSide = null,
        /** Reverse side of the document; only for driver license and identity card; may be null */
        #[SerializedName('reverse_side')]
        private DatedFile|null $reverseSide = null,
        /** Selfie with the document; may be null */
        #[SerializedName('selfie')]
        private DatedFile|null $selfie = null,
        /** List of files containing a certified English translation of the document */
        #[SerializedName('translation')]
        private array|null $translation = null,
    ) {
    }

    /**
     * Get Document number; 1-24 characters.
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * Set Document number; 1-24 characters.
     */
    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get Document expiration date; may be null if not applicable.
     */
    public function getExpirationDate(): Date|null
    {
        return $this->expirationDate;
    }

    /**
     * Set Document expiration date; may be null if not applicable.
     */
    public function setExpirationDate(Date|null $expirationDate): self
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * Get Front side of the document.
     */
    public function getFrontSide(): DatedFile|null
    {
        return $this->frontSide;
    }

    /**
     * Set Front side of the document.
     */
    public function setFrontSide(DatedFile|null $frontSide): self
    {
        $this->frontSide = $frontSide;

        return $this;
    }

    /**
     * Get Reverse side of the document; only for driver license and identity card; may be null.
     */
    public function getReverseSide(): DatedFile|null
    {
        return $this->reverseSide;
    }

    /**
     * Set Reverse side of the document; only for driver license and identity card; may be null.
     */
    public function setReverseSide(DatedFile|null $reverseSide): self
    {
        $this->reverseSide = $reverseSide;

        return $this;
    }

    /**
     * Get Selfie with the document; may be null.
     */
    public function getSelfie(): DatedFile|null
    {
        return $this->selfie;
    }

    /**
     * Set Selfie with the document; may be null.
     */
    public function setSelfie(DatedFile|null $selfie): self
    {
        $this->selfie = $selfie;

        return $this;
    }

    /**
     * Get List of files containing a certified English translation of the document.
     */
    public function getTranslation(): array|null
    {
        return $this->translation;
    }

    /**
     * Set List of files containing a certified English translation of the document.
     */
    public function setTranslation(array|null $translation): self
    {
        $this->translation = $translation;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'identityDocument',
            'number' => $this->getNumber(),
            'expiration_date' => $this->getExpirationDate(),
            'front_side' => $this->getFrontSide(),
            'reverse_side' => $this->getReverseSide(),
            'selfie' => $this->getSelfie(),
            'translation' => $this->getTranslation(),
        ];
    }
}
