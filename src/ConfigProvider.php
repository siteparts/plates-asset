<?php

declare(strict_types=1);

namespace SiteParts\Templating\Plates\Extension\Asset;

class ConfigProvider
{
	public function __invoke() : array
	{
		return [
			'dependencies' => $this->getDependencies(),
			'plates' => $this->getPlates(),
		];
	}

	public function getDependencies() : array
	{
		return [
			'factories' => [
				AssetExtension::class => AssetExtensionFactory::class,
			],
		];
	}

	public function getPlates() : array
	{
		return [
			'extensions' => [
				AssetExtension::class,
			],
		];
	}
}
