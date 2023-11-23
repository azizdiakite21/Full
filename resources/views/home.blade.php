
@extends('layouts.app')




@section('content')

<style>

    body{
        background-color: rgb(224, 223, 223)
    }

</style>
    
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="display-6 ms-2 mb-0 text-gray-800">Tableau de bord</h1>
    </div>

    <!-- Content Row -->
    <div class="row m-2">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-primary border-3 shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-white text-uppercase mb-1">
                                <p class="fw-bold h4">Recette du jour</p></div>
                            <div class="h4 mb-0 fw-bold mt-3 text-white">{{$recette}} FCFA</div>
                        </div>
                        <div class="col-auto">
                            <p class="h1 mt-3">💶️</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-danger border-3 shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-white text-uppercase mb-1">
                                <p class="fw-bold h4">Tickets vendus aujourd'hui</p></div>
                            <div class="h4 mb-0 fw-bold mt-3  text-white">{{$tickets}} Tickets</div>
                        </div>
                        <div class="col-auto">
                            <p class="h1">🤝️</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-3 border-3 shadow h-100 py-2" style="background-color: blueviolet">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-white text-uppercase mb-1">
                                <p class="fw-bold h4">Colis reçus aujourd'hui</p></div>
                            <div class="h4 mb-0 fw-bold mt-3 text-white">{{$colis}} Colis</div>
                        </div>
                        <div class="col-auto">
                            <p class="h1 mt-4">📦️</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-warning border-3 shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-white text-uppercase mb-1">
                                <p class="fw-bold h4">Nombre de voyageurs aujourd'hui</p></div>
                                <div class="h4 mb-0 fw-bold text-white">{{$tickets}} passagers</div>
                        </div>
                        <div class="col-auto">
                            <p class="h1">🚍️</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row m-2 p-3 justify-content-between">
        <div class="col-xl-5 col-md-5 mb-4 p-3 bg-success bg-opacity-100 rounded-3 shadow border-3 text-center">
            <h1 class="text-white fw-bold">Fréquence des voyageurs</h1>
            <canvas class="my-4 w-100" id="myChart" width="452" height="300"></canvas>
        </div>

        <div class="col-xl-6 col-md-6 mb-4 p-3 bg-info bg-opacity-100 rounded-3 shadow border-3 text-center">
            <h1 class="text-white fw-bold">Evolution des revenus</h1>
            <canvas class="my-4 w-100" id="myChart2" width="452" height="300"></canvas>
        </div>
    </div>

    

    <script>
        (() => {
      'use strict'
    
      feather.replace({ 'aria-hidden': 'true' })
    
      // Graphs
      const ctx = document.getElementById('myChart')
      // eslint-disable-next-line no-unused-vars
      const myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: [
            'Lundi',
            'Mardi',
            'Mercredi',
            'Jeudi',
            'Vendredi',
            'Samedi',
            'Dimanche'
          ],
          datasets: [{
            data: [
              24,
              40,
              37,
              56,
              43,
              37,
              66
            ],
            lineTension: 0.3,
            backgroundColor: ' #84df6d',
            borderColor: '  #cde4c7',
            borderWidth: 4,
            pointBackgroundColor: '#ffffff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false,
                fontSize : 15,
                fontColor : '#ffffff',
                
              },
              gridLines: {
                color: "rgba(0, 0, 0, 1)",
                lineWidth: 2
            }   
            }],
            xAxes: [{
              ticks: {
                beginAtZero: false,
                fontSize : 15,
                fontColor : '#ffffff'
              },
              gridLines: {
                color: "rgba(0, 0, 0, 1)",
                lineWidth: 2
            }   
            }]
          },
          legend: {
            display: false
          }
        }
      })
    })()
    </script>


    <script>
        (() => {
    'use strict'

    feather.replace({ 'aria-hidden': 'true' })

    // Graphs
    const ctx = document.getElementById('myChart2')
    // eslint-disable-next-line no-unused-vars
    const myChart = new Chart(ctx, {
        type: 'line',
        data: {
        labels: [
            'Janvier',
            'Février',
            'Mars',
            'Avril',
            'Mai',
            'Juin',
            'Juillet',
            'Août',
            'Septembre',
            'Novembre',
            'Décembre',    
        ],
        datasets: [{
            data: [
            750000,
            930500,
            570500,
            650500,
            590500,
            1028000,
            1305000,
            1202000,
            1605500,
            950500,
            630000

            ],
            lineTension: 0.3,
            backgroundColor: ' #1a2eda',
            borderColor: '#ffffff',
            borderWidth: 4,
            pointBackgroundColor: '#ffffff',
            
        }]
        },
        options: {
        scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false,
                fontSize : 15,
                fontColor : '#ffffff'
              },
              gridLines: {
                color: "rgba(0, 0, 0, 1)",
                lineWidth: 2
            }   
            }],
            xAxes: [{
              ticks: {
                beginAtZero: false,
                fontSize : 15,
                fontColor : '#000000',
                fontStyle : 100
              },
              gridLines: {
                color: "rgba(0, 0, 0, 1)",
                lineWidth: 2
            }   
            }]
        },
        legend: {
            display: false
        }
        }
    })
    })()
    </script>

@endsection


