<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a game. Use getInternalLink with internalLinkTypeGame to share the game.
 */
class Game implements \JsonSerializable
{
    public function __construct(
        /** Unique game identifier */
        #[SerializedName('id')]
        private int $id,
        /** Game short name */
        #[SerializedName('short_name')]
        private string $shortName,
        /** Game title */
        #[SerializedName('title')]
        private string $title,
        /** Game text, usually containing scoreboards for a game */
        #[SerializedName('text')]
        private FormattedText|null $text = null,
        /** Describes a game. Use getInternalLink with internalLinkTypeGame to share the game */
        #[SerializedName('description')]
        private string $description,
        /** Game photo */
        #[SerializedName('photo')]
        private Photo|null $photo = null,
        /** Game animation; may be null */
        #[SerializedName('animation')]
        private Animation|null $animation = null,
    ) {
    }

    /**
     * Get Unique game identifier.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Unique game identifier.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Game short name.
     */
    public function getShortName(): string
    {
        return $this->shortName;
    }

    /**
     * Set Game short name.
     */
    public function setShortName(string $shortName): self
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * Get Game title.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Game title.
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Game text, usually containing scoreboards for a game.
     */
    public function getText(): FormattedText|null
    {
        return $this->text;
    }

    /**
     * Set Game text, usually containing scoreboards for a game.
     */
    public function setText(FormattedText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get Describes a game. Use getInternalLink with internalLinkTypeGame to share the game.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set Describes a game. Use getInternalLink with internalLinkTypeGame to share the game.
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get Game photo.
     */
    public function getPhoto(): Photo|null
    {
        return $this->photo;
    }

    /**
     * Set Game photo.
     */
    public function setPhoto(Photo|null $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get Game animation; may be null.
     */
    public function getAnimation(): Animation|null
    {
        return $this->animation;
    }

    /**
     * Set Game animation; may be null.
     */
    public function setAnimation(Animation|null $animation): self
    {
        $this->animation = $animation;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'game',
            'id' => $this->getId(),
            'short_name' => $this->getShortName(),
            'title' => $this->getTitle(),
            'text' => $this->getText(),
            'description' => $this->getDescription(),
            'photo' => $this->getPhoto(),
            'animation' => $this->getAnimation(),
        ];
    }
}
