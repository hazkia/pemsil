<?php namespace App\Models;
use CodeIgniter\Model;
class HasilModel extends Model
{
   protected $table = 'hasil';
   protected $primaryKey = 'id';
   protected $allowedFields = [
       'id' ,
       'a',
       'b',
       'result',
       'pearson',
       "koefisien_determinasi"
   ];
   public function delete_hasil($id)
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
 
   public function hasil($id)
   {
       $data = $this->where([
           'id' => $id
       ])->first();
       return $data;
   }
   public function hasil_list()
   {
       $query = $this->db->table('hasil')
       ->select('*')
       ->get();
       return $query->getResultArray();
   }
 
   public function hasil_create($data)
   {
       return $this->db->table('hasil')->insert($data);
   }
 
}
 
 