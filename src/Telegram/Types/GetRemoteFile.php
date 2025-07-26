<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about a file by its remote identifier. This is an offline method. Can be used to register a URL as a file for further uploading, or sending as a message. Even the request succeeds, the file can be used only if it is still accessible to the user.
 */
class GetRemoteFile extends File implements \JsonSerializable
{
    public function __construct(
        /** Remote identifier of the file to get */
        #[SerializedName('remote_file_id')]
        private string $remoteFileId,
        /** File type; pass null if unknown */
        #[SerializedName('file_type')]
        private FileType|null $fileType = null,
    ) {
    }

    /**
     * Get Remote identifier of the file to get
     */
    public function getRemoteFileId(): string
    {
        return $this->remoteFileId;
    }

    /**
     * Set Remote identifier of the file to get
     */
    public function setRemoteFileId(string $remoteFileId): self
    {
        $this->remoteFileId = $remoteFileId;

        return $this;
    }

    /**
     * Get File type; pass null if unknown
     */
    public function getFileType(): FileType|null
    {
        return $this->fileType;
    }

    /**
     * Set File type; pass null if unknown
     */
    public function setFileType(FileType|null $fileType): self
    {
        $this->fileType = $fileType;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getRemoteFile',
            'remote_file_id' => $this->getRemoteFileId(),
            'file_type' => $this->getFileType(),
        ];
    }
}
