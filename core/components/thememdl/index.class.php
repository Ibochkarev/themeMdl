<?php

/**
 * Class themeMdlMainController
 */
abstract class themeMdlMainController extends modExtraManagerController {
	/** @var themeMdl $themeMdl */
	public $themeMdl;


	/**
	 * @return void
	 */
	public function initialize() {
		$corePath = $this->modx->getOption('thememdl_core_path', null, $this->modx->getOption('core_path') . 'components/thememdl/');
		require_once $corePath . 'model/thememdl/thememdl.class.php';

		$this->themeMdl = new themeMdl($this->modx);
		//$this->addCss($this->themeMdl->config['cssUrl'] . 'mgr/main.css');
		$this->addJavascript($this->themeMdl->config['jsUrl'] . 'mgr/thememdl.js');
		$this->addHtml('
		<script type="text/javascript">
			themeMdl.config = ' . $this->modx->toJSON($this->themeMdl->config) . ';
			themeMdl.config.connector_url = "' . $this->themeMdl->config['connectorUrl'] . '";
		</script>
		');

		parent::initialize();
	}


	/**
	 * @return array
	 */
	public function getLanguageTopics() {
		return array('thememdl:default');
	}


	/**
	 * @return bool
	 */
	public function checkPermissions() {
		return true;
	}
}


/**
 * Class IndexManagerController
 */
class IndexManagerController extends themeMdlMainController {

	/**
	 * @return string
	 */
	public static function getDefaultController() {
		return 'home';
	}
}