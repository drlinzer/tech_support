<?php
include '../view/header.php';
?>

<head>
    <<link rel="stylesheet" href="../main.css"/>
</head>
     

<main>
    <h2>Add Product</h2>
    
    <<form action="index.php">
        <input type="hidden" name="action" value="add_product">
        
        <br/>
        
        <label>Code: </label>
        <input type="text" name="code" />
        <br>
        <label>Name: </label>
        <input type="text" name="name" />
        <br>
        <label>Version: </label>
        <input type="text" name="version" />
        <br>
        <label>Release Date: </label>
        <input type="text" name="release_date" />
        <br>
        
        <label>&nbsp;</label>
        <input type="submit" value="Add Product" />
        <br>
        
    </form>
        <ul>
            <a href="?action=product_list"> View Product List</a>
        </ul>
</main>