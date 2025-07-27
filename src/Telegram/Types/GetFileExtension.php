<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the extension of a file, guessed by its MIME type. Returns an empty string on failure. Can be called synchronously @mime_type The MIME type of the file.
 */
class GetFileExtension extends Text implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('mime_type')]
        private string $mimeType,
    ) {
    }

    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    public function setMimeType(string $mimeType): self
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getFileExtension',
            'mime_type' => $this->getMimeType(),
        ];
    }
}
