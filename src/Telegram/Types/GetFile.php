<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about a file. This is an offline method @file_id Identifier of the file to get
 */
class GetFile extends File implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('file_id')]
        private int $fileId,
    ) {
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }

    public function setFileId(int $fileId): self
    {
        $this->fileId = $fileId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getFile',
            'file_id' => $this->getFileId(),
        ];
    }
}
