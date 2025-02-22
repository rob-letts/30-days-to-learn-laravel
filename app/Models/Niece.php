<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niece extends Model
{
  use HasFactory;
  protected $fillable = ['name', 'type', 'can_talk', 'owner_id'];

  public function owner () {
    return $this->belongsTo(Owner::class);
  }
}
