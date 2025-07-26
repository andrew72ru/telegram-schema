<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Saves an inline message to be sent by the given user; for bots only
 */
class SavePreparedInlineMessage extends PreparedInlineMessageId implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the user */
        #[SerializedName('user_id')]
        private int $userId,
        /** The description of the message */
        #[SerializedName('result')]
        private InputInlineQueryResult|null $result = null,
        /** Types of the chats to which the message can be sent */
        #[SerializedName('chat_types')]
        private TargetChatTypes|null $chatTypes = null,
    ) {
    }

    /**
     * Get Identifier of the user
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Identifier of the user
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get The description of the message
     */
    public function getResult(): InputInlineQueryResult|null
    {
        return $this->result;
    }

    /**
     * Set The description of the message
     */
    public function setResult(InputInlineQueryResult|null $result): self
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get Types of the chats to which the message can be sent
     */
    public function getChatTypes(): TargetChatTypes|null
    {
        return $this->chatTypes;
    }

    /**
     * Set Types of the chats to which the message can be sent
     */
    public function setChatTypes(TargetChatTypes|null $chatTypes): self
    {
        $this->chatTypes = $chatTypes;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'savePreparedInlineMessage',
            'user_id' => $this->getUserId(),
            'result' => $this->getResult(),
            'chat_types' => $this->getChatTypes(),
        ];
    }
}
