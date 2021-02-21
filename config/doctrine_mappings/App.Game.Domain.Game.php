<?php

use App\Game\Domain\Game;
use Doctrine\ORM\Mapping\Builder\ClassMetadataBuilder;

$builder = new ClassMetadataBuilder($metadata);
$builder->createField('gameId', 'uuid')->columnName('id')->makePrimaryKey()->generatedValue('NONE')->build();
