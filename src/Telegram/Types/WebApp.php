<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a Web App. Use getInternalLink with internalLinkTypeWebApp to share the Web App
 */
class WebApp implements \JsonSerializable
{
    public function __construct(
        /** Web App short name */
        #[SerializedName('short_name')]
        private string $shortName,
        /** Web App title */
        #[SerializedName('title')]
        private string $title,
        /** Describes a Web App. Use getInternalLink with internalLinkTypeWebApp to share the Web App */
        #[SerializedName('description')]
        private string $description,
        /** Web App photo */
        #[SerializedName('photo')]
        private Photo|null $photo = null,
        /** Web App animation; may be null */
        #[SerializedName('animation')]
        private Animation|null $animation = null,
    ) {
    }

    /**
     * Get Web App short name
     */
    public function getShortName(): string
    {
        return $this->shortName;
    }

    /**
     * Set Web App short name
     */
    public function setShortName(string $shortName): self
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * Get Web App title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Web App title
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Describes a Web App. Use getInternalLink with internalLinkTypeWebApp to share the Web App
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set Describes a Web App. Use getInternalLink with internalLinkTypeWebApp to share the Web App
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get Web App photo
     */
    public function getPhoto(): Photo|null
    {
        return $this->photo;
    }

    /**
     * Set Web App photo
     */
    public function setPhoto(Photo|null $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get Web App animation; may be null
     */
    public function getAnimation(): Animation|null
    {
        return $this->animation;
    }

    /**
     * Set Web App animation; may be null
     */
    public function setAnimation(Animation|null $animation): self
    {
        $this->animation = $animation;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'webApp',
            'short_name' => $this->getShortName(),
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'photo' => $this->getPhoto(),
            'animation' => $this->getAnimation(),
        ];
    }
}
