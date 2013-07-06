<?php

namespace Lelesys\Plugin\SocialBookmarks\ViewHelpers;

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
class ShareLinkViewHelper extends \TYPO3\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper {

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