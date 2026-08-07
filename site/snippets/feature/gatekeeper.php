<?php
// Check if the visitor is NOT logged in
if (!$kirby->user()) {
    http_response_code(403);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Restricted Access</title>
      <style>
        body { font-family: system-ui, sans-serif; display: grid; place-items: center; min-height: 100vh; margin: 0; padding: 2rem; background: oklch(98.18% .001 106.42); color: oklch(12.43% .015 47.04); font-size: 1.125rem;}
        .card { max-width: 90ch; line-height: 1.5; padding: 2rem; background: #fff; border-radius: .25rem; box-shadow: 0 4px 12px oklch(.569 .006 356.5/.25) ; text-align: center; }
        p{max-width:70ch;}
      </style>
    </head>
    <body>
      <div class="card">
        <h1>Page restricted to friends &amp; subscribers.</h1>
        <h2>If you think this applies to you, or would like it to, please contact me.</h2>
        <p style="opacity:80%;">I've put this page up because my site keeps going down with 503 errors because so many AI bots are vacuuming up any and all of the internet they can. If I get to a point where I can handle the cost of server load and all because of that, I may lift this.</p>
        <p style="opacity:80%;">In the meantime—going against everything I've wanted to do with this site and my own belief in an Open Internet and openly sharing information I find with others—there's no other way to maintain continuity of service for my digital garden on my own little corner of the internet.</p>
      </div>
    </body>
    </html>
    <?php
    exit;
}