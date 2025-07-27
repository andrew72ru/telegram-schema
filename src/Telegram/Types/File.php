<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a file.
 */
class File implements \JsonSerializable
{
    public function __construct(
        /** Unique file identifier */
        #[SerializedName('id')]
        private int $id,
        /** File size, in bytes; 0 if unknown */
        #[SerializedName('size')]
        private int $size,
        /** Approximate file size in bytes in case the exact file size is unknown. Can be used to show download/upload progress */
        #[SerializedName('expected_size')]
        private int $expectedSize,
        /** Information about the local copy of the file */
        #[SerializedName('local')]
        private LocalFile|null $local = null,
        /** Information about the remote copy of the file */
        #[SerializedName('remote')]
        private RemoteFile|null $remote = null,
    ) {
    }

    /**
     * Get Unique file identifier.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Unique file identifier.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get File size, in bytes; 0 if unknown.
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * Set File size, in bytes; 0 if unknown.
     */
    public function setSize(int $size): self
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get Approximate file size in bytes in case the exact file size is unknown. Can be used to show download/upload progress.
     */
    public function getExpectedSize(): int
    {
        return $this->expectedSize;
    }

    /**
     * Set Approximate file size in bytes in case the exact file size is unknown. Can be used to show download/upload progress.
     */
    public function setExpectedSize(int $expectedSize): self
    {
        $this->expectedSize = $expectedSize;

        return $this;
    }

    /**
     * Get Information about the local copy of the file.
     */
    public function getLocal(): LocalFile|null
    {
        return $this->local;
    }

    /**
     * Set Information about the local copy of the file.
     */
    public function setLocal(LocalFile|null $local): self
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get Information about the remote copy of the file.
     */
    public function getRemote(): RemoteFile|null
    {
        return $this->remote;
    }

    /**
     * Set Information about the remote copy of the file.
     */
    public function setRemote(RemoteFile|null $remote): self
    {
        $this->remote = $remote;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'file',
            'id' => $this->getId(),
            'size' => $this->getSize(),
            'expected_size' => $this->getExpectedSize(),
            'local' => $this->getLocal(),
            'remote' => $this->getRemote(),
        ];
    }
}
