<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sets default background for chats; adds the background to the list of installed backgrounds
 */
class SetDefaultBackground extends Background implements \JsonSerializable
{
    public function __construct(
        /** The input background to use; pass null to create a new filled background */
        #[SerializedName('background')]
        private InputBackground|null $background = null,
        /** Background type; pass null to use the default type of the remote background; backgroundTypeChatTheme isn't supported */
        #[SerializedName('type')]
        private BackgroundType|null $type = null,
        /** Pass true if the background is set for a dark theme */
        #[SerializedName('for_dark_theme')]
        private bool $forDarkTheme,
    ) {
    }

    /**
     * Get The input background to use; pass null to create a new filled background
     */
    public function getBackground(): InputBackground|null
    {
        return $this->background;
    }

    /**
     * Set The input background to use; pass null to create a new filled background
     */
    public function setBackground(InputBackground|null $background): self
    {
        $this->background = $background;

        return $this;
    }

    /**
     * Get Background type; pass null to use the default type of the remote background; backgroundTypeChatTheme isn't supported
     */
    public function getType(): BackgroundType|null
    {
        return $this->type;
    }

    /**
     * Set Background type; pass null to use the default type of the remote background; backgroundTypeChatTheme isn't supported
     */
    public function setType(BackgroundType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get Pass true if the background is set for a dark theme
     */
    public function getForDarkTheme(): bool
    {
        return $this->forDarkTheme;
    }

    /**
     * Set Pass true if the background is set for a dark theme
     */
    public function setForDarkTheme(bool $forDarkTheme): self
    {
        $this->forDarkTheme = $forDarkTheme;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setDefaultBackground',
            'background' => $this->getBackground(),
            'type' => $this->getType(),
            'for_dark_theme' => $this->getForDarkTheme(),
        ];
    }
}
