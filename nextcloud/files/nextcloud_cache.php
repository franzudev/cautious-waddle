<?php
$CONFIG = array (
  'memcache.local' => '\OC\Memcache\APCu',
  'memcache.distributed' => '\OC\Memcache\Redis',
  'redis' => [
     'host'     => '/var/run/redis/redis.sock',
     'port'     => 0,
  ],
);
