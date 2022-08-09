<?php

declare(strict_types=1);

namespace DrushExtra;

use Symfony\Component\Console\Application as BaseApplication;

/**
 * DrushExtra console application.
 */
class Application extends BaseApplication {

  /**
   * Path to DrushExtra root directory.
   */
  public const ROOT = __DIR__ . '/..';

  /**
   * DrushExtra version.
   */
  public const VERSION = '0-dev';

  /**
   * Path to templates directory.
   */
  public const TEMPLATE_PATH = Application::ROOT . '/templates';

}
