<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of advertisements to be shown while a video from a message is watched
 */
class VideoMessageAdvertisements implements \JsonSerializable
{
    public function __construct(
        /** List of advertisements */
        #[SerializedName('advertisements')]
        private array|null $advertisements = null,
        /** Delay before the first advertisement is shown, in seconds */
        #[SerializedName('start_delay')]
        private int $startDelay,
        /** Delay between consecutive advertisements, in seconds */
        #[SerializedName('between_delay')]
        private int $betweenDelay,
    ) {
    }

    /**
     * Get List of advertisements
     */
    public function getAdvertisements(): array|null
    {
        return $this->advertisements;
    }

    /**
     * Set List of advertisements
     */
    public function setAdvertisements(array|null $advertisements): self
    {
        $this->advertisements = $advertisements;

        return $this;
    }

    /**
     * Get Delay before the first advertisement is shown, in seconds
     */
    public function getStartDelay(): int
    {
        return $this->startDelay;
    }

    /**
     * Set Delay before the first advertisement is shown, in seconds
     */
    public function setStartDelay(int $startDelay): self
    {
        $this->startDelay = $startDelay;

        return $this;
    }

    /**
     * Get Delay between consecutive advertisements, in seconds
     */
    public function getBetweenDelay(): int
    {
        return $this->betweenDelay;
    }

    /**
     * Set Delay between consecutive advertisements, in seconds
     */
    public function setBetweenDelay(int $betweenDelay): self
    {
        $this->betweenDelay = $betweenDelay;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'videoMessageAdvertisements',
            'advertisements' => $this->getAdvertisements(),
            'start_delay' => $this->getStartDelay(),
            'between_delay' => $this->getBetweenDelay(),
        ];
    }
}
