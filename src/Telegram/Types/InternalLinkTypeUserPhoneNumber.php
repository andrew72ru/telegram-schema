<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a user by its phone number. Call searchUserByPhoneNumber with the given phone number to process the link.
 */
class InternalLinkTypeUserPhoneNumber extends InternalLinkType implements \JsonSerializable
{
    public function __construct(
        /** Phone number of the user */
        #[SerializedName('phone_number')]
        private string $phoneNumber,
        /** Draft text for message to send in the chat */
        #[SerializedName('draft_text')]
        private string $draftText,
        /** True, if user's profile information screen must be opened; otherwise, the chat itself must be opened */
        #[SerializedName('open_profile')]
        private bool $openProfile,
    ) {
    }

    /**
     * Get Phone number of the user
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * Set Phone number of the user
     */
    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get Draft text for message to send in the chat
     */
    public function getDraftText(): string
    {
        return $this->draftText;
    }

    /**
     * Set Draft text for message to send in the chat
     */
    public function setDraftText(string $draftText): self
    {
        $this->draftText = $draftText;

        return $this;
    }

    /**
     * Get True, if user's profile information screen must be opened; otherwise, the chat itself must be opened
     */
    public function getOpenProfile(): bool
    {
        return $this->openProfile;
    }

    /**
     * Set True, if user's profile information screen must be opened; otherwise, the chat itself must be opened
     */
    public function setOpenProfile(bool $openProfile): self
    {
        $this->openProfile = $openProfile;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeUserPhoneNumber',
            'phone_number' => $this->getPhoneNumber(),
            'draft_text' => $this->getDraftText(),
            'open_profile' => $this->getOpenProfile(),
        ];
    }
}
