<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains size of downloaded prefix of a file @size The prefix size, in bytes.
 */
class FileDownloadedPrefixSize implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('size')]
        private int $size,
    ) {
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function setSize(int $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'fileDownloadedPrefixSize',
            'size' => $this->getSize(),
        ];
    }
}
