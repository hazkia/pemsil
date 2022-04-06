<?php

namespace App\Controllers;
use App\Models\CalculationModel;

class Home extends BaseController
{
    public function __construct()
    {
   
        $this->CalculationModel = new CalculationModel();
      
    }

    public function index()
    {

        $calc = $this->CalculationModel->calculation_list();
        
        $data = [
            'title' => 'Regresi Calculation',
            'calc' => $calc
        ];
        
        return view('/calculation' , $data );
    }
}
