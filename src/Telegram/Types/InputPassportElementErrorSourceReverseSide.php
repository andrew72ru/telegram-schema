<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The reverse side of the document contains an error. The error is considered resolved when the file with the reverse side of the document changes @file_hash Current hash of the file containing the reverse side.
 */
class InputPassportElementErrorSourceReverseSide extends InputPassportElementErrorSource implements \JsonSerializable
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
            '@type' => 'inputPassportElementErrorSourceReverseSide',
            'file_hash' => $this->getFileHash(),
        ];
    }
}
