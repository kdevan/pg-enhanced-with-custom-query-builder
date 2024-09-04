<?php

namespace App\Models;

use App\QueryBuilders\CommentQueryBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'comment',
        'is_visible',
    ];

    /**
     * @param  \Illuminate\Database\Query\Builder  $query
     * @return CommentQueryBuilder<Comment>
     */
    public function newEloquentBuilder($query): CommentQueryBuilder
    {
        return new CommentQueryBuilder($query);
    }
}
