<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;



class Product extends Model

{

    use HasFactory;



    protected $fillable = [

        'title_arabic','date_arabic', 'title_english', 'date_english','file_ar','file_en','section'

    ];
}




