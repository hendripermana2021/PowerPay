<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
        <script
            defer
            src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
        ></script>
        @vite('resources/css/app.css')

        <title>Power Pay</title>

        <link
            href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"
            rel="stylesheet"
        />

        <style>
            body {
                font-family: "Nunito", sans-serif;
            }
        </style>
    </head>

    <body>
        <!-- nav start -->
        <nav
            class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600"
        >
            <div
                class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2"
            >
                <a
                    href="/beranda"
                    class="flex items-center space-x-3 rtl:space-x-reverse"
                >
                    <img src="/asset/image/logo.png" class="h-10" alt="" />
                    <span
                        class="pl-5 self-center text-2xl font-semibold whitespace-nowrap dark:text-white"
                        >Power Pay</span
                    >
                </a>
                <div
                    class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse"
                >
                    <button
                        type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    >
                        Masuk
                    </button>
                    <button
                        data-collapse-toggle="navbar-sticky"
                        type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-sticky"
                        aria-expanded="false"
                    >
                        <span class="sr-only">Open main menu</span>
                        <svg
                            class="w-5 h-5"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 17 14"
                        >
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15"
                            />
                        </svg>
                    </button>
                </div>
                <div
                    class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
                    id="navbar-sticky"
                >
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 text-lg border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700"
                    >
                        <li>
                            <a
                                href="/beranda"
                                class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                                aria-current="page"
                                >Beranda</a
                            >
                        </li>
                        <li>
                            <a
                                href="/tentang"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                                >Tentang</a
                            >
                        </li>
                        <li>
                            <a
                                href="/tagihan"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                                >Pembayaran</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- nav end -->

        <div class="max-w-screen-xl mx-auto p-4 pt-32 py-10">
            <div class="grid sm:grid-cols-2">
                <div class="flex items-center order-2 sm:order-1">
                    <div>
                        <p
                            class="max-w-lg text-4xl font-semibold leading-relaxed text-blue-700 dark:text-white"
                        >
                            Membayar listrik dengan mudah bersama Power Pay
                        </p>

                        <br />
                        <p
                            class="text-lg font-normal text-justify text-gray-900 mb-4"
                        >
                            Power Pay hadir untuk memberikan solusi pembayaran
                            listrik yang praktis dan aman bagi Anda. Dengan
                            platform kami, Anda dapat membayar tagihan listrik
                            secara online dengan cepat dan mudah, kapan saja dan
                            di mana saja. solusi yang cepat, aman, dan mudah
                            diakses.
                        </p>
                    </div>
                </div>

                <div class="order-1 sm:order-2">
                    <img src="/asset/image/listrik.png" class="w-full" alt="" />
                </div>
            </div>

            <div class="grid sm:grid-cols-2">
                <img src="/asset/image/listrik.png" class="w-full" alt="" />

                <div class="flex items-center">
                    <div>
                        <p
                            class="max-w-lg text-4xl font-semibold leading-relaxed text-blue-700 dark:text-white"
                        >
                            Mulai pengalaman baru dalam bertansaksi
                        </p>

                        <br />
                        <p class="text-lg font-normal text-gray-900 mb-4">
                            Bergabunglah dengan pengguna lain yang telah
                            menikmati kemudahan dalam membayar tagihan listrik
                            bersama Power Pay.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- cards section -->
        <h2 class="text-center font-bold text-2xl mt-10">
            Lorem, ipsum dolor sit amet consectetur adipisicing.
        </h2>
        <p class="text-center">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, non?
        </p>
        <div
            class="max-w-screen-xl mx-auto border rounded-xl shadow p-5 mb-10 mt-5"
        >
            <!-- container card -->
            <div class="grid md:grid-cols-3 gap-5">
                <!-- card 1 -->
                <div class="flex gap-5 items-center p-2">
                    <!-- img -->
                    <img
                        src="/asset/icons/sample-icon.svg"
                        class="w-16 h-16"
                        alt="icon"
                    />

                    <!-- text -->
                    <div class="flex flex-col">
                        <h5 class="font-bold text-lg">Lorem ipsum dolor</h5>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing
                            elit. Expedita, excepturi?
                        </p>
                    </div>
                </div>
                <!-- card 2 -->
                <div class="flex gap-5 items-center p-2">
                    <!-- img -->
                    <img
                        src="/asset/icons/sample-icon.svg"
                        class="w-16 h-16"
                        alt="icon"
                    />

                    <!-- text -->
                    <div class="flex flex-col">
                        <h5 class="font-bold text-lg">Lorem ipsum dolor</h5>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing
                            elit. Expedita, excepturi?
                        </p>
                    </div>
                </div>
                <!-- card 3 -->
                <div class="flex gap-5 items-center p-2">
                    <!-- img -->
                    <img
                        src="/asset/icons/sample-icon.svg"
                        class="w-16 h-16"
                        alt="icon"
                    />

                    <!-- text -->
                    <div class="flex flex-col">
                        <h5 class="font-bold text-lg">Lorem ipsum dolor</h5>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing
                            elit. Expedita, excepturi?
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <footer class="bg-blue-400 dark:bg-gray-900">
            <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
                <div class="md:flex md:justify-between">
                    <div class="mb-6 md:mb-0">
                        <a
                            href="https://flowbite.com/"
                            class="flex items-center"
                        >
                            <img
                                src="/asset/image/logo.png"
                                class="h-20"
                                alt=""
                            />
                            <span
                                class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"
                                >Power Pay</span
                            >
                        </a>
                    </div>
                    <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                        <div>
                            <h2
                                class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white"
                            >
                                Resources
                            </h2>
                            <ul
                                class="text-gray-500 dark:text-gray-400 font-medium"
                            >
                                <li class="mb-4">
                                    <a
                                        href="https://flowbite.com/"
                                        class="hover:underline"
                                        >Flowbite</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="https://tailwindcss.com/"
                                        class="hover:underline"
                                        >Tailwind CSS</a
                                    >
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2
                                class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white"
                            >
                                Follow us
                            </h2>
                            <ul
                                class="text-gray-500 dark:text-gray-400 font-medium"
                            >
                                <li class="mb-4">
                                    <a
                                        href="https://github.com/themesberg/flowbite"
                                        class="hover:underline"
                                        >Github</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="https://discord.gg/4eeurUVvTy"
                                        class="hover:underline"
                                        >Discord</a
                                    >
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2
                                class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white"
                            >
                                Legal
                            </h2>
                            <ul
                                class="text-gray-500 dark:text-gray-400 font-medium"
                            >
                                <li class="mb-4">
                                    <a href="#" class="hover:underline"
                                        >Privacy Policy</a
                                    >
                                </li>
                                <li>
                                    <a href="#" class="hover:underline"
                                        >Terms &amp; Conditions</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr
                    class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8"
                />
                <div class="sm:flex sm:items-center sm:justify-between">
                    <span
                        class="text-sm text-gray-500 sm:text-center dark:text-gray-400"
                        >© 2023
                        <a href="https://flowbite.com/" class="hover:underline"
                            >Power Pay</a
                        >. All Rights Reserved.
                    </span>
                    <div class="flex mt-4 sm:justify-center sm:mt-0">
                        <a
                            href="#"
                            class="text-gray-500 hover:text-gray-900 dark:hover:text-white"
                        >
                            <svg
                                class="w-4 h-4"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 8 19"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            <span class="sr-only">Facebook page</span>
                        </a>
                        <a
                            href="#"
                            class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5"
                        >
                            <svg
                                class="w-4 h-4"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 20 17"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            <span class="sr-only">Twitter page</span>
                        </a>
                        <a
                            href="#"
                            class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5"
                        >
                            <svg
                                class="w-4 h-4"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                            <span class="sr-only">Dribbble account</span>
                        </a>
                    </div>
                </div>
            </div>
        </footer>

        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    </body>
</html>
