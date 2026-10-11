<x-layout>

    <div class="mx-auto max-w-4xl rounded-xl text-gray-100 mt-8">
        <!-- Header Section: Profile Picture, Name, Title -->
        <div class="relative flex flex-col sm:flex-row items-center space-y-6 sm:space-y-0 sm:space-x-8 mb-8">
            <div class="flex-shrink-0 ">
                <img src="/profile.jpg" alt="Chris Sutton"
                     class="w-32 h-32 sm:w-40 sm:h-40 rounded-full object-cover shadow-md border-4 border-white">
            </div>
            <div class="text-center sm:text-left">
                <h1 class="text-4xl sm:text-5xl font-extrabold mb-2">Chris Sutton</h1>
                <p class="text-xl sm:text-2xl font-semibold text-slate-200 mb-1">Senior PHP and Laravel Developer</p>
                <p class="text-md sm:text-md mb-1">12 Years of Web Development | 5 Years Laravel Expertise</p>
                <p class="text-md sm:text-md ">Based in Taunton, Somerset, UK</p>
            </div>
            <!-- Added contact icons in top right -->
            <div class="absolute top-0 right-0 flex space-x-4 items-center">
                <a href="mailto:suttsc@gmail.com" class="text-sky-300 hover:text-sky-500" title="Email me">
                    <!-- Email icon (using Heroicons envelope; assume @heroicon directive or SVG -->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                    </svg>
                </a>
                <a href="https://www.linkedin.com/in/chris-sutton-869215251" target="_blank" rel="noopener" class="text-sky-300 hover:text-sky-500" title="LinkedIn">
                    <!-- LinkedIn icon (simple SVG) -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Summary Section -->
        <div class="mb-8">
            <h2 class="text-xl sm:text-2xl font-bold  mb-4 border-b-2 border-slate-500 pb-2">Summary</h2>
            <p class="text-base sm:text-md leading-relaxed">
                Highly experienced Senior PHP and Laravel Developer with 12 years in web development, including 5
                years specializing in Laravel.
                Proven track record in building scalable eCommerce platforms, leading high-impact projects that
                significantly boost client revenue, and mentoring junior developers.
                Adept at integrating third-party services, tackling complex problems, and ensuring smooth project delivery.
            </p>
        </div>

        <!-- Key Skills Section -->
        <div class="mb-8">
            <h2 class="text-xl sm:text-2xl font-bold  mb-4 border-b-2 border-slate-500 pb-2">Key Skills</h2>
            <div class="text-gray-100">
                <div class="sm:flex gap-1 text-md mb-3 sm:mb-1 ">
                    <h3 class="font-semibold text-slate-300 sm:basis-40 flex-0">
                        Languages:
                    </h3>
                    <span class="flex-1">PHP 8.4, JavaScript, MySQL, MSSQL, C#, HTML/CSS</span>
                </div>
                <div class="sm:flex gap-1 text-md mb-3 sm:mb-1 ">
                    <h3 class="font-semibold text-slate-300 sm:basis-40 flex-0">
                        Frameworks:
                    </h3>
                    <span class="flex-1">Laravel, Filament, Livewire, Alpine.js, Vue.js, Tailwind</span>
                </div>
                <div class="sm:flex gap-1 text-md mb-3 sm:mb-1 ">
                    <h3 class="font-semibold text-slate-300 sm:basis-40 flex-0">
                        DevOps & Tools:
                    </h3>
                    <span class="flex-1">AWS (Lambda, EC2, RDS, S3), Redis, Git, CI/CD, Sentry, Jira, AI Tools (Code, Chat, APIs)</span>
                </div>
                <div class="sm:flex gap-1 text-md mb-3 sm:mb-1 ">
                    <h3 class="font-semibold text-slate-300 sm:basis-40 flex-0">
                        Practices:
                    </h3>
                    <span class="flex-1">Static Analysis (PHPStan), Automated Testing (Pest PHP), SOLID principles</span>
                </div>
            </div>
        </div>

        <!-- Looking for -->
        <div class="mb-8">
            <h2 class="text-xl sm:text-2xl font-bold  mb-4 border-b-2 border-slate-500 pb-2">What I'm looking for</h2>
            <div class="text-gray-100">
                <div class="sm:flex gap-1 text-md mb-3 sm:mb-1 ">
                    <h3 class="font-semibold text-slate-300 sm:basis-40 flex-0">
                        Position:
                    </h3>
                    <span class="flex-1">Senior or Lead Web Developer</span>
                </div>
                <div class="sm:flex gap-1 text-md mb-3 sm:mb-1 ">
                    <h3 class="font-semibold text-slate-300 sm:basis-40 flex-0">
                        Location:
                    </h3>
                    <span class="flex-1">Hybrid in South West (Bristol, Exeter) or Remote</span>
                </div>
                <div class="sm:flex gap-1 text-md mb-3 sm:mb-1 ">
                    <h3 class="font-semibold text-slate-300 sm:basis-40 flex-0">
                        Project:
                    </h3>
                    <span class="flex-1">In-house systems or SaaS projects</span>
                </div>
                <div class="sm:flex gap-1 text-md mb-3 sm:mb-1 ">
                    <h3 class="font-semibold text-slate-300 sm:basis-40 flex-0">
                        Salary:
                    </h3>
                    <span class="flex-1">A competitive salary of £55,000 - £65,000 and benefits package</span>
                </div>
            </div>
        </div>

        <!-- Removed the Contact me section -->

    </div>

</x-layout>
