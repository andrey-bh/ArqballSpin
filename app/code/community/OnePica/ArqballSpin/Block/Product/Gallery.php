<?php
/**
* One Pica
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to codemaster@onepica.com so we can send you a copy immediately.
*
* @category OnePica
* @package OnePica_ArqballSpin
* @copyright Copyright (c) 2012 One Pica, Inc. (http://www.onepica.com)
* @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
*/
/**
* One Pica Arqball Spin
*
* @category OnePica
* @package OnePica_ArqballSpin
* @author One Pica Codemaster codemaster@onepica.com
*/
class OnePica_ArqballSpin_Block_Product_Gallery extends Mage_Catalog_Block_Product_Gallery
{
    /**
     * Retrieve image width
     *
     * @return bool|int
     */
    public function getImageWidth()
    {
		$image = $this->getCurrentImage();
		$file = $image->getPath();
		if ($image->getIsArqspin() || file_exists($file)) {
			$size = getimagesize($file);
			if (isset($size[0])) {
				if ($size[0] > 600) {
					return 600;
				} else {
					return $size[0];
				}
			}
		}

        return false;
    }
}