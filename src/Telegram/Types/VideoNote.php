<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a video note. The video must be equal in width and height, cropped to a circle, and stored in MPEG4 format
 */
class VideoNote implements \JsonSerializable
{
    public function __construct(
        /** Duration of the video, in seconds; as defined by the sender */
        #[SerializedName('duration')]
        private int $duration,
        /** A waveform representation of the video note's audio in 5-bit format; may be empty if unknown */
        #[SerializedName('waveform')]
        private string $waveform,
        /** Video width and height; as defined by the sender */
        #[SerializedName('length')]
        private int $length,
        /** Video minithumbnail; may be null */
        #[SerializedName('minithumbnail')]
        private Minithumbnail|null $minithumbnail = null,
        /** Video thumbnail in JPEG format; as defined by the sender; may be null */
        #[SerializedName('thumbnail')]
        private Thumbnail|null $thumbnail = null,
        /** Result of speech recognition in the video note; may be null */
        #[SerializedName('speech_recognition_result')]
        private SpeechRecognitionResult|null $speechRecognitionResult = null,
        /** File containing the video */
        #[SerializedName('video')]
        private File|null $video = null,
    ) {
    }

    /**
     * Get Duration of the video, in seconds; as defined by the sender
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * Set Duration of the video, in seconds; as defined by the sender
     */
    public function setDuration(int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get A waveform representation of the video note's audio in 5-bit format; may be empty if unknown
     */
    public function getWaveform(): string
    {
        return $this->waveform;
    }

    /**
     * Set A waveform representation of the video note's audio in 5-bit format; may be empty if unknown
     */
    public function setWaveform(string $waveform): self
    {
        $this->waveform = $waveform;

        return $this;
    }

    /**
     * Get Video width and height; as defined by the sender
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * Set Video width and height; as defined by the sender
     */
    public function setLength(int $length): self
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get Video minithumbnail; may be null
     */
    public function getMinithumbnail(): Minithumbnail|null
    {
        return $this->minithumbnail;
    }

    /**
     * Set Video minithumbnail; may be null
     */
    public function setMinithumbnail(Minithumbnail|null $minithumbnail): self
    {
        $this->minithumbnail = $minithumbnail;

        return $this;
    }

    /**
     * Get Video thumbnail in JPEG format; as defined by the sender; may be null
     */
    public function getThumbnail(): Thumbnail|null
    {
        return $this->thumbnail;
    }

    /**
     * Set Video thumbnail in JPEG format; as defined by the sender; may be null
     */
    public function setThumbnail(Thumbnail|null $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Get Result of speech recognition in the video note; may be null
     */
    public function getSpeechRecognitionResult(): SpeechRecognitionResult|null
    {
        return $this->speechRecognitionResult;
    }

    /**
     * Set Result of speech recognition in the video note; may be null
     */
    public function setSpeechRecognitionResult(SpeechRecognitionResult|null $speechRecognitionResult): self
    {
        $this->speechRecognitionResult = $speechRecognitionResult;

        return $this;
    }

    /**
     * Get File containing the video
     */
    public function getVideo(): File|null
    {
        return $this->video;
    }

    /**
     * Set File containing the video
     */
    public function setVideo(File|null $video): self
    {
        $this->video = $video;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'videoNote',
            'duration' => $this->getDuration(),
            'waveform' => $this->getWaveform(),
            'length' => $this->getLength(),
            'minithumbnail' => $this->getMinithumbnail(),
            'thumbnail' => $this->getThumbnail(),
            'speech_recognition_result' => $this->getSpeechRecognitionResult(),
            'video' => $this->getVideo(),
        ];
    }
}
