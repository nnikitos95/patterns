<?php

namespace DPRDIO\Creational\AbstractFactory;

class CsvParser implements Parser
{
    /**
     * @var bool
     */
    protected $skipHeaderLine;

    /**
     * @var string
     */
    protected $delimiter;

    /**
     * CsvParser constructor.
     * @param bool $skipHeaderLine
     * @param string $delimiter
     */
    public function __construct(bool $skipHeaderLine = false, string $delimiter = ',')
    {
        $this->skipHeaderLine = $skipHeaderLine;
        $this->delimiter = $delimiter;
    }

    /**
     * @param string $input
     * @return array
     */
    public function parse(string $input): array
    {
        $headerWasParsed = false;
        $parsedLines = [];

        foreach (explode(PHP_EOL, $input) as $line) {
            if (!$headerWasParsed && !$this->skipHeaderLine) {
                continue;
            }

            $parsedLines[] = str_getcsv($line, $this->delimiter);
        }

        return $parsedLines;
    }
}