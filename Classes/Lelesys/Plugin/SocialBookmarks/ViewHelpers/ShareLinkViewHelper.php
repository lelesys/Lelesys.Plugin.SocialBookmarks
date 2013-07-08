<?php

namespace Lelesys\Plugin\SocialBookmarks\ViewHelpers;

/*                                                                                *
 * This script belongs to the TYPO3 Flow package "Lelesys.Plugin.SocialBookmarks".*
 *                                                                                *
 * It is free software; you can redistribute it and/or modify it under            *
 * the terms of the GNU Lesser General Public License, either version 3           *
 * of the License, or (at your option) any later version.                         *
 *                                                                                */

use TYPO3\Flow\Annotations as Flow;

/**
 * A view helper to display a Link
 *
 * = Examples =
 *
 * <code title="Simple">
 * <a target="_blank" href="<link:shareLink/>"></a>
 * </code>
 *
 * Output:
 * <a target="_blank" href="http://google.com"></a>
 *
 */
class ShareLinkViewHelper extends \TYPO3\Fluid\Core\ViewHelper\AbstractViewHelper {

	/**
	 * @var \TYPO3\Flow\Core\Bootstrap
	 * @Flow\Inject
	 */
	protected $bootstrap;

	/**
	 * Renders the link.
	 *
	 * @return string The rendered link
	 */
	public function render() {
		$uri = $this->bootstrap->getActiveRequestHandler()->getHttpRequest()->getUri();
		return $uri;
	}

}

?>