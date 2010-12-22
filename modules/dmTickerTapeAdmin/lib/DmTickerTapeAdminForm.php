<?php

/**
 * dmTickerTapeAdmin admin form
 *
 * @package    pimlicoplumbers.com
 * @subpackage dmTickerTapeAdmin
 * @author     Kye Etherton
 */
class DmTickerTapeAdminForm extends BaseDmTickerTapeForm
{
  public function configure()
  {
    parent::configure();

    $this->validatorSchema['url'] = new dmValidatorLinkUrl(array('max_length' => 255, 'required' => false));

  }
}