<?php

class TMManufacturersSettingsRepository
{
    private $db;
    private $shop;
    private $db_prefix;
    public $settingsList = array(
        'TM_MANUFACTURER_DISPLAY_NAME' => 0,
        'TM_MANUFACTURER_ORDER' => 0,
        'TM_MANUFACTURER_DISPLAY_IMAGE' => 0,
        'TM_MANUFACTURER_DISPLAY_IMAGE_TYPE' => '',
        'TM_MANUFACTURER_DISPLAY_ITEM_NB' => 4,
        'TM_MANUFACTURER_DISPLAY_CAROUCEL' => 0,
        'TM_MANUFACTURER_CAROUCEL_NB' => 4,
        'TM_MANUFACTURER_CAROUCEL_SLIDE_WIDTH' => 180,
        'TM_MANUFACTURER_CAROUCEL_SLIDE_MARGIN' => 20,
        'TM_MANUFACTURER_CAROUCEL_AUTO' => 0,
        'TM_MANUFACTURER_CAROUCEL_ITEM_SCROLL' => 1,
        'TM_MANUFACTURER_CAROUCEL_SPEED' => 500,
        'TM_MANUFACTURER_CAROUCEL_AUTO_PAUSE' => 3000,
        'TM_MANUFACTURER_CAROUCEL_RANDOM' => 0,
        'TM_MANUFACTURER_CAROUCEL_LOOP' => 1,
        'TM_MANUFACTURER_CAROUCEL_HIDE_CONTROL' => 1,
        'TM_MANUFACTURER_CAROUCEL_PAGER' => 0,
        'TM_MANUFACTURER_CAROUCEL_CONTROL' => 0,
        'TM_MANUFACTURER_CAROUCEL_AUTO_CONTROL' => 0,
        'TM_MANUFACTURER_CAROUCEL_AUTO_HOVER' => 1
    );

    public function __construct(Db $db, Shop $shop)
    {
        $this->db = $db;
        $this->shop = $shop;
        $this->db_prefix = $db->getPrefix();
    }

    public function createTables()
    {
        $engine = _MYSQL_ENGINE_;
        $success = true;
        $this->dropTables();

        $queries = [
            "CREATE TABLE IF NOT EXISTS `{$this->db_prefix}tmmanufacturers_settings`(
    			`id_setting` int(10) unsigned NOT NULL auto_increment,
    			`hook_name` VARCHAR (100),
    			`id_shop` int(10) unsigned,
    			`setting_name` VARCHAR (100),
    			`value` VARCHAR (100),
    			PRIMARY KEY (`id_setting`, `hook_name`, `id_shop`)
            ) ENGINE=$engine DEFAULT CHARSET=utf8"];

        foreach ($queries as $query) {
            $success &= $this->db->execute($query);
        }

        return $success;
    }

    public function dropTables()
    {
        $sql = "DROP TABLE IF EXISTS
			`{$this->db_prefix}tmmanufacturers_settings`";

        return Db::getInstance()->execute($sql);
    }

    public function setDefaultSettings($hookName) {
        $result = true;
        foreach ($this->settingsList as $name => $value) {
            $result &= $this->db->insert('tmmanufacturers_settings', array('hook_name' => $hookName, 'id_shop' => $this->shop->id, 'setting_name' => $name, 'value' => $value));
        }

        return $result;
    }

    public function getSetting($hookName, $settingName)
    {
        return $this->db->getValue(
            "SELECT `value`
            FROM `{$this->db_prefix}tmmanufacturers_settings`
            WHERE `hook_name` = '".$hookName."'
            AND `setting_name` = '".$settingName."'
            AND `id_shop` = ".$this->shop->id
        );
    }

    public function getSettings($hookName = false, $result = [])
    {
        $query = "SELECT `setting_name`, `value`
            FROM `{$this->db_prefix}tmmanufacturers_settings`
            WHERE `id_shop` = ".$this->shop->id;
            
        if ($hookName) {
            $query .= " AND `hook_name` = '".$hookName."'";
        }


        $settings = $this->db->executeS($query);

        if ($settings) {
            foreach ($settings as $setting) {
                $result[$setting['setting_name']] = $setting['value'];
            }
        }

        return $result;
    }

    public function checkSetting($hookName, $settingName)
    {
        return $this->db->getValue(
            "SELECT `id_setting`
            FROM `{$this->db_prefix}tmmanufacturers_settings`
            WHERE `hook_name` = '".$hookName."'
            AND `setting_name` = '".$settingName."'
            AND `id_shop` = ".$this->shop->id
        );
    }

    public function insertSetting($hookName, $settingName, $value)
    {
        return $this->db->insert('tmmanufacturers_settings', array('hook_name' => $hookName, 'id_shop' => $this->shop->id, 'setting_name' => $settingName, 'value' => $value));
    }

    public function updateSetting($hookName, $settingName, $value)
    {
        if ($this->checkSetting($hookName, $settingName)) {
            return $this->db->update(
                'tmmanufacturers_settings', array('value' => $value),
                '`hook_name` = "'.$hookName.'" AND `setting_name` = "'.$settingName.'"'
            );
        } else {
            return $this->insertSetting($hookName, $settingName, $value);
        }
    }
}
