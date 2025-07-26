<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a group of video synchronization source identifiers @semantics The semantics of sources, one of "SIM" or "FID" @source_ids The list of synchronization source identifiers
 */
class GroupCallVideoSourceGroup implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('semantics')]
        private string $semantics,
        #[SerializedName('source_ids')]
        private array|null $sourceIds = null,
    ) {
    }

    public function getSemantics(): string
    {
        return $this->semantics;
    }

    public function setSemantics(string $semantics): self
    {
        $this->semantics = $semantics;

        return $this;
    }

    public function getSourceIds(): array|null
    {
        return $this->sourceIds;
    }

    public function setSourceIds(array|null $sourceIds): self
    {
        $this->sourceIds = $sourceIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'groupCallVideoSourceGroup',
            'semantics' => $this->getSemantics(),
            'source_ids' => $this->getSourceIds(),
        ];
    }
}
