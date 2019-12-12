<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animale extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'animales';

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
    protected $fillable = ['raza', 'tipo', 'lote', 'cantidad', 'nave_id'];

    public function nave()
    {
        return $this->belongsTo('App\Nave');
    }
    public function vacunas()
    {
        return $this->hasMany('App\Vacuna');
    }
    
}
