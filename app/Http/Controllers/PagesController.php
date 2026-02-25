<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home()
    {
        return view('front.index');
    }

    public function servicesIndex()
    {
        return view('front.services.index', [
            'services' => $this->services(),
        ]);
    }

    public function serviceShow(string $slug)
    {
        $services = $this->services();
        $service = collect($services)->firstWhere('slug', $slug);

        abort_if(! $service, 404);

        $currentIndex = collect($services)->search(fn (array $item) => $item['slug'] === $slug);
        $nextService = $services[($currentIndex + 1) % count($services)];

        return view('front.services.show', [
            'service' => $service,
            'nextService' => $nextService,
        ]);
    }

    private function services(): array
    {
        return [
            [
                'slug' => 'web-design-development',
                'serial' => '001',
                'title' => 'Web Design & Development',
                'tag' => 'Modern Business Websites',
                'summary' => 'We design and build fast, responsive websites that reflect your brand and turn visitors into customers.',
                'features' => ['Custom UI/UX Design', 'Responsive Layouts', 'CMS Integration', 'Performance Optimization', 'Maintenance & Support'],
                'image' => 'assets/imgs/gallery/image-24.webp',
            ],
            [
                'slug' => 'ecommerce-web-development',
                'serial' => '002',
                'title' => 'Ecommerce Web Development',
                'tag' => 'Scalable Online Stores',
                'summary' => 'We create ecommerce platforms that make browsing, checkout, and order management smooth for your customers and your team.',
                'features' => ['Storefront Design', 'Payment Gateway Integration', 'Product & Inventory Setup', 'Checkout Optimization', 'Security Best Practices'],
                'image' => 'assets/imgs/gallery/image-25.webp',
            ],
            [
                'slug' => 'digital-marketing',
                'serial' => '003',
                'title' => 'Digital Marketing',
                'tag' => 'Growth-Driven Campaigns',
                'summary' => 'We plan and execute digital campaigns that increase awareness, qualified traffic, and measurable conversions.',
                'features' => ['Campaign Strategy', 'Content Planning', 'Paid Ads Management', 'Social Media Marketing', 'Performance Reporting'],
                'image' => 'assets/imgs/gallery/image-26.webp',
            ],
            [
                'slug' => 'search-engine-optimization-seo',
                'serial' => '004',
                'title' => 'Search Engine Optimization (SEO)',
                'tag' => 'Long-Term Organic Visibility',
                'summary' => 'We improve your search rankings with technical SEO, on-page optimization, and content strategies built for sustainable growth.',
                'features' => ['SEO Audit', 'On-Page Optimization', 'Technical SEO', 'Keyword Strategy', 'Monthly SEO Reporting'],
                'image' => 'assets/imgs/gallery/image-27.webp',
            ],
        ];
    }
}
