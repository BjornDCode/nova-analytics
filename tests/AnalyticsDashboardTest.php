<?php

namespace BjornDCode\NovaAnalyticsTool\Tests;

use Symfony\Component\HttpFoundation\Response;
use BjornDCode\NovaAnalyticsTool\AnalyticsTool;
use BjornDCode\NovaAnalyticsTool\AnalyticsDashboard;
use BjornDCode\NovaAnalyticsTool\Tests\Fixtures\ExampleMetric;
use BjornDCode\NovaAnalyticsTool\Http\Controllers\AnalyticsToolController;

class AnalyticsDashboardTest extends TestCase
{
    public function tearDown()
    {
        parent::tearDown();

        AnalyticsDashboard::$indexCards = [];
        AnalyticsDashboard::$pages = [];
    }

    /** @test */
    public function it_can_register_cards_for_the_index_page()
    {
        AnalyticsDashboard::registerIndexCards([
            new ExampleMetric,
        ]);

        $this->assertCount(1, AnalyticsDashboard::$indexCards);
    }

    /** @test */
    public function it_can_register_subpages()
    {
        AnalyticsDashboard::registerPages([
            'test-page' => [
                new ExampleMetric,
            ]
        ]);

        $this->assertCount(1, AnalyticsDashboard::$pages);
    }

    /** @test */
    public function it_can_return_index_cards()
    {
        AnalyticsDashboard::registerIndexCards([
            new ExampleMetric,
        ]);

        $cards = json_decode($this->get('/nova-vendor/bjorndcode/nova-analytics/cards')->getContent(), true);

        $this->assertCount(1, $cards);
    }

    /** @test */
    public function it_can_return_cards_from_a_specific_page()
    {
        AnalyticsDashboard::registerPages([
            'test-page' => [
                new ExampleMetric,
            ]
        ]);

        $cards = json_decode($this->get('/nova-vendor/bjorndcode/nova-analytics/page?page=test-page')->getContent(), true);

        $this->assertCount(1, $cards);
    }

}
