<?php
namespace Seungman\XePlugins\ShopHomepage\Theme;

use XeFrontend;
use Xpressengine\Config\ConfigEntity;
use Xpressengine\Theme\GenericTheme;

class Theme extends GenericTheme
{
    protected static $path = 'shop_homepage/theme';

    public function renderSetting(ConfigEntity $config = null)
    {
        XeFrontend::js(static::asset('js/setting.js'))->load();

        return parent::renderSetting($config);
    }

}
