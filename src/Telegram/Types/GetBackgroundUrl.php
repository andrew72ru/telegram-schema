<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Constructs a persistent HTTP URL for a background @name Background name @var Background type; backgroundTypeChatTheme isn't supported.
 */
class GetBackgroundUrl extends HttpUrl implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('name')]
        private string $name,
        #[SerializedName('type')]
        private BackgroundType|null $type = null,
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

    public function getType(): BackgroundType|null
    {
        return $this->type;
    }

    public function setType(BackgroundType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getBackgroundUrl',
            'name' => $this->getName(),
            'type' => $this->getType(),
        ];
    }
}
