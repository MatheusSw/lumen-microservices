<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'age', 'biography'];
    /**
     * Get the comments for the blog post.
     */
    public function books()
    {
        //We can't have relationships as the services don't talk to each other (only through APIs)
    }
}