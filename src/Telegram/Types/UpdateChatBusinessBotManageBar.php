<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The bar for managing business bot was changed in a chat @chat_id Chat identifier @business_bot_manage_bar The new value of the business bot manage bar; may be null.
 */
class UpdateChatBusinessBotManageBar extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('business_bot_manage_bar')]
        private BusinessBotManageBar|null $businessBotManageBar = null,
    ) {
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    public function getBusinessBotManageBar(): BusinessBotManageBar|null
    {
        return $this->businessBotManageBar;
    }

    public function setBusinessBotManageBar(BusinessBotManageBar|null $businessBotManageBar): self
    {
        $this->businessBotManageBar = $businessBotManageBar;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateChatBusinessBotManageBar',
            'chat_id' => $this->getChatId(),
            'business_bot_manage_bar' => $this->getBusinessBotManageBar(),
        ];
    }
}
