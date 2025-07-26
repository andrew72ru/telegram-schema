<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The list of attached files contains an error. The error is considered resolved when the file list changes @file_hashes Current hashes of all attached files
 */
class InputPassportElementErrorSourceFiles extends InputPassportElementErrorSource implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('file_hashes')]
        private array|null $fileHashes = null,
    ) {
    }

    public function getFileHashes(): array|null
    {
        return $this->fileHashes;
    }

    public function setFileHashes(array|null $fileHashes): self
    {
        $this->fileHashes = $fileHashes;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputPassportElementErrorSourceFiles',
            'file_hashes' => $this->getFileHashes(),
        ];
    }
}
