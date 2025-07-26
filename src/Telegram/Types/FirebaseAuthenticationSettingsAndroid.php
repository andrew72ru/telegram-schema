<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Settings for Firebase Authentication in the official Android application
 */
class FirebaseAuthenticationSettingsAndroid extends FirebaseAuthenticationSettings implements \JsonSerializable
{
    public function jsonSerialize(): array
    {
        return [
            '@type' => 'firebaseAuthenticationSettingsAndroid',
        ];
    }
}
