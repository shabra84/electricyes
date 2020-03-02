<?php

class MosaicProductsPresenter
{
    private $db;
    private $shop;
    private $hookName;
    private $moduleName;
    private $db_prefix;

    public function __construct(Db $db, Shop $shop, $moduleName)
    {
        $this->db = $db;
        $this->db_prefix = $db->getPrefix();
        $this->shop = $shop;
        $this->moduleName = $moduleName;
    }

    public function setHook($hookName)
    {
        $this->hookName = $hookName;

        return $this;
    }

    public function getAllModuleHooks($moduleName, $defaultHook)
    {
        $notDefault = false;
        $sql = "SELECT DISTINCT h.id_hook as id, h.name as name
                FROM {$this->db_prefix}hook h
                LEFT JOIN {$this->db_prefix}hook_module hm
                ON(h.id_hook = hm.`id_hook`)
                INNER JOIN {$this->db_prefix}module m
                ON(hm.`id_module` = m.`id_module`)
                WHERE (lower(h.`name`) LIKE 'display%')
                AND m.`name` = '{$moduleName}'
                ORDER BY h.name ASC
            ";
        $hooks = $this->db->executeS($sql);
        foreach ($hooks as $key => $hook) {
            if (preg_match('/admin/i', $hook['name'])
                || preg_match('/backoffice/i', $hook['name'])
                || $hook['name'] == 'displayBeforeBodyClosingTag'
            ) {
                unset($hooks[$key]);
            }
        }
        if (count($hooks) > 1) {
            return $hooks;
        } elseif (count($hooks == 1)) {
            foreach ($hooks as $hook) {
                if ($hook['name'] != $defaultHook) {
                    return $hook['name'];
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
    }
}
