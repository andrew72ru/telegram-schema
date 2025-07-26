<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a voice note
 */
class InlineQueryResultVoiceNote extends InlineQueryResult implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the query result */
        #[SerializedName('id')]
        private string $id,
        /** Voice note */
        #[SerializedName('voice_note')]
        private VoiceNote|null $voiceNote = null,
        /** Title of the voice note */
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
     * Get Voice note
     */
    public function getVoiceNote(): VoiceNote|null
    {
        return $this->voiceNote;
    }

    /**
     * Set Voice note
     */
    public function setVoiceNote(VoiceNote|null $voiceNote): self
    {
        $this->voiceNote = $voiceNote;

        return $this;
    }

    /**
     * Get Title of the voice note
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Title of the voice note
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inlineQueryResultVoiceNote',
            'id' => $this->getId(),
            'voice_note' => $this->getVoiceNote(),
            'title' => $this->getTitle(),
        ];
    }
}
