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
                'process_subtitle' => 'Our website <br> delivery process',
                'process_title' => 'From planning to launch, we create websites that communicate your value and convert visitors with a smooth user experience.',
                'process_steps' => [
                    ['title' => 'Discovery & Planning', 'text' => 'We define your goals, audience, sitemap, and messaging before design starts.'],
                    ['title' => 'UI/UX Design', 'text' => 'We craft modern page layouts and user flows aligned with your brand identity.'],
                    ['title' => 'Development & Integrations', 'text' => 'We build the website with clean code and connect forms, CRM, analytics, and other tools.'],
                    ['title' => 'Launch & Optimization', 'text' => 'We test performance, responsiveness, SEO basics, and prepare your team for go-live.'],
                ],
                'benefits' => [
                    ['title' => 'Strong first impression', 'text' => 'Professional visual design that builds trust in seconds.'],
                    ['title' => 'Mobile-ready experience', 'text' => 'Your website looks and works perfectly across all devices.'],
                    ['title' => 'Built for growth', 'text' => 'Scalable structure and content management for future expansion.'],
                ],
                'value_title' => 'What you gain from our web design & development service',
                'value_cards' => [
                    ['number' => '92%', 'text' => 'Clients report improved brand perception after a full website redesign.'],
                    ['number' => '75%', 'text' => 'Average increase in qualified inquiries after UX and content improvements.'],
                ],
                'faqs' => [
                    ['question' => 'How long does a business website project take?', 'answer' => 'Most projects take between 4 to 8 weeks depending on scope, number of pages, and required integrations.'],
                    ['question' => 'Can you redesign my existing website?', 'answer' => 'Yes. We can rebuild your current site with a new UX/UI while keeping your brand direction and content goals.'],
                    ['question' => 'Will my site be optimized for mobile and speed?', 'answer' => 'Absolutely. Responsive behavior and performance optimization are part of every website we deliver.'],
                ],
            ],
            [
                'slug' => 'ecommerce-web-development',
                'serial' => '002',
                'title' => 'Ecommerce Web Development',
                'tag' => 'Scalable Online Stores',
                'summary' => 'We create ecommerce platforms that make browsing, checkout, and order management smooth for your customers and your team.',
                'features' => ['Storefront Design', 'Payment Gateway Integration', 'Product & Inventory Setup', 'Checkout Optimization', 'Security Best Practices'],
                'image' => 'assets/imgs/gallery/image-25.webp',
                'process_subtitle' => 'Our ecommerce <br> build process',
                'process_title' => 'We design and develop ecommerce experiences that increase conversion rates and simplify product operations.',
                'process_steps' => [
                    ['title' => 'Store Strategy', 'text' => 'We define catalog structure, categories, filters, and conversion goals.'],
                    ['title' => 'Storefront UX', 'text' => 'We design shopping journeys that make discovery and purchase frictionless.'],
                    ['title' => 'Checkout & Payments', 'text' => 'We integrate trusted payment gateways and optimize checkout steps.'],
                    ['title' => 'Operations & Scale', 'text' => 'We configure shipping, inventory, and reporting to support growth.'],
                ],
                'benefits' => [
                    ['title' => 'Higher conversion rates', 'text' => 'Optimized product and checkout pages reduce drop-offs.'],
                    ['title' => 'Secure transactions', 'text' => 'Payment and customer data flows are implemented with best-practice security.'],
                    ['title' => 'Operational efficiency', 'text' => 'Clear product, order, and stock workflows save your team time.'],
                ],
                'value_title' => 'What you gain from our ecommerce development service',
                'value_cards' => [
                    ['number' => '89%', 'text' => 'Store owners see measurable conversion improvements after checkout optimization.'],
                    ['number' => '68%', 'text' => 'Teams reduce manual order handling with streamlined ecommerce workflows.'],
                ],
                'faqs' => [
                    ['question' => 'Which ecommerce platform do you support?', 'answer' => 'We can build and customize ecommerce stores based on your needs and technical stack.'],
                    ['question' => 'Can you migrate products from my old store?', 'answer' => 'Yes, we handle migration for products, categories, customers, and core order data.'],
                    ['question' => 'Do you support payment and shipping setup?', 'answer' => 'Yes, we configure payment gateways, shipping zones, and tax rules for your region.'],
                ],
            ],
            [
                'slug' => 'digital-marketing',
                'serial' => '003',
                'title' => 'Digital Marketing',
                'tag' => 'Growth-Driven Campaigns',
                'summary' => 'We plan and execute digital campaigns that increase awareness, qualified traffic, and measurable conversions.',
                'features' => ['Campaign Strategy', 'Content Planning', 'Paid Ads Management', 'Social Media Marketing', 'Performance Reporting'],
                'image' => 'assets/imgs/gallery/image-26.webp',
                'process_subtitle' => 'Our marketing <br> execution process',
                'process_title' => 'We connect strategy, content, and paid channels to attract the right audience and convert demand into real business results.',
                'process_steps' => [
                    ['title' => 'Market & Audience Research', 'text' => 'We identify audience segments, buyer intent, and competitive positioning.'],
                    ['title' => 'Campaign Planning', 'text' => 'We define channel mix, messaging, budget allocation, and KPIs.'],
                    ['title' => 'Execution & Optimization', 'text' => 'We run campaigns, test creatives, and optimize based on real-time data.'],
                    ['title' => 'Reporting & Scaling', 'text' => 'We provide actionable reports and scale what performs best.'],
                ],
                'benefits' => [
                    ['title' => 'Qualified traffic growth', 'text' => 'Campaign targeting is refined to reach users with high purchase intent.'],
                    ['title' => 'Clear ROI tracking', 'text' => 'Every campaign is tied to measurable business outcomes.'],
                    ['title' => 'Consistent brand presence', 'text' => 'Unified messaging across social, search, and paid media channels.'],
                ],
                'value_title' => 'What you gain from our digital marketing service',
                'value_cards' => [
                    ['number' => '3.4x', 'text' => 'Average uplift in campaign engagement after strategy and creative optimization.'],
                    ['number' => '61%', 'text' => 'Lower cost-per-lead through continuous targeting and bidding improvements.'],
                ],
                'faqs' => [
                    ['question' => 'How do you choose the right channels for my business?', 'answer' => 'We map channels to your audience behavior, goals, and budget to prioritize impact.'],
                    ['question' => 'Do you provide monthly performance reports?', 'answer' => 'Yes, with insights on spend, traffic quality, leads, and conversion outcomes.'],
                    ['question' => 'Can you manage both paid ads and social content?', 'answer' => 'Yes, we can run integrated campaigns that combine paid and organic efforts.'],
                ],
            ],
            [
                'slug' => 'search-engine-optimization-seo',
                'serial' => '004',
                'title' => 'Search Engine Optimization (SEO)',
                'tag' => 'Long-Term Organic Visibility',
                'summary' => 'We improve your search rankings with technical SEO, on-page optimization, and content strategies built for sustainable growth.',
                'features' => ['SEO Audit', 'On-Page Optimization', 'Technical SEO', 'Keyword Strategy', 'Monthly SEO Reporting'],
                'image' => 'assets/imgs/gallery/image-27.webp',
                'process_subtitle' => 'Our SEO <br> growth process',
                'process_title' => 'We build long-term organic growth through technical fixes, content strategy, and continuous search performance improvements.',
                'process_steps' => [
                    ['title' => 'SEO Audit & Benchmarking', 'text' => 'We assess technical issues, content gaps, and keyword opportunities.'],
                    ['title' => 'On-Page & Technical Optimization', 'text' => 'We optimize pages, metadata, site speed, indexing, and architecture.'],
                    ['title' => 'Content & Authority Building', 'text' => 'We develop SEO content plans and strengthen topical relevance.'],
                    ['title' => 'Monitoring & Iteration', 'text' => 'We track rankings and traffic trends, then improve continuously.'],
                ],
                'benefits' => [
                    ['title' => 'Higher search visibility', 'text' => 'Your key pages rank better for relevant search terms.'],
                    ['title' => 'Sustainable traffic growth', 'text' => 'Organic traffic compounds with consistent optimization.'],
                    ['title' => 'Better technical health', 'text' => 'A technically sound website performs better for users and search engines.'],
                ],
                'value_title' => 'What you gain from our SEO service',
                'value_cards' => [
                    ['number' => '2.7x', 'text' => 'Increase in organic sessions after technical + content SEO improvements.'],
                    ['number' => '58%', 'text' => 'Growth in non-branded keyword visibility for target markets.'],
                ],
                'faqs' => [
                    ['question' => 'When can we expect SEO results?', 'answer' => 'Most SEO campaigns show meaningful movement within 3 to 6 months, depending on competition and site condition.'],
                    ['question' => 'Do you handle technical SEO issues?', 'answer' => 'Yes, we cover crawlability, indexing, Core Web Vitals, and site structure improvements.'],
                    ['question' => 'Will you provide a keyword and content plan?', 'answer' => 'Yes, we build a focused keyword map and content roadmap aligned with your goals.'],
                ],
            ],
        ];
    }
}
