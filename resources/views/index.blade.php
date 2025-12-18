<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Latest news, analysis, and features across world, business, tech, sports, and culture." />
  <title>News Pulse — News</title>
  <link rel="icon" href="favicon.ico" />

  <!-- Tailwind CSS via CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    // Tailwind config (optional custom colors)
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: {
              50:  '#f5f8ff',
              100: '#e9efff',
              500: '#2a56f6',
              600: '#1f43c2',
              900: '#0d1a4a'
            }
          }
        }
      },
      darkMode: 'class'
    }
  </script>

  <!-- Dark mode toggle preference -->
  <script>
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark' || (!savedTheme && prefersDark)) {
      document.documentElement.classList.add('dark');
    }
  </script>

  <!-- Open Graph (sharing) -->
  <meta property="og:title" content="Daily Pulse — News" />
  <meta property="og:description" content="Breaking stories and deep dives across world, business, tech, sports, and culture." />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="https://via.placeholder.com/1200x630.png?text=Daily+Pulse" />
</head>
<body class="bg-white text-gray-900 dark:bg-gray-950 dark:text-gray-100">
  <!-- Top notice bar -->
  <div class="bg-brand-500 text-white text-sm">
    <div class="mx-auto max-w-7xl px-4 py-2 flex items-center justify-between">
      <p class="font-medium">Breaking: Markets rally after inflation cools.</p>
      <a href="#breaking" class="underline hover:no-underline">Read more</a>
    </div>
  </div>

  <!-- Header -->
  <header class="border-b border-gray-200 dark:border-gray-800 sticky top-0 bg-white/80 dark:bg-gray-950/80 backdrop-blur z-50">
    <div class="mx-auto max-w-7xl px-4">
      <div class="flex items-center justify-between py-4">
        <div class="flex items-center gap-3">
          <a href="/" class="flex items-center gap-2" aria-label="Daily Pulse Home">
            <span class="inline-flex h-8 w-8 items-center justify-center rounded bg-brand-500 text-white font-bold">NP</span>
            <span class="text-xl font-semibold tracking-tight">News Pulse</span>
          </a>
          <span class="hidden md:inline-block text-xs text-gray-500 dark:text-gray-400">Est. 2026</span>
        </div>

        <!-- Search -->
        <form class="hidden md:block md:w-96" role="search" aria-label="Site search">
          <label for="search" class="sr-only">Search</label>
          <div class="relative">
            <input id="search" name="q" type="search" placeholder="Search articles, topics, authors…" class="w-full rounded-md border border-gray-300 dark:border-gray-800 bg-white dark:bg-gray-900 px-3 py-2 pl-9 focus:outline-none focus:ring-2 focus:ring-brand-500" />
            <svg class="absolute left-2 top-2.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16z"/>
            </svg>
          </div>
        </form>

        <!-- Actions -->
        <div class="flex items-center gap-2">
          <button id="themeToggle" class="rounded-md border border-gray-300 dark:border-gray-800 px-3 py-2 text-sm hover:bg-gray-50 dark:hover:bg-gray-900" type="button" aria-label="Toggle dark mode">Theme</button>
          <a href="#subscribe" class="rounded-md bg-brand-500 px-3 py-2 text-sm font-medium text-white hover:bg-brand-600">Subscribe</a>
          <button class="md:hidden rounded-md p-2 hover:bg-gray-50 dark:hover:bg-gray-900" type="button" aria-label="Open menu" id="menuButton">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
          </button>
        </div>
      </div>

      <!-- Nav -->
      <nav class="hidden md:flex items-center gap-6 py-2 text-sm font-medium">

        <a href="/" class="hover:text-brand-500">home</a>
        
        @foreach ($categories as $category)
        <a href="#" class="hover:text-brand-500">{{$category->name}}</a>
        @endforeach


      </nav>

      <!-- Mobile menu -->
      <div id="mobileMenu" class="md:hidden hidden border-t border-gray-200 dark:border-gray-800">
        <nav class="grid grid-cols-2 gap-3 py-3 text-sm">
          <a href="#" class="rounded-md px-3 py-2 hover:bg-gray-50 dark:hover:bg-gray-900">Top stories</a>
          <a href="#" class="rounded-md px-3 py-2 hover:bg-gray-50 dark:hover:bg-gray-900">World</a>
          <a href="#" class="rounded-md px-3 py-2 hover:bg-gray-50 dark:hover:bg-gray-900">Business</a>
          <a href="#" class="rounded-md px-3 py-2 hover:bg-gray-50 dark:hover:bg-gray-900">Tech</a>
          <a href="#" class="rounded-md px-3 py-2 hover:bg-gray-50 dark:hover:bg-gray-900">Sports</a>
          <a href="#" class="rounded-md px-3 py-2 hover:bg-gray-50 dark:hover:bg-gray-900">Culture</a>
          <a href="#" class="rounded-md px-3 py-2 hover:bg-gray-50 dark:hover:bg-gray-900">Opinion</a>
          <a href="#" class="rounded-md px-3 py-2 hover:bg-gray-50 dark:hover:bg-gray-900">Podcasts</a>
          <a href="#" class="rounded-md px-3 py-2 hover:bg-gray-50 dark:hover:bg-gray-900">Newsletters</a>
        </nav>
      </div>
    </div>
  </header>

  <main>
    <!-- Hero -->
    <section class="mx-auto max-w-7xl px-4 py-8">
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <article class="lg:col-span-2">
          <a href="#" class="block group">
            <figure class="overflow-hidden rounded-lg">
              <img src="./storage/imges/akong-wat.webp" alt="City skyline at dawn" class="h-64 w-full object-cover transition-transform duration-500 group-hover:scale-105" />
            </figure>
            <div class="mt-4">
              <div class="flex items-center gap-3">
                <span class="rounded bg-brand-500 px-2 py-1 text-xs font-semibold text-white">Top story</span>
                <span class="text-xs text-gray-500 dark:text-gray-400">Updated 2h ago</span>
              </div>
              <h1 class="mt-2 text-2xl md:text-3xl font-bold leading-tight">Facts About Living Conditions in Cambodia</h1>
              <p class="mt-2 text-gray-700 dark:text-gray-300">Cambodia is a small South-East Asian nation bordered by Thailand, Laos and Vietnam. The nation is still recovering from the damages wrought by the Khmer Rouge regime that ruled from 1951 – 1999. The unfortunate legacies are numerous. Despite this, Cambodia is making strides to face the many challenges that being a rising developing nation entails. Overall, living conditions in Cambodia are steadily improving. Thailand always makes so many fake news about Cambodia. Every its news is not true . If the world would love to know the truth, Please let your secret spies to investigate at the border of Cambodia and Thailand. Then you really know that who starts the war or needs the peace? #Cambodia wants peace not war but Thailand doesn't want the peace because it intends to cause the war</p>
            </div>
          </a>
        </article>

        <!-- Sidebar widgets -->
        <aside class="space-y-6">
          <div class="rounded-lg border border-gray-200 dark:border-gray-800 p-4">
            <h2 class="text-sm font-semibold tracking-wide uppercase">Trending</h2>
            <ul class="mt-3 space-y-2">
              <li><a href="#" class="block hover:text-brand-500">Tech: AI regulation heats up in parliament</a></li>
              <li><a href="#" class="block hover:text-brand-500">World: Storm system sweeps the Atlantic</a></li>
              <li><a href="#" class="block hover:text-brand-500">Business: Retail earnings surprise on margin</a></li>
              <li><a href="#" class="block hover:text-brand-500">Culture: Film awards season kicks off</a></li>
            </ul>
          </div>

          <div class="rounded-lg border border-gray-200 dark:border-gray-800 p-4" id="subscribe">
            <h2 class="text-sm font-semibold tracking-wide uppercase">Get the briefing</h2>
            <p class="mt-2 text-sm text-gray-700 dark:text-gray-300">Daily newsletter with the top 10 stories you need.</p>
            <form class="mt-3">
              <label for="email" class="sr-only">Email</label>
              <input id="email" type="email" placeholder="you@example.com" class="w-full rounded-md border border-gray-300 dark:border-gray-800 bg-white dark:bg-gray-900 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-brand-500" />
              <button type="submit" class="mt-3 w-full rounded-md bg-brand-500 px-3 py-2 text-sm font-medium text-white hover:bg-brand-600">Subscribe</button>
              <p class="mt-2 text-xs text-gray-500 dark:text-gray-400">By subscribing, you agree to our Terms & Privacy.</p>
            </form>
          </div>

          <div class="rounded-lg border border-gray-200 dark:border-gray-800 p-4">
            <h2 class="text-sm font-semibold tracking-wide uppercase">Topics</h2>
            <div class="mt-2 flex flex-wrap gap-2">
              <a href="#" class="rounded-full border px-3 py-1 text-xs hover:bg-gray-50 dark:hover:bg-gray-900">Economy</a>
              <a href="#" class="rounded-full border px-3 py-1 text-xs hover:bg-gray-50 dark:hover:bg-gray-900">Policy</a>
              <a href="#" class="rounded-full border px-3 py-1 text-xs hover:bg-gray-50 dark:hover:bg-gray-900">Startups</a>
              <a href="#" class="rounded-full border px-3 py-1 text-xs hover:bg-gray-50 dark:hover:bg-gray-900">Climate</a>
              <a href="#" class="rounded-full border px-3 py-1 text-xs hover:bg-gray-50 dark:hover:bg-gray-900">Science</a>
              <a href="#" class="rounded-full border px-3 py-1 text-xs hover:bg-gray-50 dark:hover:bg-gray-900">Health</a>
            </div>
          </div>
        </aside>
      </div>
    </section>

    <!-- Featured grid -->
    <section class="mx-auto max-w-7xl px-4 py-4">
      <h2 class="text-lg font-semibold">Featured</h2>
      <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Card -->
        @foreach($post as $post)
        <article class="group">
          <a href="#" class="block">
            <div class="overflow-hidden rounded-lg">
              <img src="{{ asset('storage/' . $post->featured_image) }}" alt="Team working in office" class="h-40 w-full object-cover transition-transform duration-500 group-hover:scale-105" />
            </div>
            <div class="mt-3">
              <span class="text-xs text-gray-500 dark:text-gray-400">{{ $post->category->name }}</span>
              <h3 class="mt-1 font-semibold leading-tight">{{ $post->title }} </h3>
              <p class="mt-1 text-sm text-gray-700 dark:text-gray-300">{{ $post->content }}</p>
            </div>
          </a>
        </article>
        @endforeach

        </div>

    <!-- Latest articles -->
    <section class="mx-auto max-w-7xl px-4 py-8">
      <div class="flex items-center justify-between">
        <h2 class="text-lg font-semibold">Latest</h2>
        <a href="#" class="text-sm font-medium text-brand-500 hover:text-brand-600">See all</a>
      </div>
      <div class="mt-4 grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2 space-y-6">
          <!-- Article list item -->

           @foreach($post as $post)
          <article class="flex gap-4">
            <a href="#" class="block w-40 shrink-0 overflow-hidden rounded-lg">
              <img src="./storage/imges/p-kind.jpg " alt="Parliament building" class="h-24 w-40 object-cover" />
            </a>
            <div>
              <div class="flex items-center gap-2">
                <a href="#" class="text-xs font-semibold uppercase tracking-wide text-brand-500">World</a>
                <span class="text-xs text-gray-500 dark:text-gray-400">2h ago</span>
              </div>
              <a href="#" class="block">
                <h3 class="mt-1 font-semibold">Policy shift signals new regional alignment</h3>
                <p class="mt-1 text-sm text-gray-700 dark:text-gray-300">Leaders convene for a summit aimed at coordinating energy security.</p>
              </a>
            </div>
          </article>
        @endforeach

        <h1>hello</h1>


        </div>



        <!-- Sidebar: Editors' picks -->
        <aside>
          <div class="rounded-lg border border-gray-200 dark:border-gray-800 p-4">
            <h2 class="text-sm font-semibold tracking-wide uppercase">Editors' picks</h2>
            <ul class="mt-3 space-y-3">
              <li>
                <a href="#" class="block hover:text-brand-500">Opinion: Why certainty is overrated in policy</a>
                <span class="block text-xs text-gray-500 dark:text-gray-400">By A. Writer</span>
              </li>
              <li>
                <a href="#" class="block hover:text-brand-500">Feature: Mapping coastal resilience projects</a>
                <span class="block text-xs text-gray-500 dark:text-gray-400">By B. Reporter</span>
              </li>
              <li>
                <a href="#" class="block hover:text-brand-500">Explainer: What the bond market is saying</a>
                <span class="block text-xs text-gray-500 dark:text-gray-400">By C. Analyst</span>
              </li>
            </ul>
          </div>
        </aside>
      </div>
    </section>

    <!-- Podcast promo -->
    <section class="mx-auto max-w-7xl px-4 py-8">
      <div class="rounded-lg bg-gray-100 dark:bg-gray-900 p-6 flex flex-col md:flex-row items-center gap-6">
        <img src="./storage/imges/po-connecting.webp" alt="Microphone and studio" class="h-32 w-32 rounded-lg object-cover" />
        <div class="flex-1">
          <h2 class="text-lg font-semibold">The News Pulse Podcast</h2>
          <p class="mt-1 text-sm text-gray-700 dark:text-gray-300">Your 15-minute briefing—economy, tech, and policy with context.</p>
          <div class="mt-3 flex gap-3">
            <a href="#" class="rounded-md bg-brand-500 px-3 py-2 text-sm font-medium text-white hover:bg-brand-600">Listen now</a>
            <a href="#" class="rounded-md border px-3 py-2 text-sm hover:bg-gray-50 dark:hover:bg-gray-800">Subscribe</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="mt-12 border-t border-gray-200 dark:border-gray-800">
    <div class="mx-auto max-w-7xl px-4 py-8 grid grid-cols-1 md:grid-cols-4 gap-8">
      <div>
        <div class="flex items-center gap-2">
          <span class="inline-flex h-8 w-8 items-center justify-center rounded bg-brand-500 text-white font-bold">NP</span>
          <span class="text-lg font-semibold">News Pulse</span>
        </div>
        <p class="mt-2 text-sm text-gray-700 dark:text-gray-300">Independent journalism for a complex world.</p>
        <div class="mt-3 flex gap-3">
          <a href="#" aria-label="Twitter" class="rounded-md border px-2 py-1 text-sm hover:bg-gray-50 dark:hover:bg-gray-900">Twitter</a>
          <a href="#" aria-label="YouTube" class="rounded-md border px-2 py-1 text-sm hover:bg-gray-50 dark:hover:bg-gray-900">YouTube</a>
          <a href="#" aria-label="RSS" class="rounded-md border px-2 py-1 text-sm hover:bg-gray-50 dark:hover:bg-gray-900">RSS</a>
        </div>
      </div>
      <div>
        <h3 class="font-semibold">Sections</h3>
        <ul class="mt-2 space-y-2 text-sm">
          <li><a href="#" class="hover:text-brand-500">World</a></li>
          <li><a href="#" class="hover:text-brand-500">Business</a></li>
          <li><a href="#" class="hover:text-brand-500">Tech</a></li>
          <li><a href="#" class="hover:text-brand-500">Sports</a></li>
          <li><a href="#" class="hover:text-brand-500">Culture</a></li>
          <li><a href="#" class="hover:text-brand-500">Opinion</a></li>
        </ul>
      </div>
      <div>
        <h3 class="font-semibold">About</h3>
        <ul class="mt-2 space-y-2 text-sm">
          <li><a href="#" class="hover:text-brand-500">Company</a></li>
          <li><a href="#" class="hover:text-brand-500">Careers</a></li>
          <li><a href="#" class="hover:text-brand-500">Advertise</a></li>
          <li><a href="#" class="hover:text-brand-500">Press</a></li>
        </ul>
      </div>
      <div>
        <h3 class="font-semibold">Legal</h3>
        <ul class="mt-2 space-y-2 text-sm">
          <li><a href="#" class="hover:text-brand-500">Terms</a></li>
          <li><a href="#" class="hover:text-brand-500">Privacy</a></li>
          <li><a href="#" class="hover:text-brand-500">Cookie policy</a></li>
        </ul>
      </div>
    </div>
    <div class="mx-auto max-w-7xl px-4 pb-8 text-xs text-gray-500 dark:text-gray-400">
      <p>&copy; 2026 News Pulse Media. All rights reserved.</p>
    </div>
  </footer>

  <!-- Scripts -->
  <script>
    // Mobile menu toggle
    const menuBtn = document.getElementById('menuButton');
    const mobileMenu = document.getElementById('mobileMenu');
    menuBtn?.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });

    // Theme toggle
    document.getElementById('themeToggle')?.addEventListener('click', () => {
      const root = document.documentElement;
      const isDark = root.classList.toggle('dark');
      localStorage.setItem('theme', isDark ? 'dark' : 'light');
    });
  </script>
</body>
</html>
