<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns a list of frequently used chats @category Category of chats to be returned @limit The maximum number of chats to be returned; up to 30
 */
class GetTopChats extends Chats implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('category')]
        private TopChatCategory|null $category = null,
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    public function getCategory(): TopChatCategory|null
    {
        return $this->category;
    }

    public function setCategory(TopChatCategory|null $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getTopChats',
            'category' => $this->getCategory(),
            'limit' => $this->getLimit(),
        ];
    }
}
