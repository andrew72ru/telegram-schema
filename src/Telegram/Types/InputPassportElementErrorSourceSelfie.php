<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The selfie contains an error. The error is considered resolved when the file with the selfie changes @file_hash Current hash of the file containing the selfie
 */
class InputPassportElementErrorSourceSelfie extends InputPassportElementErrorSource implements \JsonSerializable
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
            '@type' => 'inputPassportElementErrorSourceSelfie',
            'file_hash' => $this->getFileHash(),
        ];
    }
}
