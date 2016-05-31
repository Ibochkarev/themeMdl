<?php

/**
 * The home manager controller for themeMdl.
 *
 */
class themeMdlHomeManagerController extends themeMdlMainController {
	/* @var themeMdl $themeMdl */
	public $themeMdl;


	/**
	 * @param array $scriptProperties
	 */
	public function process(array $scriptProperties = array()) {
	}


	/**
	 * @return null|string
	 */
	public function getPageTitle() {
		return $this->modx->lexicon('thememdl');
	}


	/**
	 * @return void
	 */
	public function loadCustomCssJs() {
		$this->addCss($this->themeMdl->config['cssUrl'] . 'mgr/main.css');
		$this->addCss($this->themeMdl->config['cssUrl'] . 'mgr/bootstrap.buttons.css');
		$this->addJavascript($this->themeMdl->config['jsUrl'] . 'mgr/misc/utils.js');
		$this->addJavascript($this->themeMdl->config['jsUrl'] . 'mgr/widgets/items.grid.js');
		$this->addJavascript($this->themeMdl->config['jsUrl'] . 'mgr/widgets/items.windows.js');
		$this->addJavascript($this->themeMdl->config['jsUrl'] . 'mgr/widgets/home.panel.js');
		$this->addJavascript($this->themeMdl->config['jsUrl'] . 'mgr/sections/home.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			MODx.load({ xtype: "thememdl-page-home"});
		});
		</script>');
	}


	/**
	 * @return string
	 */
	public function getTemplateFile() {
		return $this->themeMdl->config['templatesPath'] . 'home.tpl';
	}
}