<?php 

class AdminDashBoardController extends Controller {
    
    public function __construct() {
        $this->PodcastModel = $this->model('Podcast');
        $this->SongModel = $this->model('Song');
        $this->AlbumModel = $this->model('Album');
        $this->ArtistModel = $this->model('Artist');
        $this->SongModel->likeSongInYear = $this->SongModel->getCountLikeSongInYear();
        $this->SongModel->likeSongInMonth4 = $this->SongModel->getCountLikeSongInMonth4();
        $this->SongModel->likeSongInMonth2 = $this->SongModel->getCountLikeSongInMonth2();
        $this->SongModel->likeSongInMonth1 = $this->SongModel->getCountLikeSongInMonth1();
        $this->SongModel->likeSongInMonth3 = $this->SongModel->getCountLikeSongInMonth3();
        $this->SongModel->likeSongInMonth5 = $this->SongModel->getCountLikeSongInMonth5();
        $this->SongModel->likeSongInMonth6 = $this->SongModel->getCountLikeSongInMonth6();
        $this->SongModel->likeSongInMonth7 = $this->SongModel->getCountLikeSongInMonth7();
        $this->SongModel->likeSongInMonth8 = $this->SongModel->getCountLikeSongInMonth8();
        $this->SongModel->likeSongInMonth9 = $this->SongModel->getCountLikeSongInMonth9();
        $this->SongModel->likeSongInMonth10 = $this->SongModel->getCountLikeSongInMonth10();
        $this->SongModel->likeSongInMonth11 = $this->SongModel->getCountLikeSongInMonth11();
        $this->SongModel->likeSongInMonth12 = $this->SongModel->getCountLikeSongInMonth12();
        
       
    }

    public function index()
    {   
       

        $this->view('Listener/indexAdmin_dashboard', [
          
            'Page' => 'AdminDashBoard'
        ]);
        $this->change_num_postcad(); 
        $this->change_num_song(); 
        $this->change_num_album();
        $this->change_num_artist();

        $this->changeChartBar();
        $this->changeChartBar_0();
      
        $this->changeChartAreaForMonth4();
        $this->changeChartAreaForMonth2();
        $this->changeChartAreaForMonth1();
        $this->changeChartAreaForMonth3();
        $this->changeChartAreaForMonth5();
        $this->changeChartAreaForMonth6();
        $this->changeChartAreaForMonth7();
        $this->changeChartAreaForMonth8();
        $this->changeChartAreaForMonth9();
        $this->changeChartAreaForMonth10();
        $this->changeChartAreaForMonth11();
        $this->changeChartAreaForMonth12();
        // $dataTableLikeSong = $this->SongModel->GetDataTableSongLike();
        // $this->ShowdateTableSongLike($dataTableLikeSong);
       
        
       
    }

    public function change_num_postcad()
    {
        $count = $this->PodcastModel->getCount(); 
        echo "<script>document.getElementById('Num_podcast').innerHTML = '{$count}';</script>"; 
    }

    public function change_num_song()
    {
        $count = $this->SongModel->getCount(); 
        echo "<script>document.getElementById('Num_song').innerHTML = '{$count}';</script>"; 
    }

    public function change_num_album()
    {
        $count = $this->AlbumModel->getCount(); 
        echo "<script>document.getElementById('Num_album').innerHTML = '{$count}';</script>"; 
    }

    public function change_num_artist()
    {
        $count = $this->ArtistModel->getCount(); 
        echo "<script>document.getElementById('Num_artist').innerHTML = '{$count}';</script>"; 
    }

    public function changeChartBar() {
        echo "<script>
            var myLineChart = new Chart(document.getElementById('myBarChart'), {
                type: 'bar',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    datasets: [{
                        label: 'Revenue',
                        backgroundColor: 'rgba(2,117,216,1)',
                        borderColor: 'rgba(2,117,216,1)',
                        data: " . json_encode($this->SongModel->likeSongInYear) . ",
                    }],
                },
                options: {
                    scales: {
                        xAxes: [{
                            time: {
                                unit: 'month'
                            },
                            gridLines: {
                                display: false
                            },
                            ticks: {
                                maxTicksLimit: 12
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                min: 0,
                                max: 50,
                                maxTicksLimit: 10
                            },
                            gridLines: {
                                display: true
                            }
                        }],
                    },
                    legend: {
                        display: false
                    }
                }
            });
        </script>";
    }
    public function changeChartBar_0() {
      echo "<script>
          var myLineChart = new Chart(document.getElementById('myBarChart_none'), {
              type: 'bar',
              data: {
                  labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                  datasets: [{
                      label: 'Revenue',
                      backgroundColor: 'rgba(2,117,216,1)',
                      borderColor: 'rgba(2,117,216,1)',
                      data: [],
                  }],
              },
              options: {
                  scales: {
                      xAxes: [{
                          time: {
                              unit: 'month'
                          },
                          gridLines: {
                              display: false
                          },
                          ticks: {
                              maxTicksLimit: 12
                          }
                      }],
                      yAxes: [{
                          ticks: {
                              min: 0,
                              max: 50,
                              maxTicksLimit: 10
                          },
                          gridLines: {
                              display: true
                          }
                      }],
                  },
                  legend: {
                      display: false
                  }
              }
          });
      </script>";
  }
    public function changeChartAreaForMonth4() {
        echo "<script>
        var ctx = document.getElementById('myAreaChart');
        var myLineChart = new Chart(ctx, {
          type: 'line',
          data: {
            labels: ['Day 1','Day 2','Day 3','Day 4','Day 5','Day 6','Day 7','Day 8','Day 9','Day 10','Day 11','Day 12','Day 13','Day 14','Day 15','Day 16','Day 17','Day 18','Day 19','Day 20','Day 21','Day 22','Day 23','Day 24','Day 25','Day 26','Day 27','Day 28','Day 29','Day 30','Day 31',],
            datasets: [{
              label: 'Sessions',
              lineTension: 0.1,
              backgroundColor: 'rgba(2,117,216,0.2)',
              borderColor: 'rgba(2,117,216,1)',
              pointRadius: 5,
              pointBackgroundColor: 'rgba(2,117,216,1)',
              pointBorderColor: 'rgba(255,255,255,0.8)',
              pointHoverRadius: 5,
              pointHoverBackgroundColor: 'rgba(2,117,216,1)',
              pointHitRadius: 50,
              pointBorderWidth: 2,
              data:"  . json_encode($this->SongModel->likeSongInMonth4) . ",
            }],
          },
          options: {
            scales: {
              xAxes: [{
                time: {
                  unit: 'date'
                },
                gridLines: {
                  display: false
                },
                ticks: {
                  maxTicksLimit: 15
                }
              }],
              yAxes: [{
                ticks: {
                  min: 0,
                  max: 50,
                  maxTicksLimit: 10
                },
                gridLines: {
                  color: 'rgba(0, 0, 0, .125)',
                }
              }],
            },
            legend: {
              display: false
            }
          }
        });
        </script>";
    }
   
    public function changeChartAreaForMonth2() {
      echo "<script>
      var ctx = document.getElementById('myAreaChart_th2');
      var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['Day 1','Day 2','Day 3','Day 4','Day 5','Day 6','Day 7','Day 8','Day 9','Day 10','Day 11','Day 12','Day 13','Day 14','Day 15','Day 16','Day 17','Day 18','Day 19','Day 20','Day 21','Day 22','Day 23','Day 24','Day 25','Day 26','Day 27','Day 28','Day 29','Day 30','Day 31',],
          datasets: [{
            label: 'Sessions',
            lineTension: 0.1,
            backgroundColor: 'rgba(2,117,216,0.2)',
            borderColor: 'rgba(2,117,216,1)',
            pointRadius: 5,
            pointBackgroundColor: 'rgba(2,117,216,1)',
            pointBorderColor: 'rgba(255,255,255,0.8)',
            pointHoverRadius: 5,
            pointHoverBackgroundColor: 'rgba(2,117,216,1)',
            pointHitRadius: 50,
            pointBorderWidth: 2,
            data:"  . json_encode($this->SongModel->likeSongInMonth2) . ",
          }],
        },
        options: {
          scales: {
            xAxes: [{
              time: {
                unit: 'date'
              },
              gridLines: {
                display: false
              },
              ticks: {
                maxTicksLimit: 15
              }
            }],
            yAxes: [{
              ticks: {
                min: 0,
                max: 50,
                maxTicksLimit: 10
              },
              gridLines: {
                color: 'rgba(0, 0, 0, .125)',
              }
            }],
          },
          legend: {
            display: false
          }
        }
      });
      </script>";
  }
  public function changeChartAreaForMonth1() {
    echo "<script>
    var ctx = document.getElementById('myAreaChart_th1');
    var myLineChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Day 1','Day 2','Day 3','Day 4','Day 5','Day 6','Day 7','Day 8','Day 9','Day 10','Day 11','Day 12','Day 13','Day 14','Day 15','Day 16','Day 17','Day 18','Day 19','Day 20','Day 21','Day 22','Day 23','Day 24','Day 25','Day 26','Day 27','Day 28','Day 29','Day 30','Day 31',],
        datasets: [{
          label: 'Sessions',
          lineTension: 0.1,
          backgroundColor: 'rgba(2,117,216,0.2)',
          borderColor: 'rgba(2,117,216,1)',
          pointRadius: 5,
          pointBackgroundColor: 'rgba(2,117,216,1)',
          pointBorderColor: 'rgba(255,255,255,0.8)',
          pointHoverRadius: 5,
          pointHoverBackgroundColor: 'rgba(2,117,216,1)',
          pointHitRadius: 50,
          pointBorderWidth: 2,
          data:"  . json_encode($this->SongModel->likeSongInMonth1) . ",
        }],
      },
      options: {
        scales: {
          xAxes: [{
            time: {
              unit: 'date'
            },
            gridLines: {
              display: false
            },
            ticks: {
              maxTicksLimit: 15
            }
          }],
          yAxes: [{
            ticks: {
              min: 0,
              max: 50,
              maxTicksLimit: 10
            },
            gridLines: {
              color: 'rgba(0, 0, 0, .125)',
            }
          }],
        },
        legend: {
          display: false
        }
      }
    });
    </script>";
}
public function changeChartAreaForMonth3() {
  echo "<script>
  var ctx = document.getElementById('myAreaChart_th3');
  var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Day 1','Day 2','Day 3','Day 4','Day 5','Day 6','Day 7','Day 8','Day 9','Day 10','Day 11','Day 12','Day 13','Day 14','Day 15','Day 16','Day 17','Day 18','Day 19','Day 20','Day 21','Day 22','Day 23','Day 24','Day 25','Day 26','Day 27','Day 28','Day 29','Day 30','Day 31',],
      datasets: [{
        label: 'Sessions',
        lineTension: 0.1,
        backgroundColor: 'rgba(2,117,216,0.2)',
        borderColor: 'rgba(2,117,216,1)',
        pointRadius: 5,
        pointBackgroundColor: 'rgba(2,117,216,1)',
        pointBorderColor: 'rgba(255,255,255,0.8)',
        pointHoverRadius: 5,
        pointHoverBackgroundColor: 'rgba(2,117,216,1)',
        pointHitRadius: 50,
        pointBorderWidth: 2,
        data:"  . json_encode($this->SongModel->likeSongInMonth3) . ",
      }],
    },
    options: {
      scales: {
        xAxes: [{
          time: {
            unit: 'date'
          },
          gridLines: {
            display: false
          },
          ticks: {
            maxTicksLimit: 15
          }
        }],
        yAxes: [{
          ticks: {
            min: 0,
            max: 50,
            maxTicksLimit: 10
          },
          gridLines: {
            color: 'rgba(0, 0, 0, .125)',
          }
        }],
      },
      legend: {
        display: false
      }
    }
  });
  </script>";
}
public function changeChartAreaForMonth5() {
  echo "<script>
  var ctx = document.getElementById('myAreaChart_th5');
  var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Day 1','Day 2','Day 3','Day 4','Day 5','Day 6','Day 7','Day 8','Day 9','Day 10','Day 11','Day 12','Day 13','Day 14','Day 15','Day 16','Day 17','Day 18','Day 19','Day 20','Day 21','Day 22','Day 23','Day 24','Day 25','Day 26','Day 27','Day 28','Day 29','Day 30','Day 31',],
      datasets: [{
        label: 'Sessions',
        lineTension: 0.1,
        backgroundColor: 'rgba(2,117,216,0.2)',
        borderColor: 'rgba(2,117,216,1)',
        pointRadius: 5,
        pointBackgroundColor: 'rgba(2,117,216,1)',
        pointBorderColor: 'rgba(255,255,255,0.8)',
        pointHoverRadius: 5,
        pointHoverBackgroundColor: 'rgba(2,117,216,1)',
        pointHitRadius: 50,
        pointBorderWidth: 2,
        data:"  . json_encode($this->SongModel->likeSongInMonth5) . ",
      }],
    },
    options: {
      scales: {
        xAxes: [{
          time: {
            unit: 'date'
          },
          gridLines: {
            display: false
          },
          ticks: {
            maxTicksLimit: 15
          }
        }],
        yAxes: [{
          ticks: {
            min: 0,
            max: 50,
            maxTicksLimit: 10
          },
          gridLines: {
            color: 'rgba(0, 0, 0, .125)',
          }
        }],
      },
      legend: {
        display: false
      }
    }
  });
  </script>";
}
public function changeChartAreaForMonth6() {
  echo "<script>
  var ctx = document.getElementById('myAreaChart_th6');
  var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Day 1','Day 2','Day 3','Day 4','Day 5','Day 6','Day 7','Day 8','Day 9','Day 10','Day 11','Day 12','Day 13','Day 14','Day 15','Day 16','Day 17','Day 18','Day 19','Day 20','Day 21','Day 22','Day 23','Day 24','Day 25','Day 26','Day 27','Day 28','Day 29','Day 30','Day 31',],
      datasets: [{
        label: 'Sessions',
        lineTension: 0.1,
        backgroundColor: 'rgba(2,117,216,0.2)',
        borderColor: 'rgba(2,117,216,1)',
        pointRadius: 5,
        pointBackgroundColor: 'rgba(2,117,216,1)',
        pointBorderColor: 'rgba(255,255,255,0.8)',
        pointHoverRadius: 5,
        pointHoverBackgroundColor: 'rgba(2,117,216,1)',
        pointHitRadius: 50,
        pointBorderWidth: 2,
        data:"  . json_encode($this->SongModel->likeSongInMonth6) . ",
      }],
    },
    options: {
      scales: {
        xAxes: [{
          time: {
            unit: 'date'
          },
          gridLines: {
            display: false
          },
          ticks: {
            maxTicksLimit: 15
          }
        }],
        yAxes: [{
          ticks: {
            min: 0,
            max: 50,
            maxTicksLimit: 10
          },
          gridLines: {
            color: 'rgba(0, 0, 0, .125)',
          }
        }],
      },
      legend: {
        display: false
      }
    }
  });
  </script>";
}
public function changeChartAreaForMonth7() {
  echo "<script>
  var ctx = document.getElementById('myAreaChart_th7');
  var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Day 1','Day 2','Day 3','Day 4','Day 5','Day 6','Day 7','Day 8','Day 9','Day 10','Day 11','Day 12','Day 13','Day 14','Day 15','Day 16','Day 17','Day 18','Day 19','Day 20','Day 21','Day 22','Day 23','Day 24','Day 25','Day 26','Day 27','Day 28','Day 29','Day 30','Day 31',],
      datasets: [{
        label: 'Sessions',
        lineTension: 0.1,
        backgroundColor: 'rgba(2,117,216,0.2)',
        borderColor: 'rgba(2,117,216,1)',
        pointRadius: 5,
        pointBackgroundColor: 'rgba(2,117,216,1)',
        pointBorderColor: 'rgba(255,255,255,0.8)',
        pointHoverRadius: 5,
        pointHoverBackgroundColor: 'rgba(2,117,216,1)',
        pointHitRadius: 50,
        pointBorderWidth: 2,
        data:"  . json_encode($this->SongModel->likeSongInMonth7) . ",
      }],
    },
    options: {
      scales: {
        xAxes: [{
          time: {
            unit: 'date'
          },
          gridLines: {
            display: false
          },
          ticks: {
            maxTicksLimit: 15
          }
        }],
        yAxes: [{
          ticks: {
            min: 0,
            max: 50,
            maxTicksLimit: 10
          },
          gridLines: {
            color: 'rgba(0, 0, 0, .125)',
          }
        }],
      },
      legend: {
        display: false
      }
    }
  });
  </script>";
}
public function changeChartAreaForMonth8() {
  echo "<script>
  var ctx = document.getElementById('myAreaChart_th8');
  var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Day 1','Day 2','Day 3','Day 4','Day 5','Day 6','Day 7','Day 8','Day 9','Day 10','Day 11','Day 12','Day 13','Day 14','Day 15','Day 16','Day 17','Day 18','Day 19','Day 20','Day 21','Day 22','Day 23','Day 24','Day 25','Day 26','Day 27','Day 28','Day 29','Day 30','Day 31',],
      datasets: [{
        label: 'Sessions',
        lineTension: 0.1,
        backgroundColor: 'rgba(2,117,216,0.2)',
        borderColor: 'rgba(2,117,216,1)',
        pointRadius: 5,
        pointBackgroundColor: 'rgba(2,117,216,1)',
        pointBorderColor: 'rgba(255,255,255,0.8)',
        pointHoverRadius: 5,
        pointHoverBackgroundColor: 'rgba(2,117,216,1)',
        pointHitRadius: 50,
        pointBorderWidth: 2,
        data:"  . json_encode($this->SongModel->likeSongInMonth8) . ",
      }],
    },
    options: {
      scales: {
        xAxes: [{
          time: {
            unit: 'date'
          },
          gridLines: {
            display: false
          },
          ticks: {
            maxTicksLimit: 15
          }
        }],
        yAxes: [{
          ticks: {
            min: 0,
            max: 50,
            maxTicksLimit: 10
          },
          gridLines: {
            color: 'rgba(0, 0, 0, .125)',
          }
        }],
      },
      legend: {
        display: false
      }
    }
  });
  </script>";
}
public function changeChartAreaForMonth9() {
  echo "<script>
  var ctx = document.getElementById('myAreaChart_th9');
  var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Day 1','Day 2','Day 3','Day 4','Day 5','Day 6','Day 7','Day 8','Day 9','Day 10','Day 11','Day 12','Day 13','Day 14','Day 15','Day 16','Day 17','Day 18','Day 19','Day 20','Day 21','Day 22','Day 23','Day 24','Day 25','Day 26','Day 27','Day 28','Day 29','Day 30','Day 31',],
      datasets: [{
        label: 'Sessions',
        lineTension: 0.1,
        backgroundColor: 'rgba(2,117,216,0.2)',
        borderColor: 'rgba(2,117,216,1)',
        pointRadius: 5,
        pointBackgroundColor: 'rgba(2,117,216,1)',
        pointBorderColor: 'rgba(255,255,255,0.8)',
        pointHoverRadius: 5,
        pointHoverBackgroundColor: 'rgba(2,117,216,1)',
        pointHitRadius: 50,
        pointBorderWidth: 2,
        data:"  . json_encode($this->SongModel->likeSongInMonth9) . ",
      }],
    },
    options: {
      scales: {
        xAxes: [{
          time: {
            unit: 'date'
          },
          gridLines: {
            display: false
          },
          ticks: {
            maxTicksLimit: 15
          }
        }],
        yAxes: [{
          ticks: {
            min: 0,
            max: 50,
            maxTicksLimit: 10
          },
          gridLines: {
            color: 'rgba(0, 0, 0, .125)',
          }
        }],
      },
      legend: {
        display: false
      }
    }
  });
  </script>";
}
public function changeChartAreaForMonth10() {
  echo "<script>
  var ctx = document.getElementById('myAreaChart_th10');
  var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Day 1','Day 2','Day 3','Day 4','Day 5','Day 6','Day 7','Day 8','Day 9','Day 10','Day 11','Day 12','Day 13','Day 14','Day 15','Day 16','Day 17','Day 18','Day 19','Day 20','Day 21','Day 22','Day 23','Day 24','Day 25','Day 26','Day 27','Day 28','Day 29','Day 30','Day 31',],
      datasets: [{
        label: 'Sessions',
        lineTension: 0.1,
        backgroundColor: 'rgba(2,117,216,0.2)',
        borderColor: 'rgba(2,117,216,1)',
        pointRadius: 5,
        pointBackgroundColor: 'rgba(2,117,216,1)',
        pointBorderColor: 'rgba(255,255,255,0.8)',
        pointHoverRadius: 5,
        pointHoverBackgroundColor: 'rgba(2,117,216,1)',
        pointHitRadius: 50,
        pointBorderWidth: 2,
        data:"  . json_encode($this->SongModel->likeSongInMonth10) . ",
      }],
    },
    options: {
      scales: {
        xAxes: [{
          time: {
            unit: 'date'
          },
          gridLines: {
            display: false
          },
          ticks: {
            maxTicksLimit: 15
          }
        }],
        yAxes: [{
          ticks: {
            min: 0,
            max: 50,
            maxTicksLimit: 10
          },
          gridLines: {
            color: 'rgba(0, 0, 0, .125)',
          }
        }],
      },
      legend: {
        display: false
      }
    }
  });
  </script>";
}
public function changeChartAreaForMonth11() {
  echo "<script>
  var ctx = document.getElementById('myAreaChart_th11');
  var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Day 1','Day 2','Day 3','Day 4','Day 5','Day 6','Day 7','Day 8','Day 9','Day 10','Day 11','Day 12','Day 13','Day 14','Day 15','Day 16','Day 17','Day 18','Day 19','Day 20','Day 21','Day 22','Day 23','Day 24','Day 25','Day 26','Day 27','Day 28','Day 29','Day 30','Day 31',],
      datasets: [{
        label: 'Sessions',
        lineTension: 0.1,
        backgroundColor: 'rgba(2,117,216,0.2)',
        borderColor: 'rgba(2,117,216,1)',
        pointRadius: 5,
        pointBackgroundColor: 'rgba(2,117,216,1)',
        pointBorderColor: 'rgba(255,255,255,0.8)',
        pointHoverRadius: 5,
        pointHoverBackgroundColor: 'rgba(2,117,216,1)',
        pointHitRadius: 50,
        pointBorderWidth: 2,
        data:"  . json_encode($this->SongModel->likeSongInMonth11) . ",
      }],
    },
    options: {
      scales: {
        xAxes: [{
          time: {
            unit: 'date'
          },
          gridLines: {
            display: false
          },
          ticks: {
            maxTicksLimit: 15
          }
        }],
        yAxes: [{
          ticks: {
            min: 0,
            max: 50,
            maxTicksLimit: 10
          },
          gridLines: {
            color: 'rgba(0, 0, 0, .125)',
          }
        }],
      },
      legend: {
        display: false
      }
    }
  });
  </script>";
}
public function changeChartAreaForMonth12() {
  echo "<script>
  var ctx = document.getElementById('myAreaChart_th12');
  var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Day 1','Day 2','Day 3','Day 4','Day 5','Day 6','Day 7','Day 8','Day 9','Day 10','Day 11','Day 12','Day 13','Day 14','Day 15','Day 16','Day 17','Day 18','Day 19','Day 20','Day 21','Day 22','Day 23','Day 24','Day 25','Day 26','Day 27','Day 28','Day 29','Day 30','Day 31',],
      datasets: [{
        label: 'Sessions',
        lineTension: 0.1,
        backgroundColor: 'rgba(2,117,216,0.2)',
        borderColor: 'rgba(2,117,216,1)',
        pointRadius: 5,
        pointBackgroundColor: 'rgba(2,117,216,1)',
        pointBorderColor: 'rgba(255,255,255,0.8)',
        pointHoverRadius: 5,
        pointHoverBackgroundColor: 'rgba(2,117,216,1)',
        pointHitRadius: 50,
        pointBorderWidth: 2,
        data:"  . json_encode($this->SongModel->likeSongInMonth12) . ",
      }],
    },
    options: {
      scales: {
        xAxes: [{
          time: {
            unit: 'date'
          },
          gridLines: {
            display: false
          },
          ticks: {
            maxTicksLimit: 15
          }
        }],
        yAxes: [{
          ticks: {
            min: 0,
            max: 50,
            maxTicksLimit: 10
          },
          gridLines: {
            color: 'rgba(0, 0, 0, .125)',
          }
        }],
      },
      legend: {
        display: false
      }
    }
  });
  </script>";
}
public function ShowdateTableSongLike($dataTableLikeSong)
{   
    $html = '';
   
    $html .= '<div class="card mb-4"  style="margin: 0px 20px">';
    $html .= '<div class="card-header">';
    $html .= '<i class="fas fa-table me-1"></i> DataTable';
    $html .= '</div>';
    $html .= '<div class="card-body">';
    $html .= '<table id="datatablesSimple" style="font-size: 14px">';
    $html .= '<thead>';
    $html .= '<tr>';
    $html .= '<th>SongName</th>';
    $html .= '<th>ArtistName</th>';
    $html .= '<th>AlbumName</th>';
    $html .= '<th>SongLength</th>';
    $html .= '<th>TotalLikes</th>';
    $html .= '</tr>';
    $html .= '</thead>';
    $html .= '<tfoot>';
    $html .= '<tr>';
    $html .= '<th>SongName</th>';
    $html .= '<th>ArtistName</th>';
    $html .= '<th>AlbumName</th>';
    $html .= '<th>SongLength</th>';
    $html .= '<th>TotalLikes</th>';
    $html .= '</tr>';
    $html .= '</tfoot>';
    $html .= '<tbody>';
    foreach ($dataTableLikeSong as $row) {
        $html .= '<tr>';
        $html .= '<td>'.$row[0].'</td>';
        $html .= '<td>'.$row[1].'</td>';
        $html .= '<td>'.$row[2].'</td>';
        $html .= '<td>'.$row[3].'</td>';
        $html .= '<td>'.$row[4].'</td>';
        $html .= '</tr>';
    }
    $html .= '</tbody>';
    $html .= '</table>';
    $html .= '</div>';
    $html .= '</div>';
    
  

    echo $html;
}

    
  }
?>