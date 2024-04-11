<?php

namespace App\Fields;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Field;

class TemplateHomepage extends Field
{
    /**
     * The field group.
     */
    public function fields(): array
    {
        $templateHomepage = Builder::make('template_homepage');

        $templateHomepage
            ->setLocation('page_template', '==', 'template-homepage.blade.php');

        $templateHomepage
            ->addFlexibleContent('sections')
                ->addLayout('slider')
                    ->addPostObject('items', [
                        'instructions' => __('Please select posts to display in the slider.', 'sage'),
                        'required' => 1,
                        'post_type' => [
                            'post',
                        ],
                        'allow_null' => 0,
                        'multiple' => 1,
                        'return_format' => 'id',
                        'ui' => 1,
                    ]);

        return $templateHomepage->build();
    }
}
