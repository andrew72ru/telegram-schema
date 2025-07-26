<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The group call is accessible through a link @link The link for the group call
 */
class InputGroupCallLink extends InputGroupCall implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('link')]
        private string $link,
    ) {
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputGroupCallLink',
            'link' => $this->getLink(),
        ];
    }
}
