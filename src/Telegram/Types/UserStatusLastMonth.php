<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user is offline, but was online last month @by_my_privacy_settings Exact user's status is hidden because the current user enabled userPrivacySettingShowStatus privacy setting for the user and has no Telegram Premium
 */
class UserStatusLastMonth extends UserStatus implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('by_my_privacy_settings')]
        private bool $byMyPrivacySettings,
    ) {
    }

    public function getByMyPrivacySettings(): bool
    {
        return $this->byMyPrivacySettings;
    }

    public function setByMyPrivacySettings(bool $byMyPrivacySettings): self
    {
        $this->byMyPrivacySettings = $byMyPrivacySettings;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'userStatusLastMonth',
            'by_my_privacy_settings' => $this->getByMyPrivacySettings(),
        ];
    }
}
