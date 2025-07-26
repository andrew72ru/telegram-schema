<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An authentication code is a word delivered via an SMS message to the specified phone number; non-official applications may not receive this type of code
 */
class AuthenticationCodeTypeSmsWord extends AuthenticationCodeType implements \JsonSerializable
{
    public function __construct(
        /** The first letters of the word if known */
        #[SerializedName('first_letter')]
        private string $firstLetter,
    ) {
    }

    /**
     * Get The first letters of the word if known
     */
    public function getFirstLetter(): string
    {
        return $this->firstLetter;
    }

    /**
     * Set The first letters of the word if known
     */
    public function setFirstLetter(string $firstLetter): self
    {
        $this->firstLetter = $firstLetter;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'authenticationCodeTypeSmsWord',
            'first_letter' => $this->getFirstLetter(),
        ];
    }
}
