<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable;

class Employee extends Model implements Authenticatable
{
    use HasFactory;
    use AuthenticatableTrait;
    protected $primaryKey = 'id'; // <<< ADD THIS
    protected $fillable = [
        'email',
        'forms',
    ];
    
    public function getAuthIdentifierName()
    {
        return 'id'; // or the name of the primary key column
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password; // or the name of the password column
    }
    public function documents(){
        return $this->hasMany(Document::class);
    }


}

