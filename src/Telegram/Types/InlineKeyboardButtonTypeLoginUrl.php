<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A button that opens a specified URL and automatically authorize the current user by calling getLoginUrlInfo @url An HTTP URL to pass to getLoginUrlInfo @id Unique button identifier @forward_text If non-empty, new text of the button in forwarded messages
 */
class InlineKeyboardButtonTypeLoginUrl extends InlineKeyboardButtonType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('url')]
        private string $url,
        #[SerializedName('id')]
        private int $id,
        #[SerializedName('forward_text')]
        private string $forwardText,
    ) {
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getForwardText(): string
    {
        return $this->forwardText;
    }

    public function setForwardText(string $forwardText): self
    {
        $this->forwardText = $forwardText;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inlineKeyboardButtonTypeLoginUrl',
            'url' => $this->getUrl(),
            'id' => $this->getId(),
            'forward_text' => $this->getForwardText(),
        ];
    }
}
