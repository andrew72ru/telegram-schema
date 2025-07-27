<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about supported accent colors for user profile photo background in RGB format.
 */
class ProfileAccentColors implements \JsonSerializable
{
    public function __construct(
        /** The list of 1-2 colors in RGB format, describing the colors, as expected to be shown in the color palette settings */
        #[SerializedName('palette_colors')]
        private array|null $paletteColors = null,
        /** The list of 1-2 colors in RGB format, describing the colors, as expected to be used for the profile photo background */
        #[SerializedName('background_colors')]
        private array|null $backgroundColors = null,
        /** The list of 2 colors in RGB format, describing the colors of the gradient to be used for the unread active story indicator around profile photo */
        #[SerializedName('story_colors')]
        private array|null $storyColors = null,
    ) {
    }

    /**
     * Get The list of 1-2 colors in RGB format, describing the colors, as expected to be shown in the color palette settings.
     */
    public function getPaletteColors(): array|null
    {
        return $this->paletteColors;
    }

    /**
     * Set The list of 1-2 colors in RGB format, describing the colors, as expected to be shown in the color palette settings.
     */
    public function setPaletteColors(array|null $paletteColors): self
    {
        $this->paletteColors = $paletteColors;

        return $this;
    }

    /**
     * Get The list of 1-2 colors in RGB format, describing the colors, as expected to be used for the profile photo background.
     */
    public function getBackgroundColors(): array|null
    {
        return $this->backgroundColors;
    }

    /**
     * Set The list of 1-2 colors in RGB format, describing the colors, as expected to be used for the profile photo background.
     */
    public function setBackgroundColors(array|null $backgroundColors): self
    {
        $this->backgroundColors = $backgroundColors;

        return $this;
    }

    /**
     * Get The list of 2 colors in RGB format, describing the colors of the gradient to be used for the unread active story indicator around profile photo.
     */
    public function getStoryColors(): array|null
    {
        return $this->storyColors;
    }

    /**
     * Set The list of 2 colors in RGB format, describing the colors of the gradient to be used for the unread active story indicator around profile photo.
     */
    public function setStoryColors(array|null $storyColors): self
    {
        $this->storyColors = $storyColors;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'profileAccentColors',
            'palette_colors' => $this->getPaletteColors(),
            'background_colors' => $this->getBackgroundColors(),
            'story_colors' => $this->getStoryColors(),
        ];
    }
}
