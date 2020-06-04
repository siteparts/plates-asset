<?php

declare(strict_types=1);

namespace SiteParts\Templating\Plates\Extension\Asset;

use League\Plates\Engine;
use League\Plates\Extension\ExtensionInterface;
use SiteParts\Asset\AssetHelper;

class AssetExtension implements ExtensionInterface
{
	/** @var AssetHelper */
	private $assetHelper;

	public function __construct(AssetHelper $assetHelper)
	{
		$this->assetHelper = $assetHelper;
	}

	public function register(Engine $engine) : void
	{
		$engine->registerFunction('assetUrl', $this->assetHelper);
	}
}
