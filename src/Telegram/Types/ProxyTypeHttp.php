<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A HTTP transparent proxy server @username Username for logging in; may be empty @password Password for logging in; may be empty @http_only Pass true if the proxy supports only HTTP requests and doesn't support transparent TCP connections via HTTP CONNECT method.
 */
class ProxyTypeHttp extends ProxyType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('username')]
        private string $username,
        #[SerializedName('password')]
        private string $password,
        #[SerializedName('http_only')]
        private bool $httpOnly,
    ) {
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
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

    public function getHttpOnly(): bool
    {
        return $this->httpOnly;
    }

    public function setHttpOnly(bool $httpOnly): self
    {
        $this->httpOnly = $httpOnly;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'proxyTypeHttp',
            'username' => $this->getUsername(),
            'password' => $this->getPassword(),
            'http_only' => $this->getHttpOnly(),
        ];
    }
}
