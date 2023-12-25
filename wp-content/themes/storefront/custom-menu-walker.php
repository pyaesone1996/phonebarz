<?php

class Custom_Menu_Walker extends Walker_Nav_Menu
{

    protected $in_submenu = false;

    public function start_lvl(&$output, $depth = 0, $args = null)
    {
        // Add different classes for different levels
        $level_class = 'sub-menu-level-' . ($depth + 1);
        $output .= "\n<ul class='sub-menu $level_class";

        // Add mega-menu class for level 1 submenu
        if ($depth === 0 && strpos($output, 'sub-menu-level-1') !== false) {
            $output .= ' mega-menu full-mega-menu';
        }

        $output .= "'>\n";
        $this->in_submenu = true;
    }


    public function end_lvl(&$output, $depth = 0, $args = null)
    {
        parent::end_lvl($output, $depth, $args);
        $this->in_submenu = false;
    }

    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $is_active = false;
        $current_url = $_SERVER['REQUEST_URI'];
        if ($item->url == $current_url) {
            $is_active = true;
        }

        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = ' class="' . ($is_active ? 'active ' : '') . implode(' ', $classes) . '"';

        if ($this->in_submenu) {
            // If inside a submenu, add class and ID to the li element
            $output .= "<li $class_names>";
        } else {
            // If not inside a submenu, proceed as usual
            if (
                in_array('menu-item-has-children', $classes)
            ) {
                $class_names = ' class="mega ' . implode(' ', $classes) . '"';
                $output .= "<li $class_names id=\"hover-cls\">";
            } else {
                $class_names = ' class="' . '' . implode(' ', $classes) . '"';
                $output .= "<li $class_names>";
            }

            $attributes = '';
            !empty($item->attr_title) and $attributes .= ' title="'  . esc_attr($item->attr_title) . '"';
            !empty($item->target) and $attributes .= ' target="' . esc_attr($item->target) . '"';
            !empty($item->xfn) and $attributes .= ' rel="'    . esc_attr($item->xfn) . '"';
            !empty($item->url) and $attributes .= ' href="'   . esc_attr($item->url) . '"';
            $title = apply_filters('the_title', $item->title, $item->ID);
            $output .= "<a $attributes>$title</a>";
        }
    }

    public function end_el(&$output, $item, $depth = 0, $args = null)
    {
        if ($this->in_submenu) {
            // If inside a submenu, close the li tag
            $output .= "</li>\n";
        } else {
            // If not inside a submenu, proceed as usual
            parent::end_el($output, $item, $depth, $args);
        }
    }
}
