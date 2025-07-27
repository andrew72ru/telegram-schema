<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes user privacy settings @setting The privacy setting @rules The new privacy rules.
 */
class SetUserPrivacySettingRules extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('setting')]
        private UserPrivacySetting|null $setting = null,
        #[SerializedName('rules')]
        private UserPrivacySettingRules|null $rules = null,
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

    public function getRules(): UserPrivacySettingRules|null
    {
        return $this->rules;
    }

    public function setRules(UserPrivacySettingRules|null $rules): self
    {
        $this->rules = $rules;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setUserPrivacySettingRules',
            'setting' => $this->getSetting(),
            'rules' => $this->getRules(),
        ];
    }
}
