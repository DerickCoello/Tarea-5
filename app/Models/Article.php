<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 *
 * @property $id
 * @property $Titulo
 * @property $Autor
 * @property $Contenido
 * @property $Categoria
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Article extends Model
{
    
    static $rules = [
		'Titulo' => 'required',
		'Autor' => 'required',
		'Contenido' => 'required',
		'Categoria' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Titulo','Autor','Contenido','Categoria'];



}
