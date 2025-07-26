<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * TDLib is closing, all subsequent queries will be answered with the error 500. Note that closing TDLib can take a while. All resources will be freed only after authorizationStateClosed has been received
 */
class AuthorizationStateClosing extends AuthorizationState implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'authorizationStateClosing',
        ];
    }
}
