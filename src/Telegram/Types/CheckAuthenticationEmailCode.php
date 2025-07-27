<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Checks the authentication of an email address. Works only when the current authorization state is authorizationStateWaitEmailCode @code Email address authentication to check.
 */
class CheckAuthenticationEmailCode extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('code')]
        private EmailAddressAuthentication|null $code = null,
    ) {
    }

    public function getCode(): EmailAddressAuthentication|null
    {
        return $this->code;
    }

    public function setCode(EmailAddressAuthentication|null $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'checkAuthenticationEmailCode',
            'code' => $this->getCode(),
        ];
    }
}
