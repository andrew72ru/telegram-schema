<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a list of video chat streams @streams A list of video chat streams.
 */
class VideoChatStreams implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('streams')]
        private array|null $streams = null,
    ) {
    }

    public function getStreams(): array|null
    {
        return $this->streams;
    }

    public function setStreams(array|null $streams): self
    {
        $this->streams = $streams;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'videoChatStreams',
            'streams' => $this->getStreams(),
        ];
    }
}
