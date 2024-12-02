<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xmlns:xhtml="http://www.w3.org/1999/xhtml"
    xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
    http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd
    http://www.w3.org/1999/xhtml
    http://www.w3.org/2002/08/xhtml/xhtml1-strict.xsd"
>
    @foreach ($projectes as $projecte)
        <url>
            <loc>https://www.solarcat.es/es/proyectos-solarcat/{{ $projecte->slug }}</loc>
            <xhtml:link
                rel="alternate"
                hreflang="ca"
                href="https://www.solarcat.es/ca/proyectos-solarcat/{{ $projecte->slug }}"
            />
            <lastmod>{{ $startOfMonth }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.9</priority>
        </url>
    @endforeach
</urlset>