<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    // // public function __construct()
    // // {
    // //     Meta::title(env('META_TITLE'));
    // //     Meta::meta('robots', env('META_ROBOTS'));
    // //     Meta::meta('description', env('META_DESCRIPTION'));
    // //     Meta::meta('author', env('META_AUTHOR'));
    // //     Meta::meta('language', env('META_LANGUAGE'));
    // //     Meta::meta('revisit-after', env('META_REVISIT_AFTER'));
    // //     Meta::meta('webcrawlers', env('META_WEBCRAWLERS'));
    // //     Meta::meta('rating', env('META_RATING'));
    // //     Meta::meta('spiders', env('META_SPIDERS'));
    // //     Meta::meta('image', env('META_IMAGE'));

    // //     // facebook meta
    // //     Meta::meta('fb:admins', env('META_ADMIN_ID'));
    // //     Meta::meta('locale', env('META_LOCALE'));
    // //     Meta::meta('type', env('META_TYPE'));
    // //     Meta::meta('url', url()->current());
    // //     Meta::meta('site_name', env('META_SITE_NAME'));

    // //     // twitter meta
    // //     Meta::meta('twitter:card', env('META_CARD'));
    // //     Meta::meta('twitter:site', env('META_TWITTER_ID'));
    // //     Meta::meta('twitter:title', env('META_TITLE'));
    // //     Meta::meta('twitter:description', env('META_DESCRIPTION'));
    // //     Meta::meta('twitter:creator', env('META_TWITTER_ID'));
    // //     Meta::meta('twitter:domain', url()->current());
    // //     Meta::meta('twitter:image:src', env('META_IMAGE'));
    // }
}
