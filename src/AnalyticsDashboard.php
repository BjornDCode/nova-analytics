<?php

namespace BjornDCode\NovaAnalyticsTool;

use Laravel\Nova\Http\Requests\NovaRequest;

class AnalyticsDashboard
{
    public static $indexCards = [];
    public static $pages = [];

    public static function registerIndexCards(array $cards)
    {
        static::$indexCards = array_merge(static::$indexCards, $cards);

        return new static;
    }

    public static function registerPages(array $pages)
    {
        static::$pages = array_merge(static::$pages, $pages);

        return new static;
    }

    public static function indexCards(NovaRequest $request)
    {
        return collect(static::$indexCards)->filter->authorize($request)->values();
    }

    public static function page(NovaRequest $request, string $page)
    {
        return collect(static::$pages[$page])->filter->authorize($request)->values();
    }

}
