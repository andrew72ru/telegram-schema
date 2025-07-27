<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of reactions added to a message.
 */
class MessageReactions implements \JsonSerializable
{
    public function __construct(
        /** List of added reactions */
        #[SerializedName('reactions')]
        private array|null $reactions = null,
        /** True, if the reactions are tags and Telegram Premium users can filter messages by them */
        #[SerializedName('are_tags')]
        private bool $areTags,
        /** Information about top users that added the paid reaction */
        #[SerializedName('paid_reactors')]
        private array|null $paidReactors = null,
        /** True, if the list of added reactions is available using getMessageAddedReactions */
        #[SerializedName('can_get_added_reactions')]
        private bool $canGetAddedReactions,
    ) {
    }

    /**
     * Get List of added reactions.
     */
    public function getReactions(): array|null
    {
        return $this->reactions;
    }

    /**
     * Set List of added reactions.
     */
    public function setReactions(array|null $reactions): self
    {
        $this->reactions = $reactions;

        return $this;
    }

    /**
     * Get True, if the reactions are tags and Telegram Premium users can filter messages by them.
     */
    public function getAreTags(): bool
    {
        return $this->areTags;
    }

    /**
     * Set True, if the reactions are tags and Telegram Premium users can filter messages by them.
     */
    public function setAreTags(bool $areTags): self
    {
        $this->areTags = $areTags;

        return $this;
    }

    /**
     * Get Information about top users that added the paid reaction.
     */
    public function getPaidReactors(): array|null
    {
        return $this->paidReactors;
    }

    /**
     * Set Information about top users that added the paid reaction.
     */
    public function setPaidReactors(array|null $paidReactors): self
    {
        $this->paidReactors = $paidReactors;

        return $this;
    }

    /**
     * Get True, if the list of added reactions is available using getMessageAddedReactions.
     */
    public function getCanGetAddedReactions(): bool
    {
        return $this->canGetAddedReactions;
    }

    /**
     * Set True, if the list of added reactions is available using getMessageAddedReactions.
     */
    public function setCanGetAddedReactions(bool $canGetAddedReactions): self
    {
        $this->canGetAddedReactions = $canGetAddedReactions;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageReactions',
            'reactions' => $this->getReactions(),
            'are_tags' => $this->getAreTags(),
            'paid_reactors' => $this->getPaidReactors(),
            'can_get_added_reactions' => $this->getCanGetAddedReactions(),
        ];
    }
}
