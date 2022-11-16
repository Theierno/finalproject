<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\user;

class Absence extends Model
{
    use HasFactory;
    protected $fillable = [
        'dateDebutAbsence',
        'dateFinAbsence',
        'motif',
    ];
    public function user(){
        return $this->belongsTo(Post::class);
    }

}
