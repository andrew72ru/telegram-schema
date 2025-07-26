<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An invisible anchor on a page, which can be used in a URL to open the page from the specified anchor @name Name of the anchor
 */
class PageBlockAnchor extends PageBlock implements \JsonSerializable
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
            '@type' => 'pageBlockAnchor',
            'name' => $this->getName(),
        ];
    }
}
