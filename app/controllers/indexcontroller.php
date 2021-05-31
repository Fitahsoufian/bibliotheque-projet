<?php

namespace PHPMVC\Controllers;
use PHPMVC\LIB\Helper;
use PHPMVC\LIB\InputFilter;
use PHPMVC\Models\ProductModel;
use PHPMVC\Models\ReserveModel;

class IndexController extends AbstractController
{
    use Helper;
    use InputFilter;
    public function defaultAction()
    {
        $this->_data['books'] = ProductModel::getAll();
//        $products = $this->_data['products'];
//        var_dump($products);
        $this->_view();
    }

    public function addAction()
    {
        $this->_view();
    }

    public function reserveAction()
    {
        $id = $this->filterInt($this->_params[0]);
        $product = ProductModel::getByPk($id);
        if ($product === false) {
            // $this->redirect('/product');
        }
        
        
        $this->_data['product'] = $product;
        $product = $this->_data['product'];
        if (isset($_POST['submit'])) {
            $product = new ReserveModel();
            $product->title = $this->filterString($_POST['title']);
            $product->author = $this->filterString($_POST['author']);
            $product->releaseDate = $this->filterInt($_POST['releaseDate']);
            $product->summary = $this->filterString($_POST['summary']);
            $product->save();
                $this->redirect('/resrve');
            } 

        
        $this->_view();
        
    }
    public function achatAction(){
        $this->_data['books'] = ProductModel::getAll();
        $this->_view();
    }
}