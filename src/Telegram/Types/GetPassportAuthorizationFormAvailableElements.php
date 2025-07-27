<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns already available Telegram Passport elements suitable for completing a Telegram Passport authorization form. Result can be received only once for each authorization form.
 */
class GetPassportAuthorizationFormAvailableElements extends PassportElementsWithErrors implements \JsonSerializable
{
    public function __construct(
        /** Authorization form identifier */
        #[SerializedName('authorization_form_id')]
        private int $authorizationFormId,
        /** The 2-step verification password of the current user */
        #[SerializedName('password')]
        private string $password,
    ) {
    }

    /**
     * Get Authorization form identifier.
     */
    public function getAuthorizationFormId(): int
    {
        return $this->authorizationFormId;
    }

    /**
     * Set Authorization form identifier.
     */
    public function setAuthorizationFormId(int $authorizationFormId): self
    {
        $this->authorizationFormId = $authorizationFormId;

        return $this;
    }

    /**
     * Get The 2-step verification password of the current user.
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set The 2-step verification password of the current user.
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getPassportAuthorizationFormAvailableElements',
            'authorization_form_id' => $this->getAuthorizationFormId(),
            'password' => $this->getPassword(),
        ];
    }
}
