<?php

namespace BjornDCode\NovaAnalyticsTool;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool as BaseTool;

class AnalyticsTool extends BaseTool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('Analytics', __DIR__.'/../dist/js/tool.js');
    }

    /**
     * Build the view that renders the navigation links for the tool.
     *
     * @return \Illuminate\View\View
     */
    public function renderNavigation()
    {
        return view('Analytics::navigation', ['pages' => AnalyticsDashboard::$pages]);
    }

}
