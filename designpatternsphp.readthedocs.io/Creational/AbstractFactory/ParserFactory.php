<?php

namespace DPRDIO\Creational\AbstractFactory;

class ParserFactory
{
    public function createCsvParser(bool $skipHeaderLine, string $delimeter = ','): CsvParser
    {
        return new CsvParser($skipHeaderLine, $delimeter);
    }

    public function createJsonParser(): JsonParser
    {
        return new JsonParser();
    }
}