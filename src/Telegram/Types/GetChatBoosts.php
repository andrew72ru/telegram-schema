<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns the list of boosts applied to a chat; requires administrator rights in the chat.
 */
class GetChatBoosts extends FoundChatBoosts implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Pass true to receive only boosts received from gift codes and giveaways created by the chat */
        #[SerializedName('only_gift_codes')]
        private bool $onlyGiftCodes,
        /** Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results */
        #[SerializedName('offset')]
        private string $offset,
        /** The maximum number of boosts to be returned; up to 100. For optimal performance, the number of returned boosts can be smaller than the specified limit */
        #[SerializedName('limit')]
        private int $limit,
    ) {
    }

    /**
     * Get Identifier of the chat.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Pass true to receive only boosts received from gift codes and giveaways created by the chat.
     */
    public function getOnlyGiftCodes(): bool
    {
        return $this->onlyGiftCodes;
    }

    /**
     * Set Pass true to receive only boosts received from gift codes and giveaways created by the chat.
     */
    public function setOnlyGiftCodes(bool $onlyGiftCodes): self
    {
        $this->onlyGiftCodes = $onlyGiftCodes;

        return $this;
    }

    /**
     * Get Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
     */
    public function getOffset(): string
    {
        return $this->offset;
    }

    /**
     * Set Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
     */
    public function setOffset(string $offset): self
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Get The maximum number of boosts to be returned; up to 100. For optimal performance, the number of returned boosts can be smaller than the specified limit.
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Set The maximum number of boosts to be returned; up to 100. For optimal performance, the number of returned boosts can be smaller than the specified limit.
     */
    public function setLimit(int $limit): self
    {
        $this->limit = $limit;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getChatBoosts',
            'chat_id' => $this->getChatId(),
            'only_gift_codes' => $this->getOnlyGiftCodes(),
            'offset' => $this->getOffset(),
            'limit' => $this->getLimit(),
        ];
    }
}
