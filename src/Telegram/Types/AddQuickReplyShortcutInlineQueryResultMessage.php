<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Adds a message to a quick reply shortcut via inline bot. If shortcut doesn't exist and there are less than getOption("quick_reply_shortcut_count_max") shortcuts, then a new shortcut is created.
 */
class AddQuickReplyShortcutInlineQueryResultMessage extends QuickReplyMessage implements \JsonSerializable
{
    public function __construct(
        /** Name of the target shortcut */
        #[SerializedName('shortcut_name')]
        private string $shortcutName,
        /** Identifier of a quick reply message in the same shortcut to be replied; pass 0 if none */
        #[SerializedName('reply_to_message_id')]
        private int $replyToMessageId,
        /** Identifier of the inline query */
        #[SerializedName('query_id')]
        private int $queryId,
        /** Identifier of the inline query result */
        #[SerializedName('result_id')]
        private string $resultId,
        /** Pass true to hide the bot, via which the message is sent. Can be used only for bots getOption("animation_search_bot_username"), getOption("photo_search_bot_username"), and getOption("venue_search_bot_username") */
        #[SerializedName('hide_via_bot')]
        private bool $hideViaBot,
    ) {
    }

    /**
     * Get Name of the target shortcut
     */
    public function getShortcutName(): string
    {
        return $this->shortcutName;
    }

    /**
     * Set Name of the target shortcut
     */
    public function setShortcutName(string $shortcutName): self
    {
        $this->shortcutName = $shortcutName;

        return $this;
    }

    /**
     * Get Identifier of a quick reply message in the same shortcut to be replied; pass 0 if none
     */
    public function getReplyToMessageId(): int
    {
        return $this->replyToMessageId;
    }

    /**
     * Set Identifier of a quick reply message in the same shortcut to be replied; pass 0 if none
     */
    public function setReplyToMessageId(int $replyToMessageId): self
    {
        $this->replyToMessageId = $replyToMessageId;

        return $this;
    }

    /**
     * Get Identifier of the inline query
     */
    public function getQueryId(): int
    {
        return $this->queryId;
    }

    /**
     * Set Identifier of the inline query
     */
    public function setQueryId(int $queryId): self
    {
        $this->queryId = $queryId;

        return $this;
    }

    /**
     * Get Identifier of the inline query result
     */
    public function getResultId(): string
    {
        return $this->resultId;
    }

    /**
     * Set Identifier of the inline query result
     */
    public function setResultId(string $resultId): self
    {
        $this->resultId = $resultId;

        return $this;
    }

    /**
     * Get Pass true to hide the bot, via which the message is sent. Can be used only for bots getOption("animation_search_bot_username"), getOption("photo_search_bot_username"), and getOption("venue_search_bot_username")
     */
    public function getHideViaBot(): bool
    {
        return $this->hideViaBot;
    }

    /**
     * Set Pass true to hide the bot, via which the message is sent. Can be used only for bots getOption("animation_search_bot_username"), getOption("photo_search_bot_username"), and getOption("venue_search_bot_username")
     */
    public function setHideViaBot(bool $hideViaBot): self
    {
        $this->hideViaBot = $hideViaBot;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'addQuickReplyShortcutInlineQueryResultMessage',
            'shortcut_name' => $this->getShortcutName(),
            'reply_to_message_id' => $this->getReplyToMessageId(),
            'query_id' => $this->getQueryId(),
            'result_id' => $this->getResultId(),
            'hide_via_bot' => $this->getHideViaBot(),
        ];
    }
}
