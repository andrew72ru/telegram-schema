<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the MIME type of a file, guessed by its extension. Returns an empty string on failure. Can be called synchronously @file_name The name of the file or path to the file
 */
class GetFileMimeType extends Text implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('file_name')]
        private string $fileName,
    ) {
    }

    public function getFileName(): string
    {
        return $this->fileName;
    }

    public function setFileName(string $fileName): self
    {
        $this->fileName = $fileName;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getFileMimeType',
            'file_name' => $this->getFileName(),
        ];
    }
}
