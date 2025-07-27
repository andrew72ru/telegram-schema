<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An authentication code is delivered by an immediately canceled call to the specified phone number. The phone number that calls is the code that must be entered automatically.
 */
class AuthenticationCodeTypeFlashCall extends AuthenticationCodeType implements \JsonSerializable
{
    public function __construct(
        /** Pattern of the phone number from which the call will be made */
        #[SerializedName('pattern')]
        private string $pattern,
    ) {
    }

    /**
     * Get Pattern of the phone number from which the call will be made.
     */
    public function getPattern(): string
    {
        return $this->pattern;
    }

    /**
     * Set Pattern of the phone number from which the call will be made.
     */
    public function setPattern(string $pattern): self
    {
        $this->pattern = $pattern;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'authenticationCodeTypeFlashCall',
            'pattern' => $this->getPattern(),
        ];
    }
}
