<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The call has ended successfully
 */
class CallStateDiscarded extends CallState implements \JsonSerializable
{
    public function __construct(
        /** The reason why the call has ended */
        #[SerializedName('reason')]
        private CallDiscardReason|null $reason = null,
        /** True, if the call rating must be sent to the server */
        #[SerializedName('need_rating')]
        private bool $needRating,
        /** True, if the call debug information must be sent to the server */
        #[SerializedName('need_debug_information')]
        private bool $needDebugInformation,
        /** True, if the call log must be sent to the server */
        #[SerializedName('need_log')]
        private bool $needLog,
    ) {
    }

    /**
     * Get The reason why the call has ended
     */
    public function getReason(): CallDiscardReason|null
    {
        return $this->reason;
    }

    /**
     * Set The reason why the call has ended
     */
    public function setReason(CallDiscardReason|null $reason): self
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get True, if the call rating must be sent to the server
     */
    public function getNeedRating(): bool
    {
        return $this->needRating;
    }

    /**
     * Set True, if the call rating must be sent to the server
     */
    public function setNeedRating(bool $needRating): self
    {
        $this->needRating = $needRating;

        return $this;
    }

    /**
     * Get True, if the call debug information must be sent to the server
     */
    public function getNeedDebugInformation(): bool
    {
        return $this->needDebugInformation;
    }

    /**
     * Set True, if the call debug information must be sent to the server
     */
    public function setNeedDebugInformation(bool $needDebugInformation): self
    {
        $this->needDebugInformation = $needDebugInformation;

        return $this;
    }

    /**
     * Get True, if the call log must be sent to the server
     */
    public function getNeedLog(): bool
    {
        return $this->needLog;
    }

    /**
     * Set True, if the call log must be sent to the server
     */
    public function setNeedLog(bool $needLog): self
    {
        $this->needLog = $needLog;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'callStateDiscarded',
            'reason' => $this->getReason(),
            'need_rating' => $this->getNeedRating(),
            'need_debug_information' => $this->getNeedDebugInformation(),
            'need_log' => $this->getNeedLog(),
        ];
    }
}
