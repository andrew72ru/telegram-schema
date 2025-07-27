<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Specifies the supported call protocols.
 */
class CallProtocol implements \JsonSerializable
{
    public function __construct(
        /** True, if UDP peer-to-peer connections are supported */
        #[SerializedName('udp_p2p')]
        private bool $udpP2p,
        /** True, if connection through UDP reflectors is supported */
        #[SerializedName('udp_reflector')]
        private bool $udpReflector,
        /** The minimum supported API layer; use 65 */
        #[SerializedName('min_layer')]
        private int $minLayer,
        /** The maximum supported API layer; use 92 */
        #[SerializedName('max_layer')]
        private int $maxLayer,
        /** List of supported tgcalls versions */
        #[SerializedName('library_versions')]
        private array|null $libraryVersions = null,
    ) {
    }

    /**
     * Get True, if UDP peer-to-peer connections are supported.
     */
    public function getUdpP2p(): bool
    {
        return $this->udpP2p;
    }

    /**
     * Set True, if UDP peer-to-peer connections are supported.
     */
    public function setUdpP2p(bool $udpP2p): self
    {
        $this->udpP2p = $udpP2p;

        return $this;
    }

    /**
     * Get True, if connection through UDP reflectors is supported.
     */
    public function getUdpReflector(): bool
    {
        return $this->udpReflector;
    }

    /**
     * Set True, if connection through UDP reflectors is supported.
     */
    public function setUdpReflector(bool $udpReflector): self
    {
        $this->udpReflector = $udpReflector;

        return $this;
    }

    /**
     * Get The minimum supported API layer; use 65.
     */
    public function getMinLayer(): int
    {
        return $this->minLayer;
    }

    /**
     * Set The minimum supported API layer; use 65.
     */
    public function setMinLayer(int $minLayer): self
    {
        $this->minLayer = $minLayer;

        return $this;
    }

    /**
     * Get The maximum supported API layer; use 92.
     */
    public function getMaxLayer(): int
    {
        return $this->maxLayer;
    }

    /**
     * Set The maximum supported API layer; use 92.
     */
    public function setMaxLayer(int $maxLayer): self
    {
        $this->maxLayer = $maxLayer;

        return $this;
    }

    /**
     * Get List of supported tgcalls versions.
     */
    public function getLibraryVersions(): array|null
    {
        return $this->libraryVersions;
    }

    /**
     * Set List of supported tgcalls versions.
     */
    public function setLibraryVersions(array|null $libraryVersions): self
    {
        $this->libraryVersions = $libraryVersions;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'callProtocol',
            'udp_p2p' => $this->getUdpP2p(),
            'udp_reflector' => $this->getUdpReflector(),
            'min_layer' => $this->getMinLayer(),
            'max_layer' => $this->getMaxLayer(),
            'library_versions' => $this->getLibraryVersions(),
        ];
    }
}
