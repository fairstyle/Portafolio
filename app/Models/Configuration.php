<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    use HasFactory;

    protected $table = "configuration";
    private $protected = [];

    public function notConfigured(): int
    {
        return !$this->value_int;
    }

    public function configured(): void
    {
        $this->value_int = 1;
        $this->save();
    }
}
