<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - AI TechKart</title>
    <meta name="description" content="AI TechKart is a leading software development company specializing in Custom Website and Mobile App Development. We create tailored digital solutions that drive business growth and enhance user experience. Contact us for innovative web and app development services.">
    <meta name="author" content="AI TechKart">
    <meta name="copyright" content="AI TechKart">
    
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/tailwind.css">
</head>

<body class="bg-linear-to-tr from-[#eaab58] via-[#d3ba91] to-[#eccdad] rounded-xl antialiased">

  <!-- Navigation Bar -->
    <?php require_once __DIR__ . '/../nav-section/nav-section.php'; ?>
    <!-- Navigation Section -->

  <!-- Hero Section -->
  <header class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center md:py-32">

    <div class="max-w-7xl mx-auto grid grid-cols-1 gap-12 items-center">
    
    <!-- Left Column: Description -->
    <div class="space-y-2">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 tracking-tight">
        Latest Insights
      </h2>
      <p class="text-lg text-gray-600 ">Stay updated with our newest updates, trends, and tutorials.</p>
    </div>
  </div>
  </header>

  <!-- Blog Grid Section -->
  <section id="blog" class="py-7 border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-4">

        <!-- Card 1 -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
          <img src="/images/blog/ssl.png" alt="Importance of SSL" class="w-full h-48">
          <div class="p-5 flex flex-col grow">
            <div class="mt-8 flex items-center gap-x-4 text-xs font-semibold">
              <time datetime="2026-07-06" class="text-stone-500">June 12, 2026 | 5 Min Read</time>
              <p class="rounded-full bg-stone-100 px-3 py-1 text-stone-600 hover:bg-stone-200">Technology</p>
            </div>
            <h2 class="text-xl font-bold text-gray-900 mb-2">Importance of SSL</h2>
            <p class="text-gray-600 text-sm grow">SSL stands for <strong>Secure Sockets Layer</strong>. It is the standard security technology for establishing an encrypted link between a web server (where the website lives) and a browser...</p>
            <a href="/blog/importance-of-ssl" class="mt-4 text-blue-600 hover:text-blue-800 font-medium text-sm">Read More &rarr;</a>
          </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
          <img src="/images/blog/jwt.png" alt="JWT Authorization & Authentication Concept" class="w-full h-48">
          <div class="p-5 flex flex-col grow">
            <div class="mt-8 flex items-center gap-x-4 text-xs font-semibold">
              <time datetime="2026-07-06" class="text-stone-500">June 13, 2026 | 10 Min Read</time>
              <p class="rounded-full bg-stone-100 px-3 py-1 text-stone-600 hover:bg-stone-200">Technology</p>
            </div>
            <h2 class="text-xl font-bold text-gray-900 mb-2">JWT(JSON Web Token) - Use & How To</h2>
            <p class="text-gray-600 text-sm grow">Learn exactly what JWTs are, how they work, and how to implement them securely in your applications...</p>
            <a href="/blog/jwt-use-and-how-to" class="mt-4 text-blue-600 hover:text-blue-800 font-medium text-sm">Read More &rarr;</a>
          </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden flex flex-col">
          <img src="/images/blog/responsive.png" alt="Advantage of responsive website design" class="w-full h-48">
          <div class="p-5 flex flex-col grow">
            <div class="mt-8 flex items-center gap-x-4 text-xs font-semibold">
              <time datetime="2026-07-06" class="text-stone-500">June 05, 2026 | 5 Min Read</time>
              <p class="rounded-full bg-stone-100 px-3 py-1 text-stone-600 hover:bg-stone-200">Design</p>
            </div>
            <h2 class="text-xl font-bold text-gray-900 mb-2">UI/UX Design</h2>
            <p class="text-gray-600 text-sm grow">A responsive website is essential for ensuring your blog looks great and functions perfectly across all devices. By automatically adjusting ....</p>
            <a href="/blog/advantage-of-responsive-website" class="mt-4 text-blue-600 hover:text-blue-800 font-medium text-sm">Read More &rarr;</a>
          </div>
        </div>
        

      </div>
    </div>
  </section>


  <!-- Footer Section -->
    <?php require_once __DIR__ . '/../footer.php'; ?>
    <!-- Footer Section -->

</body>

</html>