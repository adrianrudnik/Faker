<?php

namespace Faker\Extension;

interface IetfExtension extends Extension
{
    /**
     * Returns an IETF language tag.
     *
     * @param bool $allowSubtag Whether to allow tags with a subtag or not.
     *
     * @see https://en.wikipedia.org/wiki/IETF_language_tag
     *
     * @example en-US
     */
    public function languageTag(bool $allowSubtag = true): string;
}
