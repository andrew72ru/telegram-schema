<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A forum topic has been created @name Name of the topic @icon Icon of the topic
 */
class MessageForumTopicCreated extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('name')]
        private string $name,
        #[SerializedName('icon')]
        private ForumTopicIcon|null $icon = null,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getIcon(): ForumTopicIcon|null
    {
        return $this->icon;
    }

    public function setIcon(ForumTopicIcon|null $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageForumTopicCreated',
            'name' => $this->getName(),
            'icon' => $this->getIcon(),
        ];
    }
}
