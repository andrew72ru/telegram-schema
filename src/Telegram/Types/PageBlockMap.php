<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A map.
 */
class PageBlockMap extends PageBlock implements \JsonSerializable
{
    public function __construct(
        /** Location of the map center */
        #[SerializedName('location')]
        private Location|null $location = null,
        /** Map zoom level */
        #[SerializedName('zoom')]
        private int $zoom,
        /** Map width */
        #[SerializedName('width')]
        private int $width,
        /** Map height */
        #[SerializedName('height')]
        private int $height,
        /** Block caption */
        #[SerializedName('caption')]
        private PageBlockCaption|null $caption = null,
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
     * Get Map zoom level.
     */
    public function getZoom(): int
    {
        return $this->zoom;
    }

    /**
     * Set Map zoom level.
     */
    public function setZoom(int $zoom): self
    {
        $this->zoom = $zoom;

        return $this;
    }

    /**
     * Get Map width.
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * Set Map width.
     */
    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get Map height.
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * Set Map height.
     */
    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get Block caption.
     */
    public function getCaption(): PageBlockCaption|null
    {
        return $this->caption;
    }

    /**
     * Set Block caption.
     */
    public function setCaption(PageBlockCaption|null $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockMap',
            'location' => $this->getLocation(),
            'zoom' => $this->getZoom(),
            'width' => $this->getWidth(),
            'height' => $this->getHeight(),
            'caption' => $this->getCaption(),
        ];
    }
}
