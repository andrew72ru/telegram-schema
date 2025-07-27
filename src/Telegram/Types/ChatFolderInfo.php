<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains basic information about a chat folder.
 */
class ChatFolderInfo implements \JsonSerializable
{
    public function __construct(
        /** Unique chat folder identifier */
        #[SerializedName('id')]
        private int $id,
        /** The name of the folder */
        #[SerializedName('name')]
        private ChatFolderName|null $name = null,
        /** The chosen or default icon for the chat folder */
        #[SerializedName('icon')]
        private ChatFolderIcon|null $icon = null,
        /** The identifier of the chosen color for the chat folder icon; from -1 to 6. If -1, then color is disabled */
        #[SerializedName('color_id')]
        private int $colorId,
        /** True, if at least one link has been created for the folder */
        #[SerializedName('is_shareable')]
        private bool $isShareable,
        /** True, if the chat folder has invite links created by the current user */
        #[SerializedName('has_my_invite_links')]
        private bool $hasMyInviteLinks,
    ) {
    }

    /**
     * Get Unique chat folder identifier.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Unique chat folder identifier.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get The name of the folder.
     */
    public function getName(): ChatFolderName|null
    {
        return $this->name;
    }

    /**
     * Set The name of the folder.
     */
    public function setName(ChatFolderName|null $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get The chosen or default icon for the chat folder.
     */
    public function getIcon(): ChatFolderIcon|null
    {
        return $this->icon;
    }

    /**
     * Set The chosen or default icon for the chat folder.
     */
    public function setIcon(ChatFolderIcon|null $icon): self
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get The identifier of the chosen color for the chat folder icon; from -1 to 6. If -1, then color is disabled.
     */
    public function getColorId(): int
    {
        return $this->colorId;
    }

    /**
     * Set The identifier of the chosen color for the chat folder icon; from -1 to 6. If -1, then color is disabled.
     */
    public function setColorId(int $colorId): self
    {
        $this->colorId = $colorId;

        return $this;
    }

    /**
     * Get True, if at least one link has been created for the folder.
     */
    public function getIsShareable(): bool
    {
        return $this->isShareable;
    }

    /**
     * Set True, if at least one link has been created for the folder.
     */
    public function setIsShareable(bool $isShareable): self
    {
        $this->isShareable = $isShareable;

        return $this;
    }

    /**
     * Get True, if the chat folder has invite links created by the current user.
     */
    public function getHasMyInviteLinks(): bool
    {
        return $this->hasMyInviteLinks;
    }

    /**
     * Set True, if the chat folder has invite links created by the current user.
     */
    public function setHasMyInviteLinks(bool $hasMyInviteLinks): self
    {
        $this->hasMyInviteLinks = $hasMyInviteLinks;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatFolderInfo',
            'id' => $this->getId(),
            'name' => $this->getName(),
            'icon' => $this->getIcon(),
            'color_id' => $this->getColorId(),
            'is_shareable' => $this->getIsShareable(),
            'has_my_invite_links' => $this->getHasMyInviteLinks(),
        ];
    }
}
