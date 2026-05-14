<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ route('tzi.home') }}</loc>
        <lastmod>{{ now()->tz('Asia/Jakarta')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ route('tzi.about') }}</loc>
        <lastmod>{{ now()->tz('Asia/Jakarta')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('tzi.service') }}</loc>
        <lastmod>{{ now()->tz('Asia/Jakarta')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
    </url>
    <url>
        <loc>{{ route('tzi.product') }}</loc>
        <lastmod>{{ now()->tz('Asia/Jakarta')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>{{ route('tzi.contact') }}</loc>
        <lastmod>{{ now()->tz('Asia/Jakarta')->toAtomString() }}</lastmod>
        <changefreq>yearly</changefreq>
        <priority>0.7</priority>
    </url>
</urlset>
