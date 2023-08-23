<?php

/**
 * Vapm - A library support for PHP about Async, Promise, Coroutine, Thread, GreenThread
 *          and other non-blocking methods. The library also includes some Javascript packages
 *          such as Express. The method is based on Fibers & Generator & Processes, requires
 *          you to have php version from >= 8.1
 *
 * Copyright (C) 2023  VennDev
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

declare(strict_types = 1);

namespace vennv\vapm\http;

final class Content {

    public const CONTENT_TYPE = 'Content-Type';

    public const CONTENT_LENGTH = 'Content-Length';

    public const CONTENT_ENCODING = 'Content-Encoding';

    public const CONTENT_DISPOSITION = 'Content-Disposition';

    public const CONTENT_TRANSFER_ENCODING = 'Content-Transfer-Encoding';

    public const CONTENT_RANGE = 'Content-Range';

    public const CONTENT_LOCATION = 'Content-Location';

    public const CONTENT_LANGUAGE = 'Content-Language';

    public const CONTENT_EXPIRES = 'Content-Expires';

    public const CONTENT_MD5 = 'Content-MD5';

    public const CONTENT_RANGE_BYTES = 'bytes';

    public const CONTENT_RANGE_NONE = '*';

}