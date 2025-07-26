<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * File with the date it was uploaded @file The file @date Point in time (Unix timestamp) when the file was uploaded
 */
class DatedFile implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('file')]
        private File|null $file = null,
        #[SerializedName('date')]
        private int $date,
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

    public function getDate(): int
    {
        return $this->date;
    }

    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'datedFile',
            'file' => $this->getFile(),
            'date' => $this->getDate(),
        ];
    }
}
