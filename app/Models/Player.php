<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    private string $name = '';

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @todo Implement
     */
    public function makesContact(): bool
    {
        return true;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
