<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Stops the downloading of a file. If a file has already been downloaded, does nothing @file_id Identifier of a file to stop downloading @only_if_pending Pass true to stop downloading only if it hasn't been started, i.e. request hasn't been sent to server
 */
class CancelDownloadFile extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('file_id')]
        private int $fileId,
        #[SerializedName('only_if_pending')]
        private bool $onlyIfPending,
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

    public function getOnlyIfPending(): bool
    {
        return $this->onlyIfPending;
    }

    public function setOnlyIfPending(bool $onlyIfPending): self
    {
        $this->onlyIfPending = $onlyIfPending;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'cancelDownloadFile',
            'file_id' => $this->getFileId(),
            'only_if_pending' => $this->getOnlyIfPending(),
        ];
    }
}
