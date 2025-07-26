<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Removes 2-step verification password without previous password and access to recovery email address. The password can't be reset immediately and the request needs to be repeated after the specified time
 */
class ResetPassword extends ResetPasswordResult implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'resetPassword',
        ];
    }
}
