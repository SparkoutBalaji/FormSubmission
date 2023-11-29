<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable;

class Employer extends Model implements Authenticatable
{
    use HasFactory;
    use AuthenticatableTrait;
    protected $fillable = [
        'email',
        'password',
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
}
