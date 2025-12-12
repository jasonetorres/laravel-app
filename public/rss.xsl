<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" encoding="utf-8" indent="yes"/>
    <xsl:template match="/">
        <html lang="en">
            <head>
                <title><xsl:value-of select="/rss/channel/title"/> - RSS Feed</title>
                <meta charset="utf-8"/>
                <meta name="viewport" content="width=device-width, initial-scale=1"/>
                <style>
                    /* Minimal Dark Mode Styles to match your site */
                    body {
                    font-family: system-ui, -apple-system, sans-serif;
                    background-color: #050505;
                    color: #d1d5db; /* gray-300 */
                    line-height: 1.6;
                    padding: 2rem;
                    max-width: 800px;
                    margin: 0 auto;
                    }
                    a { color: #818cf8; text-decoration: none; transition: color 0.2s; } /* indigo-400 */
                    a:hover { color: #a5b4fc; }
                    header {
                    border-bottom: 1px solid #333;
                    padding-bottom: 2rem;
                    margin-bottom: 3rem;
                    }
                    h1 { color: #fff; margin-bottom: 0.5rem; font-size: 2rem; }
                    .alert {
                    background-color: #1a1a1a;
                    border-left: 4px solid #6366f1;
                    padding: 1rem;
                    margin-bottom: 2rem;
                    border-radius: 4px;
                    font-size: 0.9rem;
                    color: #9ca3af;
                    }
                    .item { margin-bottom: 3rem; }
                    .item h2 { font-size: 1.5rem; margin-bottom: 0.5rem; font-weight: 600; }
                    .item h2 a { color: #fff; }
                    .item h2 a:hover { color: #818cf8; }
                    .meta { font-size: 0.85rem; color: #6b7280; margin-bottom: 1rem; }
                </style>
            </head>
            <body>
                <div class="alert">
                    <strong>RSS Feed:</strong> This is a web feed for data exchange. You can copy the URL of this page into your news reader to subscribe.
                </div>

                <header>
                    <h1><xsl:value-of select="/rss/channel/title"/></h1>
                    <p><xsl:value-of select="/rss/channel/description"/></p>
                    <p>
                        <a href="{/rss/channel/link}">&#8592; Return to Website</a>
                    </p>
                </header>

                <main>
                    <xsl:for-each select="/rss/channel/item">
                        <article class="item">
                            <h2>
                                <a href="{link}" target="_blank">
                                    <xsl:value-of select="title"/>
                                </a>
                            </h2>
                            <div class="meta">
                                Published: <xsl:value-of select="pubDate"/>
                            </div>
                            <div class="description">
                                <xsl:value-of select="description"/>
                            </div>
                        </article>
                    </xsl:for-each>
                </main>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
