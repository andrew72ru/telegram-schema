<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message was deleted @message Deleted message @can_report_anti_spam_false_positive True, if the message deletion can be reported via reportSupergroupAntiSpamFalsePositive.
 */
class ChatEventMessageDeleted extends ChatEventAction implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('message')]
        private Message|null $message = null,
        #[SerializedName('can_report_anti_spam_false_positive')]
        private bool $canReportAntiSpamFalsePositive,
    ) {
    }

    public function getMessage(): Message|null
    {
        return $this->message;
    }

    public function setMessage(Message|null $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getCanReportAntiSpamFalsePositive(): bool
    {
        return $this->canReportAntiSpamFalsePositive;
    }

    public function setCanReportAntiSpamFalsePositive(bool $canReportAntiSpamFalsePositive): self
    {
        $this->canReportAntiSpamFalsePositive = $canReportAntiSpamFalsePositive;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatEventMessageDeleted',
            'message' => $this->getMessage(),
            'can_report_anti_spam_false_positive' => $this->getCanReportAntiSpamFalsePositive(),
        ];
    }
}
