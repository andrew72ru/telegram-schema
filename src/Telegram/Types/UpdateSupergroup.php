<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Some data of a supergroup or a channel has changed. This update is guaranteed to come before the supergroup identifier is returned to the application @supergroup New data about the supergroup
 */
class UpdateSupergroup extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('supergroup')]
        private Supergroup|null $supergroup = null,
    ) {
    }

    public function getSupergroup(): Supergroup|null
    {
        return $this->supergroup;
    }

    public function setSupergroup(Supergroup|null $supergroup): self
    {
        $this->supergroup = $supergroup;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateSupergroup',
            'supergroup' => $this->getSupergroup(),
        ];
    }
}
