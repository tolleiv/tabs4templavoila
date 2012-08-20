<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

if (TYPO3_MODE == 'BE') {

	// Works in TemplaVoila 1.5+
$TYPO3_CONF_VARS['EXTCONF']['templavoila']['mod1']['renderFrameworkClass']['tabs4templavoila'] = 'EXT:tabs4templavoila/classes/class.tx_tabs4templavoila_renderer.php:tx_tabs4templavoila_renderer';

t3lib_extMgm::addPageTSConfig('
	mod.web_txtemplavoilaM1.javascript {  
		jquery = EXT:tabs4templavoila/res/js/jquery-1.4.2.min.js 
		jquerycookie = EXT:tabs4templavoila/res/js/jquery.cookie.js
		jqueryui = EXT:tabs4templavoila/res/js/jquery-ui-1.8.2.custom.min.js
		applytabs = EXT:tabs4templavoila/res/js/applyjquerytabs.js
	}

	mod.web_txtemplavoilaM1.stylesheet {  
		jqueryuicss = EXT:tabs4templavoila/res/css/black-tie/jquery-ui-1.8.2.custom.css
	}
');

}
?>
