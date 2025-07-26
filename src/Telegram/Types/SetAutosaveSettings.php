<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sets autosave settings for the given scope. The method is guaranteed to work only after at least one call to getAutosaveSettings @scope Autosave settings scope @settings New autosave settings for the scope; pass null to set autosave settings to default
 */
class SetAutosaveSettings extends Ok implements \JsonSerializable
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
            '@type' => 'setAutosaveSettings',
            'scope' => $this->getScope(),
            'settings' => $this->getSettings(),
        ];
    }
}
