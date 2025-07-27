<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Adds an element to the user's Telegram Passport. May return an error with a message "PHONE_VERIFICATION_NEEDED" or "EMAIL_VERIFICATION_NEEDED" if the chosen phone number or the chosen email address must be verified first.
 */
class SetPassportElement extends PassportElement implements \JsonSerializable
{
    public function __construct(
        /** Input Telegram Passport element */
        #[SerializedName('element')]
        private InputPassportElement|null $element = null,
        /** The 2-step verification password of the current user */
        #[SerializedName('password')]
        private string $password,
    ) {
    }

    /**
     * Get Input Telegram Passport element.
     */
    public function getElement(): InputPassportElement|null
    {
        return $this->element;
    }

    /**
     * Set Input Telegram Passport element.
     */
    public function setElement(InputPassportElement|null $element): self
    {
        $this->element = $element;

        return $this;
    }

    /**
     * Get The 2-step verification password of the current user.
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set The 2-step verification password of the current user.
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setPassportElement',
            'element' => $this->getElement(),
            'password' => $this->getPassword(),
        ];
    }
}
