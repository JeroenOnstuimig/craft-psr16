<?php

namespace onstuimig\craftpsr16\exceptions;

use Psr\SimpleCache\InvalidArgumentException as SimpleCacheInvalidArgumentException;

class InvalidArgumentException extends \InvalidArgumentException implements SimpleCacheInvalidArgumentException
{

}
