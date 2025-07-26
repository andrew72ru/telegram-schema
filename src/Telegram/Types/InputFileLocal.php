<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A file defined by a local path @path Local path to the file
 */
class InputFileLocal extends InputFile implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('path')]
        private string $path,
    ) {
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputFileLocal',
            'path' => $this->getPath(),
        ];
    }
}
