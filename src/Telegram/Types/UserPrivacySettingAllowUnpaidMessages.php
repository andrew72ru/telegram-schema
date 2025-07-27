<?php

declare(strict_types=1);

namespace App\Telegram\Types;

/**
 * A privacy setting for managing whether the user can receive messages without additional payment.
 */
class UserPrivacySettingAllowUnpaidMessages extends UserPrivacySetting implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'userPrivacySettingAllowUnpaidMessages',
        ];
    }
}
