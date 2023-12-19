@extends('admin.layout.index')
@section('title','Dashboard')
@section('content')

    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Berita</p>
                    <h5 class="font-weight-bolder">
                      {{ $hitungberita  }}
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                    <i class="fas fa-newspaper text-lg opacity-10"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Kategori</p>
                    <h5 class="font-weight-bolder">
                        {{ $hitungkategori  }}
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                    <i class="fas fa-cogs text-lg opacity-10"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">Program</p>
                      <h5 class="font-weight-bolder">
                          {{ $hitungprogram  }}
                      </h5>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-warning shadow-success text-center rounded-circle">
                      <i class="fas fa-code text-lg opacity-10"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-uppercase font-weight-bold">User</p>
                      <h5 class="font-weight-bolder">
                          {{ $hitunguser  }}
                      </h5>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                      <i class="fas fa-user text-lg opacity-10"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="row mt-6">
        <div class="col-lg-12 mb-lg-0 mb-4">
          <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent">
              <h6 class="text-capitalize">Garfik Pengunjung</h6>
              <p class="text-sm mb-0">
                <i class="fa fa-arrow-up text-success"></i>
                {{-- <span class="font-weight-bold">4% more</span> in 2021 --}}
              </p>
            </div>
            <div class="card-body p-3">
              <div class="chart">
                {{-- <canvas id="chart-line" class="chart-canvas" height="300"></canvas> --}}
                <canvas id="visitorChart" class="chart-canvas" width="200px" height="50px"></canvas>
              </div>
            </div>
          </div>
        </div>

         <script>
            const ctx = document.getElementById('visitorChart');

            // Ambil data tanggal
            const dates = {!! json_encode($dates) !!};
            // Buat larik baru dengan format bulan

            const monthLabels = dates.map(date => {
                console.log(date)
                let tahun = date.split('-')[0];
                let bulan = date.split('-')[1];
                const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                return `${monthNames[bulan-1]} ${tahun}`;
            });

            new Chart(ctx, {
              type: 'bar',
              data: {
                labels: monthLabels,
                datasets: [{
                  label: 'Pengunjung',
                  data: {!! $visitorviews !!},
                  borderWidth: 1
                }]
              },
              options: {
                scales: {
                  y: {
                    beginAtZero: true
                  }
                }
              }
            });
            </script>



@endsection

