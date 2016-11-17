<?php

/**
 * @property Controller $owner
 */
class Site24x7ControllerExtension extends Extension
{
    public function onBeforeInit()
    {
        $isCMS  = (bool) is_subclass_of($this->owner, "LeftAndMain");
        $isAjax = Director::is_ajax();
        if (!$isCMS && !$isAjax && !empty(SiteConfig::current_site_config()->RUMKey)) {
            Requirements::javascriptTemplate(Director::getAbsFile(SS_SITE_24X7_DIR."/assets/javascript/site24x7.template.js"), [
                "RUMKey" => SiteConfig::current_site_config()->RUMKey,
            ]);
        }
    }
}
