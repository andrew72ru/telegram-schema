<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a chat theme
 */
class ChatTheme implements \JsonSerializable
{
    public function __construct(
        /** Theme name */
        #[SerializedName('name')]
        private string $name,
        /** Theme settings for a light chat theme */
        #[SerializedName('light_settings')]
        private ThemeSettings|null $lightSettings = null,
        /** Theme settings for a dark chat theme */
        #[SerializedName('dark_settings')]
        private ThemeSettings|null $darkSettings = null,
    ) {
    }

    /**
     * Get Theme name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set Theme name
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get Theme settings for a light chat theme
     */
    public function getLightSettings(): ThemeSettings|null
    {
        return $this->lightSettings;
    }

    /**
     * Set Theme settings for a light chat theme
     */
    public function setLightSettings(ThemeSettings|null $lightSettings): self
    {
        $this->lightSettings = $lightSettings;

        return $this;
    }

    /**
     * Get Theme settings for a dark chat theme
     */
    public function getDarkSettings(): ThemeSettings|null
    {
        return $this->darkSettings;
    }

    /**
     * Set Theme settings for a dark chat theme
     */
    public function setDarkSettings(ThemeSettings|null $darkSettings): self
    {
        $this->darkSettings = $darkSettings;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatTheme',
            'name' => $this->getName(),
            'light_settings' => $this->getLightSettings(),
            'dark_settings' => $this->getDarkSettings(),
        ];
    }
}
