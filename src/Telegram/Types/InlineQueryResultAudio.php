<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents an audio file.
 */
class InlineQueryResultAudio extends InlineQueryResult implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the query result */
        #[SerializedName('id')]
        private string $id,
        /** Audio file */
        #[SerializedName('audio')]
        private Audio|null $audio = null,
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
     * Get Audio file.
     */
    public function getAudio(): Audio|null
    {
        return $this->audio;
    }

    /**
     * Set Audio file.
     */
    public function setAudio(Audio|null $audio): self
    {
        $this->audio = $audio;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inlineQueryResultAudio',
            'id' => $this->getId(),
            'audio' => $this->getAudio(),
        ];
    }
}
