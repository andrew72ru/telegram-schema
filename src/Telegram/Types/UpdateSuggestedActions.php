<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The list of suggested to the user actions has changed @added_actions Added suggested actions @removed_actions Removed suggested actions.
 */
class UpdateSuggestedActions extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('added_actions')]
        private array|null $addedActions = null,
        #[SerializedName('removed_actions')]
        private array|null $removedActions = null,
    ) {
    }

    public function getAddedActions(): array|null
    {
        return $this->addedActions;
    }

    public function setAddedActions(array|null $addedActions): self
    {
        $this->addedActions = $addedActions;

        return $this;
    }

    public function getRemovedActions(): array|null
    {
        return $this->removedActions;
    }

    public function setRemovedActions(array|null $removedActions): self
    {
        $this->removedActions = $removedActions;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateSuggestedActions',
            'added_actions' => $this->getAddedActions(),
            'removed_actions' => $this->getRemovedActions(),
        ];
    }
}
