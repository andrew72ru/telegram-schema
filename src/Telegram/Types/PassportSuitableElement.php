<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a Telegram Passport element that was requested by a service
 */
class PassportSuitableElement implements \JsonSerializable
{
    public function __construct(
        /** Type of the element */
        #[SerializedName('type')]
        private PassportElementType|null $type = null,
        /** True, if a selfie is required with the identity document */
        #[SerializedName('is_selfie_required')]
        private bool $isSelfieRequired,
        /** True, if a certified English translation is required with the document */
        #[SerializedName('is_translation_required')]
        private bool $isTranslationRequired,
        /** True, if personal details must include the user's name in the language of their country of residence */
        #[SerializedName('is_native_name_required')]
        private bool $isNativeNameRequired,
    ) {
    }

    /**
     * Get Type of the element
     */
    public function getType(): PassportElementType|null
    {
        return $this->type;
    }

    /**
     * Set Type of the element
     */
    public function setType(PassportElementType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get True, if a selfie is required with the identity document
     */
    public function getIsSelfieRequired(): bool
    {
        return $this->isSelfieRequired;
    }

    /**
     * Set True, if a selfie is required with the identity document
     */
    public function setIsSelfieRequired(bool $isSelfieRequired): self
    {
        $this->isSelfieRequired = $isSelfieRequired;

        return $this;
    }

    /**
     * Get True, if a certified English translation is required with the document
     */
    public function getIsTranslationRequired(): bool
    {
        return $this->isTranslationRequired;
    }

    /**
     * Set True, if a certified English translation is required with the document
     */
    public function setIsTranslationRequired(bool $isTranslationRequired): self
    {
        $this->isTranslationRequired = $isTranslationRequired;

        return $this;
    }

    /**
     * Get True, if personal details must include the user's name in the language of their country of residence
     */
    public function getIsNativeNameRequired(): bool
    {
        return $this->isNativeNameRequired;
    }

    /**
     * Set True, if personal details must include the user's name in the language of their country of residence
     */
    public function setIsNativeNameRequired(bool $isNativeNameRequired): self
    {
        $this->isNativeNameRequired = $isNativeNameRequired;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'passportSuitableElement',
            'type' => $this->getType(),
            'is_selfie_required' => $this->getIsSelfieRequired(),
            'is_translation_required' => $this->getIsTranslationRequired(),
            'is_native_name_required' => $this->getIsNativeNameRequired(),
        ];
    }
}
