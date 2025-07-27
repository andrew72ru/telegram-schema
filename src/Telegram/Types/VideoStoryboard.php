<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a storyboard for a video.
 */
class VideoStoryboard implements \JsonSerializable
{
    public function __construct(
        /** A JPEG file that contains tiled previews of video */
        #[SerializedName('storyboard_file')]
        private File|null $storyboardFile = null,
        /** Width of a tile */
        #[SerializedName('width')]
        private int $width,
        /** Height of a tile */
        #[SerializedName('height')]
        private int $height,
        /** File that describes mapping of position in the video to a tile in the JPEG file */
        #[SerializedName('map_file')]
        private File|null $mapFile = null,
    ) {
    }

    /**
     * Get A JPEG file that contains tiled previews of video.
     */
    public function getStoryboardFile(): File|null
    {
        return $this->storyboardFile;
    }

    /**
     * Set A JPEG file that contains tiled previews of video.
     */
    public function setStoryboardFile(File|null $storyboardFile): self
    {
        $this->storyboardFile = $storyboardFile;

        return $this;
    }

    /**
     * Get Width of a tile.
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * Set Width of a tile.
     */
    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get Height of a tile.
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * Set Height of a tile.
     */
    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get File that describes mapping of position in the video to a tile in the JPEG file.
     */
    public function getMapFile(): File|null
    {
        return $this->mapFile;
    }

    /**
     * Set File that describes mapping of position in the video to a tile in the JPEG file.
     */
    public function setMapFile(File|null $mapFile): self
    {
        $this->mapFile = $mapFile;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'videoStoryboard',
            'storyboard_file' => $this->getStoryboardFile(),
            'width' => $this->getWidth(),
            'height' => $this->getHeight(),
            'map_file' => $this->getMapFile(),
        ];
    }
}
