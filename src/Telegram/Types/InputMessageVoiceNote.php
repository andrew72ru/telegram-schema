<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A voice note message.
 */
class InputMessageVoiceNote extends InputMessageContent implements \JsonSerializable
{
    public function __construct(
        /** Voice note to be sent. The voice note must be encoded with the Opus codec and stored inside an OGG container with a single audio channel, or be in MP3 or M4A format as regular audio */
        #[SerializedName('voice_note')]
        private InputFile|null $voiceNote = null,
        /** Duration of the voice note, in seconds */
        #[SerializedName('duration')]
        private int $duration,
        /** Waveform representation of the voice note in 5-bit format */
        #[SerializedName('waveform')]
        private string $waveform,
        /** Voice note caption; may be null if empty; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters */
        #[SerializedName('caption')]
        private FormattedText|null $caption = null,
        /** Voice note self-destruct type; may be null if none; pass null if none; private chats only */
        #[SerializedName('self_destruct_type')]
        private MessageSelfDestructType|null $selfDestructType = null,
    ) {
    }

    /**
     * Get Voice note to be sent. The voice note must be encoded with the Opus codec and stored inside an OGG container with a single audio channel, or be in MP3 or M4A format as regular audio.
     */
    public function getVoiceNote(): InputFile|null
    {
        return $this->voiceNote;
    }

    /**
     * Set Voice note to be sent. The voice note must be encoded with the Opus codec and stored inside an OGG container with a single audio channel, or be in MP3 or M4A format as regular audio.
     */
    public function setVoiceNote(InputFile|null $voiceNote): self
    {
        $this->voiceNote = $voiceNote;

        return $this;
    }

    /**
     * Get Duration of the voice note, in seconds.
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * Set Duration of the voice note, in seconds.
     */
    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get Waveform representation of the voice note in 5-bit format.
     */
    public function getWaveform(): string
    {
        return $this->waveform;
    }

    /**
     * Set Waveform representation of the voice note in 5-bit format.
     */
    public function setWaveform(string $waveform): self
    {
        $this->waveform = $waveform;

        return $this;
    }

    /**
     * Get Voice note caption; may be null if empty; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters.
     */
    public function getCaption(): FormattedText|null
    {
        return $this->caption;
    }

    /**
     * Set Voice note caption; may be null if empty; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters.
     */
    public function setCaption(FormattedText|null $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    /**
     * Get Voice note self-destruct type; may be null if none; pass null if none; private chats only.
     */
    public function getSelfDestructType(): MessageSelfDestructType|null
    {
        return $this->selfDestructType;
    }

    /**
     * Set Voice note self-destruct type; may be null if none; pass null if none; private chats only.
     */
    public function setSelfDestructType(MessageSelfDestructType|null $selfDestructType): self
    {
        $this->selfDestructType = $selfDestructType;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputMessageVoiceNote',
            'voice_note' => $this->getVoiceNote(),
            'duration' => $this->getDuration(),
            'waveform' => $this->getWaveform(),
            'caption' => $this->getCaption(),
            'self_destruct_type' => $this->getSelfDestructType(),
        ];
    }
}
