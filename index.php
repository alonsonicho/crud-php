<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Importaciones Tecnologicas</title>
    <link rel="shortcut icon" href="imagenes/logo.png">
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <header>
      <nav class="header">
        <section class="logo">
          <h2>
            <img src="imagenes/logo.png" height="50" align="left">
          </h2>
        </section>
          <ul><a href="./paginas/registro.php">Consultas</a></ul>
          <ul><a href="#subtitulo1">Nosotros</a></ul>
          <ul><a href="#subtitulo2">Ofrecemos</a></ul>
          <ul><a href="./paginas/listadoProductos.php">Productos</a></ul>
          <ul><a href="./paginas/reclamaciones.php">Libro de Reclamaciones</a></ul>
          <ul><a href="./paginas/login.php">Login</a></ul>
      </nav>
    </header>

      <section class="section">
        <div class="about-center section-center" id="subtitulo1">
          <article class="cont-img">
            <img src="imagenes/nosotros.jpg" alt="nosotros" />
          </article>
          <article class="about">
            <div class="btn-container">
              <button class="tab-btn activeBtn" data-id="nosotros">Nosotros</button>
              <button class="tab-btn" data-id="vision">Vision</button>
              <button class="tab-btn" data-id="valores">Valores</button>
            </div>
            <div class="about-content">
              <div class="block active" id="nosotros">
                <p>
                  Somos una empresa dedicada a la venta de equipos y accesorios tecnologicos orientados a la computación, contamos con los mejores precios en el mercado.Nuestro bienestar es dar a nuestros
                  clientes la satisfaccion de adquirir productos de calidad, tener un servicio especializado en los componentes ofrecidos y dar rapidez y asesoria personalizada en la atencion.
                </p>
              </div>
              <div class="block" id="vision">
                <p>
                  Ser una empresa de reconocido prestigio, con una excelencia en ventas de equipos informaticos y hardware, donde mejoremos continuamente y la calidad de nuestros productos sea la mas optima.
                </p>
              </div>
              <div class="block" id="valores">
                <p>
                  Integridad, pasion, innovacion. Sostenibilidad y trabajo en equipo nos definen.
                </p>
              </div>
            </div>
          </article>
        </div>
      </section>

      <section>
        <form id="cotizador">
          <h2>COTIZA EL TIEMPO Y PRECIO DE TU ENVIO</h2>
          <div class="divCotizador">
            <label>DEPARTAMENTO :</label>
            <select name="departamentos" id="departamentos">
              <option value="0">Lima Metropolitana</option>
              <option value="1">Lima Provincia</option>
              <option value="2">Amazonas</option>
              <option value="3">Áncash</option>
              <option value="4">Apurímac</option>
              <option value="5">Arequipa</option>
              <option value="6">Ayacucho</option>
              <option value="7">Cajamarca</option>
              <option value="8">Callao</option>
              <option value="9">Cusco</option>
              <option value="10">Huancavelica</option>
              <option value="11">Huánuco</option>
              <option value="12">Ica</option>
              <option value="13">Junín</option>
              <option value="14">La Libertad</option>
              <option value="15">Lambayeque</option>
              <option value="16">Loreto</option>
              <option value="17">Madre de Dios</option>
              <option value="18">Moquegua</option>
              <option value="19">Pasco</option>
              <option value="20">Piura</option>
              <option value="21">Puno</option>
              <option value="22">San Martín</option>
              <option value="23">Tacna</option>
              <option value="24">Tumbes</option>
              <option value="25">Ucayali</option>
            </select>
          </div>
          <div id="bloque">
            <!-- DIV con la informacion -->
          </div>
          <div class="divBtn">
            <input type="submit" class="btnCotizar" value="Cotizar">
          </div>
        </form>
      </section>


    <section class="section-ofrecemos">
      <h2 class="subtitulo" id="subtitulo2">OFRECEMOS</h2>
      <div class="cont-ofrecemos">
        <div class="cont-producto">
          <img src="imagenes/monitor.jpg"/>
          <div class="text-producto">
            <h3>MONITOR ASUS TUF VG24VQ GAMING 24" FHD | 144HZ | 1MS | FREESYNC</h3>
            <p>Marca : Asus</p>
            <p>Modelo : VG24VQ</p>
            <p>Producto : Monitores</p>
            <p>Tiempo de respuesta : 1MS</p>
            <p>Frecuencia : 144HZ</p>
            <p>Pantalla : 24" FHD</p>
            <p>Brillo : 350 cd / ㎡</p>
          </div>
        </div>
        <div class="cont-producto">
          <img src="imagenes/placa.jpg"/>
          <div class="text-producto">
            <h3>MAINBOARD GIGABYTE B365M DS3H (B365M DS3H) LGA 1151</h3>
            <p>Marca : Gigabyte</p>
            <p>Modelo : B365M DS3H</p>
            <p>Producto : Mainboard</p>
            <p>Socket : LGA 1151</p>
            <p>Chipset : Intel® B365</p>
            <p>Ranuras de expansión : 4</p>
            <p>Iluminacion : Sin RGB</p>
          </div>
        </div>

        <div class="cont-producto">
          <img src="imagenes/procesador.jpg"/>
          <div class="text-producto">
            <h3>PROCESADOR AMD RYZEN 7 3800XT ( 100-100000279WOF ) 3.9GHZ-36MB | AM4</h3>
            <p>Marca : AMD</p>
            <p>Modelo : RYZEN 7 3800XT</p>
            <p>Producto : Procesadores</p>
            <p>Procesador : AMD Ryzen 7</p>
            <p>Núcleos : 8</p>
            <p>Tipo de memoria : DDR4</p>
            <p>Velocidad : 4.7 GHz</p>
            <p>Caché : 32MB</p>
          </div>
        </div>
      </div>
      <div class="cont-ofrecemos">
        <div class="cont-producto">
          <img src="imagenes/audifono.jpg"/>
          <div class="text-producto">
            <h3>AUDIFONO REDRAGON HYLAS H260 RGB</h3>
            <p>Marca : ReDragon</p>
            <p>Modelo : HYLAS H260</p>
            <p>Producto : Audifonos</p>
            <p>Interfaz : Mini Jack 3.5 mm</p>
            <p>Rango de Sensibilidad : 110 + 3dB SPL a 1 KHz</p>
            <p>Rango de Frecuencia : 20Hz - 20kHz</p>
            <p>Tipo de Almohadilla : Espuma</p>
          </div>
        </div>
        <div class="cont-producto">
          <img src="imagenes/case.jpg"/>
          <div class="text-producto">
            <h3>CASE GAMER HALION STUKA CR11 450W LED VIDRIO TEMPLADO</h3>
            <p>Marca : Halion</p>
            <p>Modelo : STUKA CR11</p>
            <p>Producto : CaseGamer</p>
            <p>Fuente : 450W</p>
            <p>Iluminacion : LED RGB</p>
            <p>Color : Black</p>
          </div>
        </div>
        <div class="cont-producto">
          <img src="imagenes/memoria.jpg"/>
          <div class="text-producto">
            <h3>MEMORIA RAM TEAMGROUP T-FORCE DELTA RGB 32GB 3200MHZ BLACK TF3D432G3200HC16C01</h3>
            <p>Marca : Teamgroup</p>
            <p>Modelo : DELTA RGB</p>
            <p>Producto : Memoria RAM</p>
            <p>Capacidad : 32GB</p>
            <p>Interfaz de memoria : DDR4</p>
            <p>Velocidad del Bus : 3200 MHZ</p>
            <p>Iluminacion : RGB</p>
          </div>
        </div>
      </div>
    </section>

    <table>
      <tr>
        <td colspan="9">
          <marquee>
            <h1>IMPORTACIONES TECNOLOGICAS PC-COMPUTERS</h1>
          </marquee>
        </td>
      </tr>

      <tr>
        <td width="140"></td>
        <td>
          <p style="text-align: center">SOBRE PC-COMPUTERS</p>
          <ul>
            <li>Acerca de nosotros</li>
            <li>Nuestras Ventajas</li>
            <li>Nuestras Tiendas</li>
            <li>Nuestras Cuentas Bancarias</li>
            <li>Preguntas Frecuentes</li>
            <li>Seguimiento de tu Pedido</li>
            <li>Contacte con nosotros</li>
            <li>Mapa del sitio</li>
            <li>Blog</li>
          </ul>
        </td>

        <td width="30"></td>

        <td>
          <p>COMPRAR CON CONFIANZA</p>
          <ul>
            <li>Política de Devoluciones</li>
            <li>Política de Privacidad</li>
            <li>Políticas Comerciales</li>
            <li>Políticas de Garantías</li>
            <li>Política de Envíos</li>
            <li>Libro de Reclamaciones</li>
            <br />
            <br />
          </ul>
        </td>

        <td width="30"></td>

        <td>
          <p>NUESTRAS MARCAS</p>
          <ul>
            <li>HP</li>
            <li>Lenovo</li>
            <li>Apple</li>
            <li>Asus</li>
            <li>Toshiba</li>
            <li>Intel</li>
            <br />
            <br />
            <br />
          </ul>
        </td>

        <td width="30"></td>

        <td id="subtitulo3">
          <p>CONTÁCTANOS</p>
          <ul>
            <li>Oficina Principal:</li>
            <li>Av. Garcilaso de la Vega 1250 Oficina 610 - Lima, 01 Lima</li>
            <li>Email: informes@pccomputer.com.pe</li>
            <li>Teléfono: (01) 426-5927</li>
            <li>Whatsapp: 965-874-276</li>
            <p>Metodos de Pago</p>
            <img src="imagenes/pago.jpg" width="70%" />
          </ul>
        </td>
        <section mapa>
          <td>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.811673795346!2d-77.04032518475287!3d-12.056475091460825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8c6bf925949%3A0x2641e6f7dbe5fffc!2sAv.%20Inca%20Garcilaso%20de%20la%20Vega%2C%20Cercado%20de%20Lima!5e0!3m2!1ses!2spe!4v1651377795746!5m2!1ses!2spe" width="450" height="280" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </td>
        </section>
      </tr>
    </table>
    <script src="./js/cotizador.js"></script>
    <script src="./js/info.js"></script>
  </body>
</html>
