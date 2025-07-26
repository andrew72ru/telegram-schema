<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to an upgraded gift. Call getUpgradedGift with the given name to process the link @name Name of the unique gift
 */
class InternalLinkTypeUpgradedGift extends InternalLinkType implements \JsonSerializable
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
            '@type' => 'internalLinkTypeUpgradedGift',
            'name' => $this->getName(),
        ];
    }
}
