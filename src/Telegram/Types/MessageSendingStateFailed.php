<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The message failed to be sent.
 */
class MessageSendingStateFailed extends MessageSendingState implements \JsonSerializable
{
    public function __construct(
        /** The cause of the message sending failure */
        #[SerializedName('error')]
        private Error|null $error = null,
        /** True, if the message can be re-sent using resendMessages or readdQuickReplyShortcutMessages */
        #[SerializedName('can_retry')]
        private bool $canRetry,
        /** True, if the message can be re-sent only on behalf of a different sender */
        #[SerializedName('need_another_sender')]
        private bool $needAnotherSender,
        /** True, if the message can be re-sent only if another quote is chosen in the message that is replied by the given message */
        #[SerializedName('need_another_reply_quote')]
        private bool $needAnotherReplyQuote,
        /** True, if the message can be re-sent only if the message to be replied is removed. This will be done automatically by resendMessages */
        #[SerializedName('need_drop_reply')]
        private bool $needDropReply,
        /** The number of Telegram Stars that must be paid to send the message; 0 if the current amount is correct */
        #[SerializedName('required_paid_message_star_count')]
        private int $requiredPaidMessageStarCount,
        /** Time left before the message can be re-sent, in seconds. No update is sent when this field changes */
        #[SerializedName('retry_after')]
        private float $retryAfter,
    ) {
    }

    /**
     * Get The cause of the message sending failure.
     */
    public function getError(): Error|null
    {
        return $this->error;
    }

    /**
     * Set The cause of the message sending failure.
     */
    public function setError(Error|null $error): self
    {
        $this->error = $error;

        return $this;
    }

    /**
     * Get True, if the message can be re-sent using resendMessages or readdQuickReplyShortcutMessages.
     */
    public function getCanRetry(): bool
    {
        return $this->canRetry;
    }

    /**
     * Set True, if the message can be re-sent using resendMessages or readdQuickReplyShortcutMessages.
     */
    public function setCanRetry(bool $canRetry): self
    {
        $this->canRetry = $canRetry;

        return $this;
    }

    /**
     * Get True, if the message can be re-sent only on behalf of a different sender.
     */
    public function getNeedAnotherSender(): bool
    {
        return $this->needAnotherSender;
    }

    /**
     * Set True, if the message can be re-sent only on behalf of a different sender.
     */
    public function setNeedAnotherSender(bool $needAnotherSender): self
    {
        $this->needAnotherSender = $needAnotherSender;

        return $this;
    }

    /**
     * Get True, if the message can be re-sent only if another quote is chosen in the message that is replied by the given message.
     */
    public function getNeedAnotherReplyQuote(): bool
    {
        return $this->needAnotherReplyQuote;
    }

    /**
     * Set True, if the message can be re-sent only if another quote is chosen in the message that is replied by the given message.
     */
    public function setNeedAnotherReplyQuote(bool $needAnotherReplyQuote): self
    {
        $this->needAnotherReplyQuote = $needAnotherReplyQuote;

        return $this;
    }

    /**
     * Get True, if the message can be re-sent only if the message to be replied is removed. This will be done automatically by resendMessages.
     */
    public function getNeedDropReply(): bool
    {
        return $this->needDropReply;
    }

    /**
     * Set True, if the message can be re-sent only if the message to be replied is removed. This will be done automatically by resendMessages.
     */
    public function setNeedDropReply(bool $needDropReply): self
    {
        $this->needDropReply = $needDropReply;

        return $this;
    }

    /**
     * Get The number of Telegram Stars that must be paid to send the message; 0 if the current amount is correct.
     */
    public function getRequiredPaidMessageStarCount(): int
    {
        return $this->requiredPaidMessageStarCount;
    }

    /**
     * Set The number of Telegram Stars that must be paid to send the message; 0 if the current amount is correct.
     */
    public function setRequiredPaidMessageStarCount(int $requiredPaidMessageStarCount): self
    {
        $this->requiredPaidMessageStarCount = $requiredPaidMessageStarCount;

        return $this;
    }

    /**
     * Get Time left before the message can be re-sent, in seconds. No update is sent when this field changes.
     */
    public function getRetryAfter(): float
    {
        return $this->retryAfter;
    }

    /**
     * Set Time left before the message can be re-sent, in seconds. No update is sent when this field changes.
     */
    public function setRetryAfter(float $retryAfter): self
    {
        $this->retryAfter = $retryAfter;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageSendingStateFailed',
            'error' => $this->getError(),
            'can_retry' => $this->getCanRetry(),
            'need_another_sender' => $this->getNeedAnotherSender(),
            'need_another_reply_quote' => $this->getNeedAnotherReplyQuote(),
            'need_drop_reply' => $this->getNeedDropReply(),
            'required_paid_message_star_count' => $this->getRequiredPaidMessageStarCount(),
            'retry_after' => $this->getRetryAfter(),
        ];
    }
}
