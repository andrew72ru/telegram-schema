<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes the current weather
 */
class CurrentWeather implements \JsonSerializable
{
    public function __construct(
        /** Temperature, in degree Celsius */
        #[SerializedName('temperature')]
        private float $temperature,
        /** Emoji representing the weather */
        #[SerializedName('emoji')]
        private string $emoji,
    ) {
    }

    /**
     * Get Temperature, in degree Celsius
     */
    public function getTemperature(): float
    {
        return $this->temperature;
    }

    /**
     * Set Temperature, in degree Celsius
     */
    public function setTemperature(float $temperature): self
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get Emoji representing the weather
     */
    public function getEmoji(): string
    {
        return $this->emoji;
    }

    /**
     * Set Emoji representing the weather
     */
    public function setEmoji(string $emoji): self
    {
        $this->emoji = $emoji;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'currentWeather',
            'temperature' => $this->getTemperature(),
            'emoji' => $this->getEmoji(),
        ];
    }
}
