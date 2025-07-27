<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The call is ready to use.
 */
class CallStateReady extends CallState implements \JsonSerializable
{
    public function __construct(
        /** Call protocols supported by the other call participant */
        #[SerializedName('protocol')]
        private CallProtocol|null $protocol = null,
        /** List of available call servers */
        #[SerializedName('servers')]
        private array|null $servers = null,
        /** A JSON-encoded call config */
        #[SerializedName('config')]
        private string $config,
        /** Call encryption key */
        #[SerializedName('encryption_key')]
        private string $encryptionKey,
        /** Encryption key fingerprint represented as 4 emoji */
        #[SerializedName('emojis')]
        private array|null $emojis = null,
        /** True, if peer-to-peer connection is allowed by users privacy settings */
        #[SerializedName('allow_p2p')]
        private bool $allowP2p,
        /** True, if the other party supports upgrading of the call to a group call */
        #[SerializedName('is_group_call_supported')]
        private bool $isGroupCallSupported,
        /** Custom JSON-encoded call parameters to be passed to tgcalls */
        #[SerializedName('custom_parameters')]
        private string $customParameters,
    ) {
    }

    /**
     * Get Call protocols supported by the other call participant.
     */
    public function getProtocol(): CallProtocol|null
    {
        return $this->protocol;
    }

    /**
     * Set Call protocols supported by the other call participant.
     */
    public function setProtocol(CallProtocol|null $protocol): self
    {
        $this->protocol = $protocol;

        return $this;
    }

    /**
     * Get List of available call servers.
     */
    public function getServers(): array|null
    {
        return $this->servers;
    }

    /**
     * Set List of available call servers.
     */
    public function setServers(array|null $servers): self
    {
        $this->servers = $servers;

        return $this;
    }

    /**
     * Get A JSON-encoded call config.
     */
    public function getConfig(): string
    {
        return $this->config;
    }

    /**
     * Set A JSON-encoded call config.
     */
    public function setConfig(string $config): self
    {
        $this->config = $config;

        return $this;
    }

    /**
     * Get Call encryption key.
     */
    public function getEncryptionKey(): string
    {
        return $this->encryptionKey;
    }

    /**
     * Set Call encryption key.
     */
    public function setEncryptionKey(string $encryptionKey): self
    {
        $this->encryptionKey = $encryptionKey;

        return $this;
    }

    /**
     * Get Encryption key fingerprint represented as 4 emoji.
     */
    public function getEmojis(): array|null
    {
        return $this->emojis;
    }

    /**
     * Set Encryption key fingerprint represented as 4 emoji.
     */
    public function setEmojis(array|null $emojis): self
    {
        $this->emojis = $emojis;

        return $this;
    }

    /**
     * Get True, if peer-to-peer connection is allowed by users privacy settings.
     */
    public function getAllowP2p(): bool
    {
        return $this->allowP2p;
    }

    /**
     * Set True, if peer-to-peer connection is allowed by users privacy settings.
     */
    public function setAllowP2p(bool $allowP2p): self
    {
        $this->allowP2p = $allowP2p;

        return $this;
    }

    /**
     * Get True, if the other party supports upgrading of the call to a group call.
     */
    public function getIsGroupCallSupported(): bool
    {
        return $this->isGroupCallSupported;
    }

    /**
     * Set True, if the other party supports upgrading of the call to a group call.
     */
    public function setIsGroupCallSupported(bool $isGroupCallSupported): self
    {
        $this->isGroupCallSupported = $isGroupCallSupported;

        return $this;
    }

    /**
     * Get Custom JSON-encoded call parameters to be passed to tgcalls.
     */
    public function getCustomParameters(): string
    {
        return $this->customParameters;
    }

    /**
     * Set Custom JSON-encoded call parameters to be passed to tgcalls.
     */
    public function setCustomParameters(string $customParameters): self
    {
        $this->customParameters = $customParameters;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'callStateReady',
            'protocol' => $this->getProtocol(),
            'servers' => $this->getServers(),
            'config' => $this->getConfig(),
            'encryption_key' => $this->getEncryptionKey(),
            'emojis' => $this->getEmojis(),
            'allow_p2p' => $this->getAllowP2p(),
            'is_group_call_supported' => $this->getIsGroupCallSupported(),
            'custom_parameters' => $this->getCustomParameters(),
        ];
    }
}
