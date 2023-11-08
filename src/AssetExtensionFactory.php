<?php

declare(strict_types=1);

namespace SiteParts\Templating\Plates\Extension\Asset;

use Psr\Container\ContainerInterface;
use RuntimeException;
use SiteParts\Asset\AssetHelper;

class AssetExtensionFactory
{
	public function __invoke(ContainerInterface $container) : AssetExtension
	{
		if (!$container->has(AssetHelper::class)) {
			throw new RuntimeException(
				AssetExtension::class . ' requires an ' . AssetHelper::class . '; none found in container.'
			);
		}

		$assetHelper = $container->get(AssetHelper::class);

		if (!($assetHelper instanceof AssetHelper)) {
			throw new RuntimeException(
				AssetExtension::class . ' requires an instance of ' . AssetHelper::class . '.'
			);
		}

		return new AssetExtension(
			$assetHelper
		);
	}
}
