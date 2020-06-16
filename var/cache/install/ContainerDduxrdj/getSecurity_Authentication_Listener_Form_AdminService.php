<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.listener.form.admin' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Firewall/ListenerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Firewall/AbstractAuthenticationListener.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Firewall/UsernamePasswordFormAuthenticationListener.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Authentication/AuthenticationSuccessHandlerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Authentication/CustomAuthenticationSuccessHandler.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Authentication/AuthenticationFailureHandlerInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Authentication/CustomAuthenticationFailureHandler.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Session/SessionAuthenticationStrategyInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/security/Http/Session/SessionAuthenticationStrategy.php';

return $this->services['security.authentication.listener.form.admin'] = new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.session_strategy.admin']) ? $this->services['security.authentication.session_strategy.admin'] : ($this->services['security.authentication.session_strategy.admin'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate'))) && false ?: '_'}, ${($_ = isset($this->services['security.http_utils']) ? $this->services['security.http_utils'] : $this->load('getSecurity_HttpUtilsService.php')) && false ?: '_'}, 'admin', new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler(${($_ = isset($this->services['eccube.security.success_handler']) ? $this->services['eccube.security.success_handler'] : $this->load('getEccube_Security_SuccessHandlerService.php')) && false ?: '_'}, ['login_path' => 'admin_login', 'default_target_path' => 'admin_homepage', 'always_use_default_target_path' => false, 'target_path_parameter' => '_target_path', 'use_referer' => false], 'admin'), new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationFailureHandler(${($_ = isset($this->services['eccube.security.failure_handler']) ? $this->services['eccube.security.failure_handler'] : $this->load('getEccube_Security_FailureHandlerService.php')) && false ?: '_'}, ['login_path' => 'admin_login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path']), ['check_path' => 'admin_login', 'username_parameter' => 'login_id', 'password_parameter' => 'password', 'use_forward' => true, 'require_previous_session' => false, 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true], ${($_ = isset($this->services['monolog.logger.security']) ? $this->services['monolog.logger.security'] : $this->load('getMonolog_Logger_SecurityService.php')) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['security.csrf.token_manager']) ? $this->services['security.csrf.token_manager'] : $this->getSecurity_Csrf_TokenManagerService()) && false ?: '_'});
