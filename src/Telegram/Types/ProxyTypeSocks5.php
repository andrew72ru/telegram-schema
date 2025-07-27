<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A SOCKS5 proxy server @username Username for logging in; may be empty @password Password for logging in; may be empty.
 */
class ProxyTypeSocks5 extends ProxyType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('username')]
        private string $username,
        #[SerializedName('password')]
        private string $password,
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'proxyTypeSocks5',
            'username' => $this->getUsername(),
            'password' => $this->getPassword(),
        ];
    }
}
