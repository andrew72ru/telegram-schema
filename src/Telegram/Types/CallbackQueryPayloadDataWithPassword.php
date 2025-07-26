<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The payload for a callback button requiring password @password The 2-step verification password for the current user @data Data that was attached to the callback button
 */
class CallbackQueryPayloadDataWithPassword extends CallbackQueryPayload implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('password')]
        private string $password,
        #[SerializedName('data')]
        private string $data,
    ) {
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function setData(string $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'callbackQueryPayloadDataWithPassword',
            'password' => $this->getPassword(),
            'data' => $this->getData(),
        ];
    }
}
