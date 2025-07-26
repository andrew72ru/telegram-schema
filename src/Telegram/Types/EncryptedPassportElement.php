<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about an encrypted Telegram Passport element; for bots only
 */
class EncryptedPassportElement implements \JsonSerializable
{
    public function __construct(
        /** Type of Telegram Passport element */
        #[SerializedName('type')]
        private PassportElementType|null $type = null,
        /** Encrypted JSON-encoded data about the user */
        #[SerializedName('data')]
        private string $data,
        /** The front side of an identity document */
        #[SerializedName('front_side')]
        private DatedFile|null $frontSide = null,
        /** The reverse side of an identity document; may be null */
        #[SerializedName('reverse_side')]
        private DatedFile|null $reverseSide = null,
        /** Selfie with the document; may be null */
        #[SerializedName('selfie')]
        private DatedFile|null $selfie = null,
        /** List of files containing a certified English translation of the document */
        #[SerializedName('translation')]
        private array|null $translation = null,
        /** List of attached files */
        #[SerializedName('files')]
        private array|null $files = null,
        /** Unencrypted data, phone number or email address */
        #[SerializedName('value')]
        private string $value,
        /** Hash of the entire element */
        #[SerializedName('hash')]
        private string $hash,
    ) {
    }

    /**
     * Get Type of Telegram Passport element
     */
    public function getType(): PassportElementType|null
    {
        return $this->type;
    }

    /**
     * Set Type of Telegram Passport element
     */
    public function setType(PassportElementType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get Encrypted JSON-encoded data about the user
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * Set Encrypted JSON-encoded data about the user
     */
    public function setData(string $data): self
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get The front side of an identity document
     */
    public function getFrontSide(): DatedFile|null
    {
        return $this->frontSide;
    }

    /**
     * Set The front side of an identity document
     */
    public function setFrontSide(DatedFile|null $frontSide): self
    {
        $this->frontSide = $frontSide;

        return $this;
    }

    /**
     * Get The reverse side of an identity document; may be null
     */
    public function getReverseSide(): DatedFile|null
    {
        return $this->reverseSide;
    }

    /**
     * Set The reverse side of an identity document; may be null
     */
    public function setReverseSide(DatedFile|null $reverseSide): self
    {
        $this->reverseSide = $reverseSide;

        return $this;
    }

    /**
     * Get Selfie with the document; may be null
     */
    public function getSelfie(): DatedFile|null
    {
        return $this->selfie;
    }

    /**
     * Set Selfie with the document; may be null
     */
    public function setSelfie(DatedFile|null $selfie): self
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

    /**
     * Get List of attached files
     */
    public function getFiles(): array|null
    {
        return $this->files;
    }

    /**
     * Set List of attached files
     */
    public function setFiles(array|null $files): self
    {
        $this->files = $files;

        return $this;
    }

    /**
     * Get Unencrypted data, phone number or email address
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * Set Unencrypted data, phone number or email address
     */
    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get Hash of the entire element
     */
    public function getHash(): string
    {
        return $this->hash;
    }

    /**
     * Set Hash of the entire element
     */
    public function setHash(string $hash): self
    {
        $this->hash = $hash;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'encryptedPassportElement',
            'type' => $this->getType(),
            'data' => $this->getData(),
            'front_side' => $this->getFrontSide(),
            'reverse_side' => $this->getReverseSide(),
            'selfie' => $this->getSelfie(),
            'translation' => $this->getTranslation(),
            'files' => $this->getFiles(),
            'value' => $this->getValue(),
            'hash' => $this->getHash(),
        ];
    }
}
