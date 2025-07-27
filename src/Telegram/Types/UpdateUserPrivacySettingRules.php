<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Some privacy setting rules have been changed @setting The privacy setting @rules New privacy rules.
 */
class UpdateUserPrivacySettingRules extends Update implements \JsonSerializable
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
            '@type' => 'updateUserPrivacySettingRules',
            'setting' => $this->getSetting(),
            'rules' => $this->getRules(),
        ];
    }
}
