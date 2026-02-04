<!DOCTYPE html>

<html class="light" lang="fr"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Profil Utilisateur - Youco'Done</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
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
        .ios-shadow {
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }
        /* Hide scrollbar for Chrome, Safari and Opera */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        /* Hide scrollbar for IE, Edge and Firefox */
        .no-scrollbar {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-background-light dark:bg-background-dark text-[#0d1b13] dark:text-gray-100 min-h-screen">
<!-- Top Navigation Bar -->
<nav class="sticky top-0 z-50 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md border-b border-gray-200 dark:border-gray-800">
<div class="flex items-center p-4 justify-between max-w-md mx-auto">
<div class="text-[#0d1b13] dark:text-gray-100 flex size-10 shrink-0 items-center justify-start">
<span class="material-symbols-outlined cursor-pointer">arrow_back_ios</span>
</div>
<h2 class="text-lg font-bold leading-tight tracking-tight flex-1 text-center">Profil Utilisateur</h2>
<div class="size-10 flex items-center justify-end">
<span class="material-symbols-outlined text-primary cursor-pointer">settings</span>
</div>
</div>
</nav>
<main class="max-w-md mx-auto pb-24">
<!-- Profile Header -->
<section class="flex p-6 @container">
<div class="flex w-full flex-col gap-4 items-center">
<div class="flex gap-4 flex-col items-center">
<div class="relative">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full min-h-32 w-32 border-4 border-white dark:border-gray-800 shadow-sm" data-alt="User profile portrait showing a smiling client" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDYIdZZNqwOBexWYg6WeUZpCjgJ-ld1xrA4eUHjESfyUTjLY6Jp1Qy-LB_DXolaaB7ZaBX0C1lMw-sPCt6gms3BMZODGrvKulCb42kvvgFGdQpDHq8xl4fuMMBHEI3VDHuV3F7bOzxVxaRxjfMfHydfUMOYSVjITOI9dxJT14x-qP2hpxOEo0N3oFRpQ16uwzr0kAT4fmNBjdbpb5mC2gLsY_UPdH8hyKSYgQ3hB2mXMTYPTC6Bl0FPP_rHGT_-B8nyNN2SO0GGPAe4");'>
</div>
<button class="absolute bottom-0 right-0 bg-primary text-background-dark p-2 rounded-full shadow-lg border-2 border-white dark:border-gray-800 flex items-center justify-center">
<span class="material-symbols-outlined text-sm">photo_camera</span>
</button>
</div>
<div class="flex flex-col items-center justify-center">
<p class="text-[24px] font-bold leading-tight tracking-tight text-center">Jean Dupont</p>
<div class="flex items-center gap-1 mt-1">
<span class="material-symbols-outlined text-primary text-sm font-bold">verified</span>
<p class="text-[#4c9a6c] dark:text-primary/80 text-sm font-medium leading-normal text-center">Client Gourmet • Membre Or</p>
</div>
</div>
</div>
</div>
</section>
<!-- Stats Overview (Custom Component) -->
<div class="px-6 mb-6">
<div class="flex justify-between bg-white dark:bg-gray-900 rounded-xl p-4 ios-shadow">
<div class="text-center flex-1">
<p class="text-xl font-bold">12</p>
<p class="text-xs text-gray-500 uppercase tracking-wider">Résas</p>
</div>
<div class="w-px bg-gray-100 dark:bg-gray-800"></div>
<div class="text-center flex-1">
<p class="text-xl font-bold">4.8</p>
<p class="text-xs text-gray-500 uppercase tracking-wider">Note</p>
</div>
<div class="w-px bg-gray-100 dark:bg-gray-800"></div>
<div class="text-center flex-1">
<p class="text-xl font-bold">8</p>
<p class="text-xs text-gray-500 uppercase tracking-wider">Favoris</p>
</div>
</div>
</div>
<!-- Section: Mes Informations -->
<section class="mt-4">
<h3 class="text-lg font-bold leading-tight tracking-tight px-6 pb-2 text-gray-500 uppercase text-xs">Mes Informations</h3>
<div class="bg-white dark:bg-gray-900 rounded-xl mx-4 overflow-hidden ios-shadow">
<!-- List Item: Nom -->
<div class="flex items-center gap-4 px-4 min-h-[72px] py-2 justify-between border-b border-gray-50 dark:border-gray-800 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors cursor-pointer">
<div class="flex items-center gap-4">
<div class="text-primary flex items-center justify-center rounded-lg bg-primary/10 shrink-0 size-10">
<span class="material-symbols-outlined">person</span>
</div>
<div class="flex flex-col justify-center">
<p class="text-sm font-medium text-gray-400 leading-normal">Nom</p>
<p class="text-base font-semibold leading-normal">Jean Dupont</p>
</div>
</div>
<div class="shrink-0">
<span class="material-symbols-outlined text-gray-300">chevron_right</span>
</div>
</div>
<!-- List Item: Email -->
<div class="flex items-center gap-4 px-4 min-h-[72px] py-2 justify-between hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors cursor-pointer">
<div class="flex items-center gap-4">
<div class="text-primary flex items-center justify-center rounded-lg bg-primary/10 shrink-0 size-10">
<span class="material-symbols-outlined">mail</span>
</div>
<div class="flex flex-col justify-center">
<p class="text-sm font-medium text-gray-400 leading-normal">Email</p>
<p class="text-base font-semibold leading-normal">jean.dupont@email.com</p>
</div>
</div>
<div class="shrink-0">
<span class="material-symbols-outlined text-gray-300">chevron_right</span>
</div>
</div>
</div>
</section>
<!-- Section: Mes Favoris (Horizontal Carousel) -->
<section class="mt-8">
<div class="flex items-center justify-between px-6 mb-3">
<h3 class="text-lg font-bold leading-tight tracking-tight text-gray-500 uppercase text-xs">Mes Favoris</h3>
<span class="text-primary text-sm font-semibold">Voir tout</span>
</div>
<div class="flex overflow-x-auto gap-4 px-6 no-scrollbar">
<!-- Favorite Card 1 -->
<div class="min-w-[160px] bg-white dark:bg-gray-900 rounded-xl overflow-hidden ios-shadow">
<div class="h-24 bg-cover bg-center" data-alt="Modern restaurant interior with warm lighting" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBXuDXxKRk5KSnVs73_DcLG_t0R2sl3kobCwX68vVUInnxb00E2lSwV0vZchlWaKulq8d5hZh_RgSmQDatDejFVamRJPSzifknVoeE5QI7XsuD3RY8x0aDORTLHMp2RCZWueJAQx_I38h5H6wmHKHYgDZXX-Ul0igIgESQpK-h0S6TqolYWcrxL5BiJo55VW6qNwcgPTju5vWLK5Y-gsRMng3aUMkWRAeVx5TwC4csLUWKUNQ_DMojXlY3_08YjWcj4w0ecKCy5ZaFF');">
</div>
<div class="p-3">
<p class="font-bold text-sm truncate">L'Atelier d'Ezio</p>
<p class="text-xs text-gray-500 mt-1">Italien • Paris</p>
</div>
</div>
<!-- Favorite Card 2 -->
<div class="min-w-[160px] bg-white dark:bg-gray-900 rounded-xl overflow-hidden ios-shadow">
<div class="h-24 bg-cover bg-center" data-alt="Cozy bistro table setting" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCobvBd1JMeL7qPzVpBiKrUoYmuMN2hSTwUtRPzzd-7zrSY099ygeeqkgcuozXGeRG0aNK9kLs6jUaZdPQ_KE3NvWlvakIRFF_Q-8vJmyU24tWSzONE2fUy9qYcuNW4IBKvHyLmfQ0xdOI9SItuMxzJOoFcOd_8EtUx2rdrRncrY3-mS-mlhmOe8Bov1w_dWUQXDhaaDVo2EzoKuwdJJyccbFIixdyn56a4RaRP94tmigtbKlcyeKB-jmXHjmK1TvqaI_kdYnFatB7Z');">
</div>
<div class="p-3">
<p class="font-bold text-sm truncate">Bistrot Gourmand</p>
<p class="text-xs text-gray-500 mt-1">Français • Lyon</p>
</div>
</div>
<!-- Favorite Card 3 -->
<div class="min-w-[160px] bg-white dark:bg-gray-900 rounded-xl overflow-hidden ios-shadow">
<div class="h-24 bg-cover bg-center" data-alt="Japanese sushi bar counter" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD_O4s5LYRI7wghW3AB9NqZrBrFFNewpzEQ6jAK6kiUw1mvGpSPjknQHOIaCoCzAzeFIwLnkGDnavhuzWdwp7sAYktABE5eEpiy613hevqJRi_xkLaUH9cbtxT69HUt6JqU3r0piINlGQO8o6fdCetl-fjIgiwg3BmMRX3ypmVhyX-kaIUfAmf0FgtNipt-ufanc0rxnj3fXI63HoPlVbhQK9TOPgNyiyejWpzpoGksvvzH3txZIr5V9bfGuqL8nvVmY7DnoEPfqJBM');">
</div>
<div class="p-3">
<p class="font-bold text-sm truncate">Sakura Sushi</p>
<p class="text-xs text-gray-500 mt-1">Japonais • Nice</p>
</div>
</div>
</div>
</section>
<!-- Section: Paramètres -->
<section class="mt-8">
<h3 class="text-lg font-bold leading-tight tracking-tight px-6 pb-2 text-gray-500 uppercase text-xs">Paramètres Généraux</h3>
<div class="bg-white dark:bg-gray-900 rounded-xl mx-4 overflow-hidden ios-shadow">
<!-- Notifications Toggle -->
<div class="flex items-center gap-4 px-4 min-h-[64px] py-2 justify-between border-b border-gray-50 dark:border-gray-800">
<div class="flex items-center gap-4">
<div class="text-gray-400 flex items-center justify-center rounded-lg bg-gray-100 dark:bg-gray-800 shrink-0 size-10">
<span class="material-symbols-outlined">notifications</span>
</div>
<p class="text-base font-medium">Notifications Push</p>
</div>
<div class="shrink-0">
<div class="w-12 h-6 bg-primary rounded-full relative">
<div class="absolute right-0.5 top-0.5 bg-white size-5 rounded-full shadow-sm"></div>
</div>
</div>
</div>
<!-- Payment Settings -->
<div class="flex items-center gap-4 px-4 min-h-[64px] py-2 justify-between border-b border-gray-50 dark:border-gray-800 hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
<div class="flex items-center gap-4">
<div class="text-gray-400 flex items-center justify-center rounded-lg bg-gray-100 dark:bg-gray-800 shrink-0 size-10">
<span class="material-symbols-outlined">credit_card</span>
</div>
<p class="text-base font-medium">Modes de paiement</p>
</div>
<div class="shrink-0 flex items-center gap-2">
<p class="text-sm text-gray-400">Visa **** 4242</p>
<span class="material-symbols-outlined text-gray-300">chevron_right</span>
</div>
</div>
<!-- Security -->
<div class="flex items-center gap-4 px-4 min-h-[64px] py-2 justify-between border-b border-gray-50 dark:border-gray-800 hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
<div class="flex items-center gap-4">
<div class="text-gray-400 flex items-center justify-center rounded-lg bg-gray-100 dark:bg-gray-800 shrink-0 size-10">
<span class="material-symbols-outlined">shield</span>
</div>
<p class="text-base font-medium">Sécurité &amp; Confidentialité</p>
</div>
<div class="shrink-0">
<span class="material-symbols-outlined text-gray-300">chevron_right</span>
</div>
</div>
<!-- Help -->
<div class="flex items-center gap-4 px-4 min-h-[64px] py-2 justify-between hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
<div class="flex items-center gap-4">
<div class="text-gray-400 flex items-center justify-center rounded-lg bg-gray-100 dark:bg-gray-800 shrink-0 size-10">
<span class="material-symbols-outlined">help</span>
</div>
<p class="text-base font-medium">Aide &amp; Contact</p>
</div>
<div class="shrink-0">
<span class="material-symbols-outlined text-gray-300">chevron_right</span>
</div>
</div>
</div>
</section>
<!-- Logout Button -->
<div class="px-4 mt-8">
<button class="w-full flex items-center justify-center gap-2 py-4 bg-white dark:bg-gray-900 text-red-500 font-bold rounded-xl ios-shadow hover:bg-red-50 dark:hover:bg-red-900/10 transition-colors">
<span class="material-symbols-outlined">logout</span>
                Déconnexion
            </button>
</div>
<p class="text-center text-gray-400 text-xs mt-8 pb-4">Version 2.4.1 (Build 108)</p>
</main>
<!-- Bottom Save Action (Floating or Static) -->
<div class="fixed bottom-0 left-0 right-0 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md p-4 border-t border-gray-200 dark:border-gray-800 flex justify-center max-w-md mx-auto z-50">
<button class="w-full max-w-sm bg-primary text-background-dark font-bold py-4 rounded-xl shadow-lg active:scale-[0.98] transition-transform">
            Sauvegarder les modifications
        </button>
</div>

```</body></html>