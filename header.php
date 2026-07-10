<?php
// Set page-specific variables before including to allow dynamic title/metadata
$page_title = $page_title ?? "Tranquil Minds Mental Health - Mental Wellness Clinic";
$page_description = $page_description ?? "Tranquil Minds Mental Health: A sanctuary for mental wellness offering Neurostar TMS, medication management, and personalized care.";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description"
        content="<?php echo $page_description; ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="importmap">
        {
            "imports": {
                "three": "https://unpkg.com/three@0.160.0/build/three.module.js"
            }
        }
    </script>
    <!-- Inline purple theme Three.js background animation -->
    <script type="module">
        import * as THREE from "three";

        // --- Configuration ---
        const CONFIG = {
            colors: {
                primary: new THREE.Color("#502882"),
                secondary: new THREE.Color("#6A3FA3"),
                accent: new THREE.Color("#8C78BE"),
                highlight: new THREE.Color("#FAFAFF"),
            },
            speed: 0.15,
            mouseInfluence: 0.8,
        };

        const vertexShader = `
            varying vec2 vUv;
            void main() {
                vUv = uv;
                gl_Position = projectionMatrix * modelViewMatrix * vec4(position, 1.0);
            }
        `;

        const fragmentShader = `
            uniform float uTime;
            uniform vec2 uResolution;
            uniform vec2 uMouse;
            
            uniform vec3 uColorPrimary;
            uniform vec3 uColorSecondary;
            uniform vec3 uColorAccent;
            uniform vec3 uColorHighlight;

            varying vec2 vUv;

            // --- Noise Functions ---
            vec3 mod289(vec3 x) { return x - floor(x * (1.0 / 289.0)) * 289.0; }
            vec4 mod289(vec4 x) { return x - floor(x * (1.0 / 289.0)) * 289.0; }
            vec4 permute(vec4 x) { return mod289(((x*34.0)+1.0)*x); }
            vec4 taylorInvSqrt(vec4 r) { return 1.79284291400159 - 0.85373472095314 * r; }

            float snoise(vec3 v) {
                const vec2 C = vec2(1.0/6.0, 1.0/3.0);
                const vec4 D = vec4(0.0, 0.5, 1.0, 2.0);
                vec3 i  = floor(v + dot(v, C.yyy));
                vec3 x0 = v - i + dot(i, C.xxx);
                vec3 g = step(x0.yzx, x0.xyz);
                vec3 l = 1.0 - g;
                vec3 i1 = min( g.xyz, l.zxy );
                vec3 i2 = max( g.xyz, l.zxy );
                vec3 x1 = x0 - i1 + C.xxx;
                vec3 x2 = x0 - i2 + C.yyy; 
                vec3 x3 = x0 - D.yyy;      
                i = mod289(i); 
                vec4 p = permute( permute( permute( 
                            i.z + vec4(0.0, i1.z, i2.z, 1.0 ))
                        + i.y + vec4(0.0, i1.y, i2.y, 1.0 )) 
                        + i.x + vec4(0.0, i1.x, i2.x, 1.0 ));
                float n_ = 1.0/7.0; 
                vec3  ns = n_ * D.wyz - D.xzx;
                vec4 j = p - 49.0 * floor(p * ns.z * ns.z); 
                vec4 x_ = floor(j * ns.z);
                vec4 y_ = floor(j - 7.0 * x_ ); 
                vec4 x = x_ *ns.x + ns.yyyy;
                vec4 y = y_ *ns.x + ns.yyyy;
                vec4 h = 1.0 - abs(x) - abs(y);
                vec4 b0 = vec4( x.xy, y.xy );
                vec4 b1 = vec4( x.zw, y.zw );
                vec4 s0 = floor(b0)*2.0 + 1.0;
                vec4 s1 = floor(b1)*2.0 + 1.0;
                vec4 sh = -step(h, vec4(0.0));
                vec4 a0 = b0.xzyw + s0.xzyw*sh.xxyy ;
                vec4 a1 = b1.xzyw + s1.xzyw*sh.zzww ;
                vec3 p0 = vec3(a0.xy,h.x);
                vec3 p1 = vec3(a0.zw,h.y);
                vec3 p2 = vec3(a1.xy,h.z);
                vec3 p3 = vec3(a1.zw,h.w);
                vec4 norm = taylorInvSqrt(vec4(dot(p0,p0), dot(p1,p1), dot(p2, p2), dot(p3,p3)));
                p0 *= norm.x;
                p1 *= norm.y;
                p2 *= norm.z;
                p3 *= norm.w;
                vec4 m = max(0.6 - vec4(dot(x0,x0), dot(x1,x1), dot(x2,x2), dot(x3,x3)), 0.0);
                m = m * m;
                return 42.0 * dot( m*m, vec4( dot(p0,x0), dot(p1,x1), 
                                            dot(p2,x2), dot(p3,x3) ) );
            }
            
            float random(vec2 st) {
                return fract(sin(dot(st.xy, vec2(12.9898,78.233))) * 43758.5453123);
            }

            void main() {
                vec2 uv = vUv;
                float aspect = uResolution.x / uResolution.y;
                uv.x *= aspect;
                
                vec2 mouse = uMouse;
                mouse.x *= aspect;
                mouse.y = 1.0 - mouse.y;
                
                float t = uTime * 0.12;
                
                // Mouse Interaction
                float d = distance(uv, mouse);
                float interaction = smoothstep(0.45, 0.0, d);
                
                // Combine distortions
                float distAmt = interaction * 0.5;

                // --- DOMAIN WARPING ---
                vec2 q = vec2(0.);
                q.x = snoise(vec3(uv, t));
                q.y = snoise(vec3(uv + vec2(1.0), t));

                vec2 r = vec2(0.);
                r.x = snoise(vec3(uv + 1.0 * q + vec2(1.7, 9.2) + 0.15*t + distAmt, t));
                r.y = snoise(vec3(uv + 1.0 * q + vec2(8.3, 2.8) + 0.126*t, t));

                float f = snoise(vec3(uv + r, t));

                // --- COLOR MIXING ---
                
                vec3 finalColor = uColorPrimary;
                
                float secondaryMix = smoothstep(0.2, 1.0, f); 
                finalColor = mix(finalColor, uColorSecondary, secondaryMix * 0.7);

                // Accent Veins
                float accentNoise = snoise(vec3(uv * 2.0 + r, t * 1.5));
                float accentMask = smoothstep(0.6, 0.65, accentNoise) * 0.2; 
                
                // React to Mouse
                accentMask += interaction * 0.4 * smoothstep(0.2, 0.7, accentNoise);
                
                finalColor = mix(finalColor, uColorAccent, clamp(accentMask, 0.0, 1.0));

                // Highlights
                float highlightMask = smoothstep(0.7, 0.95, f);
                
                finalColor = mix(finalColor, uColorHighlight, highlightMask * 0.3);

                // --- TEXTURE ---
                float grain = random(uv * uTime) * 0.13;
                finalColor += grain - 0.065;

                // Soft Vignette
                float vignette = length(vUv - 0.5);
                vec3 darkEdge = uColorPrimary * 0.4;
                finalColor = mix(finalColor, darkEdge, vignette * 0.4);

                gl_FragColor = vec4(finalColor, 1.0);
            }
        `;

        function init() {
            const container = document.getElementById("hero-canvas");
            if (!container) return;

            const scene = new THREE.Scene();
            const camera = new THREE.OrthographicCamera(-1, 1, 1, -1, 0, 1);
            const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: false });

            const updateSize = () => {
                const width = container.clientWidth;
                const height = container.clientHeight;
                renderer.setSize(width, height);
                uniforms.uResolution.value.set(width, height);
            };

            renderer.setPixelRatio(1);
            container.appendChild(renderer.domElement);

            const geometry = new THREE.PlaneGeometry(2, 2);
            const mousePos = new THREE.Vector2(0.5, 0.5);

            const uniforms = {
                uTime: { value: 0 },
                uResolution: { value: new THREE.Vector2(1, 1) },
                uMouse: { value: mousePos },
                uColorPrimary: { value: CONFIG.colors.primary },
                uColorSecondary: { value: CONFIG.colors.secondary },
                uColorAccent: { value: CONFIG.colors.accent },
                uColorHighlight: { value: CONFIG.colors.highlight },
            };

            const material = new THREE.ShaderMaterial({
                vertexShader,
                fragmentShader,
                uniforms,
            });
            const mesh = new THREE.Mesh(geometry, material);
            scene.add(mesh);

            const updateMouse = (x, y) => {
                const rect = container.getBoundingClientRect();
                const cx = x - rect.left;
                const cy = y - rect.top;
                mousePos.x = cx / rect.width;
                mousePos.y = cy / rect.height;
            };

            document.addEventListener("mousemove", (e) => updateMouse(e.clientX, e.clientY));
            document.addEventListener("touchmove", (e) => {
                if (e.touches.length) updateMouse(e.touches[0].clientX, e.touches[0].clientY);
            }, { passive: true });

            window.addEventListener("resize", updateSize);
            updateSize();

            let isVisible = true;
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    isVisible = entry.isIntersecting;
                });
            }, { threshold: 0 });
            observer.observe(container);

            const clock = new THREE.Clock();
            function animate() {
                requestAnimationFrame(animate);
                if (isVisible) {
                    uniforms.uTime.value = clock.getElapsedTime() * CONFIG.speed;
                    renderer.render(scene, camera);
                }
            }
            animate();
        }

        init();
    </script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#502882',
                        accent: '#8C78BE',
                        'accent-light': '#AFA0D2',
                        'soft-green': '#F3EFFF',
                        'cream': '#FAFAFF',
                    },
                    fontFamily: {
                        sans: ['Quicksand', 'sans-serif'],
                        heading: ['Bauhaus Soft', 'cursive'],
                    }
                }
            }
        }
    </script>
    <style>
        /* Maintain custom animations */
        /* Custom Animations & Utilities */
        .fade-in-section {
            opacity: 0;
            transform: translateY(20px);
            transition: 0.8s all ease;
        }

        .fade-in-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Navbar Glass Transition */
        .nav-scrolled {
            background-color: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
        }

        .nav-transparent {
            background-color: transparent;
            backdrop-filter: none;
            box-shadow: none;
            padding-top: 2rem !important;
            padding-bottom: 2rem !important;
        }

        /* Magnificent Text Mask (Inverse Filter Effect) */
        .text-magnificent {
            color: transparent;
            -webkit-text-stroke: 1px rgba(255, 255, 255, 0.8);
            position: relative;
        }

        .text-magnificent::before {
            content: attr(data-text);
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            color: white;
            opacity: 0.9;
            mix-blend-mode: overlay;
        }

        /* Stacked Gradient Blur (Adapted for Navbar) */
        .nav-blur-stack {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .nav-blur-stack>div,
        .nav-blur-stack::before,
        .nav-blur-stack::after {
            position: absolute;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.05);
        }

        .nav-blur-stack::after {
            content: "";
            z-index: 8;
            backdrop-filter: blur(64px);
            -webkit-backdrop-filter: blur(64px);
            mask: linear-gradient(to top, rgba(0, 0, 0, 0) 87.5%, rgba(0, 0, 0, 1) 100%);
            -webkit-mask: linear-gradient(to top, rgba(0, 0, 0, 0) 87.5%, rgba(0, 0, 0, 1) 100%);
        }

        .nav-blur-stack>div:nth-of-type(6) {
            z-index: 7;
            backdrop-filter: blur(32px);
            -webkit-backdrop-filter: blur(32px);
            mask: linear-gradient(to top, rgba(0, 0, 0, 0) 75%, rgba(0, 0, 0, 1) 87.5%, rgba(0, 0, 0, 1) 100%);
            -webkit-mask: linear-gradient(to top, rgba(0, 0, 0, 0) 75%, rgba(0, 0, 0, 1) 87.5%, rgba(0, 0, 0, 1) 100%);
        }

        .nav-blur-stack>div:nth-of-type(5) {
            z-index: 6;
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            mask: linear-gradient(to top, rgba(0, 0, 0, 0) 62.5%, rgba(0, 0, 0, 1) 75%, rgba(0, 0, 0, 1) 87.5%, rgba(0, 0, 0, 0) 100%);
            -webkit-mask: linear-gradient(to top, rgba(0, 0, 0, 0) 62.5%, rgba(0, 0, 0, 1) 75%, rgba(0, 0, 0, 1) 87.5%, rgba(0, 0, 0, 0) 100%);
        }

        .nav-blur-stack>div:nth-of-type(4) {
            z-index: 5;
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            mask: linear-gradient(to top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 1) 62.5%, rgba(0, 0, 0, 1) 75%, rgba(0, 0, 0, 0) 87.5%);
            -webkit-mask: linear-gradient(to top, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 1) 62.5%, rgba(0, 0, 0, 1) 75%, rgba(0, 0, 0, 0) 87.5%);
        }

        .nav-blur-stack>div:nth-of-type(3) {
            z-index: 4;
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            mask: linear-gradient(to top, rgba(0, 0, 0, 0) 37.5%, rgba(0, 0, 0, 1) 50%, rgba(0, 0, 0, 1) 62.5%, rgba(0, 0, 0, 0) 75%);
            -webkit-mask: linear-gradient(to top, rgba(0, 0, 0, 0) 37.5%, rgba(0, 0, 0, 1) 50%, rgba(0, 0, 0, 1) 62.5%, rgba(0, 0, 0, 0) 75%);
        }

        .nav-blur-stack>div:nth-of-type(2) {
            z-index: 3;
            backdrop-filter: blur(2px);
            -webkit-backdrop-filter: blur(2px);
            mask: linear-gradient(to top, rgba(0, 0, 0, 0) 25%, rgba(0, 0, 0, 1) 37.5%, rgba(0, 0, 0, 1) 50%, rgba(0, 0, 0, 0) 62.5%);
            -webkit-mask: linear-gradient(to top, rgba(0, 0, 0, 0) 25%, rgba(0, 0, 0, 1) 37.5%, rgba(0, 0, 0, 1) 50%, rgba(0, 0, 0, 0) 62.5%);
        }

        .nav-blur-stack>div:nth-of-type(1) {
            z-index: 2;
            backdrop-filter: blur(1px);
            -webkit-backdrop-filter: blur(1px);
            mask: linear-gradient(to top, rgba(0, 0, 0, 0) 12.5%, rgba(0, 0, 0, 1) 25%, rgba(0, 0, 0, 1) 37.5%, rgba(0, 0, 0, 0) 50%);
            -webkit-mask: linear-gradient(to top, rgba(0, 0, 0, 0) 12.5%, rgba(0, 0, 0, 1) 25%, rgba(0, 0, 0, 1) 37.5%, rgba(0, 0, 0, 0) 50%);
        }

        .nav-blur-stack::before {
            content: "";
            z-index: 1;
            backdrop-filter: blur(0.5px);
            -webkit-backdrop-filter: blur(0.5px);
            mask: linear-gradient(to top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 1) 12.5%, rgba(0, 0, 0, 1) 25%, rgba(0, 0, 0, 0) 37.5%);
            -webkit-mask: linear-gradient(to top, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 1) 12.5%, rgba(0, 0, 0, 1) 25%, rgba(0, 0, 0, 0) 37.5%);
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Purple theme CSS variables override */
        :root {
            --color-primary: #502882;
            --color-primary-light: #6A3FA3;
            --color-accent: #8C78BE;
            --color-accent-hover: #AFA0D2;
            --color-bg-light: #FAFAFF;
            --color-bg-subtle: #F3EFFF;
            --color-text-main: #2A1A3F;
            --color-text-muted: #6A5C7E;
        }
    </style>
    <script src="script.js" defer></script>
</head>

<body>
    <!-- Navbar (Split Pill Design with Mega Menu) -->
    <nav id="main-nav"
        class="fixed w-full top-0 px-6 md:px-10 lg:px-16 py-6 flex justify-between items-start z-50 transition-all duration-500 bg-transparent group/nav">

        <!-- Navbar Background Layer (Stacked Gradient Blur) -->
        <div id="nav-bg"
            class="absolute inset-0 w-full h-full -z-10 transition-opacity duration-500 opacity-0 pointer-events-none">
            <div class="nav-blur-stack">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>

        <!-- Pill 1: Logo -->
        <div class="bg-white/90 backdrop-blur-md shadow-lg rounded-full pl-2 pr-5 py-2 flex items-center gap-3 cursor-pointer transition-transform hover:scale-105 relative z-50"
            onclick="window.scrollTo(0,0)">
            <img src="assets/logo/Tranquil-logo.png"
                alt="Tranquil Minds Mental Health Logo" class="h-10">
            <span class="font-bold text-primary text-lg tracking-wide hidden sm:block" style="font-family: 'Bauhaus Soft', sans-serif;">Tranquil Minds</span>
        </div>

        <!-- Pill 2: Mega Menu & Actions -->
        <div class="bg-white/90 backdrop-blur-md shadow-lg rounded-full px-2 py-2 flex items-center relative z-50">

            <!-- Desktop Mega Menu -->
            <ul id="nav-menu"
                class="hidden lg:flex items-center gap-2 font-medium text-sm tracking-wide text-primary px-4">

                <!-- Home -->
                <li><a href="#"
                        class="px-4 py-2 rounded-full hover:bg-primary/5 hover:text-accent transition-all duration-300">Home</a>
                </li>

                <!-- About -->
                <li class="group relative">
                    <button
                        class="px-4 py-2 rounded-full hover:bg-primary/5 hover:text-accent transition-all duration-300 flex items-center gap-1 group-hover:bg-primary/5 group-hover:text-accent relative z-50">
                        About <svg class="w-3 h-3 transition-transform group-hover:rotate-180 opacity-50" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>

                    <!-- Dropdown (Right Aligned to Pill) -->
                    <div
                        class="absolute right-0 top-full mt-6 w-64 bg-white/90 backdrop-blur-[40px] rounded-3xl shadow-[0_50px_100px_-20px_rgba(42,54,30,0.15)] border border-white/40 p-2 opacity-0 invisible translate-y-4 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-300 ease-out origin-top-right z-40 overflow-hidden">
                        <div class="absolute -top-10 left-0 w-full h-10 bg-transparent"></div>

                        <div class="grid grid-cols-1">
                            <a href="#welcome"
                                class="flex items-center gap-4 p-4 rounded-2xl hover:bg-white/60 transition-colors group/item">
                                <div
                                    class="w-10 h-10 rounded-full bg-primary/5 flex items-center justify-center text-primary group-hover/item:bg-accent group-hover/item:text-white transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <span class="block text-base font-bold text-primary">Our Mission</span>
                                    <span class="text-xs text-gray-400">Restoring balance & wellness</span>
                                </div>
                            </a>
                            <a href="#"
                                class="flex items-center gap-4 p-4 rounded-2xl hover:bg-white/60 transition-colors group/item">
                                <div
                                    class="w-10 h-10 rounded-full bg-primary/5 flex items-center justify-center text-primary group-hover/item:bg-accent group-hover/item:text-white transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <span class="block text-base font-bold text-primary">Our Team</span>
                                    <span class="text-xs text-gray-400">Meet the experts</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>

                <!-- Services (Epic) -->
                <li class="group relative">
                    <button
                        class="px-4 py-2 rounded-full hover:bg-primary/5 hover:text-accent transition-all duration-300 flex items-center gap-1 group-hover:bg-primary/5 group-hover:text-accent relative z-50">
                        Services <svg class="w-3 h-3 transition-transform group-hover:rotate-180 opacity-50" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <!-- Mega Menu (Right Aligned) -->
                    <div
                        class="absolute right-0 top-full mt-6 w-[90vw] max-w-4xl bg-white/95 backdrop-blur-[50px] rounded-[3rem] shadow-[0_50px_100px_-20px_rgba(42,54,30,0.15)] border border-white/40 p-3 opacity-0 invisible translate-y-6 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-500 ease-out origin-top-right z-40 overflow-hidden">
                        <div class="absolute -top-10 left-0 w-full h-10 bg-transparent"></div>

                        <div class="flex flex-col md:flex-row h-[400px]">
                            <!-- Left: Navigation List -->
                            <div class="w-full md:w-1/3 p-6 flex flex-col gap-2">
                                <h4 class="px-4 text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Clinical
                                    Services</h4>

                                <a href="#"
                                    class="group/item flex items-center justify-between p-4 rounded-3xl bg-primary/5 hover:bg-primary text-primary hover:text-white transition-all duration-300">
                                    <span class="font-semibold text-base">Neurostar TMS</span>
                                    <svg class="w-5 h-5 opacity-0 group-hover/item:opacity-100 -translate-x-2 group-hover/item:translate-x-0 transition-all"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                                <a href="#"
                                    class="group/item flex items-center justify-between p-4 rounded-3xl bg-transparent hover:bg-primary text-gray-600 hover:text-white transition-all duration-300">
                                    <span class="font-semibold text-base">Ketamine + Spravato</span>
                                    <svg class="w-5 h-5 opacity-0 group-hover/item:opacity-100 -translate-x-2 group-hover/item:translate-x-0 transition-all"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                                <a href="#"
                                    class="group/item flex items-center justify-between p-4 rounded-3xl bg-transparent hover:bg-primary text-gray-600 hover:text-white transition-all duration-300">
                                    <span class="font-semibold text-base">Psychiatric Care</span>
                                    <svg class="w-5 h-5 opacity-0 group-hover/item:opacity-100 -translate-x-2 group-hover/item:translate-x-0 transition-all"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>

                            <!-- Right: Feature Spotlight -->
                            <div
                                class="flex-1 bg-[#2A163F] rounded-[2.5rem] relative overflow-hidden flex items-end p-10 m-2 group/card">
                                <div
                                    class="absolute top-0 right-0 w-[500px] h-[500px] bg-accent rounded-full blur-[150px] opacity-20 translate-x-1/2 -translate-y-1/2 group-hover/card:opacity-30 transition-opacity duration-700">
                                </div>
                                <div
                                    class="absolute bottom-0 left-0 w-[300px] h-[300px] bg-[#6A3FA3] rounded-full blur-[100px] opacity-20 -translate-x-1/2 translate-y-1/2">
                                </div>

                                <div class="relative z-10 text-white max-w-md">
                                    <div
                                        class="inline-block px-3 py-1 rounded-full border border-white/20 text-[10px] font-bold uppercase tracking-widest mb-4 bg-white/5 backdrop-blur-sm">
                                        Featured Treatment</div>
                                    <h3 class="text-4xl md:text-5xl font-heading mb-4 leading-none text-gray-200">Awaken
                                        Your<br><span class="text-accent">Potential</span></h3>
                                    <p class="text-white/60 text-sm mb-8 leading-relaxed">
                                        Transcranial Magnetic Stimulation (TMS) is a revolution in mental
                                        health care.
                                        Non-invasive, drug-free, and effective.
                                    </p>
                                    <a href="#"
                                        class="inline-flex items-center gap-3 px-8 py-4 bg-white text-primary rounded-full font-bold hover:gap-5 transition-all duration-300">
                                        Explore Neurostar TMS
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Conditions (Ultra Wide) -->
                <li class="group relative">
                    <button
                        class="px-4 py-2 rounded-full hover:bg-primary/5 hover:text-accent transition-all duration-300 flex items-center gap-1 group-hover:bg-primary/5 group-hover:text-accent relative z-50">
                        Conditions <svg class="w-3 h-3 transition-transform group-hover:rotate-180 opacity-50"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>

                    <!-- Mega Menu (Right Aligned) -->
                    <div
                        class="absolute right-0 top-full mt-6 w-[95vw] max-w-5xl bg-white/95 backdrop-blur-[50px] rounded-[3rem] shadow-[0_50px_100px_-20px_rgba(42,54,30,0.15)] border border-white/40 p-10 opacity-0 invisible translate-y-6 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-500 ease-out origin-top-right z-40">
                        <div class="absolute -top-10 left-0 w-full h-10 bg-transparent"></div>

                        <div class="flex gap-12">

                            <!-- Sidebar -->
                            <div
                                class="w-64 flex-shrink-0 flex flex-col justify-between border-r border-primary/5 pr-8">
                                <div>
                                    <h3 class="text-4xl text-primary font-heading mb-4">Find<br>Relief</h3>
                                    <p class="text-sm text-gray-500 leading-relaxed mb-6">
                                        Evidence-based treatments tailored to your unique brain and biology.
                                    </p>
                                </div>
                                <a href="#" class="group/link flex items-center gap-2 text-accent font-bold text-sm">
                                    <span
                                        class="border-b border-accent/30 group-hover/link:border-accent transition-colors">View
                                        All Conditions</span>
                                    <svg class="w-4 h-4 transition-transform group-hover/link:translate-x-1" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>

                            <!-- Grid -->
                            <div class="flex-1 grid grid-cols-3 gap-8">
                                <!-- Col 1: Mood -->
                                <div class="space-y-6">
                                    <div class="flex items-center gap-3 pb-4 border-b border-primary/5">
                                        <div
                                            class="w-8 h-8 rounded-full bg-accent/10 flex items-center justify-center text-accent">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                </path>
                                            </svg>
                                        </div>
                                        <span class="font-bold tracking-widest uppercase text-xs text-primary/60">Mood
                                            Disorders</span>
                                    </div>
                                    <div class="space-y-4">
                                        <a href="#" class="block group/item">
                                            <div
                                                class="text-lg font-bold text-primary group-hover/item:text-accent transition-colors">
                                                Depression</div>
                                            <div
                                                class="text-xs text-gray-400 group-hover/item:text-gray-600 transition-colors">
                                                TRD & Major Depressive Disorder</div>
                                        </a>
                                        <a href="#" class="block group/item">
                                            <div
                                                class="text-lg font-bold text-primary group-hover/item:text-accent transition-colors">
                                                Bipolar Disorder</div>
                                            <div
                                                class="text-xs text-gray-400 group-hover/item:text-gray-600 transition-colors">
                                                Mood stabilization & support</div>
                                        </a>
                                        <a href="#" class="block group/item">
                                            <div
                                                class="text-lg font-bold text-primary group-hover/item:text-accent transition-colors">
                                                Suicidal Ideation</div>
                                            <div
                                                class="text-xs text-gray-400 group-hover/item:text-gray-600 transition-colors">
                                                Check availability for crisis care</div>
                                        </a>
                                    </div>
                                </div>

                                <!-- Col 2: Anxiety -->
                                <div class="space-y-6">
                                    <div class="flex items-center gap-3 pb-4 border-b border-primary/5">
                                        <div
                                            class="w-8 h-8 rounded-full bg-accent/10 flex items-center justify-center text-accent">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                            </svg>
                                        </div>
                                        <span
                                            class="font-bold tracking-widest uppercase text-xs text-primary/60">Anxiety
                                            & Trauma</span>
                                    </div>
                                    <div class="space-y-4">
                                        <a href="#" class="block group/item">
                                            <div
                                                class="text-lg font-bold text-primary group-hover/item:text-accent transition-colors">
                                                Anxiety</div>
                                            <div
                                                class="text-xs text-gray-400 group-hover/item:text-gray-600 transition-colors">
                                                Generalized & Social Anxiety</div>
                                        </a>
                                        <a href="#" class="block group/item">
                                            <div
                                                class="text-lg font-bold text-primary group-hover/item:text-accent transition-colors">
                                                PTSD</div>
                                            <div
                                                class="text-xs text-gray-400 group-hover/item:text-gray-600 transition-colors">
                                                Post-Traumatic Stress recovery</div>
                                        </a>
                                        <a href="#" class="block group/item">
                                            <div
                                                class="text-lg font-bold text-primary group-hover/item:text-accent transition-colors">
                                                Trauma</div>
                                            <div
                                                class="text-xs text-gray-400 group-hover/item:text-gray-600 transition-colors">
                                                Healing past wounds</div>
                                        </a>
                                    </div>
                                </div>

                                <!-- Col 3: Focus -->
                                <div class="space-y-6">
                                    <div class="flex items-center gap-3 pb-4 border-b border-primary/5">
                                        <div
                                            class="w-8 h-8 rounded-full bg-accent/10 flex items-center justify-center text-accent">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                                                </path>
                                            </svg>
                                        </div>
                                        <span class="font-bold tracking-widest uppercase text-xs text-primary/60">Focus
                                            & Neuro</span>
                                    </div>
                                    <div class="space-y-4">
                                        <a href="#" class="block group/item">
                                            <div
                                                class="text-lg font-bold text-primary group-hover/item:text-accent transition-colors">
                                                ADHD / ADD</div>
                                            <div
                                                class="text-xs text-gray-400 group-hover/item:text-gray-600 transition-colors">
                                                Focus & cognitive enhancement</div>
                                        </a>
                                        <a href="#" class="block group/item">
                                            <div
                                                class="text-lg font-bold text-primary group-hover/item:text-accent transition-colors">
                                                OCD</div>
                                            <div
                                                class="text-xs text-gray-400 group-hover/item:text-gray-600 transition-colors">
                                                Obsessive-Compulsive Disorder</div>
                                        </a>
                                        <a href="#" class="block group/item">
                                            <div
                                                class="text-lg font-bold text-primary group-hover/item:text-accent transition-colors">
                                                Addiction</div>
                                            <div
                                                class="text-xs text-gray-400 group-hover/item:text-gray-600 transition-colors">
                                                Recovery support</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Resources (Right Aligned) -->
                <li class="group relative">
                    <button
                        class="px-4 py-2 rounded-full hover:bg-primary/5 hover:text-accent transition-all duration-300 flex items-center gap-1 group-hover:bg-primary/5 group-hover:text-accent relative z-50">
                        Resources <svg class="w-3 h-3 transition-transform group-hover:rotate-180 opacity-50"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <!-- Dropdown Panel -->
                    <div
                        class="absolute right-0 top-full mt-6 w-64 bg-white/90 backdrop-blur-[40px] rounded-3xl shadow-[0_50px_100px_-20px_rgba(42,54,30,0.15)] border border-white/40 p-2 opacity-0 invisible translate-y-4 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-300 ease-out origin-top-right z-40 overflow-hidden">
                        <div class="absolute -top-10 left-0 w-full h-10 bg-transparent"></div>

                        <div class="grid grid-cols-1">
                            <a href="#"
                                class="flex items-center justify-between p-4 rounded-2xl hover:bg-white/60 transition-colors group/item">
                                <span class="font-bold text-primary">Patient Portal</span>
                                <svg class="w-4 h-4 text-gray-300 group-hover/item:text-accent transition-colors"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a href="#"
                                class="flex items-center justify-between p-4 rounded-2xl hover:bg-white/60 transition-colors group/item">
                                <span class="font-bold text-primary">Our Blog</span>
                                <svg class="w-4 h-4 text-gray-300 group-hover/item:text-accent transition-colors"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a href="#"
                                class="flex items-center justify-between p-4 rounded-2xl hover:bg-white/60 transition-colors group/item">
                                <span class="font-bold text-primary">Global FAQ</span>
                                <svg class="w-4 h-4 text-gray-300 group-hover/item:text-accent transition-colors"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a href="#"
                                class="flex items-center justify-between p-4 rounded-2xl hover:bg-white/60 transition-colors group/item">
                                <span class="font-bold text-primary">Pricing</span>
                                <svg class="w-4 h-4 text-gray-300 group-hover/item:text-accent transition-colors"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>

            <!-- Book Now Button -->
            <a href="#contact" id="nav-cta"
                class="px-6 py-2.5 bg-primary text-white rounded-full font-bold hover:bg-accent transition-all text-sm duration-300 shadow-md flex items-center gap-2 ml-2 hover:scale-105 active:scale-95">
                <span>Consult</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                    </path>
                </svg>
            </a>

            <!-- Mobile Hamburger (Inside the pill) -->
            <div id="nav-hamburger"
                class="lg:hidden flex flex-col gap-1.5 cursor-pointer group px-4 py-2 relative z-[70]">
                <span
                    class="line w-6 h-0.5 bg-primary transition-all duration-300 group-hover:w-4 ml-auto origin-right"></span>
                <span
                    class="line w-4 h-0.5 bg-primary transition-all duration-300 group-hover:w-6 ml-auto origin-right"></span>
                <span
                    class="line w-5 h-0.5 bg-primary transition-all duration-300 group-hover:w-5 ml-auto origin-right"></span>
            </div>
        </div>

        <!-- Full Screen Mobile Menu Overlay -->
        <div id="mobile-menu-overlay"
            class="fixed inset-0 w-full h-screen bg-[#1E0F2E] z-[60] flex flex-col justify-center px-8 transition-transform duration-700 translate-x-full lg:hidden overflow-hidden">

            <!-- Close Button -->
            <button id="mobile-menu-close"
                class="absolute top-6 right-6 p-2 text-white/50 hover:text-white transition-colors z-50">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>

            <!-- Abstract Background Decorations -->
            <div
                class="absolute top-0 right-0 w-[500px] h-[500px] bg-accent rounded-full blur-[150px] opacity-10 translate-x-1/2 -translate-y-1/2">
            </div>
            <div
                class="absolute bottom-0 left-0 w-[300px] h-[300px] bg-white rounded-full blur-[100px] opacity-5 -translate-x-1/2 translate-y-1/2">
            </div>

            <!-- Links Container -->
            <div class="flex flex-col gap-6 relative z-10">
                <a href="#home"
                    class="mobile-link text-5xl font-heading text-white/50 hover:text-white hover:translate-x-4 transition-all duration-300 block opacity-0 translate-y-8"
                    style="transition-delay: 100ms;">Home</a>
                <a href="#welcome"
                    class="mobile-link text-5xl font-heading text-white/50 hover:text-white hover:translate-x-4 transition-all duration-300 block opacity-0 translate-y-8"
                    style="transition-delay: 200ms;">About</a>
                <a href="#tms"
                    class="mobile-link text-5xl font-heading text-white/50 hover:text-white hover:translate-x-4 transition-all duration-300 block opacity-0 translate-y-8"
                    style="transition-delay: 300ms;">Services</a>
                <a href="#conditions"
                    class="mobile-link text-5xl font-heading text-white/50 hover:text-white hover:translate-x-4 transition-all duration-300 block opacity-0 translate-y-8"
                    style="transition-delay: 400ms;">Conditions</a>
                <a href="#contact"
                    class="mobile-link text-5xl font-heading text-accent hover:text-accent-light hover:translate-x-4 transition-all duration-300 block opacity-0 translate-y-8"
                    style="transition-delay: 500ms;">Contact</a>
            </div>

            <!-- Footer Info in Menu -->
            <div class="mt-12 pt-8 border-t border-white/10 relative z-10 opacity-0 translate-y-8 mobile-footer"
                style="transition-delay: 600ms;">
                <p class="text-white/40 text-sm mb-4">
                    757 Maleta Lane, Suite 201<br>
                    Castle Rock, CO 80108
                </p>
                <div class="flex gap-4">
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-white/60 hover:bg-accent hover:text-white transition-all">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.072 3.252.148 4.771 1.691 4.919 4.919.06 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-white/60 hover:bg-accent hover:text-white transition-all">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </nav>
