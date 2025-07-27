<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The file contains an error. The error is considered resolved when the file changes @file_hash Current hash of the file which has the error.
 */
class InputPassportElementErrorSourceFile extends InputPassportElementErrorSource implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('file_hash')]
        private string $fileHash,
    ) {
    }

    public function getFileHash(): string
    {
        return $this->fileHash;
    }

    public function setFileHash(string $fileHash): self
    {
        $this->fileHash = $fileHash;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputPassportElementErrorSourceFile',
            'file_hash' => $this->getFileHash(),
        ];
    }
}
