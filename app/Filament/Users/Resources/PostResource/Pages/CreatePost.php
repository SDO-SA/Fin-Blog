<?php

namespace App\Filament\Users\Resources\PostResource\Pages;

use App\Filament\Users\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;
}
