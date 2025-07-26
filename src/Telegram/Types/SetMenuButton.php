<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sets menu button for the given user or for all users; for bots only
 */
class SetMenuButton extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the user or 0 to set menu button for all users */
        #[SerializedName('user_id')]
        private int $userId,
        /** New menu button */
        #[SerializedName('menu_button')]
        private BotMenuButton|null $menuButton = null,
    ) {
    }

    /**
     * Get Identifier of the user or 0 to set menu button for all users
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Identifier of the user or 0 to set menu button for all users
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get New menu button
     */
    public function getMenuButton(): BotMenuButton|null
    {
        return $this->menuButton;
    }

    /**
     * Set New menu button
     */
    public function setMenuButton(BotMenuButton|null $menuButton): self
    {
        $this->menuButton = $menuButton;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setMenuButton',
            'user_id' => $this->getUserId(),
            'menu_button' => $this->getMenuButton(),
        ];
    }
}
