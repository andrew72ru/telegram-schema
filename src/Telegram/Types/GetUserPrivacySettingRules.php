<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the current privacy settings @setting The privacy setting.
 */
class GetUserPrivacySettingRules extends UserPrivacySettingRules implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('setting')]
        private UserPrivacySetting|null $setting = null,
    ) {
    }

    public function getSetting(): UserPrivacySetting|null
    {
        return $this->setting;
    }

    public function setSetting(UserPrivacySetting|null $setting): self
    {
        $this->setting = $setting;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getUserPrivacySettingRules',
            'setting' => $this->getSetting(),
        ];
    }
}
