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

namespace ShineUnited\WordPress\Proxy\Provider;

use ShineUnited\WordPress\Installer\Capability\ExtensionProvider as ExtensionProviderCapability;
use ShineUnited\WordPress\Installer\Extension\BeforeInitExtension;

/**
 * Extension Provider
 */
class ExtensionProvider implements ExtensionProviderCapability {

	/**
	 * {@inheritDoc}
	 */
	public function getExtensions(): array {
		return [
			new BeforeInitExtension(__DIR__ . '/../../inc/remote-addr.php'),
			new BeforeInitExtension(__DIR__ . '/../../inc/https.php'),
		];
	}
}
