<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('css/front.css') }}"></link>
    </head>
    <body class="antialiased">
        @yield('content')
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="{{ asset('js/front.js') }}"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const opSelect = document.querySelector(".form-control.OP");
                const deviceList = document.querySelector(".device-list-section");
                const loader = document.getElementById("loader");

                function loadProducts(categoryId) {
                    // Show loader
                    loader.style.display = "block";
                    deviceList.innerHTML = "";
                    deviceList.appendChild(loader);

                    fetch(`/get-products/${categoryId}`)
                        .then(response => response.json())
                        .then(data => {
                            // Clear old content
                            deviceList.innerHTML = "";

                            // Render products
                            data.forEach(item => {
                                let div = document.createElement("div");
                                div.classList.add("device-item");
                                div.innerHTML = `
                                    <div class="device-name">${item.name}</div>
                                    <div class="device-price">${item.price}</div>
                                `;
                                deviceList.appendChild(div);
                            });
                        })
                        .catch(error => console.error("Error:", error))
                        .finally(() => {
                            loader.style.display = "none";
                        });
                }

                // Run on select change
                opSelect.addEventListener("change", function () {
                    loadProducts(this.value);
                });

                // Run immediately on first load
                if (opSelect.value) {
                    loadProducts(opSelect.value);
                }
            });
            </script>

    </body>
</html>