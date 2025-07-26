<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sends a Telegram Passport authorization form, effectively sharing data with the service. This method must be called after getPassportAuthorizationFormAvailableElements if some previously available elements are going to be reused
 */
class SendPassportAuthorizationForm extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Authorization form identifier */
        #[SerializedName('authorization_form_id')]
        private int $authorizationFormId,
        /** Types of Telegram Passport elements chosen by user to complete the authorization form */
        #[SerializedName('types')]
        private array|null $types = null,
    ) {
    }

    /**
     * Get Authorization form identifier
     */
    public function getAuthorizationFormId(): int
    {
        return $this->authorizationFormId;
    }

    /**
     * Set Authorization form identifier
     */
    public function setAuthorizationFormId(int $authorizationFormId): self
    {
        $this->authorizationFormId = $authorizationFormId;

        return $this;
    }

    /**
     * Get Types of Telegram Passport elements chosen by user to complete the authorization form
     */
    public function getTypes(): array|null
    {
        return $this->types;
    }

    /**
     * Set Types of Telegram Passport elements chosen by user to complete the authorization form
     */
    public function setTypes(array|null $types): self
    {
        $this->types = $types;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sendPassportAuthorizationForm',
            'authorization_form_id' => $this->getAuthorizationFormId(),
            'types' => $this->getTypes(),
        ];
    }
}
