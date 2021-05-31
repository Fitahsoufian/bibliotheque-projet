<?php


namespace PHPMVC\Controllers;


use PHPMVC\LIB\Helper;
use PHPMVC\LIB\InputFilter;
use PHPMVC\Models\ProductModel;
use PHPMVC\LIB\Session;

class ProductController extends AbstractController
{
    use InputFilter;
    use Helper;

    public function __construct()
    {
      
    }

    public function defaultAction()
    {
        $this->_data['books'] = ProductModel::getAll();
        $books = $this->_data['books'] ;
        $this->_view();
    }

    public function addAction()
    {
        if (isset($_POST['addBook'])) {
            $product = new ProductModel();
            $product->title = $this->filterString($_POST['title']);
            $product->author = $this->filterString($_POST['author']);
            $product->summary = $this->filterString($_POST['summary']);
            $product->releaseDate = $this->filterInt($_POST['releaseDate']);
            $product->category = $this->filterString($_POST['category']);
//            $product->product_img = ($_POST['image']);
            // $product->product_price = $this->filterFloat($_POST['price']);
            // $product->product_img = $_FILES['image']['name'];
            // $product_img_temp = $_FILES['image']['tmp_name'];
            // move_uploaded_file($product_img_temp, 'img/' . $product->product_img);
            var_dump($product);
            if ($product->save()) {
                $_SESSION['message'] = 'product, saved successfully';
                $this->redirect('/product');
            }


        }
        $this->_view();
    }

    public function editAction()
    {
        $id = $this->filterInt($this->_params[0]);
        $prod = ProductModel::getByPk($id);
        if ($prod === false) {
            // $this->redirect('/product');
        }
        
        $this->_data['product'] = $prod;
        $product = $this->_data['product'];
        if (isset($_POST['submit'])) {
            $product->title = $this->filterString($_POST['title']);
            $product->author = $this->filterString($_POST['author']);
            $product->summary = $this->filterString($_POST['summary']);
            $product->releaseDate = $this->filterINT($_POST['releaseDate']);
            $product->category = $this->filterString($_POST['category']);
            $product->save();
                $this->redirect('/product');
            } 

        
        $this->_view();
    }

    public function deleteAction()
    {
        $id = $this->filterInt($this->_params[0]);
        var_dump($id);
        $prod = ProductModel::getByPk($id);
        if ($prod === false) {
            $this->redirect('/product');
        }

        if ($prod->delete()) {
            $_SESSION['message'] = 'product, deleted successfully';
            $this->redirect('/product');
        }

    }


}