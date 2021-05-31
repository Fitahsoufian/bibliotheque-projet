<?php


namespace PHPMVC\Controllers;


use PHPMVC\Models\reserveModel;

class reserveController extends AbstractController
{
    public function defaultAction(){
        $this->_data['employees'] = reserveModel::getAll();
        $this->_view();
    }

    public function addAction(){
        $this->_view();
    }
}