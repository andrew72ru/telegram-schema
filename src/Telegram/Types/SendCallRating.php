<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sends a call rating
 */
class SendCallRating extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Call identifier */
        #[SerializedName('call_id')]
        private int $callId,
        /** Call rating; 1-5 */
        #[SerializedName('rating')]
        private int $rating,
        /** An optional user comment if the rating is less than 5 */
        #[SerializedName('comment')]
        private string $comment,
        /** List of the exact types of problems with the call, specified by the user */
        #[SerializedName('problems')]
        private array|null $problems = null,
    ) {
    }

    /**
     * Get Call identifier
     */
    public function getCallId(): int
    {
        return $this->callId;
    }

    /**
     * Set Call identifier
     */
    public function setCallId(int $callId): self
    {
        $this->callId = $callId;

        return $this;
    }

    /**
     * Get Call rating; 1-5
     */
    public function getRating(): int
    {
        return $this->rating;
    }

    /**
     * Set Call rating; 1-5
     */
    public function setRating(int $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get An optional user comment if the rating is less than 5
     */
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * Set An optional user comment if the rating is less than 5
     */
    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get List of the exact types of problems with the call, specified by the user
     */
    public function getProblems(): array|null
    {
        return $this->problems;
    }

    /**
     * Set List of the exact types of problems with the call, specified by the user
     */
    public function setProblems(array|null $problems): self
    {
        $this->problems = $problems;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sendCallRating',
            'call_id' => $this->getCallId(),
            'rating' => $this->getRating(),
            'comment' => $this->getComment(),
            'problems' => $this->getProblems(),
        ];
    }
}
