<?php
/**
 * This file is part of Jdenticon for PHP.
 * https://github.com/dmester/jdenticon-php/
 * 
 * Copyright (c) 2025 Daniel Mester Pirttijärvi
 * 
 * For full license information, please see the LICENSE file that was 
 * distributed with this source code.
 */

namespace Jdenticon\Canvas\Rasterization;

class EdgeIntersection
{
    public int $fromX;
    public int $width;
    public Edge $edge;
 
    public function __construct(int $fromX, int $width, Edge $edge) 
    {
        $this->fromX = $fromX;
        $this->width = $width;
        $this->edge = $edge;
    }
}

