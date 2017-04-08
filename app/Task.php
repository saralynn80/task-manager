<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // These are the fields the user will be allowed to be mass-assigned or edit for security reasons
    protected $fillable = [
    	'name',
    	'body',
        'due_date',
        'gen_duedate',
        'user_id', // temporary!!
    	];

	/**
     * A task is owned by a user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
