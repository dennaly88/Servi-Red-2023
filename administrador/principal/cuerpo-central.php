                  <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from materiales";
                        $result=mysqli_query($conexion,$consulta);
                        $materiales = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $materiales = $materiales + 1;
                        }
                    ?>

                    <?php
                  include('sql/conexion.php');
                  $consulta="SELECT * from usuarios";
                  $result=mysqli_query($conexion,$consulta);
                  $usuarios = 0;
                  while($row = mysqli_fetch_array($result))
                  {
                    $usuarios = $usuarios + 1;
                  }
  
                   ?>
                   <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from marcas";
                        $result=mysqli_query($conexion,$consulta);
                        $marcas = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $marcas = $marcas + 1;
                        }
                    ?>
                    <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from equipos";
                        $result=mysqli_query($conexion,$consulta);
                        $equipos = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $equipos = $equipos + 1;
                        }
                    ?>

                      <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from wifi";
                        $result=mysqli_query($conexion,$consulta);
                        $wifi = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $wifi = $wifi + 1;
                        }
                    ?>

                 <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from switch ";
                        $result=mysqli_query($conexion,$consulta);
                        $switch = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $switch = $switch + 1;
                        }
                    ?>
                   <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from router";
                        $result=mysqli_query($conexion,$consulta);
                        $router = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $router = $router + 1;
                        }
                    ?>
                      <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from servidor";
                        $result=mysqli_query($conexion,$consulta);
                        $servidores = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $servidores = $servidores + 1;
                        }
                    ?>





<section class="content">
        <div class="box box-primary"><br>
                  <div class="row">
                    <div class="col-lg-3 col-xs-6">
                      <div class="small-box bg-aqua">
                        <div class="inner">
                          <h3><?php echo $equipos; ?>   </h3>
                          <p>Equipos</p>
                        </div>
                        <div class="icon">
                          <i class="ion-ios-monitor"></i>
                        </div>
                        <a href="../equipos/principal.php" class="small-box-footer">Mas Información<i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                      <div class="small-box bg-green">
                        <div class="inner">
                          <h3><?php echo $wifi; ?><sup style="font-size: 20px"></sup></h3>
                          <p>Equipos Inalambricos</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-wifi"></i>
                        </div>
                        <a href="../wifi/principal.php" class="small-box-footer">Entrar<i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                      <div class="small-box bg-yellow">
                        <div class="inner">
                          <h3>    <?php echo $usuarios; ?></h3>
                          <p>Usuarios Registrados</p>
                        </div>
                        <div class="icon">
                          <i class="ion-person-add"></i>
                         
                        </div>
                        <a href="../usuarios/principal.php" class="small-box-footer">Mas Informacion<i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                      <div class="small-box bg-red">
                        <div class="inner">
                          <h3><?php echo $servidores; ?></h3>
                          <p>Servidores</p>
                        </div>
                        <div class="icon">
                          <i class="ion-ios-toggle"></i>
                        </div>
                        <a href="../servidores/principal.php" class="small-box-footer">Administrar<i class="fa fa-arrow-circle-right"></i></a>
                      </div>
                    </div>
              </div>   

<!------------------------------------------------------------------ DESDE AQUI -------------------------------------------------------------------------->

      <section class="content">
          <div class="row">
            <div class="col-xs-12">
              
              <div class="box box-success">
                <div class="box-header">
                  <i class="fa fa-bar-chart-o"></i>
                  <h3 class="box-title">Conectividad Equipos Inalambricos VTV</h3>
                  <div class="box-tools pull-right">
                              En Tiempo Real
                    <div class="btn-group" id="realtime" data-toggle="btn-toggle">
                      <button type="button" class="btn btn-default btn-xs active" data-toggle="on">Encendido</button>
                      <button type="button" class="btn btn-default btn-xs" data-toggle="off">Apagado</button>
                    </div>
                  </div>
                </div>
                <div class="box-body">
                  <div id="interactive" style="height: 300px;"></div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="box box-danger">
                <div class="box-header">
                  <i class="fa fa-bar-chart-o"></i>
                  <h3 class="box-title">Cargos en la División de Servidores y Redes</h3>
                </div>
                <div class="box-body">
                <div id="donut-chart" style="height: 300px;"></div> 
                </div>
              </div>
<!------------------------------------------------------------------ DESDE AQUI -------------------------------------------------------------------------->

              <div class="box box-info">
                <div class="box-header">
                  <i class="fa fa-bar-chart-o"></i>
                  <h3 class="box-title">Asignación de Equipos</h3>
                </div>
                <div class="box-body">
                <div id="bar-chart" style="height: 300px;"></div>
                </div>
              </div>
            </div>

<!------------------------------------------------------------------ DESDE AQUI -------------------------------------------------------------------------->



            <div class="col-md-6">
              <div class="box box-warning">
                <div class="box-header">
                  <i class="fa fa-bar-chart-o"></i>
                  <h3 class="box-title">Conexiones Remota por SSH</h3>
                </div>
                <div class="box-body">
                <div id="line-chart" style="height: 300px;"></div>
                </div>
              </div>

              
              <div class="box box-success">
                <div class="box-header">
                  <i class="fa fa-bar-chart-o"></i>
                  <h3 class="box-title">Servidores con Servicios en VTV</h3>
                </div>
                <div class="box-body">
                <div id="area-chart" style="height: 338px;" class="full-width-chart"></div>

                
                </div>
              </div>


            </div>
          </div>
        </section>
          <div class="row">
            <section class="col-xs-12 connectedSortable">

              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                  <li class="active"><a href="#revenue-chart" data-toggle="tab">VTV</a></li>
                 
                  <li class="pull-left header"><i class="fa fa-wifi"></i> Graficas de Conexion de Wifi</li>
                  <div class="box box-primary">
                </ul>
                <div class="tab-content no-padding">
                  <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
                </div>
              </div>


              
            
               
              
             
            </section>

<!------------------------------------------------------------------ HASTAAQUI -------------------------------------------------------------------------->
   




            
           </div>
           <?php include('../paginas/pie.php');?>
        <?php include ('../paginas/footer.php');  ?> 
        </section>
        
      </div>
    </div>

<script type="text/javascript">

$(function () {

  var data = [], totalPoints = 100;
  function getRandomData() {

    if (data.length > 0)
      data = data.slice(1);

    while (data.length < totalPoints) {

      var prev = data.length > 0 ? data[data.length - 1] : 50,
              y = prev + Math.random() * 10 - 5;

      if (y < 0) {
        y = 0;
      } else if (y > 100) {
        y = 100;
      }

      data.push(y);
    }
    var res = [];
    for (var i = 0; i < data.length; ++i) {
      res.push([i, data[i]]);
    }

    return res;
  }

  var interactive_plot = $.plot("#interactive", [getRandomData()], {
    grid: {
      borderColor: "#f3f3f3",
      borderWidth: 1,
      tickColor: "#f3f3f3"
    },
    series: {
      shadowSize: 0, 
      color: "#3c8dbc"
    },
    lines: {
      fill: true, 
      color: "#3c8dbc"
    },
    yaxis: {
      min: 0,
      max: 100,
      show: true
    },
    xaxis: {
      show: true
    }
  });

  var updateInterval = 500; 
  var realtime = "on";
  function update() {

    interactive_plot.setData([getRandomData()]);
    interactive_plot.draw();
    if (realtime === "on")
      setTimeout(update, updateInterval);
  }

  if (realtime === "on") {
    update();
  }
  $("#realtime .btn").click(function () {
    if ($(this).data("toggle") === "on") {
      realtime = "on";
    }
    else {
      realtime = "off";
    }
    update();
  });

  var sin = [], cos = [];
  for (var i = 0; i < 14; i += 0.5) {
    sin.push([i, Math.sin(i)]);
    cos.push([i, Math.cos(i)]);
  }
  var line_data1 = {
    data: sin,
    color: "#3c8dbc"
  };
  var line_data2 = {
    data: cos,
    color: "#00c0ef"
  };
  $.plot("#line-chart", [line_data1, line_data2], {
    grid: {
      hoverable: true,
      borderColor: "#f3f3f3",
      borderWidth: 1,
      tickColor: "#f3f3f3"
    },
    series: {
      shadowSize: 0,
      lines: {
        show: true
      },
      points: {
        show: true
      }
    },
    lines: {
      fill: false,
      color: ["#3c8dbc", "#f56954"]
    },
    yaxis: {
      show: true,
    },
    xaxis: {
      show: true
    }
  });
  
  $("<div class='tooltip-inner' id='line-chart-tooltip'></div>").css({
    position: "absolute",
    display: "none",
    opacity: 0.8
  }).appendTo("body");
  $("#line-chart").bind("plothover", function (event, pos, item) {

    if (item) {
      var x = item.datapoint[0].toFixed(2),
              y = item.datapoint[1].toFixed(2);

      $("#line-chart-tooltip").html(item.series.label + " of " + x + " = " + y)
              .css({top: item.pageY + 5, left: item.pageX + 5})
              .fadeIn(200);
    } else {
      $("#line-chart-tooltip").hide();
    }

  });

  var areaData = [[2, 1.0], [3, 3.3], [4, 3.0], [5, 5.5], [6, 7.7], [7, 7.6],
    [8, 8.6], [9, 7.3], [10, 12.3], [11, 10.4], [12, 9.5], [13, 5.7], [14,11.9],
    [15, 7.4], [16, 20.8], [17, 5.7], [18, 6.5], [19, 7.0]];
  $.plot("#area-chart", [areaData], {
    grid: {
      borderWidth: 0
    },
    series: {
      shadowSize: 0, 
      color: "#00c0ef"
    },
    lines: {
      fill: true 
    },
    yaxis: {
      show: false
    },
    xaxis: {
      show: false
    }
  });

  var bar_data = {
    data: [["Enero", 10], ["Febrero", 8], ["Marzo", 4], ["Abril", 13], ["Mayo", 17], ["Junio", 9]],
    color: "#3c8dbc"
  };
  $.plot("#bar-chart", [bar_data], {
    grid: {
      borderWidth: 1,
      borderColor: "#f3f3f3",
      tickColor: "#f3f3f3"
    },
    series: {
      bars: {
        show: true,
        barWidth: 0.5,
        align: "center"
      }
    },
    xaxis: {
      mode: "categories",
      tickLength: 0
    }
  });
 

  var donutData = [
    {label: "Supervisores", data: 35, color: "#3c8dbc"},
    {label: "Profesionales", data: 15, color: "#0073b7"},
    {label: "Tecnicos", data: 50, color: "#00c0ef"}
  ];
  $.plot("#donut-chart", donutData, {
    series: {
      pie: {
        show: true,
        radius: 1,
        innerRadius: 0.5,
        label: {
          show: true,
          radius: 2 / 3,
          formatter: labelFormatter,
          threshold: 0.1
        }

      }
    },
    legend: {
      show: false
    }
  });
 

});

function labelFormatter(label, series) {
  return "<div style='font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;'>"
          + label
          + "<br/>"
          + Math.round(series.percent) + "%</div>";
}
</script>

<!-------------------------------------------------------------------------------------------------   
PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
VENEZOLANA DE TELEVISION C.A 
CANAL 8 
0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->
    
