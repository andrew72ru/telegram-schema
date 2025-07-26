<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat contains a public service announcement @type The type of the announcement @text The text of the announcement
 */
class ChatSourcePublicServiceAnnouncement extends ChatSource implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('type')]
        private string $type,
        #[SerializedName('text')]
        private string $text,
    ) {
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatSourcePublicServiceAnnouncement',
            'type' => $this->getType(),
            'text' => $this->getText(),
        ];
    }
}
