<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Options to be used when a Web App is opened
 */
class WebAppOpenParameters implements \JsonSerializable
{
    public function __construct(
        /** Preferred Web App theme; pass null to use the default theme */
        #[SerializedName('theme')]
        private ThemeParameters|null $theme = null,
        /** Short name of the current application; 0-64 English letters, digits, and underscores */
        #[SerializedName('application_name')]
        private string $applicationName,
        /** The mode in which the Web App is opened; pass null to open in webAppOpenModeFullSize */
        #[SerializedName('mode')]
        private WebAppOpenMode|null $mode = null,
    ) {
    }

    /**
     * Get Preferred Web App theme; pass null to use the default theme
     */
    public function getTheme(): ThemeParameters|null
    {
        return $this->theme;
    }

    /**
     * Set Preferred Web App theme; pass null to use the default theme
     */
    public function setTheme(ThemeParameters|null $theme): self
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * Get Short name of the current application; 0-64 English letters, digits, and underscores
     */
    public function getApplicationName(): string
    {
        return $this->applicationName;
    }

    /**
     * Set Short name of the current application; 0-64 English letters, digits, and underscores
     */
    public function setApplicationName(string $applicationName): self
    {
        $this->applicationName = $applicationName;

        return $this;
    }

    /**
     * Get The mode in which the Web App is opened; pass null to open in webAppOpenModeFullSize
     */
    public function getMode(): WebAppOpenMode|null
    {
        return $this->mode;
    }

    /**
     * Set The mode in which the Web App is opened; pass null to open in webAppOpenModeFullSize
     */
    public function setMode(WebAppOpenMode|null $mode): self
    {
        $this->mode = $mode;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'webAppOpenParameters',
            'theme' => $this->getTheme(),
            'application_name' => $this->getApplicationName(),
            'mode' => $this->getMode(),
        ];
    }
}
