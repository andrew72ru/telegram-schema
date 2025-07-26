<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a voice note
 */
class VoiceNote implements \JsonSerializable
{
    public function __construct(
        /** Duration of the voice note, in seconds; as defined by the sender */
        #[SerializedName('duration')]
        private int $duration,
        /** A waveform representation of the voice note in 5-bit format */
        #[SerializedName('waveform')]
        private string $waveform,
        /** MIME type of the file; as defined by the sender. Usually, one of "audio/ogg" for Opus in an OGG container, "audio/mpeg" for an MP3 audio, or "audio/mp4" for an M4A audio */
        #[SerializedName('mime_type')]
        private string $mimeType,
        /** Result of speech recognition in the voice note; may be null */
        #[SerializedName('speech_recognition_result')]
        private SpeechRecognitionResult|null $speechRecognitionResult = null,
        /** File containing the voice note */
        #[SerializedName('voice')]
        private File|null $voice = null,
    ) {
    }

    /**
     * Get Duration of the voice note, in seconds; as defined by the sender
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * Set Duration of the voice note, in seconds; as defined by the sender
     */
    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get A waveform representation of the voice note in 5-bit format
     */
    public function getWaveform(): string
    {
        return $this->waveform;
    }

    /**
     * Set A waveform representation of the voice note in 5-bit format
     */
    public function setWaveform(string $waveform): self
    {
        $this->waveform = $waveform;

        return $this;
    }

    /**
     * Get MIME type of the file; as defined by the sender. Usually, one of "audio/ogg" for Opus in an OGG container, "audio/mpeg" for an MP3 audio, or "audio/mp4" for an M4A audio
     */
    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    /**
     * Set MIME type of the file; as defined by the sender. Usually, one of "audio/ogg" for Opus in an OGG container, "audio/mpeg" for an MP3 audio, or "audio/mp4" for an M4A audio
     */
    public function setMimeType(string $mimeType): self
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    /**
     * Get Result of speech recognition in the voice note; may be null
     */
    public function getSpeechRecognitionResult(): SpeechRecognitionResult|null
    {
        return $this->speechRecognitionResult;
    }

    /**
     * Set Result of speech recognition in the voice note; may be null
     */
    public function setSpeechRecognitionResult(SpeechRecognitionResult|null $speechRecognitionResult): self
    {
        $this->speechRecognitionResult = $speechRecognitionResult;

        return $this;
    }

    /**
     * Get File containing the voice note
     */
    public function getVoice(): File|null
    {
        return $this->voice;
    }

    /**
     * Set File containing the voice note
     */
    public function setVoice(File|null $voice): self
    {
        $this->voice = $voice;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'voiceNote',
            'duration' => $this->getDuration(),
            'waveform' => $this->getWaveform(),
            'mime_type' => $this->getMimeType(),
            'speech_recognition_result' => $this->getSpeechRecognitionResult(),
            'voice' => $this->getVoice(),
        ];
    }
}
