<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a bot's answer to a callback query @text Text of the answer @show_alert True, if an alert must be shown to the user instead of a toast notification @url URL to be opened.
 */
class CallbackQueryAnswer implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('text')]
        private string $text,
        #[SerializedName('show_alert')]
        private bool $showAlert,
        #[SerializedName('url')]
        private string $url,
    ) {
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

    public function getShowAlert(): bool
    {
        return $this->showAlert;
    }

    public function setShowAlert(bool $showAlert): self
    {
        $this->showAlert = $showAlert;

        return $this;
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'callbackQueryAnswer',
            'text' => $this->getText(),
            'show_alert' => $this->getShowAlert(),
            'url' => $this->getUrl(),
        ];
    }
}
