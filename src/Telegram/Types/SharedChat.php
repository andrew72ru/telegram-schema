<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a chat shared with a bot.
 */
class SharedChat implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Title of the chat; for bots only */
        #[SerializedName('title')]
        private string $title,
        /** Username of the chat; for bots only */
        #[SerializedName('username')]
        private string $username,
        /** Photo of the chat; for bots only; may be null */
        #[SerializedName('photo')]
        private Photo|null $photo = null,
    ) {
    }

    /**
     * Get Chat identifier.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Title of the chat; for bots only.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Title of the chat; for bots only.
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Username of the chat; for bots only.
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * Set Username of the chat; for bots only.
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get Photo of the chat; for bots only; may be null.
     */
    public function getPhoto(): Photo|null
    {
        return $this->photo;
    }

    /**
     * Set Photo of the chat; for bots only; may be null.
     */
    public function setPhoto(Photo|null $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sharedChat',
            'chat_id' => $this->getChatId(),
            'title' => $this->getTitle(),
            'username' => $this->getUsername(),
            'photo' => $this->getPhoto(),
        ];
    }
}
