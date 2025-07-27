<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A rule to allow certain specified users to do something @user_ids The user identifiers, total number of users in all rules must not exceed 1000.
 */
class UserPrivacySettingRuleAllowUsers extends UserPrivacySettingRule implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('user_ids')]
        private array|null $userIds = null,
    ) {
    }

    public function getUserIds(): array|null
    {
        return $this->userIds;
    }

    public function setUserIds(array|null $userIds): self
    {
        $this->userIds = $userIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'userPrivacySettingRuleAllowUsers',
            'user_ids' => $this->getUserIds(),
        ];
    }
}
