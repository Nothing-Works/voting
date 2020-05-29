<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Channel
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $color
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\CommunityLink[] $links
 * @property-read int|null $links_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Channel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Channel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Channel query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Channel whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Channel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Channel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Channel whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Channel whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Channel whereUpdatedAt($value)
 */
	class Channel extends \Eloquent {}
}

namespace App{
/**
 * App\CommunityLink
 *
 * @property int $id
 * @property int $user_id
 * @property int $channel_id
 * @property string $title
 * @property string $link
 * @property int $approved
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Channel $channel
 * @property-read \App\User $user
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\CommunityLinkVote[] $votes
 * @property-read int|null $votes_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CommunityLink forChannel($channel)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CommunityLink newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CommunityLink newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CommunityLink query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CommunityLink whereApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CommunityLink whereChannelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CommunityLink whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CommunityLink whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CommunityLink whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CommunityLink whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CommunityLink whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CommunityLink whereUserId($value)
 */
	class CommunityLink extends \Eloquent {}
}

namespace App{
/**
 * App\CommunityLinkVote
 *
 * @property int $id
 * @property int $user_id
 * @property int $community_link_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CommunityLinkVote newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CommunityLinkVote newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CommunityLinkVote query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CommunityLinkVote whereCommunityLinkId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CommunityLinkVote whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CommunityLinkVote whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CommunityLinkVote whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\CommunityLinkVote whereUserId($value)
 */
	class CommunityLinkVote extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property int $trusted
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\CommunityLink[] $links
 * @property-read int|null $links_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereTrusted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

