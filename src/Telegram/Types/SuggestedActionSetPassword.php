<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Suggests the user to set a 2-step verification password to be able to log in again.
 */
class SuggestedActionSetPassword extends SuggestedAction implements \JsonSerializable
{
    public function __construct(
        /** The number of days to pass between consecutive authorizations if the user declines to set password; if 0, then the user is advised to set the password for security reasons */
        #[SerializedName('authorization_delay')]
        private int $authorizationDelay,
    ) {
    }

    /**
     * Get The number of days to pass between consecutive authorizations if the user declines to set password; if 0, then the user is advised to set the password for security reasons.
     */
    public function getAuthorizationDelay(): int
    {
        return $this->authorizationDelay;
    }

    /**
     * Set The number of days to pass between consecutive authorizations if the user declines to set password; if 0, then the user is advised to set the password for security reasons.
     */
    public function setAuthorizationDelay(int $authorizationDelay): self
    {
        $this->authorizationDelay = $authorizationDelay;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'suggestedActionSetPassword',
            'authorization_delay' => $this->getAuthorizationDelay(),
        ];
    }
}
