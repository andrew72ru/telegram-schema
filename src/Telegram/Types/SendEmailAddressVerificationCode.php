<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sends a code to verify an email address to be added to a user's Telegram Passport @email_address Email address.
 */
class SendEmailAddressVerificationCode extends EmailAddressAuthenticationCodeInfo implements \JsonSerializable
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
            '@type' => 'sendEmailAddressVerificationCode',
            'email_address' => $this->getEmailAddress(),
        ];
    }
}
