<?php

namespace App\Libraries;

class Dropdown
{
    public function generate($value = array(), $selectedValue = null)
    {
        $options = '';
        if (!empty($value)) {
            foreach ($value as $i=>$v) {
                $selected = '';
                
                if ($v == $selectedValue) {
                    $selected = ' selected';
                }
                $options .= '<option value="'.$v.'"'.$selected.'>'.$v.'</option>';
            }
        }
        return $options;
    }
    public function generate2($value = array(), $selected_id = null)
    {
        $options = '';
        if (!empty($value)) {
            foreach ($value as $i=>$v) {
                $selected = '';
                if ($v['id'] == $selected_id) {
                    $selected = ' selected';
                }
                $options .= '<option value="'.$v['id'].'"'.$selected.'>'.$v['name'].'</option>';
            }
        }
        return $options;
    }
}