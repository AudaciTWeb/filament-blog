<?php

namespace Stephenjude\FilamentBlog\Traits;

trait HasContentEditor
{
    public static function getContentEditor(string $field)
    {
        $defaultEditor = config('filament-blog.editor');

        return $defaultEditor::make($field)
            ->label(__('filament-blog::filament-blog.content'))
            ->required()
            ->toolbarButtons(config('filament-blog.toolbar_buttons'))
                ->fileAttachmentsDisk('s3')
                ->fileAttachmentsDirectory('blog')
                ->fileAttachmentsVisibility('private')
            ->columnSpan([
                'sm' => 2,
            ]);
    }
}
