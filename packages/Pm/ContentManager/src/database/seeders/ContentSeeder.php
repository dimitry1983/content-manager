<?php

namespace Pm\ContentManager\Database\Seeders;

use Illuminate\Database\Seeder;
use Pm\ContentManager\Models\Content;

class ContentSeeder extends Seeder
{
    public function run(): void
    {
        Content::create([
            'title' => 'Over Ons',
            'slug' => 'over-ons',
            'type' => 'page',
            'content' => '# Over ons\nWelkom bij ons bedrijf.',
            'published_at' => now(),
        ]);

        Content::create([
            'title' => 'Privacybeleid',
            'slug' => 'privacybeleid',
            'type' => 'page',
            'content' => '## Privacy\nWij nemen je privacy serieus.',
            'published_at' => now(),
        ]);

        foreach (range(1, 5) as $i) {
            Content::create([
                'title' => "Blogpost $i",
                'slug' => "blogpost-$i",
                'type' => 'blog',
                'content' => "## Dit is blogpost $i\nHier komt content.",
                'published_at' => now()->subDays($i),
            ]);
        }
    }
}
