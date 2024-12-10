<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\BlogPost;
use App\Models\Industry;

class SitemapController extends Controller
{
    public function generateSitemap()
    {
        // Query the BlogPost and Industry models
        $blogPosts = BlogPost::all();
        $industries = Industry::all();

        // Initialize the XML structure
        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        $staticUrls = [
            ['url' => 'https://igsoftware.com.ng/', 'priority' => 1.0, 'changefreq' => 'daily'], // Homepage updates frequently
            ['url' => 'https://igsoftware.com.ng/services', 'priority' => 0.8, 'changefreq' => 'weekly'], // Services change occasionally
            ['url' => 'https://igsoftware.com.ng/projects', 'priority' => 0.8, 'changefreq' => 'monthly'], // Projects update less often
            ['url' => 'https://igsoftware.com.ng/aboutus', 'priority' => 0.8, 'changefreq' => 'yearly'], // About Us rarely changes
            ['url' => 'https://igsoftware.com.ng/our-team', 'priority' => 0.8, 'changefreq' => 'yearly'], // Team updates rarely
            ['url' => 'https://igsoftware.com.ng/careers', 'priority' => 0.8, 'changefreq' => 'weekly'], // Job listings can change regularly
            ['url' => 'https://igsoftware.com.ng/how-we-work', 'priority' => 0.8, 'changefreq' => 'yearly'], // Methodology rarely changes
            ['url' => 'https://igsoftware.com.ng/industries', 'priority' => 0.8, 'changefreq' => 'monthly'], // Industries might update occasionally
            ['url' => 'https://igsoftware.com.ng/blog', 'priority' => 0.8, 'changefreq' => 'daily'], // Blog updates frequently
            ['url' => 'https://igsoftware.com.ng/faq', 'priority' => 0.8, 'changefreq' => 'monthly'], // FAQs update occasionally
            ['url' => 'https://igsoftware.com.ng/gallery', 'priority' => 0.8, 'changefreq' => 'monthly'], // Gallery might update less often
            ['url' => 'https://igsoftware.com.ng/contact', 'priority' => 0.8, 'changefreq' => 'yearly'], // Contact details rarely change
            ['url' => 'https://igsoftware.com.ng/terms-conditions', 'priority' => 0.8, 'changefreq' => 'yearly'], // Policies change rarely
            ['url' => 'https://igsoftware.com.ng/privacy-policy', 'priority' => 0.8, 'changefreq' => 'yearly'], // Policies change rarely
        ];
        

        foreach ($staticUrls as $static) {
            $xml .= '<url>';
            $xml .= '<loc>' . $static['url'] . '</loc>';
            $xml .= '<changefreq>' . $static['changefreq'] . '</changefreq>';
            $xml .= '<priority>' . $static['priority'] . '</priority>';
            $xml .= '</url>';
        }

        // Add BlogPost URLs to the sitemap
        foreach ($blogPosts as $post) {
            $xml .= '<url>';
            $xml .= '<loc>' . url('blog/' . $post->slug) . '</loc>';
            $xml .= '<lastmod>' . $post->updated_at->toAtomString() . '</lastmod>';
            $xml .= '<changefreq>weekly</changefreq>';
            $xml .= '<priority>0.8</priority>';
            $xml .= '</url>';
        }

        // Add Industry URLs to the sitemap
        foreach ($industries as $industry) {
            $xml .= '<url>';
            $xml .= '<loc>' . url('industries/' . $industry->slug) . '</loc>';
            $xml .= '<lastmod>' . $industry->updated_at->toAtomString() . '</lastmod>';
            $xml .= '<changefreq>monthly</changefreq>';
            $xml .= '<priority>0.6</priority>';
            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        // Save the sitemap to the public directory
        File::put(public_path('sitemap.xml'), $xml);

        return response()->json(['message' => 'Sitemap generated successfully!'], 200);
    }
}
