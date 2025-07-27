<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a document of any type.
 */
class Document implements \JsonSerializable
{
    public function __construct(
        /** Original name of the file; as defined by the sender */
        #[SerializedName('file_name')]
        private string $fileName,
        /** MIME type of the file; as defined by the sender */
        #[SerializedName('mime_type')]
        private string $mimeType,
        /** Document minithumbnail; may be null */
        #[SerializedName('minithumbnail')]
        private Minithumbnail|null $minithumbnail = null,
        /** Document thumbnail in JPEG or PNG format (PNG will be used only for background patterns); as defined by the sender; may be null */
        #[SerializedName('thumbnail')]
        private Thumbnail|null $thumbnail = null,
        /** File containing the document */
        #[SerializedName('document')]
        private File|null $document = null,
    ) {
    }

    /**
     * Get Original name of the file; as defined by the sender.
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }

    /**
     * Set Original name of the file; as defined by the sender.
     */
    public function setFileName(string $fileName): self
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get MIME type of the file; as defined by the sender.
     */
    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    /**
     * Set MIME type of the file; as defined by the sender.
     */
    public function setMimeType(string $mimeType): self
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    /**
     * Get Document minithumbnail; may be null.
     */
    public function getMinithumbnail(): Minithumbnail|null
    {
        return $this->minithumbnail;
    }

    /**
     * Set Document minithumbnail; may be null.
     */
    public function setMinithumbnail(Minithumbnail|null $minithumbnail): self
    {
        $this->minithumbnail = $minithumbnail;

        return $this;
    }

    /**
     * Get Document thumbnail in JPEG or PNG format (PNG will be used only for background patterns); as defined by the sender; may be null.
     */
    public function getThumbnail(): Thumbnail|null
    {
        return $this->thumbnail;
    }

    /**
     * Set Document thumbnail in JPEG or PNG format (PNG will be used only for background patterns); as defined by the sender; may be null.
     */
    public function setThumbnail(Thumbnail|null $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Get File containing the document.
     */
    public function getDocument(): File|null
    {
        return $this->document;
    }

    /**
     * Set File containing the document.
     */
    public function setDocument(File|null $document): self
    {
        $this->document = $document;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'document',
            'file_name' => $this->getFileName(),
            'mime_type' => $this->getMimeType(),
            'minithumbnail' => $this->getMinithumbnail(),
            'thumbnail' => $this->getThumbnail(),
            'document' => $this->getDocument(),
        ];
    }
}
