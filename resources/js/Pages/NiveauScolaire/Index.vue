<template>
    <!--begin::App Main-->
    <main class="app-main">
        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="mb-0 fs-3">Liste des niveaux scolaires</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <div class="card-tools">
                        <ul class="pagination pagination-sm float-right">
                            <li class="page-item"><a class="page-link" href="#">«</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">»</a></li>
                        </ul>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table">
                        <thead>
                            <tr>
                            <th>Niveau scolaire</th>
                            <th style="width: 100px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="niveauScolaire in props.niveauScolaires">
                            <td>{{niveauScolaire.nom}}</td>
                            <td>
                                <div class="d-flex justify-items-center">
                                    <button class="btn btn-info me-2"><i class="fa-solid fa-pencil"></i></button>
                                    <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </div>
                            </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--end::App Main-->
</template>

<script setup>
const props = defineProps({ 
    niveauScolaires: Array
})
</script>