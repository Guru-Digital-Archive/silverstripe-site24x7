<?php

class Site24x7SiteConfig extends DataExtension
{
    public static $db = [
        'RUMKey' => 'VarChar(40)'
    ];

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldToTab('Root.Main', TextField::create('RUMKey', "Site24x7 RUM Key"));
        return $fields;
    }
}
