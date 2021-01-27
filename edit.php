<?php 
require 'set.php';
if (!empty($_POST['save'])) {    
   
    $id = $_GET['id'];
    $updateGame = $_POST['updateGame'];
    
    $cardRepository->update($id, $updateGame);
    header('location:index.php');
}

if (!empty($_POST['delete'])) {

    $id = $_GET['id'];
    $cardRepository->delete($id);
    header('location:index.php');
}

require 'view.php';