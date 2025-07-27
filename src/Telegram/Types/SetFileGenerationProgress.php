<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Informs TDLib on a file generation progress.
 */
class SetFileGenerationProgress extends Ok implements \JsonSerializable
{
    public function __construct(
        /** The identifier of the generation process */
        #[SerializedName('generation_id')]
        private int $generationId,
        /** Expected size of the generated file, in bytes; 0 if unknown */
        #[SerializedName('expected_size')]
        private int $expectedSize,
        /** The number of bytes already generated */
        #[SerializedName('local_prefix_size')]
        private int $localPrefixSize,
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
     * Get Expected size of the generated file, in bytes; 0 if unknown.
     */
    public function getExpectedSize(): int
    {
        return $this->expectedSize;
    }

    /**
     * Set Expected size of the generated file, in bytes; 0 if unknown.
     */
    public function setExpectedSize(int $expectedSize): self
    {
        $this->expectedSize = $expectedSize;

        return $this;
    }

    /**
     * Get The number of bytes already generated.
     */
    public function getLocalPrefixSize(): int
    {
        return $this->localPrefixSize;
    }

    /**
     * Set The number of bytes already generated.
     */
    public function setLocalPrefixSize(int $localPrefixSize): self
    {
        $this->localPrefixSize = $localPrefixSize;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setFileGenerationProgress',
            'generation_id' => $this->getGenerationId(),
            'expected_size' => $this->getExpectedSize(),
            'local_prefix_size' => $this->getLocalPrefixSize(),
        ];
    }
}
