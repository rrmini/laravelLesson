<?php declare(strict_types=1);

namespace App\Services;

use App\Contracts\Parser;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserService implements Parser
{

    public function getDate(string $url): array
    {
        $load = XmlParser::load($url);
        return $load->parse([
            'title' => [
                'uses' => 'channel.title',
            ],
            'link' => [
                'uses' => 'channel.link'
            ],
            'description' => [
                'uses' => 'channel.description'
            ],
            'image' => [
                'uses' => 'channel.image.url'
            ],
            'news' => [
                'uses' => 'channel.item[title,link,guid,description,pubDate]'
            ],
        ]);
    }
}
