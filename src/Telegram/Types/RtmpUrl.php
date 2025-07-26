<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents an RTMP URL @url The URL @stream_key Stream key
 */
class RtmpUrl implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('url')]
        private string $url,
        #[SerializedName('stream_key')]
        private string $streamKey,
    ) {
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getStreamKey(): string
    {
        return $this->streamKey;
    }

    public function setStreamKey(string $streamKey): self
    {
        $this->streamKey = $streamKey;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'rtmpUrl',
            'url' => $this->getUrl(),
            'stream_key' => $this->getStreamKey(),
        ];
    }
}
