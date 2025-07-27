<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a Telegram Passport authorization form that was requested.
 */
class PassportAuthorizationForm implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the authorization form */
        #[SerializedName('id')]
        private int $id,
        /** Telegram Passport elements that must be provided to complete the form */
        #[SerializedName('required_elements')]
        private array|null $requiredElements = null,
        /** URL for the privacy policy of the service; may be empty */
        #[SerializedName('privacy_policy_url')]
        private string $privacyPolicyUrl,
    ) {
    }

    /**
     * Get Unique identifier of the authorization form.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Unique identifier of the authorization form.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Telegram Passport elements that must be provided to complete the form.
     */
    public function getRequiredElements(): array|null
    {
        return $this->requiredElements;
    }

    /**
     * Set Telegram Passport elements that must be provided to complete the form.
     */
    public function setRequiredElements(array|null $requiredElements): self
    {
        $this->requiredElements = $requiredElements;

        return $this;
    }

    /**
     * Get URL for the privacy policy of the service; may be empty.
     */
    public function getPrivacyPolicyUrl(): string
    {
        return $this->privacyPolicyUrl;
    }

    /**
     * Set URL for the privacy policy of the service; may be empty.
     */
    public function setPrivacyPolicyUrl(string $privacyPolicyUrl): self
    {
        $this->privacyPolicyUrl = $privacyPolicyUrl;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'passportAuthorizationForm',
            'id' => $this->getId(),
            'required_elements' => $this->getRequiredElements(),
            'privacy_policy_url' => $this->getPrivacyPolicyUrl(),
        ];
    }
}
