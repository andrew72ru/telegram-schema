<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A rule to restrict all users from doing something
 */
class UserPrivacySettingRuleRestrictAll extends UserPrivacySettingRule implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'userPrivacySettingRuleRestrictAll',
        ];
    }
}
