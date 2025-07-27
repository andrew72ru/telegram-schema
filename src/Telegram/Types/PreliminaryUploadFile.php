<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Preliminary uploads a file to the cloud before sending it in a message, which can be useful for uploading of being recorded voice and video notes.
 */
class PreliminaryUploadFile extends File implements \JsonSerializable
{
    public function __construct(
        /** File to upload */
        #[SerializedName('file')]
        private InputFile|null $file = null,
        /** File type; pass null if unknown */
        #[SerializedName('file_type')]
        private FileType|null $fileType = null,
        /** Priority of the upload (1-32). The higher the priority, the earlier the file will be uploaded. If the priorities of two files are equal, then the first one for which preliminaryUploadFile was called will be uploaded first */
        #[SerializedName('priority')]
        private int $priority,
    ) {
    }

    /**
     * Get File to upload.
     */
    public function getFile(): InputFile|null
    {
        return $this->file;
    }

    /**
     * Set File to upload.
     */
    public function setFile(InputFile|null $file): self
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get File type; pass null if unknown.
     */
    public function getFileType(): FileType|null
    {
        return $this->fileType;
    }

    /**
     * Set File type; pass null if unknown.
     */
    public function setFileType(FileType|null $fileType): self
    {
        $this->fileType = $fileType;

        return $this;
    }

    /**
     * Get Priority of the upload (1-32). The higher the priority, the earlier the file will be uploaded. If the priorities of two files are equal, then the first one for which preliminaryUploadFile was called will be uploaded first.
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * Set Priority of the upload (1-32). The higher the priority, the earlier the file will be uploaded. If the priorities of two files are equal, then the first one for which preliminaryUploadFile was called will be uploaded first.
     */
    public function setPriority(int $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'preliminaryUploadFile',
            'file' => $this->getFile(),
            'file_type' => $this->getFileType(),
            'priority' => $this->getPriority(),
        ];
    }
}
