<?php
 
namespace App\Controllers;
 
use App\Models\InputModel;
 
 
 
 
class Input extends BaseController
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
 
       return view('pages/input' , $data);
   }
 
      
   public function create()
   {
       $data = [    
           'id' => $this->request->getPost('id'),
           'x' => $this->request->getPost('x'),
           'y' => $this->request->getPost('y'),
       ];
       $this->InputModel->input_create($data);
       return redirect()->to('/');
   }
  
}
 
 