<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A digit-only authentication code is delivered via a phone call to the specified phone number
 */
class AuthenticationCodeTypeCall extends AuthenticationCodeType implements \JsonSerializable
{
    public function __construct(
        /** Length of the code */
        #[SerializedName('length')]
        private int $length,
    ) {
    }

    /**
     * Get Length of the code
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * Set Length of the code
     */
    public function setLength(int $length): self
    {
        $this->length = $length;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'authenticationCodeTypeCall',
            'length' => $this->getLength(),
        ];
    }
}
