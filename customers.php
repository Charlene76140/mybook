<?php
    require "model/entity/customer.php";
    require "model/customerModel.php";

    $customerModel = new customerModel;
    $customers = $customerModel->getCustomers();


    require "view/customersView.php";

?>
