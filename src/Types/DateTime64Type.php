<?php

declare(strict_types=1);

namespace FOD\DBALClickHouse\Types;

use App\Infrastructure\DataAccess\DbType\DateTimeMicrosecondsType;
use Doctrine\DBAL\Platforms\AbstractPlatform;

class DateTime64Type extends DateTimeMicrosecondsType
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return DateTimeMicrosecondsType::TYPENAME.'64';
    }

    /**
     * {@inheritdoc}
     */
    public function getSQLDeclaration(array $column, AbstractPlatform $platform): string
    {
        return 'datetime64(6)';
    }
}
