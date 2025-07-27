<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A Telegram Passport element containing the user's email address @email_address Email address.
 */
class PassportElementEmailAddress extends PassportElement implements \JsonSerializable
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
            '@type' => 'passportElementEmailAddress',
            'email_address' => $this->getEmailAddress(),
        ];
    }
}
