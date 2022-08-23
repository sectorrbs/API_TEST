<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Product extends Model
    {
        use HasFactory;

        public $guarded = false;

        public function categories()
        {
            return $this->belongsToMany(Category::class);
        }
    }
