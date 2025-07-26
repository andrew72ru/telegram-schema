<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A file defined by its remote identifier. The remote identifier is guaranteed to be usable only if the corresponding file is still accessible to the user and known to TDLib.
 */
class InputFileRemote extends InputFile implements \JsonSerializable
{
    public function __construct(
        /** Remote file identifier */
        #[SerializedName('id')]
        private string $id,
    ) {
    }

    /**
     * Get Remote file identifier
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set Remote file identifier
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputFileRemote',
            'id' => $this->getId(),
        ];
    }
}
