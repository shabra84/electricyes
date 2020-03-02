<?php
/**
 * 2002-2017 TemplateMonster
 *
 * TM Mega Menu
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
 * @author    TemplateMonster (Alexander Grosul)
 * @copyright 2002-2017 TemplateMonster
 * @license   http://opensource.org/licenses/GPL-2.0 General Public License (GPL 2.0)
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

class MegaMenu extends ObjectModel
{
    public        $id_item;
    public        $hook_name;
    public        $sort_order;
    public        $specific_class;
    public        $id_shop;
    public        $is_mega;
    public        $is_simple;
    public        $is_custom_url;
    public        $url;
    public        $active;
    public        $unique_code;
    public        $title;
    public        $badge;
    public static $definition = array(
        'table'     => 'tmmegamenu',
        'primary'   => 'id_item',
        'multilang' => true,
        'fields'    => array(
            'sort_order'     => array('type' => self::TYPE_INT, 'validate' => 'isunsignedInt'),
            'specific_class' => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'size' => 128),
            'hook_name'      => array('type' => self::TYPE_STRING, 'validate' => 'isGenericName', 'size' => 128),
            'id_shop'        => array('type' => self::TYPE_INT, 'validate' => 'isunsignedInt'),
            'is_mega'        => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'is_simple'      => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'is_custom_url'  => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'url'            => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'size' => 128),
            'title'          => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'size' => 128),
            'badge'          => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'size' => 128),
            'active'         => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'unique_code'    => array('type'     => self::TYPE_STRING,
                                      'validate' => 'isGenericName', 'required' => true, 'size' => 128),
        ),
    );

    /*****
     ****** Get all item data for update
     ****** $id_item = 0 if item id is undefined get it from POST
     ******/
    public function getItem($id_item = 0)
    {
        $result = array();
        $languages = Language::getLanguages(true);
        if ($id_item) {
            $id_item = $id_item;
        } else {
            $id_item = (int)Tools::getValue('id_item');
        }
        $id_shop = (int)Context::getContext()->shop->id;
        $sql = 'SELECT *
                FROM '._DB_PREFIX_.'tmmegamenu
                WHERE `id_item` = '.$id_item.'
                AND `id_shop` = '.$id_shop;
        if (!$data = Db::getInstance()->executeS($sql)) {
            return false;
        }
        foreach ($data as $res) {
            $result['id_item'] = $res['id_item'];
            $result['id_shop'] = $res['id_shop'];
            $result['sort_order'] = $res['sort_order'];
            $result['specific_class'] = $res['specific_class'];
            $result['is_mega'] = $res['is_mega'];
            $result['is_simple'] = $res['is_simple'];
            $result['is_custom_url'] = $res['is_custom_url'];
            $result['active'] = $res['active'];
            $result['unique_code'] = $res['unique_code'];
        }
        // Get multilingual text
        foreach ($languages as $language) {
            $sql = 'SELECT `url`, `title`, `badge`
                FROM '._DB_PREFIX_.'tmmegamenu_lang
                WHERE `id_item` = '.$id_item.'
                AND `id_lang` = '.$language['id_lang'];
            $data = Db::getInstance()->getRow($sql);
            $result['url_'.$language['id_lang']] = $data['url'];
            $result['title_'.$language['id_lang']] = $data['title'];
            $result['badge_'.$language['id_lang']] = $data['badge'];
        }

        return $result;
    }

    /*****
     ****** Delete item and all related data
     *****/
    public function deleteItem()
    {
        $id_item = (int)Tools::getValue('id_item');
        $id_shop = (int)Context::getContext()->shop->id;
        $sql = 'SELECT `unique_code`
                FROM '._DB_PREFIX_.'tmmegamenu
                WHERE `id_item` = '.$id_item.'
                AND `id_shop` = '.$id_shop;
        $file = Tmmegamenu::stylePath().Db::getInstance()->getValue($sql).'.css';
        if (file_exists($file)) {
            @unlink($file);
            Tmmegamenu::generateUniqueStyles(); // refresh custom css file
        }
        if (!Db::getInstance()->delete('tmmegamenu', '`id_item` ='.$id_item.' AND `id_shop` = '.$id_shop)
            || !Db::getInstance()->delete('tmmegamenu_lang', '`id_item` ='.$id_item)
            || !Db::getInstance()->delete('tmmegamenu_items', '`id_tab` ='.$id_item)
        ) {
            return false;
        }

        return true;
    }

    /*****
     ****** Get list of top items
     ****** $active = if true get only active items
     ****** return all items data
     *****/
    public function getList($hookName, $active = false)
    {
        if ($active) {
            $active = 'AND tm.`active` = 1';
        } else {
            $active = '';
        }
        $sql = 'SELECT tm.*, tml.`title`, tml.`badge`, tml.`url`
                FROM `'._DB_PREFIX_.'tmmegamenu` tm
                LEFT JOIN `'._DB_PREFIX_.'tmmegamenu_lang` tml
                ON (tm.`id_item` = tml.`id_item`)
                WHERE tm.`id_shop` = '.(int)Context::getContext()->shop->id.'
                AND tm.`hook_name` = "'.pSQL($hookName).'"
                AND tml.`id_lang` = '.(int)Context::getContext()->language->id.'
                '.$active.'
                ORDER BY tm.`sort_order`';

        return Db::getInstance()->executeS($sql);
    }

    /*****
     ****** Change status of item in admin part
     *****/
    public function changeItemStatus()
    {
        $id_item = (int)Tools::getValue('id_item');
        $item_status = (int)Tools::getValue('itemstatus');
        $id_shop = (int)Context::getContext()->shop->id;
        if ($item_status == 1) {
            $item_status = 0;
        } else {
            $item_status = 1;
        }
        if (
        !Db::getInstance()->update(
            'tmmegamenu',
            array('active' => $item_status),
            '`id_item` = '.$id_item.' AND `id_shop` ='.$id_shop
        )
        ) {
            return false;
        }

        return true;
    }

    /******
     ******* Create/update items for mega or item for simple menu after tab created/updated
     ******* $id_tub = id of created/updated tab
     ******* return false if trouble
     ******* return true if ok
     ******/
    public function addMenuItem($ajaxdata = false)
    {
        if (Tools::getValue('issimplemenu')) {
            if (!$settings = Tools::getValue('simplemenu_items')) {
                $data = array('settings' => '');
            } else {
                $data = array(
                    'settings' => implode(',', $settings)
                );
            }
            // check if item not exist create it
            if (!$this->checkItemExist()) {
                $data = array_merge($data, array('id_tab' => $this->id, 'type' => 0, 'is_mega' => 0));
                if (!Db::getInstance()->insert('tmmegamenu_items', $data)) {
                    return false;
                }
            } else { // update item if exist
                if (!Db::getInstance()->update(
                    'tmmegamenu_items',
                    $data,
                    '`id_tab` = '.$this->id.' AND `type` = 0 AND `is_mega` = 0'
                )
                ) {
                    return false;
                }
            }
        } elseif (Tools::getValue('addnewmega') || $ajaxdata) {
            Db::getInstance()->delete('tmmegamenu_items', '`id_tab` = '.$this->id.' AND `is_mega` = 1');
            $alldata = Tools::getValue('megamenu_options');
            if ($ajaxdata) {
                $alldata = $ajaxdata;
            }
            $rows = array_filter(explode('+', $alldata));
            if ($rows) {
                foreach ($rows as $row) {
                    $is_row = Tools::substr($row, 0, strpos($row, '{'));
                    $row_num = explode('-', $is_row);
                    if (isset($row_num[1])) {
                        $row_num = $row_num[1];
                    } else {
                        $row_num = 'empty';
                    }
                    $cols = array_filter(str_replace('}', '', explode('{', str_replace($is_row, '', $row))));
                    foreach ($cols as $col) {
                        $col_data = explode('-', $col);
                        $data = array(
                            'id_tab'   => $this->id,
                            'row'      => $row_num,
                            'col'      => $col_data[1],
                            'width'    => $col_data[2],
                            'class'    => preg_replace('~[()]~', '', $col_data[3]),
                            'type'     => $col_data[4],
                            'is_mega'  => 1,
                            'settings' => preg_replace('~[\[\]]~', '', $col_data[5])
                        );
                        if (!Db::getInstance()->insert('tmmegamenu_items', $data)) {
                            return false;
                        }
                    }
                }
            }
        }

        return true;
    }

    /*****
     ******    Check:: if exist this item for this tab (return: true, false)
     ******    $is_mega = this item is for mega or simple menu (simple by default)
     ******/
    protected function checkItemExist($is_mega = 0)
    {
        $sql = 'SELECT `id`
                FROM '._DB_PREFIX_.'tmmegamenu_items
                WHERE `id_tab` = '.$this->id.'
                AND `is_mega` = '.$is_mega;

        return Db::getInstance()->executeS($sql);
    }

    /*****
     ******    Get menu tab by id
     ******    $id_tab = tab id
     ******    $menu_type = is mega or simple menu (default = 0(simple))
     ******    $active = get only active items (default false)
     ******    return all settings for item
     *****/
    public function getMenuItem($id_tab, $menu_type = 0, $active = false)
    {
        if ($active) {
            if ($menu_type) {
                $option = 'is_mega';
            } else {
                $option = 'is_simple';
            }
            $query = 'AND `'.$option.'` = 1';
            $sql = 'SELECT *
                    FROM '._DB_PREFIX_.'tmmegamenu
                    WHERE `id_shop` ='.(int)Context::getContext()->shop->id.'
                    AND `id_item` = '.$id_tab.'
                    '.$query;
            if (!Db::getInstance()->executeS($sql)) {
                return false;
            }
        }
        $sql = 'SELECT `settings`
                FROM '._DB_PREFIX_.'tmmegamenu_items
                WHERE `id_tab` = '.(int)$id_tab.'
                AND `type` ='.$menu_type.'
                AND `is_mega` = 0';
        $result = Db::getInstance()->getRow($sql);

        return explode(',', $result['settings']);
    }

    public function getSubitemSettings($id_tab)
    {
        $sql = 'SELECT `settings`
                FROM '._DB_PREFIX_.'tmmegamenu_items
                WHERE `id_tab` = '.(int)$id_tab;

        return Db::getInstance()->executeS($sql);
    }

    public function getTopItems($hookName)
    {
        return $this->getList($hookName, true);
    }

    /*****
     ****** Get all megamenu rows
     ****** $id_tab = item id
     ****** return only unique rows
     *****/
    public function getMegamenuRow($id_tab)
    {
        $rows = array();
        $sql = 'SELECT `row` 
                FROM '._DB_PREFIX_.'tmmegamenu_items
                WHERE `id_tab` = '.$id_tab.'
                AND `is_mega` = 1
                ORDER BY `id`';
        if (!$result = Db::getInstance()->executeS($sql)) {
            return false;
        }
        foreach ($result as $res) {
            $rows[] = $res['row'];
        }

        return array_unique($rows);
    }

    /*****
     ******    Get all columns for tab row
     ******    $id_tab = item id
     ******    $row = row number
     ******    return all child columns data
     *****/
    public function getMegamenuRowCols($id_tab, $row)
    {
        $sql = 'SELECT * 
                FROM '._DB_PREFIX_.'tmmegamenu_items
                WHERE `id_tab` = '.$id_tab.'
                AND `row` = '.$row.'
                AND `is_mega` = 1
                ORDER BY `col`';
        if (!$result = Db::getInstance()->executeS($sql)) {
            return false;
        }

        return $result;
    }

    /*****
     ******    Get item unique code
     ******    $id_tab = item id
     ******    @return sting = item unique code
     *****/
    public function getItemUniqueCode($id_item = false)
    {
        if ($id_item) {
            $id_item = $id_item;
        } else {
            $id_item = (int)Tools::getValue('id_item');
        }
        $sql = 'SELECT `unique_code`
                FROM '._DB_PREFIX_.'tmmegamenu
                WHERE `id_item` = '.$id_item;
        if (!$result = Db::getInstance()->getValue($sql)) {
            return false;
        }

        return $result;
    }

    public static function getItemAllUniqueCodes()
    {
        $data = array();
        $sql = 'SELECT `unique_code`
                FROM '._DB_PREFIX_.'tmmegamenu
                WHERE `id_shop` = '.(int)Context::getContext()->shop->id;
        if (!$result = Db::getInstance()->executeS($sql)) {
            return false;
        }
        foreach ($result as $res) {
            $data[] = $res['unique_code'];
        }

        return $data;
    }
}
