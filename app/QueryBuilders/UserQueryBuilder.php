<?php

namespace App\QueryBuilders;

use Tpetry\PostgresqlEnhanced\Query\Builder;

/**
 * @template TModelClass of User
 *
 * @extends Builder<TModelClass>
 */
class UserQueryBuilder extends Builder
{
    public function customQuery(): self
    {
        return $this->whereLike('updated_at', '2024');
    }
}
