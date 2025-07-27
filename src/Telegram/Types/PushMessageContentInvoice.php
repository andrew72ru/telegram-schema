<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with an invoice from a bot @price Product price @is_pinned True, if the message is a pinned message with the specified content.
 */
class PushMessageContentInvoice extends PushMessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('price')]
        private string $price,
        #[SerializedName('is_pinned')]
        private bool $isPinned,
    ) {
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function setIsPinned(bool $isPinned): self
    {
        $this->isPinned = $isPinned;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pushMessageContentInvoice',
            'price' => $this->getPrice(),
            'is_pinned' => $this->getIsPinned(),
        ];
    }
}
