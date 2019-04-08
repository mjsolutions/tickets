<svg id="hyatt-place-svg" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 2000 1550" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
    <style type="text/css">
        #hyatt-place-svg{
            width: 100%;
        }
        .fil0 {fill:#0199A4}/*Diamante*/
        .fil1 {fill:#373435}/*black lighten*/
        .fil2 {fill:#FDB916}/*yellow*/
        .fil3 {fill:#050706}/*black*/
        .fil4 {fill:#E8E8E8}/*gray darken-1*/
        .fil5 {fill:#FEFEFE}/*gray*/

        .fnt0 {
            font-weight:normal;
            font-size:50px;
            font-family:'Arial';
        }
        .fnt1 {
            font-weight:900;
            font-size:55px;font-family:sans-serif;
        }
        .block-hover {
            cursor: pointer;
            transition: all 0.2s;
        }
        .block-hover:hover .fil0 { fill: #01838C; }
        .block-hover:hover .fil2 { fill: #E68E09; }
    </style>
</defs>

<g>
    <g id="tabla_colores">
        <g>
            <text x="100" y="180" class="fil1 fnt1">
                <tspan>
                    HOTEL
                </tspan>
                <tspan x="100" y="245">
                    HYATT PLACE
                </tspan>
            </text>
        </g>
        <rect x="100" y="270" width="420" height="5" class="fil1" />

        <rect x="100" y="380" width="60" height="60" class="fil3"/>
        <text x="200" y="425"  class="fil1 fnt0">Escenario</text>

        <rect x="100" y="470" width="60" height="60" class="fil0"/>
        <text x="200" y="515"  class="fil1 fnt0">Zona Diamante</text>
        
        <rect x="100" y="560" width="60" height="60" class="fil2"/>
        <text x="200" y="605"  class="fil1 fnt0">Zona Oro</text>

    </g>
    <g id="diagrama">
        
        <g id="oro-1" class="block-hover" data-tipo="numerado" data-seccion="Oro" data-order-fila="desc" data-order-asiento="asc" data-align="center" data-stage="bottom">
           <rect x="900" y="90" width="900" height="400" class="fil2"/>
           <text x="1270" y="320"  class="fil1 fnt1">ORO</text>
        </g>

        <g id="diamante-1" class="block-hover" data-tipo="numerado" data-seccion="Diamante" data-order-fila="desc" data-order-asiento="asc" data-align="center" data-stage="bottom">
           <rect x="900" y="520" width="900" height="800" class="fil0"/>
           <text x="1190" y="920"  class="fil4 fnt1">DIAMANTE</text>
        </g>
        <g id="escenario">
            <rect x="1000" y="1350" width="700" height="150" class="fil3"/>
            <text x="1210" y="1440" class="fil5 fnt0">ESCENARIO</text>
        </g>


    </g>
</g>

</svg>
