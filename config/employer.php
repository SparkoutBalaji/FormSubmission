<?php
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employer extends Authenticatable
{
    // ... other model code

    public function isEmployer()
    {
        return true; // Adjust this logic based on how you determine if the user is an employer
    }
}
