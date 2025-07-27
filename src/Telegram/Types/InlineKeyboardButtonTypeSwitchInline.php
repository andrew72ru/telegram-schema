<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A button that forces an inline query to the bot to be inserted in the input field @query Inline query to be sent to the bot @target_chat Target chat from which to send the inline query.
 */
class InlineKeyboardButtonTypeSwitchInline extends InlineKeyboardButtonType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('query')]
        private string $query,
        #[SerializedName('target_chat')]
        private TargetChat|null $targetChat = null,
    ) {
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function setQuery(string $query): self
    {
        $this->query = $query;

        return $this;
    }

    public function getTargetChat(): TargetChat|null
    {
        return $this->targetChat;
    }

    public function setTargetChat(TargetChat|null $targetChat): self
    {
        $this->targetChat = $targetChat;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inlineKeyboardButtonTypeSwitchInline',
            'query' => $this->getQuery(),
            'target_chat' => $this->getTargetChat(),
        ];
    }
}
