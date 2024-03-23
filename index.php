<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Cajeros</title>
    <script
      src="https://kit.fontawesome.com/7dccdc2a62.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="main">
      <div class="box_base">
        <div class="box1">
          <form action="index.php" method="post" class="form_reg">
          <section class="section">
            <div class="grid_index">
              <div>
                <a href="./registro.php">
                  <div>
                    <section>
                      <div>
                        <i class="fa-regular fa-address-card register_icon"></i>
                      </div>
                    </section>
                  </div>
                </a>
              </div>
              <div>
                <select class="" id="cajero_select">
                  <option value="">Seleccione Un Cajero</option>
                  <option value="todos">Todos</option>
                  <option value="cajero1">Cajero 1</option>
                  <option value="cajero2">Cajero 2</option>
                  <option value="cajero3">Cajero 3</option>
                </select>
              </div>
              <div>
                <input type="date" />
              </div>
              <div>
                <input type="date" />
              </div>
              <div>
                <input type="submit" value="buscar" class="btn_buscar" />
              </div>
            </div>
          </section>
          </form>
        </div>
        <div class="box2">
          <div class="">
            <section class="section">
              <div class="resultados">
                <div>
                  
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

<!--
    #dededa
    #467186
    #a2b5be
    #0f374c
    #00060d
-->