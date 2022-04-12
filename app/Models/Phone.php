<?php

namespace App\Models;

use Egulias\EmailValidator\Parser\Comment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    protected $table = 'phones';
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'phone',

    ];
    public function user()
{
    return $this->belongsTo(User::class, 'foreign_key');
}
    

    

  
 

 

}
