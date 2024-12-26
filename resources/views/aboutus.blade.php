<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/6.5.95/css/materialdesignicons.min.css">
    @vite('resources/css/app.css')
    <title>PRSPDNF</title>
</head>

<body class="bg-[#F3F4F8] font-poppins flex flex-col min-h-screen">
    <!-- MDI Icons -->


    <!-- Page Container -->
    <div class="flex items-center justify-center min-h-screen bg-gray-100">

        <!-- Meet the Team -->
        <div class="flex flex-col justify-center ">
            <!-- Section Header -->
            <div class="flex flex-wrap justify-center text-center mb-12 ">
                <div class="w-full lg:w-6/12 px-4">
                    <!-- Header -->
                    <p class="text-gray-900 text-xl font-semibold pt-12">
                        THE TEAM
                    </p>

                    <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight text-gray-900">
                        Our<span class="text-orange-500"> Developer Team</span>
                    </h3>
                </div>
            </div>

            <!-- Team Members -->
            <div class="flex flex-wrap justify-center">
                <!-- Member #1 -->
                <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4">
                    <div class="flex flex-col">
                        <!-- Avatar -->
                        <a href="#" class="mx-auto">
                            <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                src="{{ asset('Image/aboutus/ipin.png') }}">
                        </a>

                        <!-- Details -->
                        <div class="text-center mt-6">
                            <!-- Name -->
                            <h1 class="text-gray-900 text-xl font-bold mb-1">
                                Muhammad Ilham Arifin
                            </h1>

                            <!-- Title -->
                            <div class="text-gray-700 font-light mb-2">
                                UI/UX Designer
                            </div>

                            <!-- Social Icons -->
                            <div
                                class="flex items-center justify-center opacity-50 hover:opacity-100
                                transition-opacity duration-300">
                                <!-- Linkedin -->
                                <a href="#" class="flex rounded-full hover:bg-indigo-50 h-10 w-10">
                                    <i class="mdi mdi-linkedin text-indigo-500 mx-auto mt-2"></i>
                                </a>

                                <!-- Twitter -->
                                <a href="#" class="flex rounded-full hover:bg-blue-50 h-10 w-10">
                                    <i class="mdi mdi-github text-blue-300 mx-auto mt-2"></i>
                                </a>

                                <!-- Instagram -->
                                <a href="#" class="flex rounded-full hover:bg-orange-50 h-10 w-10">
                                    <i class="mdi mdi-instagram text-orange-400 mx-auto mt-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member #2 -->
                <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4">
                    <div class="flex flex-col">
                        <!-- Avatar -->
                        <a href="#" class="mx-auto">
                            <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                src="{{ asset('Image/aboutus/112233.png') }}">
                        </a>

                        <!-- Details -->
                        <div class="text-center mt-6">
                            <!-- Name -->
                            <h1 class="text-gray-900 text-xl font-bold mb-1">
                                Abdillah Rezeki
                            </h1>
                            <div class="mb-8"></div>
                            <!-- Title -->
                            <div class="text-gray-700 font-light mb-2">
                                Full-Stack Developer
                            </div>

                            <!-- Social Icons -->
                            <div
                                class="flex items-center justify-center opacity-50 hover:opacity-100
                                transition-opacity duration-300">
                                <!-- Linkedin -->
                                <a href="#" class="flex rounded-full hover:bg-indigo-50 h-10 w-10">
                                    <i class="mdi mdi-linkedin text-indigo-700 mx-auto mt-2"></i>
                                </a>

                                <!-- Twitter -->
                                <a href="#" class="flex rounded-full hover:bg-blue-50 h-10 w-10">
                                    <i class="mdi mdi-github text-blue-400 mx-auto mt-2"></i>
                                </a>

                                <!-- Instagram -->
                                <a href="#" class="flex rounded-full hover:bg-orange-50 h-10 w-10">
                                    <i class="mdi mdi-instagram text-orange-400 mx-auto mt-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member #3 -->
                <div class="w-full md:w-6/12 lg:w-3/12 mb-6 px-6 sm:px-6 lg:px-4">
                    <div class="flex flex-col">
                        <!-- Avatar -->
                        <a href="#" class="mx-auto">
                            <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100"
                                src="{{ asset('Image/aboutus/akbar.png') }}">
                        </a>

                        <!-- Details -->
                        <div class="text-center mt-6">
                            <!-- Name -->
                            <h1 class="text-gray-900 text-xl font-bold mb-1">
                                Muhammad Rizki Akbar
                            </h1>

                            <!-- Title -->
                            <div class="text-gray-700 font-light mb-2">
                                Database Developer
                            </div>

                            <!-- Social Icons -->
                            <div
                                class="flex items-center justify-center opacity-50 hover:opacity-100
                                transition-opacity duration-300">
                                <!-- Linkedin -->
                                <a href="#" class="flex rounded-full hover:bg-indigo-50 h-10 w-10">
                                    <i class="mdi mdi-linkedin text-indigo-700 mx-auto mt-2"></i>
                                </a>

                                <!-- Twitter -->
                                <a href="#" class="flex rounded-full hover:bg-blue-50 h-10 w-10">
                                    <i class="mdi mdi-github text-blue-400 mx-auto mt-2"></i>
                                </a>

                                <!-- Instagram -->
                                <a href="#" class="flex rounded-full hover:bg-orange-50 h-10 w-10">
                                    <i class="mdi mdi-instagram text-orange-400 mx-auto mt-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center text-sm">
            &copy; 2024 Magang PRSPDNF FH. All rights reserved.rved.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <!-- Include file JS menggunakan Vite -->
    @vite(['resources/js/app.js', 'resources/js/custom/custom.js'])

</body>

</html>
