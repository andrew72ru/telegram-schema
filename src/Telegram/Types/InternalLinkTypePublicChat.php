<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a chat by its username. Call searchPublicChat with the given chat username to process the link.
 */
class InternalLinkTypePublicChat extends InternalLinkType implements \JsonSerializable
{
    public function __construct(
        /** Username of the chat */
        #[SerializedName('chat_username')]
        private string $chatUsername,
        /** Draft text for message to send in the chat */
        #[SerializedName('draft_text')]
        private string $draftText,
        /** True, if chat profile information screen must be opened; otherwise, the chat itself must be opened */
        #[SerializedName('open_profile')]
        private bool $openProfile,
    ) {
    }

    /**
     * Get Username of the chat.
     */
    public function getChatUsername(): string
    {
        return $this->chatUsername;
    }

    /**
     * Set Username of the chat.
     */
    public function setChatUsername(string $chatUsername): self
    {
        $this->chatUsername = $chatUsername;

        return $this;
    }

    /**
     * Get Draft text for message to send in the chat.
     */
    public function getDraftText(): string
    {
        return $this->draftText;
    }

    /**
     * Set Draft text for message to send in the chat.
     */
    public function setDraftText(string $draftText): self
    {
        $this->draftText = $draftText;

        return $this;
    }

    /**
     * Get True, if chat profile information screen must be opened; otherwise, the chat itself must be opened.
     */
    public function getOpenProfile(): bool
    {
        return $this->openProfile;
    }

    /**
     * Set True, if chat profile information screen must be opened; otherwise, the chat itself must be opened.
     */
    public function setOpenProfile(bool $openProfile): self
    {
        $this->openProfile = $openProfile;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypePublicChat',
            'chat_username' => $this->getChatUsername(),
            'draft_text' => $this->getDraftText(),
            'open_profile' => $this->getOpenProfile(),
        ];
    }
}
