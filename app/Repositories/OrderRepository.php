<?php

namespace App\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface OrderRepository.
 *
 * @package namespace App\Repositories;
 */
interface OrderRepository extends RepositoryInterface
{
    public function ordersRemind();
    public function updateCount();
    public function insert(array $data);
    public function updateStatus(array $ids);
}
