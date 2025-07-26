<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a shortcut that can be used for a quick reply
 */
class QuickReplyShortcut implements \JsonSerializable
{
    public function __construct(
        /** Unique shortcut identifier */
        #[SerializedName('id')]
        private int $id,
        /** The name of the shortcut that can be used to use the shortcut */
        #[SerializedName('name')]
        private string $name,
        /** The first shortcut message */
        #[SerializedName('first_message')]
        private QuickReplyMessage|null $firstMessage = null,
        /** The total number of messages in the shortcut */
        #[SerializedName('message_count')]
        private int $messageCount,
    ) {
    }

    /**
     * Get Unique shortcut identifier
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Unique shortcut identifier
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get The name of the shortcut that can be used to use the shortcut
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set The name of the shortcut that can be used to use the shortcut
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get The first shortcut message
     */
    public function getFirstMessage(): QuickReplyMessage|null
    {
        return $this->firstMessage;
    }

    /**
     * Set The first shortcut message
     */
    public function setFirstMessage(QuickReplyMessage|null $firstMessage): self
    {
        $this->firstMessage = $firstMessage;

        return $this;
    }

    /**
     * Get The total number of messages in the shortcut
     */
    public function getMessageCount(): int
    {
        return $this->messageCount;
    }

    /**
     * Set The total number of messages in the shortcut
     */
    public function setMessageCount(int $messageCount): self
    {
        $this->messageCount = $messageCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'quickReplyShortcut',
            'id' => $this->getId(),
            'name' => $this->getName(),
            'first_message' => $this->getFirstMessage(),
            'message_count' => $this->getMessageCount(),
        ];
    }
}
