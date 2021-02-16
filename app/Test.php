<?php

namespace CRUN;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = [
        'crun_name','crun_sede','crun_corte','crun_etiqueta'
    ];
}
