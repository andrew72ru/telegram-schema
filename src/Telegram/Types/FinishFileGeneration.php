<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Finishes the file generation.
 */
class FinishFileGeneration extends Ok implements \JsonSerializable
{
    public function __construct(
        /** The identifier of the generation process */
        #[SerializedName('generation_id')]
        private int $generationId,
        /** If passed, the file generation has failed and must be terminated; pass null if the file generation succeeded */
        #[SerializedName('error')]
        private Error|null $error = null,
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
     * Get If passed, the file generation has failed and must be terminated; pass null if the file generation succeeded.
     */
    public function getError(): Error|null
    {
        return $this->error;
    }

    /**
     * Set If passed, the file generation has failed and must be terminated; pass null if the file generation succeeded.
     */
    public function setError(Error|null $error): self
    {
        $this->error = $error;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'finishFileGeneration',
            'generation_id' => $this->getGenerationId(),
            'error' => $this->getError(),
        ];
    }
}
