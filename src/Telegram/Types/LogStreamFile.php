<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The log is written to a file
 */
class LogStreamFile extends LogStream implements \JsonSerializable
{
    public function __construct(
        /** Path to the file to where the internal TDLib log will be written */
        #[SerializedName('path')]
        private string $path,
        /** The maximum size of the file to where the internal TDLib log is written before the file will automatically be rotated, in bytes */
        #[SerializedName('max_file_size')]
        private int $maxFileSize,
        /** Pass true to additionally redirect stderr to the log file. Ignored on Windows */
        #[SerializedName('redirect_stderr')]
        private bool $redirectStderr,
    ) {
    }

    /**
     * Get Path to the file to where the internal TDLib log will be written
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * Set Path to the file to where the internal TDLib log will be written
     */
    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get The maximum size of the file to where the internal TDLib log is written before the file will automatically be rotated, in bytes
     */
    public function getMaxFileSize(): int
    {
        return $this->maxFileSize;
    }

    /**
     * Set The maximum size of the file to where the internal TDLib log is written before the file will automatically be rotated, in bytes
     */
    public function setMaxFileSize(int $maxFileSize): self
    {
        $this->maxFileSize = $maxFileSize;

        return $this;
    }

    /**
     * Get Pass true to additionally redirect stderr to the log file. Ignored on Windows
     */
    public function getRedirectStderr(): bool
    {
        return $this->redirectStderr;
    }

    /**
     * Set Pass true to additionally redirect stderr to the log file. Ignored on Windows
     */
    public function setRedirectStderr(bool $redirectStderr): self
    {
        $this->redirectStderr = $redirectStderr;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'logStreamFile',
            'path' => $this->getPath(),
            'max_file_size' => $this->getMaxFileSize(),
            'redirect_stderr' => $this->getRedirectStderr(),
        ];
    }
}
