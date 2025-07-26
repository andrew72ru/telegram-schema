<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Information about a bank card @title Title of the bank card description @actions Actions that can be done with the bank card number
 */
class BankCardInfo implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('title')]
        private string $title,
        #[SerializedName('actions')]
        private array|null $actions = null,
    ) {
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getActions(): array|null
    {
        return $this->actions;
    }

    public function setActions(array|null $actions): self
    {
        $this->actions = $actions;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'bankCardInfo',
            'title' => $this->getTitle(),
            'actions' => $this->getActions(),
        ];
    }
}
