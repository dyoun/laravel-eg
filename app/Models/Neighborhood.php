<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Neighborhood extends Model
{
    protected $table = 'neighborhoods';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'city_id',
    ];
    protected $connection = 'neighborhoods';

    public static function create(array $attributes = []){
        $this->fill($attributes);
        $this->save();
        if (!$this->save()) {
            $validationErrors = (implode(', ', $this->validationMessages()->all()));
            throw new \Exception($validationErrors);
        }
    }
}
