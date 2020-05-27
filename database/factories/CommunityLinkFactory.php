<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CommunityLink;
use Faker\Generator as Faker;

$factory->define(CommunityLink::class, function (Faker $faker) {
    return [
        'user_id' => factory(\App\User::class)->create(),
        'channel_id' => 1,
        'title' => $faker->sentence,
        'link' => $faker->url,
        'approved' => 0,
    ];
});
