<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents an animation file
 */
class InlineQueryResultAnimation extends InlineQueryResult implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the query result */
        #[SerializedName('id')]
        private string $id,
        /** Animation file */
        #[SerializedName('animation')]
        private Animation|null $animation = null,
        /** Animation title */
        #[SerializedName('title')]
        private string $title,
    ) {
    }

    /**
     * Get Unique identifier of the query result
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set Unique identifier of the query result
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Animation file
     */
    public function getAnimation(): Animation|null
    {
        return $this->animation;
    }

    /**
     * Set Animation file
     */
    public function setAnimation(Animation|null $animation): self
    {
        $this->animation = $animation;

        return $this;
    }

    /**
     * Get Animation title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Animation title
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inlineQueryResultAnimation',
            'id' => $this->getId(),
            'animation' => $this->getAnimation(),
            'title' => $this->getTitle(),
        ];
    }
}
