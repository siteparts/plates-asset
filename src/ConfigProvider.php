<?php

declare(strict_types=1);

namespace SiteParts\Templating\Plates\Extension\Asset;

class ConfigProvider
{
	/**
	 * @return array{
	 *     dependencies: array{
	 *         factories: array<string, string>,
	 *     },
	 *     plates: array{
	 *         extensions: string[],
	 *     },
	 * }
	 */
	public function __invoke() : array
	{
		return [
			'dependencies' => $this->getDependencies(),
			'plates' => $this->getPlates(),
		];
	}

	/**
	 * @return array{
	 *     factories: array<string, string>,
	 * }
	 */
	public function getDependencies() : array
	{
		return [
			'factories' => [
				AssetExtension::class => AssetExtensionFactory::class,
			],
		];
	}

	/**
	 * @return array{
	 *     extensions: string[],
	 * }
	 */
	public function getPlates() : array
	{
		return [
			'extensions' => [
				AssetExtension::class,
			],
		];
	}
}
