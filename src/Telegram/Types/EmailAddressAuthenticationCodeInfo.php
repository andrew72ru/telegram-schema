<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Information about the email address authentication code that was sent.
 */
class EmailAddressAuthenticationCodeInfo implements \JsonSerializable
{
    public function __construct(
        /** Pattern of the email address to which an authentication code was sent */
        #[SerializedName('email_address_pattern')]
        private string $emailAddressPattern,
        /** Length of the code; 0 if unknown */
        #[SerializedName('length')]
        private int $length,
    ) {
    }

    /**
     * Get Pattern of the email address to which an authentication code was sent.
     */
    public function getEmailAddressPattern(): string
    {
        return $this->emailAddressPattern;
    }

    /**
     * Set Pattern of the email address to which an authentication code was sent.
     */
    public function setEmailAddressPattern(string $emailAddressPattern): self
    {
        $this->emailAddressPattern = $emailAddressPattern;

        return $this;
    }

    /**
     * Get Length of the code; 0 if unknown.
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * Set Length of the code; 0 if unknown.
     */
    public function setLength(int $length): self
    {
        $this->length = $length;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'emailAddressAuthenticationCodeInfo',
            'email_address_pattern' => $this->getEmailAddressPattern(),
            'length' => $this->getLength(),
        ];
    }
}
