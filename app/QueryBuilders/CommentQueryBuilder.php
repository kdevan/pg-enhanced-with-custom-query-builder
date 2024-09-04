<?php

namespace App\QueryBuilders;

use Illuminate\Database\Eloquent\Builder;

/**
 * @template TModelClass of Comment
 *
 * @extends Builder<TModelClass>
 */
class CommentQueryBuilder extends Builder
{
    public function customQuery(): self
    {
        return $this->whereBoolean('is_visible', true);
    }
}
