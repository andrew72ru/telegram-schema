<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * TDLib needs the user's phone number to authorize. Call setAuthenticationPhoneNumber to provide the phone number, or use requestQrCodeAuthentication or checkAuthenticationBotToken for other authentication options
 */
class AuthorizationStateWaitPhoneNumber extends AuthorizationState implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'authorizationStateWaitPhoneNumber',
        ];
    }
}
