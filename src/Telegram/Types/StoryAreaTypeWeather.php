<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An area with information about weather.
 */
class StoryAreaTypeWeather extends StoryAreaType implements \JsonSerializable
{
    public function __construct(
        /** Temperature, in degree Celsius */
        #[SerializedName('temperature')]
        private float $temperature,
        /** Emoji representing the weather */
        #[SerializedName('emoji')]
        private string $emoji,
        /** A color of the area background in the ARGB format */
        #[SerializedName('background_color')]
        private int $backgroundColor,
    ) {
    }

    /**
     * Get Temperature, in degree Celsius.
     */
    public function getTemperature(): float
    {
        return $this->temperature;
    }

    /**
     * Set Temperature, in degree Celsius.
     */
    public function setTemperature(float $temperature): self
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get Emoji representing the weather.
     */
    public function getEmoji(): string
    {
        return $this->emoji;
    }

    /**
     * Set Emoji representing the weather.
     */
    public function setEmoji(string $emoji): self
    {
        $this->emoji = $emoji;

        return $this;
    }

    /**
     * Get A color of the area background in the ARGB format.
     */
    public function getBackgroundColor(): int
    {
        return $this->backgroundColor;
    }

    /**
     * Set A color of the area background in the ARGB format.
     */
    public function setBackgroundColor(int $backgroundColor): self
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'storyAreaTypeWeather',
            'temperature' => $this->getTemperature(),
            'emoji' => $this->getEmoji(),
            'background_color' => $this->getBackgroundColor(),
        ];
    }
}
