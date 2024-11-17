<?php declare(strict_types=1);

namespace App\VO;

use App\Entity\Order;
use JetBrains\PhpStorm\Immutable;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[Immutable]
#[UniqueEntity(fields: ['name', 'bookId' => 'book'], entityClass: Order::class)]
class OrderStoreRequest
{
    public function __construct(
        public readonly string $name,
        public readonly int    $bookId
    ) {

    }
}
