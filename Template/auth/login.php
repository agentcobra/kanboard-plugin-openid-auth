<ul class="no-bullet">
    <li>
        <i class="fa fa-openid fa-fw"></i>
        <?= $this->url->link(t('Login with my OpenID Account'), 'OAuthController', 'handler', array('plugin' => 'OpenIDAuth')) ?>
    </li>
</ul>