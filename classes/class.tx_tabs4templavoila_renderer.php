<?php
/***************************************************************
* Copyright notice
*
* (c) 2010 Tolleiv Nietsch <info@tolleiv.de>
*  All rights reserved
*
*  This script is part of the Typo3 project. The Typo3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

class tx_tabs4templavoila_renderer {

	public function composeSubelements($cells, $elementContentTreeArr, &$output, &$alreadyRendered, $mod1) {
	
		if ($elementContentTreeArr['el']['table'] != 'pages') {
			return;
		}

		$headerCells = $contentCells = array();
		foreach ($cells as $cell) {
			$headerCells[] = vsprintf('<li class="bgColor6 tpm-title-cell"><a href="#%1$s">%3$s</a></li>', $cell);
			$contentCells[] = vsprintf('<div %2$s class="tpm-content-cell">%5$s</div>', $cell);
		}
		$output = '
			<div class="tpm-subelement-table tabs">
				<ul>' . (count($headerCells) ? implode('', $headerCells) : '') . '</ul>
				' .  (count($contentCells) ? implode('', $contentCells) : '' ) . '
			</div>
		';
		
		$alreadyRendered = TRUE;
	}

}

?>
