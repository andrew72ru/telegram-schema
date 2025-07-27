<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns current verbosity level for a specified TDLib internal log tag. Can be called synchronously @tag Logging tag to change verbosity level.
 */
class GetLogTagVerbosityLevel extends LogVerbosityLevel implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('tag')]
        private string $tag,
    ) {
    }

    public function getTag(): string
    {
        return $this->tag;
    }

    public function setTag(string $tag): self
    {
        $this->tag = $tag;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getLogTagVerbosityLevel',
            'tag' => $this->getTag(),
        ];
    }
}
