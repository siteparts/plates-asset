# Asset Plates extension

*Generate cache busted web assets URLs in Plates.*

[plates-asset](https://github.com/siteparts/plates-asset) uses
[asset](https://github.com/siteparts/asset) to generate cache busted assets URLs
in [Plates](http://platesphp.com/).

## Installation

Via Composer:

```bash
$ composer require siteparts/plates-asset
```

## Usage

Setup AssetHelper according to the [asset](https://github.com/siteparts/asset)
instructions and
[enable the extension](http://platesphp.com/v3/engine/extensions/#loading-extensions):

```php
use SiteParts\Templating\Plates\Extension\Asset\AssetExtension;

// $engine is instance of League\Plates\Engine
// $assetHelper is instance of SiteParts\Asset\AssetHelper
$engine->loadExtension(new AssetExtension($assetHelper));
```

Use `assetUrl` in your template:

```html+php
<img src="<?= $this->assetUrl("img/image.png") ?>" alt="...">
```

For use with a PSR-11 container, you can also use the `ConfigProvider` supplied.
