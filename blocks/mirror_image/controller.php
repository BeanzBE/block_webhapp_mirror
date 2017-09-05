<?php
namespace Concrete\Package\WebhappMirror\Block\MirrorImage;
use \Concrete\Core\Block\BlockController;
use File;

/*
Inspiration Basic version : https://tympanus.net/codrops/2017/01/04/mirror-effect/
Adapted for Concrete5 by Jozzeh
*/

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends BlockController {
	protected $btTable = 'btMirrorImage';
	protected $btInterfaceWidth = "600";
	protected $btInterfaceHeight = "400";
  protected $btCacheBlockOutput = true;
	protected $btCacheBlockRecord = true;

	public function getBlockTypeDescription() {
		return t("Mirrors an image on the X- or Y-axis.");
	}

	public function getBlockTypeName() {
		return t("Mirror Image");
	}

	public function edit(){
		$mirror = File::getByID($this->fID);
		$this->set('mirrorFile', $mirror);
	}

	public function view(){
		$mirror = File::getByID($this->fID);
		$this->set('mirrorImage', $mirror);
	}
}
