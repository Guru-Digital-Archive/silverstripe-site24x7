<?php

/**
 * @property Controller $owner
 */
class Site24x7ControllerExtension extends Extension
{
    public function onBeforeInit()
    {
        $isInstalled         = false;
        $isIgnoredController = (bool) $this->owner instanceof LeftAndMain ||
            $this->owner instanceof DevelopmentAdmin ||
            $this->owner instanceof DevBuildController ||
            $this->owner instanceof DatabaseAdmin;

        $isAjax              = Director::is_ajax();
        $configTable         = "SiteConfig";
        $dbSchema            = DB::get_schema();

        if ($dbSchema->hasTable($configTable)) {
            $configFileds = $dbSchema->fieldList($configTable);
            $isInstalled  = isset($configFileds["RUMKey"]);
        }

        if ($isInstalled && !$isIgnoredController && !$isAjax && !empty(SiteConfig::current_site_config()->RUMKey)) {
            Requirements::javascriptTemplate(Director::getAbsFile(SS_SITE_24X7_DIR."/assets/javascript/site24x7.template.js"), [
                "RUMKey" => SiteConfig::current_site_config()->RUMKey,
            ]);
        }
    }
}
