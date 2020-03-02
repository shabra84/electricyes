<?php
/**
* 2002-2015 TemplateMonster
*
* TM Category Products
*
* NOTICE OF LICENSE
*
* This source file is subject to the General Public License (GPL 2.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/GPL-2.0
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade the module to newer
* versions in the future.
*
*  @author    TemplateMonster (Alexander Grosul)
*  @copyright 2002-2015 TemplateMonster
*  @license   http://opensource.org/licenses/GPL-2.0 General Public License (GPL 2.0)
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

class TMCategoryProductsRepository
{
    private $db;
    private $shop;
    private $language;
    private $db_prefix;

    public function __construct(Db $db, Shop $shop, Language $language)
    {
        $this->db = $db;
        $this->shop = $shop;
        $this->language = $language;
        $this->db_prefix = $db->getPrefix();
    }

    public function createTables()
    {
        $engine = _MYSQL_ENGINE_;
        $success = true;
        $this->dropTables();

        $queries = [
            "CREATE TABLE IF NOT EXISTS `{$this->db_prefix}tmcategoryproducts` (
                `id_tab` int(11) NOT NULL AUTO_INCREMENT,
                `id_shop` int(11) NOT NULL,
                `hook_name` varchar(128) NOT NULL,
                `category` int(11) NOT NULL,
                `num` int(11) NOT NULL,
                `sort_order` int(11) NOT NULL,
                `active` int(11) NOT NULL,
                `select_products` int(11) NOT NULL,
                `selected_products` varchar(128) NOT NULL,
                `use_carousel` int(11) NOT NULL,
                `carousel_settings` varchar(450) NOT NULL,
                `use_name` int(11) NOT NULL,
            PRIMARY KEY  (`id_tab`)
            ) ENGINE=$engine DEFAULT CHARSET=utf8",
            "CREATE TABLE IF NOT EXISTS `{$this->db_prefix}tmcategoryproducts_lang` (
                `id_tab` int(11) NOT NULL,
                `id_lang` int(11) NOT NULL,
                `name` text NOT NULL,
            PRIMARY KEY  (`id_tab`, `id_lang`)
            ) ENGINE=$engine DEFAULT CHARSET=utf8"
        ];

        foreach ($queries as $query) {
            $success &= $this->db->execute($query);
        }

        return $success;
    }

    public function dropTables()
    {
        $sql = "DROP TABLE IF EXISTS
			`{$this->db_prefix}tmcategoryproducts`,
			`{$this->db_prefix}tmcategoryproducts_lang`";

        return Db::getInstance()->execute($sql);
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

    public function getAllItems($hookName = false, $only_active = false)
    {
        $sql = "SELECT *
                FROM {$this->db_prefix}tmcategoryproducts tmcp
                JOIN {$this->db_prefix}tmcategoryproducts_lang tmcpl
                ON tmcp.id_tab = tmcpl.id_tab
                AND tmcpl.id_lang = {$this->language->id}
                AND tmcp.id_shop = {$this->shop->id}";

        if ($hookName) {
            $sql .= " AND `hook_name` = '{$hookName}'";
        }

        if ($only_active) {
            $sql .= " AND `active` = 1";
        }
        $sql .= " ORDER BY `sort_order`";

        return $this->db->executeS($sql);
    }

    public function getMaxSortOrder($hookName)
    {
        $sql = "SELECT MAX(sort_order)
                AS sort_order
                FROM `{$this->db_prefix}tmcategoryproducts`
                WHERE `hook_name` = '{$hookName}'";

        if (!$result = $this->db->executeS($sql)) {
            return 0;
        }

        return $result;
    }

    public function deleteByCategory($id_category)
    {
        $table = "tmcategoryproducts";
        $where = "`id_shop` = {$this->shop->id}
                 AND `category` = {$id_category}";
        return $this->db->delete($table, $where);
    }
}
