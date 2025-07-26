<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sets the result of a callback query; for bots only
 */
class AnswerCallbackQuery extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the callback query */
        #[SerializedName('callback_query_id')]
        private int $callbackQueryId,
        /** Text of the answer */
        #[SerializedName('text')]
        private string $text,
        /** Pass true to show an alert to the user instead of a toast notification */
        #[SerializedName('show_alert')]
        private bool $showAlert,
        /** URL to be opened */
        #[SerializedName('url')]
        private string $url,
        /** Time during which the result of the query can be cached, in seconds */
        #[SerializedName('cache_time')]
        private int $cacheTime,
    ) {
    }

    /**
     * Get Identifier of the callback query
     */
    public function getCallbackQueryId(): int
    {
        return $this->callbackQueryId;
    }

    /**
     * Set Identifier of the callback query
     */
    public function setCallbackQueryId(int $callbackQueryId): self
    {
        $this->callbackQueryId = $callbackQueryId;

        return $this;
    }

    /**
     * Get Text of the answer
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * Set Text of the answer
     */
    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get Pass true to show an alert to the user instead of a toast notification
     */
    public function getShowAlert(): bool
    {
        return $this->showAlert;
    }

    /**
     * Set Pass true to show an alert to the user instead of a toast notification
     */
    public function setShowAlert(bool $showAlert): self
    {
        $this->showAlert = $showAlert;

        return $this;
    }

    /**
     * Get URL to be opened
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set URL to be opened
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get Time during which the result of the query can be cached, in seconds
     */
    public function getCacheTime(): int
    {
        return $this->cacheTime;
    }

    /**
     * Set Time during which the result of the query can be cached, in seconds
     */
    public function setCacheTime(int $cacheTime): self
    {
        $this->cacheTime = $cacheTime;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'answerCallbackQuery',
            'callback_query_id' => $this->getCallbackQueryId(),
            'text' => $this->getText(),
            'show_alert' => $this->getShowAlert(),
            'url' => $this->getUrl(),
            'cache_time' => $this->getCacheTime(),
        ];
    }
}
