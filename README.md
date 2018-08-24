# Nova Analytics

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bjorndcode/nova-analytics.svg?style=flat-square)](https://packagist.org/packages/bjorndcode/nova-analytics)
[![Total Downloads](https://img.shields.io/packagist/dt/bjorndcode/nova-analytics.svg?style=flat-square)](https://packagist.org/packages/bjorndcode/nova-analytics)

Nova Analytics adds a page for analytics in Laravel Nova. It works well if you want to keep your analytics away from the Dashboard page or want more detailed analytics pages. 

By default there is a main analytics page but you can easily add subpages with more detailed analytics.

You can load any card you want on the analytics pages.

<img width="1440" alt="screen shot 2018-08-24 at 21 01 25" src="https://user-images.githubusercontent.com/14328774/44602899-4f9d7700-a7e1-11e8-9f58-06a803bf8ebb.png">


## Installation

You can install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require bjorndcode/nova-analytics
```

Next up, you must register the tool with Nova. This is typically done in the `tools` method of the `NovaServiceProvider`.

```php
// in app/Providers/NovaServiceProvder.php

// ...

public function tools()
{
    return [
        // ...
        new \:namespace_vendor\:namespace_tool_name\Tool(),
    ];
}
```

## Usage

In `NovaServiceProvider` you must register all the cards and pages you want. 

```php
// in app/Providers/NovaServiceProvder.php

// ...

public function boot()
{
    parent::boot();

    // Add any cards you want shown on the main "Analytics" page
    AnalyticsDashboard::registerIndexCards([
        // new Metric,
    ]);

    // Add any subpages here
    // The key is the subpage name
    AnalyticsDashboard::registerPages([
        'pageName' => [
            // new Metric,
        ],
    ]);
}
```

Click on the "Analytics" menu item in your Nova app to see the cards.

### Supported Cards

You can add any cards you want. A good example is the custom metrics you've created for Nova.
You can also add cards from other packages. Here is a list of cards that can be useful:

- [nova-google-analytics](https://github.com/tightenco/nova-google-analytics)

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email bjornlindholmhansen@gmail.com instead of using the issue tracker.

## Credits

- [Bjørn Lindholm](https://github.com/BjornDCode)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
