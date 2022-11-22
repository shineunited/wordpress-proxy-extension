<?php

/**
 * This file is part of WordPress Proxy Extensions.
 *
 * (c) Shine United LLC
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ShineUnited\WordPress\Proxy\Tests;

use ShineUnited\WordPress\Proxy\Plugin;
use ShineUnited\WordPress\Proxy\Provider\ExtensionProvider;
use ShineUnited\WordPress\Installer\Capability\ExtensionProvider as ExtensionProviderCapability;
use Composer\Plugin\PluginInterface;
use Composer\Plugin\Capable;

/**
 * Plugin Test
 */
class PluginTest extends TestCase {

	/**
	 * @return void
	 */
	public function testGetCapabilities(): void {
		$classmap = [
			ExtensionProviderCapability::class => ExtensionProvider::class
		];

		$plugin = new Plugin();

		$this->assertInstanceOf(PluginInterface::class, $plugin);
		$this->assertInstanceOf(Capable::class, $plugin);

		$capabilities = $plugin->getCapabilities();
		$this->assertIsArray($capabilities);

		foreach ($classmap as $capability => $provider) {
			$this->assertArrayHasKey($capability, $capabilities);
			$this->assertEquals($provider, $capabilities[$capability]);
		}
	}
}
