<script setup>
import {ref} from 'vue'
import './css/sidebars.css'
import './js/sidebars.js'

const count = ref(0)

</script>


<template>
    <main class="d-flex flex-nowrap">
        <div class="flex-shrink-0 p-3 border vh-100 " style="width: 280px;">
            <a href="/"
               class="d-flex align-items-center justify-content-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
                <span class="fs-5 fw-semibold">LOGO</span>
            </a>
            <ul class="list-unstyled ps-0">
                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                            data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                        Dashboard
                    </button>
                    <div class="collapse show" id="home-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Dashboard</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="border-top my-3"></li>

                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                            data-bs-toggle="collapse" data-bs-target="#users-collapse" aria-expanded="false">
                        Users
                    </button>
                    <div class="collapse show" id="users-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#"
                                   class="link-body-emphasis d-inline-flex text-decoration-none rounded">Admin</a></li>
                            <li><a href="#"
                                   class="link-body-emphasis d-inline-flex text-decoration-none rounded">User</a></li>
                        </ul>
                    </div>
                </li>
                <li class="border-top my-3"></li>

                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                            data-bs-toggle="collapse" data-bs-target="#data-barang-collapse" aria-expanded="false">
                        Data Barang
                    </button>
                    <div class="collapse show" id="data-barang-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#"
                                   class="link-body-emphasis d-inline-flex text-decoration-none rounded">Barang</a></li>
                            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Kategori</a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
        <div class="container">
            navbar here later

            <slot>
            </slot>
        </div>


    </main>
</template>
