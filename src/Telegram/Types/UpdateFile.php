<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Information about a file was updated @file New data about the file.
 */
class UpdateFile extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('file')]
        private File|null $file = null,
    ) {
    }

    public function getFile(): File|null
    {
        return $this->file;
    }

    public function setFile(File|null $file): self
    {
        $this->file = $file;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateFile',
            'file' => $this->getFile(),
        ];
    }
}
