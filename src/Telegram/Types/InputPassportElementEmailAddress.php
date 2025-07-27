<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A Telegram Passport element to be saved containing the user's email address @email_address The email address to be saved.
 */
class InputPassportElementEmailAddress extends InputPassportElement implements \JsonSerializable
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
            '@type' => 'inputPassportElementEmailAddress',
            'email_address' => $this->getEmailAddress(),
        ];
    }
}
