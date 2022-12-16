<?php

/*
 * This file is part of ou-Learn - https://oulearn.org.
 * (c) ou-Learn
 * ou-Learn is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * ou-Learn is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with ou-Learn.  If not, see <https://www.gnu.org/licenses/>.
 */

use App\Kernel;

require_once \dirname(__DIR__) . '/vendor/autoload_runtime.php';

return function(array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
