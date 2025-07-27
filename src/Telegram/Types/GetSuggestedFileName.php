<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns suggested name for saving a file in a given directory @file_id Identifier of the file @directory Directory in which the file is expected to be saved.
 */
class GetSuggestedFileName extends Text implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('file_id')]
        private int $fileId,
        #[SerializedName('directory')]
        private string $directory,
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

    public function getDirectory(): string
    {
        return $this->directory;
    }

    public function setDirectory(string $directory): self
    {
        $this->directory = $directory;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getSuggestedFileName',
            'file_id' => $this->getFileId(),
            'directory' => $this->getDirectory(),
        ];
    }
}
