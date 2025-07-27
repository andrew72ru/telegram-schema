<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Removes potentially dangerous characters from the name of a file. Returns an empty string on failure. Can be called synchronously @file_name File name or path to the file.
 */
class CleanFileName extends Text implements \JsonSerializable
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
            '@type' => 'cleanFileName',
            'file_name' => $this->getFileName(),
        ];
    }
}
