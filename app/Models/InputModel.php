<?php namespace App\Models;
use CodeIgniter\Model;
class InputModel extends Model
{
   protected $table = 'input_data';
   protected $primaryKey = 'id';
   protected $allowedFields = [
       'id' ,
       'x',
       'y',
    
   ];
   public function delete_input($id)
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
 
   public function input($id)
   {
       $data = $this->where([
           'id' => $id
       ])->first();
       return $data;
   }
   public function input_list()
   {
       $query = $this->db->table('input_data')
       ->select('*')
       ->get();
       return $query->getResultArray();
   }
 
   public function input_create($data)
   {
       return $this->db->table('input_data')->insert($data);
   }
 
}
 
 
 