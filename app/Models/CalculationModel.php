<?php namespace App\Models;
use CodeIgniter\Model;
class CalculationModel extends Model
{
   protected $table = 'calculation';
   protected $primaryKey = 'id';
   protected $allowedFields = [
       'id' ,
       'x',
       'y',
       'a',
       'b',
       'result'
   ];
   public function delete_calculation($id)
   {
       $data = $this->where([
           'id' => $id
       ])->first();
       return $data;
   }
   //searchBy
   public function searchBy($by, $content)
   {
       $data = $this->where([
           $by => $content
       ])->first();
       return $data;
   }
 
   public function calculation($id)
   {
       $data = $this->where([
           'id' => $id
       ])->first();
       return $data;
   }
   public function calculation_list()
   {
       $query = $this->db->table('calculation')
       ->select('*')
       ->get();
       return $query->getResultArray();
   }
 
   public function calculation_create($data)
   {
       return $this->db->table('calculation')->insert($data);
   }
 
}
 

