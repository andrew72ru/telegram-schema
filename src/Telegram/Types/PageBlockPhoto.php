<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A photo
 */
class PageBlockPhoto extends PageBlock implements \JsonSerializable
{
    public function __construct(
        /** Photo file; may be null */
        #[SerializedName('photo')]
        private Photo|null $photo = null,
        /** Photo caption */
        #[SerializedName('caption')]
        private PageBlockCaption|null $caption = null,
        /** URL that needs to be opened when the photo is clicked */
        #[SerializedName('url')]
        private string $url,
    ) {
    }

    /**
     * Get Photo file; may be null
     */
    public function getPhoto(): Photo|null
    {
        return $this->photo;
    }

    /**
     * Set Photo file; may be null
     */
    public function setPhoto(Photo|null $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get Photo caption
     */
    public function getCaption(): PageBlockCaption|null
    {
        return $this->caption;
    }

    /**
     * Set Photo caption
     */
    public function setCaption(PageBlockCaption|null $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get URL that needs to be opened when the photo is clicked
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set URL that needs to be opened when the photo is clicked
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockPhoto',
            'photo' => $this->getPhoto(),
            'caption' => $this->getCaption(),
            'url' => $this->getUrl(),
        ];
    }
}
