<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the login email address of the user. The email address can be changed only if the current user already has login email and passwordState.login_email_address_pattern is non-empty.
 */
class SetLoginEmailAddress extends EmailAddressAuthenticationCodeInfo implements \JsonSerializable
{
    public function __construct(
        /** New login email address */
        #[SerializedName('new_login_email_address')]
        private string $newLoginEmailAddress,
    ) {
    }

    /**
     * Get New login email address.
     */
    public function getNewLoginEmailAddress(): string
    {
        return $this->newLoginEmailAddress;
    }

    /**
     * Set New login email address.
     */
    public function setNewLoginEmailAddress(string $newLoginEmailAddress): self
    {
        $this->newLoginEmailAddress = $newLoginEmailAddress;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setLoginEmailAddress',
            'new_login_email_address' => $this->getNewLoginEmailAddress(),
        ];
    }
}
