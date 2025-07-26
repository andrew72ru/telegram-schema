<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about interactions with a message
 */
class MessageInteractionInfo implements \JsonSerializable
{
    public function __construct(
        /** Number of times the message was viewed */
        #[SerializedName('view_count')]
        private int $viewCount,
        /** Number of times the message was forwarded */
        #[SerializedName('forward_count')]
        private int $forwardCount,
        /** Information about direct or indirect replies to the message; may be null. Currently, available only in channels with a discussion supergroup and discussion supergroups for messages, which are not replies itself */
        #[SerializedName('reply_info')]
        private MessageReplyInfo|null $replyInfo = null,
        /** The list of reactions or tags added to the message; may be null */
        #[SerializedName('reactions')]
        private MessageReactions|null $reactions = null,
    ) {
    }

    /**
     * Get Number of times the message was viewed
     */
    public function getViewCount(): int
    {
        return $this->viewCount;
    }

    /**
     * Set Number of times the message was viewed
     */
    public function setViewCount(int $viewCount): self
    {
        $this->viewCount = $viewCount;

        return $this;
    }

    /**
     * Get Number of times the message was forwarded
     */
    public function getForwardCount(): int
    {
        return $this->forwardCount;
    }

    /**
     * Set Number of times the message was forwarded
     */
    public function setForwardCount(int $forwardCount): self
    {
        $this->forwardCount = $forwardCount;

        return $this;
    }

    /**
     * Get Information about direct or indirect replies to the message; may be null. Currently, available only in channels with a discussion supergroup and discussion supergroups for messages, which are not replies itself
     */
    public function getReplyInfo(): MessageReplyInfo|null
    {
        return $this->replyInfo;
    }

    /**
     * Set Information about direct or indirect replies to the message; may be null. Currently, available only in channels with a discussion supergroup and discussion supergroups for messages, which are not replies itself
     */
    public function setReplyInfo(MessageReplyInfo|null $replyInfo): self
    {
        $this->replyInfo = $replyInfo;

        return $this;
    }

    /**
     * Get The list of reactions or tags added to the message; may be null
     */
    public function getReactions(): MessageReactions|null
    {
        return $this->reactions;
    }

    /**
     * Set The list of reactions or tags added to the message; may be null
     */
    public function setReactions(MessageReactions|null $reactions): self
    {
        $this->reactions = $reactions;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageInteractionInfo',
            'view_count' => $this->getViewCount(),
            'forward_count' => $this->getForwardCount(),
            'reply_info' => $this->getReplyInfo(),
            'reactions' => $this->getReactions(),
        ];
    }
}
