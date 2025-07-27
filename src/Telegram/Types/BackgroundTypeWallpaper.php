<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A wallpaper in JPEG format.
 */
class BackgroundTypeWallpaper extends BackgroundType implements \JsonSerializable
{
    public function __construct(
        /** True, if the wallpaper must be downscaled to fit in 450x450 square and then box-blurred with radius 12 */
        #[SerializedName('is_blurred')]
        private bool $isBlurred,
        /** True, if the background needs to be slightly moved when device is tilted */
        #[SerializedName('is_moving')]
        private bool $isMoving,
    ) {
    }

    /**
     * Get True, if the wallpaper must be downscaled to fit in 450x450 square and then box-blurred with radius 12.
     */
    public function getIsBlurred(): bool
    {
        return $this->isBlurred;
    }

    /**
     * Set True, if the wallpaper must be downscaled to fit in 450x450 square and then box-blurred with radius 12.
     */
    public function setIsBlurred(bool $isBlurred): self
    {
        $this->isBlurred = $isBlurred;

        return $this;
    }

    /**
     * Get True, if the background needs to be slightly moved when device is tilted.
     */
    public function getIsMoving(): bool
    {
        return $this->isMoving;
    }

    /**
     * Set True, if the background needs to be slightly moved when device is tilted.
     */
    public function setIsMoving(bool $isMoving): self
    {
        $this->isMoving = $isMoving;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'backgroundTypeWallpaper',
            'is_blurred' => $this->getIsBlurred(),
            'is_moving' => $this->getIsMoving(),
        ];
    }
}
