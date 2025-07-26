<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Checks the login email address authentication @code Email address authentication to check
 */
class CheckLoginEmailAddressCode extends Ok implements \JsonSerializable
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
            '@type' => 'checkLoginEmailAddressCode',
            'code' => $this->getCode(),
        ];
    }
}
