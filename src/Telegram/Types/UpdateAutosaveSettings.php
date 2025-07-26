<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Autosave settings for some type of chats were updated @scope Type of chats for which autosave settings were updated @settings The new autosave settings; may be null if the settings are reset to default
 */
class UpdateAutosaveSettings extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('scope')]
        private AutosaveSettingsScope|null $scope = null,
        #[SerializedName('settings')]
        private ScopeAutosaveSettings|null $settings = null,
    ) {
    }

    public function getScope(): AutosaveSettingsScope|null
    {
        return $this->scope;
    }

    public function setScope(AutosaveSettingsScope|null $scope): self
    {
        $this->scope = $scope;

        return $this;
    }

    public function getSettings(): ScopeAutosaveSettings|null
    {
        return $this->settings;
    }

    public function setSettings(ScopeAutosaveSettings|null $settings): self
    {
        $this->settings = $settings;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateAutosaveSettings',
            'scope' => $this->getScope(),
            'settings' => $this->getSettings(),
        ];
    }
}
