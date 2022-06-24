<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;



class Changes extends Model

{

    use HasFactory;



    protected $fillable = [

        'title_arabic' ,'title_english','date_arabic','date_english','title_english','section','file_ar','file_en'

    ];

}
