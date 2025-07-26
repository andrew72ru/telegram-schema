<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * TDLib needs the user's authentication code to authorize. Call checkAuthenticationCode to check the code @code_info Information about the authorization code that was sent
 */
class AuthorizationStateWaitCode extends AuthorizationState implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('code_info')]
        private AuthenticationCodeInfo|null $codeInfo = null,
    ) {
    }

    public function getCodeInfo(): AuthenticationCodeInfo|null
    {
        return $this->codeInfo;
    }

    public function setCodeInfo(AuthenticationCodeInfo|null $codeInfo): self
    {
        $this->codeInfo = $codeInfo;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'authorizationStateWaitCode',
            'code_info' => $this->getCodeInfo(),
        ];
    }
}
