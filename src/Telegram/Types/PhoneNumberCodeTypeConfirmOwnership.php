<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Confirms ownership of a phone number to prevent account deletion while handling links of the type internalLinkTypePhoneNumberConfirmation.
 */
class PhoneNumberCodeTypeConfirmOwnership extends PhoneNumberCodeType implements \JsonSerializable
{
    public function __construct(
        /** Hash value from the link */
        #[SerializedName('hash')]
        private string $hash,
    ) {
    }

    /**
     * Get Hash value from the link.
     */
    public function getHash(): string
    {
        return $this->hash;
    }

    /**
     * Set Hash value from the link.
     */
    public function setHash(string $hash): self
    {
        $this->hash = $hash;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'phoneNumberCodeTypeConfirmOwnership',
            'hash' => $this->getHash(),
        ];
    }
}
