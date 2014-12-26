<?php
namespace tejrajs\datatable;
/**
 * Asset bundle for datatable
 */
class DataTableAssets extends AssetBundle
{
	public function init()
	{
		$this->setSourcePath(__DIR__ . '/assets');
		$this->setupAssets('css', ['css/animate']);
		parent::init();
	}
}
