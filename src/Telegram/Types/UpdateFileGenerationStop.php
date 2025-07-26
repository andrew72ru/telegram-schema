<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * File generation is no longer needed @generation_id Unique identifier for the generation process
 */
class UpdateFileGenerationStop extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('generation_id')]
        private int $generationId,
    ) {
    }

    public function getGenerationId(): int
    {
        return $this->generationId;
    }

    public function setGenerationId(int $generationId): self
    {
        $this->generationId = $generationId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateFileGenerationStop',
            'generation_id' => $this->getGenerationId(),
        ];
    }
}
