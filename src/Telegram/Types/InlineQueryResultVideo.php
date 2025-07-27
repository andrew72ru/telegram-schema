<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a video.
 */
class InlineQueryResultVideo extends InlineQueryResult implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the query result */
        #[SerializedName('id')]
        private string $id,
        /** Video */
        #[SerializedName('video')]
        private Video|null $video = null,
        /** Title of the video */
        #[SerializedName('title')]
        private string $title,
        /** Represents a video */
        #[SerializedName('description')]
        private string $description,
    ) {
    }

    /**
     * Get Unique identifier of the query result.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set Unique identifier of the query result.
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Video.
     */
    public function getVideo(): Video|null
    {
        return $this->video;
    }

    /**
     * Set Video.
     */
    public function setVideo(Video|null $video): self
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get Title of the video.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Title of the video.
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Represents a video.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set Represents a video.
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inlineQueryResultVideo',
            'id' => $this->getId(),
            'video' => $this->getVideo(),
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
        ];
    }
}
