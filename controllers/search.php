<?php

class Search extends Controller
{

    function __construct()
    {
        parent::__construct();

    }

    function index($categoryId)
    {
        $attr = $this->model->getAttr($categoryId);
        $attrRight = $this->model->getAttrRight($categoryId);
        $category = $this->model->getCategory($categoryId);
        $colors = $this->model->getColors();
        $properties = $this->model->getProperties();

        $data = array('attr' => $attr, 'attrRight' => $attrRight, 'colors' => $colors, 'properties' => $properties, 'category' => $category);
        $this->view('search/index', $data);
    }

    function doSearch()
    {

        $result = $this->model->doSearch($_POST);
        echo json_encode($result);

    }

    function productInfo()
    {

        $result = $this->model->productInfo($_POST);
        echo json_encode($result);


    }
}
