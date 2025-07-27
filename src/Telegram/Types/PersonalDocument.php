<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A personal document, containing some information about a user @files List of files containing the pages of the document @translation List of files containing a certified English translation of the document.
 */
class PersonalDocument implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('files')]
        private array|null $files = null,
        #[SerializedName('translation')]
        private array|null $translation = null,
    ) {
    }

    public function getFiles(): array|null
    {
        return $this->files;
    }

    public function setFiles(array|null $files): self
    {
        $this->files = $files;

        return $this;
    }

    public function getTranslation(): array|null
    {
        return $this->translation;
    }

    public function setTranslation(array|null $translation): self
    {
        $this->translation = $translation;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'personalDocument',
            'files' => $this->getFiles(),
            'translation' => $this->getTranslation(),
        ];
    }
}
