<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about a file with a map thumbnail in PNG format. Only map thumbnail files with size less than 1MB can be downloaded.
 */
class GetMapThumbnailFile extends File implements \JsonSerializable
{
    public function __construct(
        /** Location of the map center */
        #[SerializedName('location')]
        private Location|null $location = null,
        /** Map zoom level; 13-20 */
        #[SerializedName('zoom')]
        private int $zoom,
        /** Map width in pixels before applying scale; 16-1024 */
        #[SerializedName('width')]
        private int $width,
        /** Map height in pixels before applying scale; 16-1024 */
        #[SerializedName('height')]
        private int $height,
        /** Map scale; 1-3 */
        #[SerializedName('scale')]
        private int $scale,
        /** Identifier of a chat in which the thumbnail will be shown. Use 0 if unknown */
        #[SerializedName('chat_id')]
        private int $chatId,
    ) {
    }

    /**
     * Get Location of the map center.
     */
    public function getLocation(): Location|null
    {
        return $this->location;
    }

    /**
     * Set Location of the map center.
     */
    public function setLocation(Location|null $location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get Map zoom level; 13-20.
     */
    public function getZoom(): int
    {
        return $this->zoom;
    }

    /**
     * Set Map zoom level; 13-20.
     */
    public function setZoom(int $zoom): self
    {
        $this->zoom = $zoom;

        return $this;
    }

    /**
     * Get Map width in pixels before applying scale; 16-1024.
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * Set Map width in pixels before applying scale; 16-1024.
     */
    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get Map height in pixels before applying scale; 16-1024.
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * Set Map height in pixels before applying scale; 16-1024.
     */
    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get Map scale; 1-3.
     */
    public function getScale(): int
    {
        return $this->scale;
    }

    /**
     * Set Map scale; 1-3.
     */
    public function setScale(int $scale): self
    {
        $this->scale = $scale;

        return $this;
    }

    /**
     * Get Identifier of a chat in which the thumbnail will be shown. Use 0 if unknown.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of a chat in which the thumbnail will be shown. Use 0 if unknown.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getMapThumbnailFile',
            'location' => $this->getLocation(),
            'zoom' => $this->getZoom(),
            'width' => $this->getWidth(),
            'height' => $this->getHeight(),
            'scale' => $this->getScale(),
            'chat_id' => $this->getChatId(),
        ];
    }
}
