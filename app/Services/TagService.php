<?php

namespace App\Services;

class TagService
{
    const FROM_TAGIFY = 'IN';
    const TO_TAGIFY = 'OUT';

    protected $tags;
    protected $origin;

    /**
     * TagService constructor.
     */
    public function __construct()
    {
        $this->origin = self::FROM_TAGIFY;
    }

    public function input(): string
    {
        return $tags;
    }

    public function output(): string
    {
        $tags_object = $this->decode();

        $tags_array = $this->pluck($tags_object);

        return implode(', ', $tags_array);
    }

    /**
     * Set the value of tags.
     *
     * @param string $tags
     * @return TagService
     */
    public function setTags(string $tags): TagService
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Decode a JSON object.
     *
     * @return object
     */
    private function decode(): object
    {
        return json_decode($this->tags);
    }

    /**
     * Filter the JSON object and pluck to get only the tags.
     *
     * @param object $tags
     * @return array
     */
    private function pluck(object $tags): array
    {
        return collect($tags)->pluck('value')->toArray();
    }
}
