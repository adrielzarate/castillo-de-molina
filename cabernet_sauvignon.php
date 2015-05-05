        <div class="wine container">
            <div class="row">
                <header class="col-sm-8 col-sm-offset-2">
                    <em>Castillo de Molina Reserva</em>
                    <h1>Cabernet Sauvignon</h1>
                    <img class="img-responsive" src="img/cabernet_sauvignon-h.png" alt="">
                </header>
            </div>
            <div class="row">
                <div class="col-sm-5 col-sm-offset-1">
                    <img id="wine-title" class="img-responsive" src="" alt="">
                    <br>
                    <!-- <table>
                        <thead>
                            <tr>
                                <th>
                                    <strong>ANÁLISIS</strong>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>
                                    Aº:
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    AT:
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    pH:
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    AV:
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    AR:
                                </th>
                            </tr>
                        </tbody>
                    </table> -->
                    <a class="pdf-wine" href="">Download Wine Kit</a>
                </div>
                <div class="col-sm-6">
                    <strong>ORIGEN</strong>
                    <p>Este vino es elaborado con las mejores uvas de Cabernet Sauvignon provenientes de los viñedos que Viña San Pedro posee en el Valle de Cachapoal. Los viñedos están plantados en el piedmont de la Cordillera de los Andes, sobre suelos arcillosos con pendientes entre 5 y 15%. El sistema de conducción de los viñedos es en espaldera vertical con riego por goteo.</p>
                    <strong>VENDIMIA</strong>
                    <p>La uva se cosechó a mano durante la ultima semana de abril y la primera de mayo. El rendimiento del viñedo fue de 9 toneladas/ha.</p>
                    <strong>CLIMA</strong>
                    <p>El 2007 fue un año atípico, si bien las temperaturas fueron mas bajas que un año normal. Las variedades tintas, en general, se cosecharon a los menos 10 días más tarde en comparación a un año normal. Los alcoholes fueron en promedio 1º mas bajo de lo normal, y la acidez, más alta, lo que favoreció el color y la frescura.</p>
                    <strong>VINIFICACION</strong>
                    <p>Maceración en frío por 4 días. Fermentación alcohólica realizada con levaduras seleccionadas y temperatura controlada entre 26 a 28º C. Se realizaron 6 remontajes cortos por día. 25 días de maceración total. El 100% de la mezcla tiene una guarda de un año en barricas francesas, de las cuales el 30% son nuevas.</p>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                if ( $("body").hasClass('night')) {
                    $("#wine-title").attr('src', 'img/complejo-b.png');
                } else {
                    $("#wine-title").attr('src','img/complejo-n.png');
                }
            });
        </script>
