<?php

namespace Lelesys\Plugin\SocialBookmarks\ViewHelpers;

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
	 * Renders the link.
	 *
	 * @return string The rendered link
	 */
	public function render() {
		$url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER["REQUEST_URI"];
		return $url;
	}
}

?>