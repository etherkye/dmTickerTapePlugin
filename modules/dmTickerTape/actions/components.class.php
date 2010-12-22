<?php
/**
 * Ticker Tape components
 * 
 * No redirection nor database manipulation ( insert, update, delete ) here
 */
class dmTickerTapeComponents extends myFrontModuleComponents
{

  public function executeList()
  {
    $query = $this->getListQuery();
    
    $this->dmTickerTapePager = $this->getPager($query);
  }


}
