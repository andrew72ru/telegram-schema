<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An anchor @name Anchor name
 */
class RichTextAnchor extends RichText implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('name')]
        private string $name,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'richTextAnchor',
            'name' => $this->getName(),
        ];
    }
}
