<?php


include "Lib/autoload.php";

class Ccc{
    public static function init(){
    //echo "123";
//     $req = new Model_Request;
//     echo $req->getRequesturi;  
//     $name = str_replace("/","",$surname);
//     print_r($name); 
//     $frontcontroller = new controller_front;
    $frontController = new Controller_front();
      $frontController->init();
    }
}
Ccc::init();


// $request = new Model_Request();
// $productModel = new Model_Product();
// $productView = new View_Product();

// // Handle form submission
// echo "Hello";
// // print_r($request->getPostData());
// if ($request->isPost()) {
//     $postData = $request->getPostData('pdata');
//     // print_r($postData);
//     // var_dump(isset($postData['submit']));

//     if (($request->getPostData('submit'))) {
//         // Insert or update based on the presence of 'product_id'
//         if (!empty($postData['product_id'])) {

//             $productId = $postData['product_id'];
//            // unset($postData['product_id']); 


//             $productModel->update($postData, ['product_id' => $productId]);
//             header("Location: index.php");
//         } 
        
        
//         else {
//             $productModel->save($postData);
//         }

//         // Redirect to index.php after successful submission
//         // header("Location: index.php");
//         // exit();
//     }
// }

// // Handle edit and delete actions
// if (isset($_GET['action']) && !empty($_GET['action'])) {
//     $action = $_GET['action'];
//     $productId = $_GET['id'];
//     $postData = $request->getPostData('pdata');
//     if ($action === 'edit')
//      {
//         // Fetch the product details and display the form for editing
//         $productDetails = $productModel->show('*', ['product_id' => $productId]);
//         echo $productView->createForm($productDetails[0]); 
//         // // if($action === 'edit') {
//         // //     print_r($productId);
//         // //     die();
//         // unset($postData['product_id']);
//         // $productModel->update($postData, ['product_id' => $productId]);
//         // header("Location: index.php");
//         // }
        
//         exit();
//     }
//     elseif ($action === 'delete') {
//         // Delete the product and redirect to index.php
//         $productModel->del(['product_id' => $productId]);
//         header("Location: index.php");
//         exit();
//     }else{
//         $productModel->save($postData);
//     }
// }

// // Display the list of products
// $products = $productModel->show();
// echo $productView->toHtml($products);

// ?>