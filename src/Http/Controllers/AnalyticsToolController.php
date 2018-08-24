<?php

namespace BjornDCode\NovaAnalyticsTool\Http\Controllers;

use Illuminate\Http\Request;
use BjornDCode\NovaAnalytics\File;
use Illuminate\Routing\Controller;
use Laravel\Nova\Http\Requests\NovaRequest;
use BjornDCode\NovaAnalyticsTool\AnalyticsDashboard;

class AnalyticsToolController extends Controller
{
    public function index(NovaRequest $request)
    {
        return AnalyticsDashboard::indexCards($request);
    }

    public function page(NovaRequest $request)
    {
        $data = $request->validate([
            'page' => 'required'
        ]);

        return AnalyticsDashboard::page($request, $data['page']);
    }

}
