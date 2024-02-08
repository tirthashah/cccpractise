<?php

function insertProduct($conn, $productData) {
    // Implement your insert logic
    // $productData is an associative array containing product information
    $productName = $productData['productName'];
    $sku = $productData['sku'];
    // ... (other fields)

    $sql = "INSERT INTO cc_product (productName, sku, ...) 
            VALUES ('$productName', '$sku', ...)";
    
    return $sql; // Return the prepared query
}
?>