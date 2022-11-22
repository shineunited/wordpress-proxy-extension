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

namespace ShineUnited\WordPress\Proxy;

use ShineUnited\WordPress\Proxy\Provider\ExtensionProvider;
use ShineUnited\WordPress\Installer\Capability\ExtensionProvider as ExtensionProviderCapability;
use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Composer\Plugin\Capable;

/**
 * Composer Plugin
 */
class Plugin implements PluginInterface, Capable {

	/**
	 * {@inheritDoc}
	 */
	public function activate(Composer $composer, IOInterface $io) {
		// do nothing
	}

	/**
	 * {@inheritDoc}
	 */
	public function deactivate(Composer $composer, IOInterface $io) {
		// do nothing
	}

	/**
	 * {@inheritDoc}
	 */
	public function uninstall(Composer $composer, IOInterface $io) {
		// do nothing
	}

	/**
	 * {@inheritDoc}
	 */
	public function getCapabilities() {
		return [
			ExtensionProviderCapability::class => ExtensionProvider::class
		];
	}
}
