<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains basic information about the photo of a chat
 */
class ChatPhotoInfo implements \JsonSerializable
{
    public function __construct(
        /** A small (160x160) chat photo variant in JPEG format. The file can be downloaded only before the photo is changed */
        #[SerializedName('small')]
        private File|null $small = null,
        /** A big (640x640) chat photo variant in JPEG format. The file can be downloaded only before the photo is changed */
        #[SerializedName('big')]
        private File|null $big = null,
        /** Chat photo minithumbnail; may be null */
        #[SerializedName('minithumbnail')]
        private Minithumbnail|null $minithumbnail = null,
        /** True, if the photo has animated variant */
        #[SerializedName('has_animation')]
        private bool $hasAnimation,
        /** True, if the photo is visible only for the current user */
        #[SerializedName('is_personal')]
        private bool $isPersonal,
    ) {
    }

    /**
     * Get A small (160x160) chat photo variant in JPEG format. The file can be downloaded only before the photo is changed
     */
    public function getSmall(): File|null
    {
        return $this->small;
    }

    /**
     * Set A small (160x160) chat photo variant in JPEG format. The file can be downloaded only before the photo is changed
     */
    public function setSmall(File|null $small): self
    {
        $this->small = $small;

        return $this;
    }

    /**
     * Get A big (640x640) chat photo variant in JPEG format. The file can be downloaded only before the photo is changed
     */
    public function getBig(): File|null
    {
        return $this->big;
    }

    /**
     * Set A big (640x640) chat photo variant in JPEG format. The file can be downloaded only before the photo is changed
     */
    public function setBig(File|null $big): self
    {
        $this->big = $big;

        return $this;
    }

    /**
     * Get Chat photo minithumbnail; may be null
     */
    public function getMinithumbnail(): Minithumbnail|null
    {
        return $this->minithumbnail;
    }

    /**
     * Set Chat photo minithumbnail; may be null
     */
    public function setMinithumbnail(Minithumbnail|null $minithumbnail): self
    {
        $this->minithumbnail = $minithumbnail;

        return $this;
    }

    /**
     * Get True, if the photo has animated variant
     */
    public function getHasAnimation(): bool
    {
        return $this->hasAnimation;
    }

    /**
     * Set True, if the photo has animated variant
     */
    public function setHasAnimation(bool $hasAnimation): self
    {
        $this->hasAnimation = $hasAnimation;

        return $this;
    }

    /**
     * Get True, if the photo is visible only for the current user
     */
    public function getIsPersonal(): bool
    {
        return $this->isPersonal;
    }

    /**
     * Set True, if the photo is visible only for the current user
     */
    public function setIsPersonal(bool $isPersonal): self
    {
        $this->isPersonal = $isPersonal;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatPhotoInfo',
            'small' => $this->getSmall(),
            'big' => $this->getBig(),
            'minithumbnail' => $this->getMinithumbnail(),
            'has_animation' => $this->getHasAnimation(),
            'is_personal' => $this->getIsPersonal(),
        ];
    }
}
