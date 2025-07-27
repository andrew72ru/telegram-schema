<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Options to be used when a message is sent.
 */
class MessageSendOptions implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the topic in a channel direct messages chat administered by the current user; pass 0 if the chat isn't a channel direct messages chat administered by the current user */
        #[SerializedName('direct_messages_chat_topic_id')]
        private int $directMessagesChatTopicId,
        /** Pass true to disable notification for the message */
        #[SerializedName('disable_notification')]
        private bool $disableNotification,
        /** Pass true if the message is sent from the background */
        #[SerializedName('from_background')]
        private bool $fromBackground,
        /** Pass true if the content of the message must be protected from forwarding and saving; for bots only */
        #[SerializedName('protect_content')]
        private bool $protectContent,
        /** Pass true to allow the message to ignore regular broadcast limits for a small fee; for bots only */
        #[SerializedName('allow_paid_broadcast')]
        private bool $allowPaidBroadcast,
        /** The number of Telegram Stars the user agreed to pay to send the messages */
        #[SerializedName('paid_message_star_count')]
        private int $paidMessageStarCount,
        /** Pass true if the user explicitly chosen a sticker or a custom emoji from an installed sticker set; applicable only to sendMessage and sendMessageAlbum */
        #[SerializedName('update_order_of_installed_sticker_sets')]
        private bool $updateOrderOfInstalledStickerSets,
        /** Message scheduling state; pass null to send message immediately. Messages sent to a secret chat, to a chat with paid messages, to a channel direct messages chat, */
        #[SerializedName('scheduling_state')]
        private MessageSchedulingState|null $schedulingState = null,
        /** Identifier of the effect to apply to the message; pass 0 if none; applicable only to sendMessage and sendMessageAlbum in private chats */
        #[SerializedName('effect_id')]
        private int $effectId,
        /** Non-persistent identifier, which will be returned back in messageSendingStatePending object and can be used to match sent messages and corresponding updateNewMessage updates */
        #[SerializedName('sending_id')]
        private int $sendingId,
        /** Pass true to get a fake message instead of actually sending them */
        #[SerializedName('only_preview')]
        private bool $onlyPreview,
    ) {
    }

    /**
     * Get Unique identifier of the topic in a channel direct messages chat administered by the current user; pass 0 if the chat isn't a channel direct messages chat administered by the current user.
     */
    public function getDirectMessagesChatTopicId(): int
    {
        return $this->directMessagesChatTopicId;
    }

    /**
     * Set Unique identifier of the topic in a channel direct messages chat administered by the current user; pass 0 if the chat isn't a channel direct messages chat administered by the current user.
     */
    public function setDirectMessagesChatTopicId(int $directMessagesChatTopicId): self
    {
        $this->directMessagesChatTopicId = $directMessagesChatTopicId;

        return $this;
    }

    /**
     * Get Pass true to disable notification for the message.
     */
    public function getDisableNotification(): bool
    {
        return $this->disableNotification;
    }

    /**
     * Set Pass true to disable notification for the message.
     */
    public function setDisableNotification(bool $disableNotification): self
    {
        $this->disableNotification = $disableNotification;

        return $this;
    }

    /**
     * Get Pass true if the message is sent from the background.
     */
    public function getFromBackground(): bool
    {
        return $this->fromBackground;
    }

    /**
     * Set Pass true if the message is sent from the background.
     */
    public function setFromBackground(bool $fromBackground): self
    {
        $this->fromBackground = $fromBackground;

        return $this;
    }

    /**
     * Get Pass true if the content of the message must be protected from forwarding and saving; for bots only.
     */
    public function getProtectContent(): bool
    {
        return $this->protectContent;
    }

    /**
     * Set Pass true if the content of the message must be protected from forwarding and saving; for bots only.
     */
    public function setProtectContent(bool $protectContent): self
    {
        $this->protectContent = $protectContent;

        return $this;
    }

    /**
     * Get Pass true to allow the message to ignore regular broadcast limits for a small fee; for bots only.
     */
    public function getAllowPaidBroadcast(): bool
    {
        return $this->allowPaidBroadcast;
    }

    /**
     * Set Pass true to allow the message to ignore regular broadcast limits for a small fee; for bots only.
     */
    public function setAllowPaidBroadcast(bool $allowPaidBroadcast): self
    {
        $this->allowPaidBroadcast = $allowPaidBroadcast;

        return $this;
    }

    /**
     * Get The number of Telegram Stars the user agreed to pay to send the messages.
     */
    public function getPaidMessageStarCount(): int
    {
        return $this->paidMessageStarCount;
    }

    /**
     * Set The number of Telegram Stars the user agreed to pay to send the messages.
     */
    public function setPaidMessageStarCount(int $paidMessageStarCount): self
    {
        $this->paidMessageStarCount = $paidMessageStarCount;

        return $this;
    }

    /**
     * Get Pass true if the user explicitly chosen a sticker or a custom emoji from an installed sticker set; applicable only to sendMessage and sendMessageAlbum.
     */
    public function getUpdateOrderOfInstalledStickerSets(): bool
    {
        return $this->updateOrderOfInstalledStickerSets;
    }

    /**
     * Set Pass true if the user explicitly chosen a sticker or a custom emoji from an installed sticker set; applicable only to sendMessage and sendMessageAlbum.
     */
    public function setUpdateOrderOfInstalledStickerSets(bool $updateOrderOfInstalledStickerSets): self
    {
        $this->updateOrderOfInstalledStickerSets = $updateOrderOfInstalledStickerSets;

        return $this;
    }

    /**
     * Get Message scheduling state; pass null to send message immediately. Messages sent to a secret chat, to a chat with paid messages, to a channel direct messages chat,.
     */
    public function getSchedulingState(): MessageSchedulingState|null
    {
        return $this->schedulingState;
    }

    /**
     * Set Message scheduling state; pass null to send message immediately. Messages sent to a secret chat, to a chat with paid messages, to a channel direct messages chat,.
     */
    public function setSchedulingState(MessageSchedulingState|null $schedulingState): self
    {
        $this->schedulingState = $schedulingState;

        return $this;
    }

    /**
     * Get Identifier of the effect to apply to the message; pass 0 if none; applicable only to sendMessage and sendMessageAlbum in private chats.
     */
    public function getEffectId(): int
    {
        return $this->effectId;
    }

    /**
     * Set Identifier of the effect to apply to the message; pass 0 if none; applicable only to sendMessage and sendMessageAlbum in private chats.
     */
    public function setEffectId(int $effectId): self
    {
        $this->effectId = $effectId;

        return $this;
    }

    /**
     * Get Non-persistent identifier, which will be returned back in messageSendingStatePending object and can be used to match sent messages and corresponding updateNewMessage updates.
     */
    public function getSendingId(): int
    {
        return $this->sendingId;
    }

    /**
     * Set Non-persistent identifier, which will be returned back in messageSendingStatePending object and can be used to match sent messages and corresponding updateNewMessage updates.
     */
    public function setSendingId(int $sendingId): self
    {
        $this->sendingId = $sendingId;

        return $this;
    }

    /**
     * Get Pass true to get a fake message instead of actually sending them.
     */
    public function getOnlyPreview(): bool
    {
        return $this->onlyPreview;
    }

    /**
     * Set Pass true to get a fake message instead of actually sending them.
     */
    public function setOnlyPreview(bool $onlyPreview): self
    {
        $this->onlyPreview = $onlyPreview;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageSendOptions',
            'direct_messages_chat_topic_id' => $this->getDirectMessagesChatTopicId(),
            'disable_notification' => $this->getDisableNotification(),
            'from_background' => $this->getFromBackground(),
            'protect_content' => $this->getProtectContent(),
            'allow_paid_broadcast' => $this->getAllowPaidBroadcast(),
            'paid_message_star_count' => $this->getPaidMessageStarCount(),
            'update_order_of_installed_sticker_sets' => $this->getUpdateOrderOfInstalledStickerSets(),
            'scheduling_state' => $this->getSchedulingState(),
            'effect_id' => $this->getEffectId(),
            'sending_id' => $this->getSendingId(),
            'only_preview' => $this->getOnlyPreview(),
        ];
    }
}
