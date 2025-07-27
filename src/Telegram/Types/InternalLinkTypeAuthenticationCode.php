<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link contains an authentication code. Call checkAuthenticationCode with the code if the current authorization state is authorizationStateWaitCode @code The authentication code.
 */
class InternalLinkTypeAuthenticationCode extends InternalLinkType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('code')]
        private string $code,
    ) {
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeAuthenticationCode',
            'code' => $this->getCode(),
        ];
    }
}
