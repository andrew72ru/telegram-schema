<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A text with some entities @text The text @entities Entities contained in the text. Entities can be nested, but must not mutually intersect with each other.
 */
class FormattedText implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('text')]
        private string $text,
        #[SerializedName('entities')]
        private array|null $entities = null,
    ) {
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getEntities(): array|null
    {
        return $this->entities;
    }

    public function setEntities(array|null $entities): self
    {
        $this->entities = $entities;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'formattedText',
            'text' => $this->getText(),
            'entities' => $this->getEntities(),
        ];
    }
}
