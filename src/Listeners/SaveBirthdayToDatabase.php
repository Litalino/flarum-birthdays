<?php

/*
 * This file is part of datlechin/flarum-birthdays.
 *
 * Copyright (c) 2022 Ngo Quoc Dat.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Litalino\Birthdays\Listeners;

use Flarum\User\Event\Saving;
use Illuminate\Support\Arr;

class SaveBirthdayToDatabase
{

    public function handle(Saving $event): void
    {
        //Allow admins to create users from the admin panel
        if ($event->actor->isAdmin()) {
            return;
        }

        $user = $event->user;
        $data = $event->data;

        /**
         * User is registering from Auth Provider
         */
        //if (isset($data['attributes']['token'])) {
        //    return;
        //}

        $actor = $event->actor;
        $attributes = Arr::get($data, 'attributes', []);

        $actor->assertCan('editBirthday', $user);

        $user->showDobDate = $attributes['showDobDate'] ?? false;
        $user->showDobYear = $attributes['showDobYear'] ?? false;

        if (isset($attributes['birthday'])) {
            $user->birthday = $attributes['birthday'] === '' ? null : $attributes['birthday'];
        }
    }
}
