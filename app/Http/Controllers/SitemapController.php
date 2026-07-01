<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Models\BlogPost;
use App\Models\Project;

class SitemapController extends Controller
{
    public function generateSitemap()
    {
        $blogPosts = BlogPost::select(['slug', 'updated_at'])->get();
        $projects = Project::select(['slug', 'updated_at'])->get();

        $staticUrls = [
            ['loc' => $this->absoluteUrl('/'), 'priority' => '1.0', 'changefreq' => 'daily'],
            ['loc' => $this->absoluteUrl('/services'), 'priority' => '0.8', 'changefreq' => 'weekly'],
            ['loc' => $this->absoluteUrl('/portfolio'), 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => $this->absoluteUrl('/about'), 'priority' => '0.8', 'changefreq' => 'yearly'],
            ['loc' => $this->absoluteUrl('/blog'), 'priority' => '0.8', 'changefreq' => 'daily'],
            ['loc' => $this->absoluteUrl('/faq'), 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => $this->absoluteUrl('/contact'), 'priority' => '0.8', 'changefreq' => 'yearly'],
        ];

        $urls = $staticUrls;

        foreach ($blogPosts as $post) {
            $urls[] = [
                'loc' => $this->absoluteUrl('/blog/' . $post->slug),
                'lastmod' => optional($post->updated_at)->toAtomString(),
                'changefreq' => 'weekly',
                'priority' => '0.8',
            ];
        }

        foreach ($projects as $project) {
            $urls[] = [
                'loc' => $this->absoluteUrl('/project/' . $project->slug),
                'lastmod' => optional($project->updated_at)->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.6',
            ];
        }

        File::put(public_path('sitemap.xml'), $this->buildSitemapXml($urls));

        return response()->json(['message' => 'Sitemap generated successfully!'], 200);
    }

    private function absoluteUrl($path)
    {
        $baseUrl = rtrim(config('app.url'), '/');

        return $path === '/' ? $baseUrl . '/' : $baseUrl . '/' . ltrim($path, '/');
    }

    private function buildSitemapXml(array $urls)
    {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach ($urls as $url) {
            $xml .= '<url>';
            $xml .= '<loc>' . $this->xml($url['loc']) . '</loc>';

            if (!empty($url['lastmod'])) {
                $xml .= '<lastmod>' . $this->xml($url['lastmod']) . '</lastmod>';
            }

            $xml .= '<changefreq>' . $this->xml($url['changefreq']) . '</changefreq>';
            $xml .= '<priority>' . $this->xml($url['priority']) . '</priority>';
            $xml .= '</url>';
        }

        return $xml . '</urlset>';
    }

    private function xml($value)
    {
        return htmlspecialchars($value, ENT_XML1, 'UTF-8');
    }
}
