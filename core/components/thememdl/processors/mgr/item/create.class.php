<?php

/**
 * Create an Item
 */
class themeMdlItemCreateProcessor extends modObjectCreateProcessor {
	public $objectType = 'themeMdlItem';
	public $classKey = 'themeMdlItem';
	public $languageTopics = array('thememdl');
	//public $permission = 'create';


	/**
	 * @return bool
	 */
	public function beforeSet() {
		$name = trim($this->getProperty('name'));
		if (empty($name)) {
			$this->modx->error->addField('name', $this->modx->lexicon('thememdl_item_err_name'));
		}
		elseif ($this->modx->getCount($this->classKey, array('name' => $name))) {
			$this->modx->error->addField('name', $this->modx->lexicon('thememdl_item_err_ae'));
		}

		return parent::beforeSet();
	}

}

return 'themeMdlItemCreateProcessor';