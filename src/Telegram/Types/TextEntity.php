<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a part of the text that needs to be formatted in some unusual way @offset Offset of the entity, in UTF-16 code units @length Length of the entity, in UTF-16 code units @var Type of the entity.
 */
class TextEntity implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('offset')]
        private int $offset,
        #[SerializedName('length')]
        private int $length,
        #[SerializedName('type')]
        private TextEntityType|null $type = null,
    ) {
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function setOffset(int $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function setLength(int $length): self
    {
        $this->length = $length;

        return $this;
    }

    public function getType(): TextEntityType|null
    {
        return $this->type;
    }

    public function setType(TextEntityType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'textEntity',
            'offset' => $this->getOffset(),
            'length' => $this->getLength(),
            'type' => $this->getType(),
        ];
    }
}
