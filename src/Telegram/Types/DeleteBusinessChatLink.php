<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Deletes a business chat link of the current account @see The link to delete.
 */
class DeleteBusinessChatLink extends Ok implements \JsonSerializable
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
            '@type' => 'deleteBusinessChatLink',
            'link' => $this->getLink(),
        ];
    }
}
