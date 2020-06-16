<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'eccube.security.failure_handler' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Authentication/AuthenticationFailureHandlerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Authentication/DefaultAuthenticationFailureHandler.php';
include_once $this->targetDirs[3].'/src/Eccube/Security/Http/Authentication/EccubeAuthenticationFailureHandler.php';

return $this->services['eccube.security.failure_handler'] = new \Eccube\Security\Http\Authentication\EccubeAuthenticationFailureHandler(${($_ = isset($this->services['http_kernel']) ? $this->services['http_kernel'] : $this->getHttpKernelService()) && false ?: '_'}, ${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->load('getSecurity_HttpUtilsService.php')) && false ?: '_'}, [], ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});
