<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Checks whether a name can be used for a new sticker set @name Name to be checked
 */
class CheckStickerSetName extends CheckStickerSetNameResult implements \JsonSerializable
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
            '@type' => 'checkStickerSetName',
            'name' => $this->getName(),
        ];
    }
}
