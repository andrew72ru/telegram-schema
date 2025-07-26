<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A link to a chat
 */
class PageBlockChatLink extends PageBlock implements \JsonSerializable
{
    public function __construct(
        /** Chat title */
        #[SerializedName('title')]
        private string $title,
        /** Chat photo; may be null */
        #[SerializedName('photo')]
        private ChatPhotoInfo|null $photo = null,
        /** Identifier of the accent color for chat title and background of chat photo */
        #[SerializedName('accent_color_id')]
        private int $accentColorId,
        /** Chat username by which all other information about the chat can be resolved */
        #[SerializedName('username')]
        private string $username,
    ) {
    }

    /**
     * Get Chat title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Chat title
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Chat photo; may be null
     */
    public function getPhoto(): ChatPhotoInfo|null
    {
        return $this->photo;
    }

    /**
     * Set Chat photo; may be null
     */
    public function setPhoto(ChatPhotoInfo|null $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get Identifier of the accent color for chat title and background of chat photo
     */
    public function getAccentColorId(): int
    {
        return $this->accentColorId;
    }

    /**
     * Set Identifier of the accent color for chat title and background of chat photo
     */
    public function setAccentColorId(int $accentColorId): self
    {
        $this->accentColorId = $accentColorId;

        return $this;
    }

    /**
     * Get Chat username by which all other information about the chat can be resolved
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * Set Chat username by which all other information about the chat can be resolved
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockChatLink',
            'title' => $this->getTitle(),
            'photo' => $this->getPhoto(),
            'accent_color_id' => $this->getAccentColorId(),
            'username' => $this->getUsername(),
        ];
    }
}
