<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Loads an asynchronous or a zoomed in statistical graph @chat_id Chat identifier @token The token for graph loading @x X-value for zoomed in graph or 0 otherwise
 */
class GetStatisticalGraph extends StatisticalGraph implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('token')]
        private string $token,
        #[SerializedName('x')]
        private int $x,
    ) {
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function setX(int $x): self
    {
        $this->x = $x;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getStatisticalGraph',
            'chat_id' => $this->getChatId(),
            'token' => $this->getToken(),
            'x' => $this->getX(),
        ];
    }
}
