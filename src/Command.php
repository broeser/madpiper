<?php

/*
 * The MIT License
 *
 * Copyright 2016 Benedict Roeser <b-roeser@gmx.net>.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace MadPiper;

/**
 * Main class of MadPiper, lets you build shell commands
 *
 * @author Benedict Roeser <b-roeser@gmx.net>
 */
class Command {
    /**
     * The parts of the command
     * Those will be piped together
     * 
     * @var string[]
     */
    protected $parts = array();
    
    const PIPE = '|';
    const ARGUMENT_SEPARATOR = ' ';
    
    /**
     * Creates a part of the command
     * 
     * @param string $method
     * @param array $arguments
     * @return Command
     */
    public function __call($method, $arguments) {
        $this->parts[] = $method.self::ARGUMENT_SEPARATOR.implode(self::ARGUMENT_SEPARATOR, $arguments);
        
        return $this;
    }
    
    /**
     * Returns the string representation of the command
     * 
     * @return string
     */
    public function __toString() {
        return implode(self::PIPE, $this->parts);
    }
}
