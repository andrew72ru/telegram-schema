<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An authentication code is a phrase from multiple words delivered via an SMS message to the specified phone number; non-official applications may not receive this type of code.
 */
class AuthenticationCodeTypeSmsPhrase extends AuthenticationCodeType implements \JsonSerializable
{
    public function __construct(
        /** The first word of the phrase if known */
        #[SerializedName('first_word')]
        private string $firstWord,
    ) {
    }

    /**
     * Get The first word of the phrase if known.
     */
    public function getFirstWord(): string
    {
        return $this->firstWord;
    }

    /**
     * Set The first word of the phrase if known.
     */
    public function setFirstWord(string $firstWord): self
    {
        $this->firstWord = $firstWord;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'authenticationCodeTypeSmsPhrase',
            'first_word' => $this->getFirstWord(),
        ];
    }
}
