<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An embedded web page
 */
class PageBlockEmbedded extends PageBlock implements \JsonSerializable
{
    public function __construct(
        /** URL of the embedded page, if available */
        #[SerializedName('url')]
        private string $url,
        /** HTML-markup of the embedded page */
        #[SerializedName('html')]
        private string $html,
        /** Poster photo, if available; may be null */
        #[SerializedName('poster_photo')]
        private Photo|null $posterPhoto = null,
        /** Block width; 0 if unknown */
        #[SerializedName('width')]
        private int $width,
        /** Block height; 0 if unknown */
        #[SerializedName('height')]
        private int $height,
        /** Block caption */
        #[SerializedName('caption')]
        private PageBlockCaption|null $caption = null,
        /** True, if the block must be full width */
        #[SerializedName('is_full_width')]
        private bool $isFullWidth,
        /** True, if scrolling needs to be allowed */
        #[SerializedName('allow_scrolling')]
        private bool $allowScrolling,
    ) {
    }

    /**
     * Get URL of the embedded page, if available
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set URL of the embedded page, if available
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get HTML-markup of the embedded page
     */
    public function getHtml(): string
    {
        return $this->html;
    }

    /**
     * Set HTML-markup of the embedded page
     */
    public function setHtml(string $html): self
    {
        $this->html = $html;

        return $this;
    }

    /**
     * Get Poster photo, if available; may be null
     */
    public function getPosterPhoto(): Photo|null
    {
        return $this->posterPhoto;
    }

    /**
     * Set Poster photo, if available; may be null
     */
    public function setPosterPhoto(Photo|null $posterPhoto): self
    {
        $this->posterPhoto = $posterPhoto;

        return $this;
    }

    /**
     * Get Block width; 0 if unknown
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * Set Block width; 0 if unknown
     */
    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get Block height; 0 if unknown
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * Set Block height; 0 if unknown
     */
    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get Block caption
     */
    public function getCaption(): PageBlockCaption|null
    {
        return $this->caption;
    }

    /**
     * Set Block caption
     */
    public function setCaption(PageBlockCaption|null $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get True, if the block must be full width
     */
    public function getIsFullWidth(): bool
    {
        return $this->isFullWidth;
    }

    /**
     * Set True, if the block must be full width
     */
    public function setIsFullWidth(bool $isFullWidth): self
    {
        $this->isFullWidth = $isFullWidth;

        return $this;
    }

    /**
     * Get True, if scrolling needs to be allowed
     */
    public function getAllowScrolling(): bool
    {
        return $this->allowScrolling;
    }

    /**
     * Set True, if scrolling needs to be allowed
     */
    public function setAllowScrolling(bool $allowScrolling): self
    {
        $this->allowScrolling = $allowScrolling;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockEmbedded',
            'url' => $this->getUrl(),
            'html' => $this->getHtml(),
            'poster_photo' => $this->getPosterPhoto(),
            'width' => $this->getWidth(),
            'height' => $this->getHeight(),
            'caption' => $this->getCaption(),
            'is_full_width' => $this->getIsFullWidth(),
            'allow_scrolling' => $this->getAllowScrolling(),
        ];
    }
}
