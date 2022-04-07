<?php
 
namespace App\Controllers;
 
 
use App\Models\InputModel;
 
class Hasil extends BaseController
{
 
   public function __construct()
   {
     
       $this->InputModel = new InputModel();
   }
  
 
 
 
   public function index()
   {
      
    
       $input = $this->InputModel->input_list();
      
       $data = [
           'title' => 'BOD Eksisting',
           'input' => $input
       ];
 
       return view('/pages/hasil' , $data );
   }
  
 
 
 
 
 
}
 
 
 
 
