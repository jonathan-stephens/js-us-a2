<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>
    <?= $site->title()->esc() ?> | <?php if($page->isHomePage()): ?>Home<?php else: ?><?= $page->title()->esc() ?><?php endif ?>

  </title>

  <meta name="description" content="Personal site & portfolio of Jonathan Stephens: designer, writer, developer, photographer, and reader...with many piles of many books in many places.">

  <!-- Webmentions & Indieweb-->
  <link rel="pingback" href="https://webmention.io/jonathanstephens.us/xmlrpc" />
  <link rel="webmention" href="https://webmention.io/jonathanstephens.us/webmention" />
  <link rel="micropub" href="https://jonathanstephens.us/micropub">
  <link rel="token_endpoint" href="https://tokens.indieauth.com/token">
  <link rel="authorization_endpoint" href="https://indieauth.com/auth">
  <link href="https://github.com/jonathan-stephens" rel="me">
  <?php snippet('webmention-endpoint'); ?>

  <!-- Feeds -->
  <link rel="alternate" type="application/rss+xml" title="Links RSS Feed" href="<?= url('links/rss') ?>"/>
  <link rel="alternate" type="application/rss+xml" title="Journal RSS Feed" href="<?= url('journal/rss') ?>"/>
  <link rel="alternate" type="application/rss+xml" title="Everything RSS Feed" href="<?= url('/rss') ?>"/>
  <link rel="alternate" type="application/json" title="Links RSS Feed" href="<?= url('links/feed') ?>"/>
  <link rel="alternate" type="application/json" title="Journal RSS Feed" href="<?= url('journal/feed') ?>"/>
  <link rel="alternate" type="application/json" title="Everything RSS Feed" href="<?= url('/feed') ?>"/>

  <!-- Facebook Meta Tags -->
  <meta property="og:url" content="https://jonathanstephens.us">
  <meta property="og:title" content="Jonathan Stephens">
  <meta property="og:description" content="Personal site & portfolio of Jonathan Stephens—designer, writer, developer, photographer, and reader...with many piles of many books in many places.">
  <meta property="og:image" content="<?= $site->url() ?>/assets/png/og-image.webp">

  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta property="twitter:domain" content="jonathanstephens.us">
  <meta property="twitter:url" content="https://jonathanstephens.us">
  <meta name="twitter:title" content="Jonathan Stephens">
  <meta name="twitter:description" content="Personal site & portfolio of Jonathan Stephens: designer, writer, developer, photographer, and reader...with many piles of many books in many places.">
  <meta name="twitter:image" content="<?= $site->url() ?>/assets/png/og-image.webp">

  <?= css([
    'assets/css/main.css',
  ]) ?>

  <noscript>
    <style>
      #theme-picker {
        display: none;
      }
    </style>
  </noscript>
  <?php
    $period = TimeKeeper::getCurrentPeriod();
    $season = TimeKeeper::getCurrentSeason();
    ?>
</head>
