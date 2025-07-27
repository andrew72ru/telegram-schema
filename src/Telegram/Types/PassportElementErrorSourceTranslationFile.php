<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * One of files with the translation of the document contains an error. The error will be considered resolved when the file changes @file_index Index of a file with the error.
 */
class PassportElementErrorSourceTranslationFile extends PassportElementErrorSource implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('file_index')]
        private int $fileIndex,
    ) {
    }

    public function getFileIndex(): int
    {
        return $this->fileIndex;
    }

    public function setFileIndex(int $fileIndex): self
    {
        $this->fileIndex = $fileIndex;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'passportElementErrorSourceTranslationFile',
            'file_index' => $this->getFileIndex(),
        ];
    }
}
