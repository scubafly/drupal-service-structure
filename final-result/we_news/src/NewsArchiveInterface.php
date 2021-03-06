<?php

namespace Drupal\we_news;

/**
 * Interface for NewsArchive.
 */
interface NewsArchiveInterface {

  /**
   * Performs cron tasks for news content.
   */
  public function onCron();

}
