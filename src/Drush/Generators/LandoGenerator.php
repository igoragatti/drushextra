<?php

namespace DrushExtra\Drush\Generators;

use DrupalCodeGenerator\Command\Generator;
use DrushExtra\Application;

/**
 * Generates lando file.
 */
class LandoGenerator extends Generator {

  protected string $name = 'lando';
  protected string $description = 'Generates a .lando.yml file ----';
  protected string $alias = 'lando';
  protected string $templatePath = Application::TEMPLATE_PATH;

  /**
   * {@inheritdoc}
   */
  protected function generate(array &$vars): void {
    $vars['appname'] = $this->ask('App name', 'example');
    $choices = [
      "7.4" => "7.4",
      "8.0" => "8.0",
      "8.1" => "8.1",
    ];
    $vars['phpversion'] = $this->choice('PHP version', $choices, '8.0');
    $vars['webroot'] = $this->ask('Web root', "web");
    $this->addFile('../.lando2.yml', 'lando');
    $this->addFile('../lando/php.ini', 'phpini');
  }

}
