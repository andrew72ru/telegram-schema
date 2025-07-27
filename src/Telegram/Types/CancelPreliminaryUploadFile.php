<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Stops the preliminary uploading of a file. Supported only for files uploaded by using preliminaryUploadFile @file_id Identifier of the file to stop uploading.
 */
class CancelPreliminaryUploadFile extends Ok implements \JsonSerializable
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
            '@type' => 'cancelPreliminaryUploadFile',
            'file_id' => $this->getFileId(),
        ];
    }
}
