<?php

class CategoriesController{
    public function getAllCategories(){
        $categories  = Category::getAll();
        return $categories;
    }
}