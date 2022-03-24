<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactsSite extends Model
{
    protected $table = 'contacts_site';
    protected $fillable = ['name', 'phone', 'email', 'contacts_reason_id', 'message'];
}
