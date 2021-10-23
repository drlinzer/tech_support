<?php
require('../model/database.php');
require('../model/product_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'list_products';
    }
}

if ($action == 'under_construction') {
    include('../under_construction.php');
}

//show default page at first load
else if ($action == 'list_products') {
    
    //get all products displayed in table
    $products = get_products();
    
    //display products list page
    include('../product_manager/product_list.php');
}

//handle click action of delete button
else if ($action == 'delete_product') {
    
    //get product code
    $product_code = filter_input(INPUT_POST, 'product_code'); {
    
    //use delete function created
    delete_product($product_code);
    
    //displate the table after deletion
    header("Location: index.php");
}
}

//handle click action of add product link
else if ($action == 'show_add_form') {
    //display add product form
    include('product_add.php');
}

//handle click action of add button on form
else if ($action == 'add_product'){
    
    //get all added values from form
    $product_code = filter_input(INPUT_POST, 'product_code');
    $name = filter_input(INPUT_POST, 'name');
    $version = fileter_input(INPUT_POST,'version');
    $release_date = filter_input(INPUT_POST, 'release_date');
    
    //run the insert function created
    add_product($product_code, $name, $version, $release_date);
    header("Location: index.php");
    
}

?>
