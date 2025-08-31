<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasUuid;

    protected $fillable = [
        "created_by",
        "created_date",
        "title",
        "content",
        "status",
        "is_featured_article",
    ];

    protected $casts = [
        "status" => "boolean",
        "is_featured_article" => "boolean",
    ];
}
