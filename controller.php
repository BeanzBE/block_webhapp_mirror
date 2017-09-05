<?php
namespace Concrete\Package\WebhappMirror;

defined('C5_EXECUTE') or die('Access Denied.');

/*
Inspiration Basic version : https://tympanus.net/codrops/2017/01/04/mirror-effect/
Adapted for Concrete5 by Jos De Berdt / Webhapp
*/

use \Concrete\Core\Package\Package;
use \Concrete\Core\Block\BlockType\BlockType;

class Controller extends Package
{
    protected $pkgHandle = 'webhapp_mirror';
    protected $appVersionRequired = '8.0.0';
    protected $pkgVersion = '0.9';

    public function getPackageDescription()
    {
        return t('Mirror an image horizontally or vertically.');
    }

    public function getPackageName()
    {
        return t('Mirror Image');
    }

    public function install()
    {
      $pkg = parent::install();
      if(!BlockType::getByHandle('mirror_image')) {
        BlockType::installBlockType('mirror_image', $pkg);
      }
    }

    public function update()
    {
      $pkg = Package::getByHandle('webhapp_mirror');
      if(!BlockType::getByHandle('mirror_image')) {
        BlockType::installBlockType('mirror_image', $pkg);
      }
    }
}
?>
