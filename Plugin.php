<?php

namespace Kanboard\Plugin\OpenIDAuth;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
    $this->template->hook->attach('template:auth:login-form:after', 'OpenIDAuth:auth/login');

    }
    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__.'/Locale');
    }
    public function onLoginSuccess(AuthSuccessEvent $event)
    {
    }
    public function getPluginName()
    {
        return 'OpenID Authentication';
    }
    public function getPluginDescription()
    {
        return t('Use OpenID as authentication provider');
    }
    public function getPluginAuthor()
    {
        return 'Bastien SOL';
    }
    public function getPluginVersion()
    {
        return '0.0.1';
    }
    public function getPluginHomepage()
    {
        return 'https://github.com/agentcobra/kanboard-plugin-openid-auth';
    }
}
