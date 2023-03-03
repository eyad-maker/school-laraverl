<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Section extends Model 
{

    use HasTranslations;
    public $translatable = ['Name_Section'];
    protected $fillable=['Name_Section','Grade_id','Class_Id '];

    protected $table = 'Sections';
    public $timestamps = true;

    public function MyClasses()
    {
        return $this->belongsTo('App\Models\Classroom', 'Class_Id');
    }

}