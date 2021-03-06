<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacuna extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'vacunas';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['animal_id', 'nombre', 'tipo', 'caducidad'];

    public function animal()
    {
        return $this->belongsTo('App\Animal');
    }
    
}
