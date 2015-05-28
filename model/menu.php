<?php
class ModelMenu extends Model{
    public function mainMenu(){
        $menu = array
              (
                  array
                  (
                      'title' => 'Item One',
                      'url' => '#item_one',
                  ),
                  array
                  (
                      'title' => 'Item Two',
                      'url' => '#item_two',
                      'children' => array
                      (
                          array
                          (
                              'title' => 'Item Three',
                              'url' => '#item_three',
                          ),
                          array
                          (
                              'title' => 'Item Four',
                              'url' => '#item_four',
                          )
                      )
                  )
              );



        return $menu;
    }
}