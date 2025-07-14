<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Status extends Model
{
    use HasFactory;

    protected $table = 'reff_status';
    protected $primaryKey = 'ID_Status';
    protected $fillable = ['Is_Active'];
     public function organisasi(): HasMany{
        return $this -> hasMany( Organisasi::class, 'ID_Status','ID_Status');
     }
}
