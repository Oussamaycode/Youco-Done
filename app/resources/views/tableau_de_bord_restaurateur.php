<!DOCTYPE html>

<html class="light" lang="fr"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#2bee7c",
                        "background-light": "#f6f8f7",
                        "background-dark": "#102218",
                    },
                    fontFamily: {
                        "display": ["Work Sans", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        body {
            font-family: 'Work Sans', sans-serif;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-background-light dark:bg-background-dark min-h-screen text-[#0d1b13] dark:text-white antialiased">
<div class="relative mx-auto max-w-[430px] min-h-screen flex flex-col shadow-2xl bg-background-light dark:bg-background-dark overflow-x-hidden">
<!-- TopAppBar Component -->
<header class="flex flex-col gap-2 p-4 pb-2 sticky top-0 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md z-10">
<div class="flex items-center h-12 justify-between">
<div class="flex size-10 shrink-0 items-center overflow-hidden rounded-full border border-gray-200 dark:border-gray-800">
<div class="bg-center bg-no-repeat aspect-square bg-cover size-full" data-alt="Photo de profil du restaurateur souriant" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBG-KCcpwIcwNFNkbKunjab7lW0AE0xqNG4s7OzNpawdxpTpmEgoh8iycD5WuE0DYBP_W27Q16C5Vmd3_s_4J0EPlP_c3g61-wIayY3Tdrr8fNlND8fweihHl15yxuaoCo3lKuIwEFSzTIAMrjd4CrH4OCck9PgoQPjCd8EjyD_0aCLvnN9LikxoQ0McQPHP6-R1MxAHU054SXdyGhERTgbW4QuG83rx2xWaUpVkXp5XsmFljXC5Nx7-uB7RHywxyO-x9ijc7qb6XMI");'></div>
</div>
<div class="flex items-center gap-2">
<button class="flex size-10 items-center justify-center rounded-full bg-white dark:bg-gray-900 border border-gray-100 dark:border-gray-800 shadow-sm">
<span class="material-symbols-outlined text-xl">notifications</span>
</button>
<button class="flex size-10 items-center justify-center rounded-full bg-white dark:bg-gray-900 border border-gray-100 dark:border-gray-800 shadow-sm">
<span class="material-symbols-outlined text-xl">settings</span>
</button>
</div>
</div>
<div class="flex flex-col">
<p class="text-sm font-medium text-gray-500 dark:text-gray-400">Bonjour, Marc 👋</p>
<h1 class="text-[#0d1b13] dark:text-white tracking-tight text-3xl font-bold leading-tight">Tableau de bord</h1>
</div>
</header>
<main class="flex-1 pb-24">
<!-- Stats Component -->
<section class="flex flex-wrap gap-3 p-4">
<div class="flex min-w-[140px] flex-1 flex-col gap-2 rounded-xl p-5 border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-900 shadow-sm">
<div class="flex items-center justify-between">
<span class="material-symbols-outlined text-primary">calendar_today</span>
<span class="text-[#078829] text-xs font-bold bg-[#078829]/10 px-2 py-0.5 rounded-full">+12%</span>
</div>
<div>
<p class="text-gray-500 dark:text-gray-400 text-xs font-medium uppercase tracking-wider">Réservations jour</p>
<p class="text-[#0d1b13] dark:text-white tracking-tight text-3xl font-bold leading-tight">24</p>
</div>
</div>
<div class="flex min-w-[140px] flex-1 flex-col gap-2 rounded-xl p-5 border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-900 shadow-sm">
<div class="flex items-center justify-between">
<span class="material-symbols-outlined text-primary">storefront</span>
<span class="text-gray-400 text-xs font-bold bg-gray-100 dark:bg-gray-800 px-2 py-0.5 rounded-full">0%</span>
</div>
<div>
<p class="text-gray-500 dark:text-gray-400 text-xs font-medium uppercase tracking-wider">Établissements</p>
<p class="text-[#0d1b13] dark:text-white tracking-tight text-3xl font-bold leading-tight">3</p>
</div>
</div>
</section>
<!-- SingleButton Component -->
<section class="px-4 py-2">
<button class="flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-xl h-14 px-5 bg-primary text-[#0d1b13] gap-3 font-bold text-base shadow-lg shadow-primary/20 hover:scale-[0.98] transition-transform">
<span class="material-symbols-outlined font-bold">add_circle</span>
<span>Ajouter un restaurant</span>
</button>
</section>
<!-- SectionHeader Component -->
<section class="flex items-center justify-between px-4 pt-6 pb-2">
<h3 class="text-[#0d1b13] dark:text-white text-xl font-bold leading-tight tracking-tight">Prochaines réservations</h3>
<button class="text-primary text-sm font-semibold">Voir tout</button>
</section>
<!-- List of Items -->
<div class="flex flex-col gap-1 px-4">
<!-- ListItem Component 1 -->
<div class="flex items-center gap-4 bg-white dark:bg-gray-900 px-4 min-h-[80px] py-3 justify-between rounded-xl border border-gray-100 dark:border-gray-800 shadow-sm">
<div class="flex items-center gap-3">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-12 w-12 ring-2 ring-primary/10" data-alt="Portrait d'une cliente Jean Dupont" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC479RDpZSpP-yMdvWEKHMHKp_wIdxsfDpqfG8_gP4yr7KKrzhfrOvOws_U6rKJQ1Imzs0JKB08gjR9_pbxV7jLjp1_ajfV83UBr_dQbhxwo6gbwXlWcqj9BbAuGolk3Psz4wUSEYhPkU71KOw84PttAoPFzxtaQFhlNmV5-VKgw3pVTX88Bnc-UJdVQ34v6vBe6c0St18F_IqDFoVoyoipg-OXULXVMgb3v7Y7IJbS6mHHL_P4A0KcmQlt1kuw-hGVOR7rPJ-g9R5V");'></div>
<div class="flex flex-col justify-center">
<p class="text-[#0d1b13] dark:text-white text-base font-bold leading-tight">Alice Bernard</p>
<p class="text-gray-500 dark:text-gray-400 text-sm font-medium">19:30 • 2 pers.</p>
</div>
</div>
<div class="flex flex-col items-end gap-1">
<span class="text-[10px] font-bold uppercase tracking-wider text-[#078829] bg-[#078829]/10 px-2 py-0.5 rounded-full">Confirmé</span>
<span class="material-symbols-outlined text-gray-300 dark:text-gray-600 text-lg">chevron_right</span>
</div>
</div>
<!-- ListItem Component 2 -->
<div class="flex items-center gap-4 bg-white dark:bg-gray-900 px-4 min-h-[80px] py-3 justify-between rounded-xl border border-gray-100 dark:border-gray-800 shadow-sm">
<div class="flex items-center gap-3">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-12 w-12 ring-2 ring-primary/10" data-alt="Portrait d'un client Marc Durand" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBdbBM1-Xe6EhUsPnHDoEmNubD7ZDygHWvS4nrWtUORtXe0t0x1si4cVWTlKE1kGNFZz1bIFhhx9wJVPTjkt5zMesGchTScXX3aOVHO6-HHwKhHCdoKdzxY8c_SHdW7oa0Eb3KAyPL_yjqitLmwyyOflJXeGREzRjwYTK9ajbHowOH6vhoLBHsZtPo47XpnkmSjT6kIJXLpl4zKKxljTlR5I4DQFsVUWRPpfdq8_8UPdFLSPhp14R5VxvCeexLdBG8Uu14SH1HBMKs0");'></div>
<div class="flex flex-col justify-center">
<p class="text-[#0d1b13] dark:text-white text-base font-bold leading-tight">Marc Durand</p>
<p class="text-gray-500 dark:text-gray-400 text-sm font-medium">20:00 • 4 pers.</p>
</div>
</div>
<div class="flex flex-col items-end gap-1">
<span class="text-[10px] font-bold uppercase tracking-wider text-orange-600 bg-orange-100 px-2 py-0.5 rounded-full">En attente</span>
<span class="material-symbols-outlined text-gray-300 dark:text-gray-600 text-lg">chevron_right</span>
</div>
</div>
<!-- ListItem Component 3 -->
<div class="flex items-center gap-4 bg-white dark:bg-gray-900 px-4 min-h-[80px] py-3 justify-between rounded-xl border border-gray-100 dark:border-gray-800 shadow-sm">
<div class="flex items-center gap-3">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full h-12 w-12 ring-2 ring-primary/10" data-alt="Portrait d'une cliente Sophie Petit" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDDjWRJM9_LtqoWNOfO_8J6WfT8yfPBYn2-C2z7Glxq6WZN5bXPazTLHo6vzFKpSlyAELNTwcMY3CLOKn_6MX1Y-wcVKyVObfXudueZbhw-0OYpbJKlLpPA3G_WMK0-U-CDarpZeVNuID-wrpnp1QS-kMEKPAUiEW8sbZBCp7rafCq9m0_Lj6YhO_ETbfx2vkFdZiBi3f5lTTQ_SutOGBLzdx3hW5H91JcmMRg6TmzySJ2JCNA5BxLd52SqSXPGeC2pnrWUvrupdAXt");'></div>
<div class="flex flex-col justify-center">
<p class="text-[#0d1b13] dark:text-white text-base font-bold leading-tight">Sophie Petit</p>
<p class="text-gray-500 dark:text-gray-400 text-sm font-medium">21:15 • 6 pers.</p>
</div>
</div>
<div class="flex flex-col items-end gap-1">
<span class="text-[10px] font-bold uppercase tracking-wider text-[#078829] bg-[#078829]/10 px-2 py-0.5 rounded-full">Confirmé</span>
<span class="material-symbols-outlined text-gray-300 dark:text-gray-600 text-lg">chevron_right</span>
</div>
</div>
</div>
<!-- More Stats Section -->
<section class="p-4 mt-4">
<div class="bg-background-dark text-white p-6 rounded-2xl overflow-hidden relative">
<div class="relative z-10">
<p class="text-primary text-sm font-bold mb-1">Performance mensuelle</p>
<h4 class="text-2xl font-bold mb-4">842 Réservations</h4>
<div class="flex items-end gap-1 h-20">
<div class="bg-primary/20 w-full h-[40%] rounded-t-sm"></div>
<div class="bg-primary/40 w-full h-[60%] rounded-t-sm"></div>
<div class="bg-primary/60 w-full h-[50%] rounded-t-sm"></div>
<div class="bg-primary/80 w-full h-[80%] rounded-t-sm"></div>
<div class="bg-primary w-full h-[100%] rounded-t-sm"></div>
<div class="bg-primary/70 w-full h-[75%] rounded-t-sm"></div>
<div class="bg-primary/50 w-full h-[65%] rounded-t-sm"></div>
</div>
</div>
<div class="absolute -right-10 -bottom-10 size-40 bg-primary/10 rounded-full blur-3xl"></div>
</div>
</section>
</main>
<!-- Navigation Bar (iOS Tab Bar Style) -->
<nav class="fixed bottom-0 left-1/2 -translate-x-1/2 w-full max-w-[430px] h-20 bg-white/90 dark:bg-gray-900/90 backdrop-blur-lg border-t border-gray-200 dark:border-gray-800 flex items-center justify-around px-6 pb-4 z-20">
<button class="flex flex-col items-center gap-1 text-primary">
<span class="material-symbols-outlined fill-1">dashboard</span>
<span class="text-[10px] font-bold">Dashboard</span>
</button>
<button class="flex flex-col items-center gap-1 text-gray-400 dark:text-gray-600">
<span class="material-symbols-outlined">restaurant</span>
<span class="text-[10px] font-bold">Restaurants</span>
</button>
<button class="flex flex-col items-center gap-1 text-gray-400 dark:text-gray-600">
<span class="material-symbols-outlined">event_note</span>
<span class="text-[10px] font-bold">Planning</span>
</button>
<button class="flex flex-col items-center gap-1 text-gray-400 dark:text-gray-600">
<span class="material-symbols-outlined">person</span>
<span class="text-[10px] font-bold">Profil</span>
</button>
</nav>
<!-- Home Indicator (iOS style) -->
<div class="fixed bottom-1 left-1/2 -translate-x-1/2 w-32 h-1 bg-gray-300 dark:bg-gray-700 rounded-full z-30"></div>
</div>
</body></html>