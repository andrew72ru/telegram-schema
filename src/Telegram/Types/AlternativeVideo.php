<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes an alternative re-encoded quality of a video file
 */
class AlternativeVideo implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the alternative video, which is used in the HLS file */
        #[SerializedName('id')]
        private int $id,
        /** Video width */
        #[SerializedName('width')]
        private int $width,
        /** Video height */
        #[SerializedName('height')]
        private int $height,
        /** Codec used for video file encoding, for example, "h264", "h265", or "av1" */
        #[SerializedName('codec')]
        private string $codec,
        /** HLS file describing the video */
        #[SerializedName('hls_file')]
        private File|null $hlsFile = null,
        /** File containing the video */
        #[SerializedName('video')]
        private File|null $video = null,
    ) {
    }

    /**
     * Get Unique identifier of the alternative video, which is used in the HLS file
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Unique identifier of the alternative video, which is used in the HLS file
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Video width
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * Set Video width
     */
    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get Video height
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * Set Video height
     */
    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get Codec used for video file encoding, for example, "h264", "h265", or "av1"
     */
    public function getCodec(): string
    {
        return $this->codec;
    }

    /**
     * Set Codec used for video file encoding, for example, "h264", "h265", or "av1"
     */
    public function setCodec(string $codec): self
    {
        $this->codec = $codec;

        return $this;
    }

    /**
     * Get HLS file describing the video
     */
    public function getHlsFile(): File|null
    {
        return $this->hlsFile;
    }

    /**
     * Set HLS file describing the video
     */
    public function setHlsFile(File|null $hlsFile): self
    {
        $this->hlsFile = $hlsFile;

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
            '@type' => 'alternativeVideo',
            'id' => $this->getId(),
            'width' => $this->getWidth(),
            'height' => $this->getHeight(),
            'codec' => $this->getCodec(),
            'hls_file' => $this->getHlsFile(),
            'video' => $this->getVideo(),
        ];
    }
}
