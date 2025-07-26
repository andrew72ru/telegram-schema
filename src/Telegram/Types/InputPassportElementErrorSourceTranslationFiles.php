<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The translation of the document contains an error. The error is considered resolved when the list of files changes @file_hashes Current hashes of all files with the translation
 */
class InputPassportElementErrorSourceTranslationFiles extends InputPassportElementErrorSource implements \JsonSerializable
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
            '@type' => 'inputPassportElementErrorSourceTranslationFiles',
            'file_hashes' => $this->getFileHashes(),
        ];
    }
}
