<?php

declare(strict_types=1);

/*
 * This file is part of the FODDBALClickHouse package -- Doctrine DBAL library
 * for ClickHouse (a column-oriented DBMS for OLAP <https://clickhouse.yandex/>)
 *
 * (c) FriendsOfDoctrine <https://github.com/FriendsOfDoctrine/>.
 *
 * For the full copyright and license inflormation, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOD\DBALClickHouse\Types;

interface DatableClickHouseType extends ClickHouseType
{
    public const TYPE_DATE      = 'Date';
    public const TYPE_DATE_TIME = 'DateTime';
    public const TYPE_DATE_TIME_64 = 'DateTime64';
    public const TYPE_UUID = 'UUID';
}
