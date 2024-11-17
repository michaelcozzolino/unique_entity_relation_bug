<?php declare(strict_types=1);

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table('orders')]
class Order
{
    #[Id]
    #[Column(type: Types::INTEGER)]
    #[GeneratedValue]
    protected int $id;

    #[Column(type: Types::STRING)]
    protected string $name;

    #[ManyToOne(targetEntity: Book::class)]
    protected Book $book;
}
