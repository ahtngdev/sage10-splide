<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Roots\Acorn\View\Composers\Concerns\AcfFields;

class TemplateHomepage extends Composer
{
    use AcfFields;

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'sections' => $this->getAcfFlexibleContent(),
        ];
    }

     /**
     * Retrieve the data.
     *
     * @return array
     */
    public function getAcfFlexibleContent()
    {
        return collect($this->fields()['sections'])->toArray();
    }
}
