<?php // Vars: $dmTickerTapePager

use_javascript('../dmTickerTapePlugin/js/view');
use_javascript('../dmTickerTapePlugin/js/jquery.ticker.min');
use_stylesheet('../../dmTickerTapePlugin/css/min-style');

echo _open('div#ticker-wrapper.no-js');
  echo _open('ul#js-news.js-hidden');

  foreach ($dmTickerTapePager as $dmTickerTape)
  {
    echo _open('li.news-item');
      echo _link($dmTickerTape->getUrl())->text($dmTickerTape->getMessage());
    echo _close('li');
  }

  echo _close('ul');
echo _close('div');