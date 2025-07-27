<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sets the email address of the user and sends an authentication code to the email address. Works only when the current authorization state is authorizationStateWaitEmailAddress @email_address The email address of the user.
 */
class SetAuthenticationEmailAddress extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('email_address')]
        private string $emailAddress,
    ) {
    }

    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    public function setEmailAddress(string $emailAddress): self
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setAuthenticationEmailAddress',
            'email_address' => $this->getEmailAddress(),
        ];
    }
}
