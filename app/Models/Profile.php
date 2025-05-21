<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Profile extends Model
{
    use HasFactory;
    protected $table = "profile_tbl";
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'gender',
        'dob',
        'age',
    ]; 
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
