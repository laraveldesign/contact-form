<?php
namespace Laraveldesign\ContactForm\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {
    protected $fillable = [
        'name',
        'email',
        'message'
    ];
}
