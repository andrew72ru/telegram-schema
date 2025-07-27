<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Writes a part of a generated file. This method is intended to be used only if the application has no direct access to TDLib's file system, because it is usually slower than a direct write to the destination file.
 */
class WriteGeneratedFilePart extends Ok implements \JsonSerializable
{
    public function __construct(
        /** The identifier of the generation process */
        #[SerializedName('generation_id')]
        private int $generationId,
        /** The offset from which to write the data to the file */
        #[SerializedName('offset')]
        private int $offset,
        /** The data to write */
        #[SerializedName('data')]
        private string $data,
    ) {
    }

    /**
     * Get The identifier of the generation process.
     */
    public function getGenerationId(): int
    {
        return $this->generationId;
    }

    /**
     * Set The identifier of the generation process.
     */
    public function setGenerationId(int $generationId): self
    {
        $this->generationId = $generationId;

        return $this;
    }

    /**
     * Get The offset from which to write the data to the file.
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * Set The offset from which to write the data to the file.
     */
    public function setOffset(int $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Get The data to write.
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * Set The data to write.
     */
    public function setData(string $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'writeGeneratedFilePart',
            'generation_id' => $this->getGenerationId(),
            'offset' => $this->getOffset(),
            'data' => $this->getData(),
        ];
    }
}
