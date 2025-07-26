<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A rule to allow all users to do something
 */
class UserPrivacySettingRuleAllowAll extends UserPrivacySettingRule implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'userPrivacySettingRuleAllowAll',
        ];
    }
}
