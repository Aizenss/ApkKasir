<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Kasir</title>
    {{-- tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- flowbite --}}
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    {{-- DataTables --}}
    <link rel="stylesheet" href="{{ asset('dist/css/dataTables.tailwindcss.css') }}">
    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/05aea6e721.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap');

        body {
            font-family: 'Urbanist';
        }
    </style>
    @yield('css')
</head>

<body class="flex flex-col min-h-screen bg-[#fdfdfd]">
    @include('layouts.navbar')

    @if (session('success'))
        <div id="toast-success"
            class="fixed mt-3 left-4 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-green-100 rounded-lg shadow-lg z-50"
            role="alert">
            <div
                class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg">
                <i class="fa-solid fa-check"></i>
            </div>
            <div class="ms-3 text-sm font-normal">{{ session('success') }}</div>
            <button type="button"
                class="ms-auto -mx-1.5 -my-1.5 text-black hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 inline-flex items-center justify-center h-8 w-8"
                data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
    @endif
    @if (session('error'))
        <div id="toast-error"
            class="fixed mt-3 left-4 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-red-100 rounded-lg shadow-lg z-50"
            role="alert">
            <div
                class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg">
                <i class="fa-solid fa-check"></i>
            </div>
            <div class="ms-3 text-sm font-normal">{{ session('error') }}</div>
            <button type="button"
                class="ms-auto -mx-1.5 -my-1.5 text-black hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 inline-flex items-center justify-center h-8 w-8"
                data-dismiss-target="#toast-error" aria-label="Close">
                <span class="sr-only">Close</span>
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
    @endif
    <main class="flex-grow relative">
        @yield('content')
    </main>
    @include('layouts.footer')

    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    {{-- DataTables --}}
    <script src="{{ asset('dist/js/dataTables.js') }}"></script>
    <script src="{{ asset('dist/js/dataTables.tailwindcss.js') }}"></script>
    {{-- Flowbite --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>

    {{-- Sweet Alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toastSuccess = document.getElementById('toast-success');
            if (toastSuccess) {
                setTimeout(function() {
                    setTimeout(function() {
                        toastSuccess.remove();
                    }, 300);
                }, 1000);
            }
        });
        document.addEventListener('DOMContentLoaded', function() {
            const toastError = document.getElementById('toast-error');
            if (toastError) {
                setTimeout(function() {
                    setTimeout(function() {
                        toastError.remove();
                    }, 300);
                }, 1000);
            }
        });

        function logout() {
            Swal.fire({
                title: "Anda yakin?",
                text: "Anda tidak dapat membatalkan ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Iya, Keluar!",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('logout') }}",
                        type: "POST",
                        data: {
                            _token: "{{ csrf_token() }}",
                            user_id: "{{ Auth::user()->id }}"
                        },
                        success: function(response) {
                            window.location.href = "{{ route('login') }}";
                        },
                        error: function(xhr) {
                            Swal.fire("Error", "Gagal logout, coba lagi nanti.", "error");
                        }
                    });
                }
            });
        }
    </script>

    @yield('js')
</body>

</html>
