<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
    @foreach ($projectes as $projecte)
        <url>
            <loc>https://www.solarcat.cat/ca/projectes-actius-escola-30-pasos/detall/{{ $projecte->slug }}</loc>
            <lastmod>{{ $startOfMonth }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.9</priority>
        </url>
    @endforeach
</urlset>