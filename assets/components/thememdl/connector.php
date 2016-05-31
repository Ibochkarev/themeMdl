<?php
if (file_exists(dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php')) {
    /** @noinspection PhpIncludeInspection */
    require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
}
else {
    require_once dirname(dirname(dirname(dirname(dirname(__FILE__))))) . '/config.core.php';
}
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var themeMdl $themeMdl */
$themeMdl = $modx->getService('thememdl', 'themeMdl', $modx->getOption('thememdl_core_path', null, $modx->getOption('core_path') . 'components/thememdl/') . 'model/thememdl/');
$modx->lexicon->load('thememdl:default');

// handle request
$corePath = $modx->getOption('thememdl_core_path', null, $modx->getOption('core_path') . 'components/thememdl/');
$path = $modx->getOption('processorsPath', $themeMdl->config, $corePath . 'processors/');
$modx->request->handleRequest(array(
	'processors_path' => $path,
	'location' => '',
));
