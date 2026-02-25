<?php

namespace Database\Seeders;

use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class ProjectsFromBishopSeeder extends Seeder
{
    public function run(): void
    {
        $page = 1;
        $perPage = 100;

        do {
            $response = Http::timeout(60)->get('https://bishop-solutions.com/wp-json/wp/v2/portfolio', [
                'per_page' => $perPage,
                'page' => $page,
                '_embed' => 1,
            ]);

            if ($response->failed()) {
                if ($response->status() === 400 && data_get($response->json(), 'code') === 'rest_post_invalid_page_number') {
                    break;
                }

                $this->command?->warn("Could not fetch projects page {$page}.");
                break;
            }

            $items = $response->json();
            if (! is_array($items) || $items === []) {
                break;
            }

            foreach ($items as $item) {
                $sourceLink = (string) data_get($item, 'link', '');
                if (! str_contains($sourceLink, '/en/portfolio/')) {
                    continue;
                }

                $slug = (string) data_get($item, 'slug', '');
                $name = trim(html_entity_decode(strip_tags((string) data_get($item, 'title.rendered', '')), ENT_QUOTES | ENT_HTML5, 'UTF-8'));

                if ($slug === '' || $name === '') {
                    continue;
                }

                $excerpt = trim(preg_replace('/\s+/', ' ', strip_tags((string) data_get($item, 'excerpt.rendered', ''))));
                $content = trim(preg_replace('/\s+/', ' ', strip_tags((string) data_get($item, 'content.rendered', ''))));
                $category = data_get($item, '_embedded.wp:term.0.0.name');
                $date = (string) data_get($item, 'date', '');
                $imageUrl = (string) data_get($item, '_embedded.wp:featuredmedia.0.source_url', '');

                Project::query()->updateOrCreate(
                    ['slug' => $slug],
                    [
                        'name' => $name,
                        'client_name' => 'Bishop Solutions Client',
                        'category' => $category ? Str::title((string) $category) : 'General',
                        'short_description' => Str::limit($excerpt !== '' ? $excerpt : $content, 500),
                        'description' => $content !== '' ? $content : ($excerpt !== '' ? $excerpt : 'Imported from bishop-solutions.com'),
                        'featured_image' => $this->buildFeaturedImagePath($imageUrl, $slug),
                        'status' => 'published',
                        'execution_date' => $date !== '' ? Carbon::parse($date)->toDateString() : null,
                    ]
                );
            }

            $page++;
        } while (true);
    }

    private function buildFeaturedImagePath(string $imageUrl, string $slug): string
    {
        $extension = strtolower(pathinfo((string) parse_url($imageUrl, PHP_URL_PATH), PATHINFO_EXTENSION));
        $extension = in_array($extension, ['jpg', 'jpeg', 'png', 'webp', 'gif', 'svg'], true) ? $extension : 'jpg';

        return 'uploads/projects/'.Str::slug($slug).'.'.$extension;
    }
}
