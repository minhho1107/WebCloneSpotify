<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Statistical - Spotify Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="../../css/styles_Statistical.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed"> -->

<div id="layoutSidenav">

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Statistical</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Statistical</li>
                </ol>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">Podcasts <h1 id="Num_podcast">0</h1>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">Song <h1 id="Num_song">0</h1>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">Album <h1 id="Num_album">0</h1>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body">Artist <h1 id="Num_artist">0</h1>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Tháng 4 -->
                    <div class="col" id="tk_area">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-area me-1"></i>
                                Like to music in Month <div class="btn_option" style="display: flex;
                                                                               justify-content: space-between;
                                                                                                              ">
                                    <div class="form-group">

                                        <select class="form-control" id="month-select" style="
                                                                                       width: 180px;
                                                                                                              ">
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4" selected>April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                    </div> <button class="btn btn-primary" id="btn_change_state_year">View Year</button>
                                </div>
                            </div>
                            <div class="card-body" id="canva_th4"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                            <div class="card-body" id="canva_th3"  style="display:none"><canvas id="myAreaChart_th3" width="100%" height="40"></canvas></div>
                            <div class="card-body" id="canva_th2"  style="display:none"><canvas id="myAreaChart_th2" width="100%" height="40"></canvas></div>
                            <div class="card-body" id="canva_th1"  style="display:none"><canvas id="myAreaChart_th1" width="100%" height="40"></canvas></div>
                            <div class="card-body" id="canva_th5"  style="display:none"><canvas id="myAreaChart_th5" width="100%" height="40"></canvas></div>
                            <div class="card-body" id="canva_th6"  style="display:none"><canvas id="myAreaChart_th6" width="100%" height="40"></canvas></div>
                            <div class="card-body" id="canva_th7"  style="display:none"><canvas id="myAreaChart_th7" width="100%" height="40"></canvas></div>
                            <div class="card-body" id="canva_th8"  style="display:none"><canvas id="myAreaChart_th8" width="100%" height="40"></canvas></div>
                            <div class="card-body" id="canva_th9"  style="display:none"><canvas id="myAreaChart_th9" width="100%" height="40"></canvas></div>
                            <div class="card-body" id="canva_th10"  style="display:none"><canvas id="myAreaChart_th10" width="100%" height="40"></canvas></div>
                            <div class="card-body" id="canva_th11"  style="display:none"><canvas id="myAreaChart_th11" width="100%" height="40"></canvas></div>
                            <div class="card-body" id="canva_th12"  style="display:none"><canvas id="myAreaChart_th12" width="100%" height="40"></canvas></div>
                           
                        </div>
                    </div>
                
                       
                         

                  <!-- Năm 2023  -->
                    <div class="col" id="tk_bar" style="display:none">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-chart-bar me-1"></i>
                                Like Music Chart in Year <div class="btn_option" style="display: flex;
                                                                                 justify-content: space-between;
                                                                                                                ">
                                    <div class="form-group">

                                        <select class="form-control" id="year-select" style="
                                                                                 width: 180px;
                                                                                                                ">
                                            <option value="1">2020</option>
                                            <option value="2">2021</option>
                                            <option value="3">2022</option>
                                            <option value="4" selected>2023</option>
                                            <option value="5">2024</option>
                                            <option value="6">2025</option>
                                            <option value="7">2026</option>
                                            <option value="8">2027</option>
                                            <option value="9">2028</option>
                                            <option value="10">2029</option>
                                            <option value="11">2030</option>
                                            <option value="12">2031</option>

                                        </select>
                                    </div> <button class="btn btn-primary" id="btn_change_state_month">View Month</button>
                                </div>
                                <div class="card-body" id="canva_year1"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                <div class="card-body" id="canva_year0" style="display:none"><canvas id="myBarChart_none" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                      
                    </div>
                   <!-- Table  -->
                    <!-- <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            DataTable
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>SongName</th>
                                        <th>ArtistName</th>
                                        <th>AlbumName</th>
                                        <th>SongLength</th>
                                        <th>TotalLikes</th>
                                        <th>SongAudio</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>SongName</th>
                                        <th>ArtistName</th>
                                        <th>AlbumName</th>
                                        <th>SongLength</th>
                                        <th>TotalLikes</th>
                                        <th>SongAudio</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div> -->

                </div>
        </main>

    </div>

</div>



<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../../js/scripts_ac.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../../js/chart-area.js"></script>
        <script src="../../js/chart-bar.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="../../js/datatables-simple.js"></script>
    </body>
</html> -->