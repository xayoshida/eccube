<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Plugin\Sample\Repository\ConfigRepository' shared autowired service.

include_once $this->targetDirs[3].'/app/Plugin/Sample/Repository/ConfigRepository.php';

return $this->services['Plugin\\Sample\\Repository\\ConfigRepository'] = new \Plugin\Sample\Repository\ConfigRepository(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});