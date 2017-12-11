<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="css/leaflet.css" />
        <link rel="stylesheet" type="text/css" href="css/qgis2web.css">
        <link rel="stylesheet" href="css/MarkerCluster.css" />
        <link rel="stylesheet" href="css/MarkerCluster.Default.css" />
        <link rel="stylesheet" href="css/L.Control.MousePosition.css" />
        <link rel="stylesheet" href="css/leaflet.defaultextent.css" />
        <link rel="stylesheet" href="css/leaflet-search.css" />
        <link rel="stylesheet" href="css/leaflet.css"><link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css"><link rel="stylesheet" href="css/L.Control.Locate.min.css">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css"
    integrity="sha512-M2wvCLH6DSRazYeZRIm1JnYyh22purTM+FDB5CsyxtQJYeKq83arPe5wgbNmcFXGqiSH2XR8dT/fJISVA1r/zQ=="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"
    integrity="sha512-lInM/apFSqyy1o6s89K4iQUKg6ppXEgsVxT35HbzUupEVRh2Eu9Wdl4tHj7dZO0s1uvplcYGmt3498TtHq+log=="
    crossorigin=""></script>
        <script src="https://unpkg.com/esri-leaflet@2.1.1/dist/esri-leaflet.js"
    integrity="sha512-ECQqaYZke9cSdqlFG08zSkudgrdF6I1d8ViSa7I3VIszJyVqw4ng1G8sehEXlumdMnFYfzY0tMgdQa4WCs9IUw=="
    crossorigin=""></script>
        <style>
        html, body, #map {
            width: 100%;
            height: 100%;
            margin: 0px;
            position: relative;
        }
        </style>
 

<title>Fishing Ground</title>
<link href="img/ub.jpg" rel="shortcut icon">
    </head>
    <body>
        <div id="map">
        </div>
        <script src="js/qgis2web_expressions.js"></script>
        <script src="js/multi-style-layer.js"></script>
        <script src="js/leaflet-heat.js"></script>
        <script src="js/L.Control.Locate.min.js"></script>
        <script src="js/leaflet-svg-shape-markers.min.js"></script>
        <script src="js/leaflet.rotatedMarker.js"></script>
        <script src="js/OSMBuildings-Leaflet.js"></script>
        <script src="js/leaflet-hash.js"></script>
        <script src="js/leaflet-tilelayer-wmts.js"></script>
        <script src="js/Autolinker.min.js"></script>
        <script src="js/leaflet.markercluster.js"></script>
        <script src="js/L.Control.MousePosition.js"></script>
        <script src="js/leaflet.defaultextent.js"></script>
        <script src="js/leaflet-search.js"></script>
        <script src="js/leaflet.latlng-graticule.js"></script>
        <script src="data/AreaOperasiPukatKantong_0.js"></script>
        <script src="data/AreaOperasiPukatCincin_1.js"></script>
        <script src="data/AreaOperasiPerangkap_2.js"></script>
        <script src="data/AreaOperasiPengumpulKerang_3.js"></script>
        <script src="data/AreaOperasiPancing_4.js"></script>
        <script src="data/AreaOperasiJaringIngsang_5.js"></script>
        <script src="data/JalurOperasiPukatKantong_6.js"></script>
        <script src="data/JalurOperasiPukatCincin_7.js"></script>
        <script src="data/JalurOperasiPerangkap_8.js"></script>
        <script src="data/JalurOperasiPengumpulKerang_9.js"></script>
        <script src="data/JalurOperasiPancing_10.js"></script>
        <script src="data/JalurOperasiJaringIngsang_11.js"></script>
        <script src="data/DaerahPenangkapanPukatKantong_12.js"></script>
        <script src="data/DaerahPenangkapanPukatCincin_13.js"></script>
        <script src="data/DaerahPenangkapanPerangkap_14.js"></script>
        <script src="data/DaerahPenangkapanPengumpulKerang_15.js"></script>
        <script src="data/DaerahPenangkapanPancing_16.js"></script>
        <script src="data/DaerahPenangkapanJaringIngsang_17.js"></script>
        <script src="data/FishingBase_18.js"></script>
        <script>
        var map = L.map('map', {
            zoomControl:true, defaultExtentControl:true, maxZoom:17, minZoom:2
        }).setView([-6.956, 112.981], 8);
        var hash = new L.Hash(map);
        map.attributionControl.addAttribution('&copy; 2017 <b>BURHAN FAUZI SALAM</b>');
        var bounds_group = new L.featureGroup([]);
        var basemap1 =  L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; 2017 <b>BURHAN FAUZI SALAM</b>',
            maxZoom: 28
        });
        basemap1.addTo(map);
        var basemap2 = L.esri.basemapLayer('Imagery');
        basemap2.addTo(map);
        var basemap2 = L.esri.basemapLayer('ImageryLabels');
        basemap2.addTo(map);
        function setBounds() {
        }
        function pop_AreaOperasiPukatKantong_0(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Kabupaten</th>\
                        <td>' + (feature.properties['Kabupaten'] !== null ? Autolinker.link(String(feature.properties['Kabupaten'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Altang</th>\
                        <td>' + (feature.properties['Altang'] !== null ? Autolinker.link(String(feature.properties['Altang'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tipe</th>\
                        <td>' + (feature.properties['Tipe'] !== null ? Autolinker.link(String(feature.properties['Tipe'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_AreaOperasiPukatKantong_0_0() {
            return {
                pane: 'pane_AreaOperasiPukatKantong_0',
                opacity: 1,
                color: 'rgba(0,0,0,0.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(230,0,3,0.392157)',
            }
        }
        map.createPane('pane_AreaOperasiPukatKantong_0');
        map.getPane('pane_AreaOperasiPukatKantong_0').style.zIndex = 400;
        map.getPane('pane_AreaOperasiPukatKantong_0').style['mix-blend-mode'] = 'normal';
        var layer_AreaOperasiPukatKantong_0 = new L.geoJson(json_AreaOperasiPukatKantong_0, {
            attribution: '<a href=""></a>',
            pane: 'pane_AreaOperasiPukatKantong_0',
            onEachFeature: pop_AreaOperasiPukatKantong_0,
            style: style_AreaOperasiPukatKantong_0_0,
        });
        bounds_group.addLayer(layer_AreaOperasiPukatKantong_0);
        function pop_AreaOperasiPukatCincin_1(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Kabupaten</th>\
                        <td>' + (feature.properties['Kabupaten'] !== null ? Autolinker.link(String(feature.properties['Kabupaten'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Altang</th>\
                        <td>' + (feature.properties['Altang'] !== null ? Autolinker.link(String(feature.properties['Altang'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tipe</th>\
                        <td>' + (feature.properties['Tipe'] !== null ? Autolinker.link(String(feature.properties['Tipe'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_AreaOperasiPukatCincin_1_0() {
            return {
                pane: 'pane_AreaOperasiPukatCincin_1',
                opacity: 1,
                color: 'rgba(0,0,0,0.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(58,218,10,0.396078)',
            }
        }
        map.createPane('pane_AreaOperasiPukatCincin_1');
        map.getPane('pane_AreaOperasiPukatCincin_1').style.zIndex = 401;
        map.getPane('pane_AreaOperasiPukatCincin_1').style['mix-blend-mode'] = 'normal';
        var layer_AreaOperasiPukatCincin_1 = new L.geoJson(json_AreaOperasiPukatCincin_1, {
            attribution: '<a href=""></a>',
            pane: 'pane_AreaOperasiPukatCincin_1',
            onEachFeature: pop_AreaOperasiPukatCincin_1,
            style: style_AreaOperasiPukatCincin_1_0,
        });
        bounds_group.addLayer(layer_AreaOperasiPukatCincin_1);
        function pop_AreaOperasiPerangkap_2(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Kabupaten</th>\
                        <td>' + (feature.properties['Kabupaten'] !== null ? Autolinker.link(String(feature.properties['Kabupaten'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Altang</th>\
                        <td>' + (feature.properties['Altang'] !== null ? Autolinker.link(String(feature.properties['Altang'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tipe</th>\
                        <td>' + (feature.properties['Tipe'] !== null ? Autolinker.link(String(feature.properties['Tipe'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_AreaOperasiPerangkap_2_0() {
            return {
                pane: 'pane_AreaOperasiPerangkap_2',
                opacity: 1,
                color: 'rgba(0,0,0,0.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(10,17,213,0.396078)',
            }
        }
        map.createPane('pane_AreaOperasiPerangkap_2');
        map.getPane('pane_AreaOperasiPerangkap_2').style.zIndex = 402;
        map.getPane('pane_AreaOperasiPerangkap_2').style['mix-blend-mode'] = 'normal';
        var layer_AreaOperasiPerangkap_2 = new L.geoJson(json_AreaOperasiPerangkap_2, {
            attribution: '<a href=""></a>',
            pane: 'pane_AreaOperasiPerangkap_2',
            onEachFeature: pop_AreaOperasiPerangkap_2,
            style: style_AreaOperasiPerangkap_2_0,
        });
        bounds_group.addLayer(layer_AreaOperasiPerangkap_2);
        function pop_AreaOperasiPengumpulKerang_3(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Kabupaten</th>\
                        <td>' + (feature.properties['Kabupaten'] !== null ? Autolinker.link(String(feature.properties['Kabupaten'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Altang</th>\
                        <td>' + (feature.properties['Altang'] !== null ? Autolinker.link(String(feature.properties['Altang'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tipe</th>\
                        <td>' + (feature.properties['Tipe'] !== null ? Autolinker.link(String(feature.properties['Tipe'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_AreaOperasiPengumpulKerang_3_0() {
            return {
                pane: 'pane_AreaOperasiPengumpulKerang_3',
                opacity: 1,
                color: 'rgba(0,0,0,0.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(102,0,1,0.4)',
            }
        }
        map.createPane('pane_AreaOperasiPengumpulKerang_3');
        map.getPane('pane_AreaOperasiPengumpulKerang_3').style.zIndex = 403;
        map.getPane('pane_AreaOperasiPengumpulKerang_3').style['mix-blend-mode'] = 'normal';
        var layer_AreaOperasiPengumpulKerang_3 = new L.geoJson(json_AreaOperasiPengumpulKerang_3, {
            attribution: '<a href=""></a>',
            pane: 'pane_AreaOperasiPengumpulKerang_3',
            onEachFeature: pop_AreaOperasiPengumpulKerang_3,
            style: style_AreaOperasiPengumpulKerang_3_0,
        });
        bounds_group.addLayer(layer_AreaOperasiPengumpulKerang_3);
        function pop_AreaOperasiPancing_4(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Kabupaten</th>\
                        <td>' + (feature.properties['Kabupaten'] !== null ? Autolinker.link(String(feature.properties['Kabupaten'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Altang</th>\
                        <td>' + (feature.properties['Altang'] !== null ? Autolinker.link(String(feature.properties['Altang'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tipe</th>\
                        <td>' + (feature.properties['Tipe'] !== null ? Autolinker.link(String(feature.properties['Tipe'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_AreaOperasiPancing_4_0() {
            return {
                pane: 'pane_AreaOperasiPancing_4',
                opacity: 1,
                color: 'rgba(0,0,0,0.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(252,255,37,0.4)',
            }
        }
        map.createPane('pane_AreaOperasiPancing_4');
        map.getPane('pane_AreaOperasiPancing_4').style.zIndex = 404;
        map.getPane('pane_AreaOperasiPancing_4').style['mix-blend-mode'] = 'normal';
        var layer_AreaOperasiPancing_4 = new L.geoJson(json_AreaOperasiPancing_4, {
            attribution: '<a href=""></a>',
            pane: 'pane_AreaOperasiPancing_4',
            onEachFeature: pop_AreaOperasiPancing_4,
            style: style_AreaOperasiPancing_4_0,
        });
        bounds_group.addLayer(layer_AreaOperasiPancing_4);
        function pop_AreaOperasiJaringIngsang_5(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Kabupaten</th>\
                        <td>' + (feature.properties['Kabupaten'] !== null ? Autolinker.link(String(feature.properties['Kabupaten'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Altang</th>\
                        <td>' + (feature.properties['Altang'] !== null ? Autolinker.link(String(feature.properties['Altang'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tipe</th>\
                        <td>' + (feature.properties['Tipe'] !== null ? Autolinker.link(String(feature.properties['Tipe'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_AreaOperasiJaringIngsang_5_0() {
            return {
                pane: 'pane_AreaOperasiJaringIngsang_5',
                opacity: 1,
                color: 'rgba(0,0,0,0.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(173,12,178,0.4)',
            }
        }
        map.createPane('pane_AreaOperasiJaringIngsang_5');
        map.getPane('pane_AreaOperasiJaringIngsang_5').style.zIndex = 405;
        map.getPane('pane_AreaOperasiJaringIngsang_5').style['mix-blend-mode'] = 'normal';
        var layer_AreaOperasiJaringIngsang_5 = new L.geoJson(json_AreaOperasiJaringIngsang_5, {
            attribution: '<a href=""></a>',
            pane: 'pane_AreaOperasiJaringIngsang_5',
            onEachFeature: pop_AreaOperasiJaringIngsang_5,
            style: style_AreaOperasiJaringIngsang_5_0,
        });
        bounds_group.addLayer(layer_AreaOperasiJaringIngsang_5);
        function pop_JalurOperasiPukatKantong_6(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Kabupaten</th>\
                        <td>' + (feature.properties['Kabupaten'] !== null ? Autolinker.link(String(feature.properties['Kabupaten'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Altang</th>\
                        <td>' + (feature.properties['Altang'] !== null ? Autolinker.link(String(feature.properties['Altang'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tipe</th>\
                        <td>' + (feature.properties['Tipe'] !== null ? Autolinker.link(String(feature.properties['Tipe'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_JalurOperasiPukatKantong_6_0() {
            return {
                pane: 'pane_JalurOperasiPukatKantong_6',
                opacity: 1,
                color: 'rgba(239,0,4,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 1.0,
                fillOpacity: 0,
            }
        }
        map.createPane('pane_JalurOperasiPukatKantong_6');
        map.getPane('pane_JalurOperasiPukatKantong_6').style.zIndex = 406;
        map.getPane('pane_JalurOperasiPukatKantong_6').style['mix-blend-mode'] = 'normal';
        var layer_JalurOperasiPukatKantong_6 = new L.geoJson(json_JalurOperasiPukatKantong_6, {
            attribution: '<a href=""></a>',
            pane: 'pane_JalurOperasiPukatKantong_6',
            onEachFeature: pop_JalurOperasiPukatKantong_6,
            style: style_JalurOperasiPukatKantong_6_0,
        });
        bounds_group.addLayer(layer_JalurOperasiPukatKantong_6);
        function pop_JalurOperasiPukatCincin_7(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Kabupaten</th>\
                        <td>' + (feature.properties['Kabupaten'] !== null ? Autolinker.link(String(feature.properties['Kabupaten'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Altang</th>\
                        <td>' + (feature.properties['Altang'] !== null ? Autolinker.link(String(feature.properties['Altang'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tipe</th>\
                        <td>' + (feature.properties['Tipe'] !== null ? Autolinker.link(String(feature.properties['Tipe'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_JalurOperasiPukatCincin_7_0() {
            return {
                pane: 'pane_JalurOperasiPukatCincin_7',
                opacity: 1,
                color: 'rgba(16,255,20,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 1.0,
                fillOpacity: 0,
            }
        }
        map.createPane('pane_JalurOperasiPukatCincin_7');
        map.getPane('pane_JalurOperasiPukatCincin_7').style.zIndex = 407;
        map.getPane('pane_JalurOperasiPukatCincin_7').style['mix-blend-mode'] = 'normal';
        var layer_JalurOperasiPukatCincin_7 = new L.geoJson(json_JalurOperasiPukatCincin_7, {
            attribution: '<a href=""></a>',
            pane: 'pane_JalurOperasiPukatCincin_7',
            onEachFeature: pop_JalurOperasiPukatCincin_7,
            style: style_JalurOperasiPukatCincin_7_0,
        });
        bounds_group.addLayer(layer_JalurOperasiPukatCincin_7);
        function pop_JalurOperasiPerangkap_8(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Kabupaten</th>\
                        <td>' + (feature.properties['Kabupaten'] !== null ? Autolinker.link(String(feature.properties['Kabupaten'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Altang</th>\
                        <td>' + (feature.properties['Altang'] !== null ? Autolinker.link(String(feature.properties['Altang'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tipe</th>\
                        <td>' + (feature.properties['Tipe'] !== null ? Autolinker.link(String(feature.properties['Tipe'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_JalurOperasiPerangkap_8_0() {
            return {
                pane: 'pane_JalurOperasiPerangkap_8',
                opacity: 1,
                color: 'rgba(8,11,214,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 1.0,
                fillOpacity: 0,
            }
        }
        map.createPane('pane_JalurOperasiPerangkap_8');
        map.getPane('pane_JalurOperasiPerangkap_8').style.zIndex = 408;
        map.getPane('pane_JalurOperasiPerangkap_8').style['mix-blend-mode'] = 'normal';
        var layer_JalurOperasiPerangkap_8 = new L.geoJson(json_JalurOperasiPerangkap_8, {
            attribution: '<a href=""></a>',
            pane: 'pane_JalurOperasiPerangkap_8',
            onEachFeature: pop_JalurOperasiPerangkap_8,
            style: style_JalurOperasiPerangkap_8_0,
        });
        bounds_group.addLayer(layer_JalurOperasiPerangkap_8);
        function pop_JalurOperasiPengumpulKerang_9(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Kabupaten</th>\
                        <td>' + (feature.properties['Kabupaten'] !== null ? Autolinker.link(String(feature.properties['Kabupaten'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Altang</th>\
                        <td>' + (feature.properties['Altang'] !== null ? Autolinker.link(String(feature.properties['Altang'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tipe</th>\
                        <td>' + (feature.properties['Tipe'] !== null ? Autolinker.link(String(feature.properties['Tipe'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_JalurOperasiPengumpulKerang_9_0() {
            return {
                pane: 'pane_JalurOperasiPengumpulKerang_9',
                opacity: 1,
                color: 'rgba(105,0,1,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 1.0,
                fillOpacity: 0,
            }
        }
        map.createPane('pane_JalurOperasiPengumpulKerang_9');
        map.getPane('pane_JalurOperasiPengumpulKerang_9').style.zIndex = 409;
        map.getPane('pane_JalurOperasiPengumpulKerang_9').style['mix-blend-mode'] = 'normal';
        var layer_JalurOperasiPengumpulKerang_9 = new L.geoJson(json_JalurOperasiPengumpulKerang_9, {
            attribution: '<a href=""></a>',
            pane: 'pane_JalurOperasiPengumpulKerang_9',
            onEachFeature: pop_JalurOperasiPengumpulKerang_9,
            style: style_JalurOperasiPengumpulKerang_9_0,
        });
        bounds_group.addLayer(layer_JalurOperasiPengumpulKerang_9);
        function pop_JalurOperasiPancing_10(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Kabupaten</th>\
                        <td>' + (feature.properties['Kabupaten'] !== null ? Autolinker.link(String(feature.properties['Kabupaten'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Altang</th>\
                        <td>' + (feature.properties['Altang'] !== null ? Autolinker.link(String(feature.properties['Altang'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tipe</th>\
                        <td>' + (feature.properties['Tipe'] !== null ? Autolinker.link(String(feature.properties['Tipe'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_JalurOperasiPancing_10_0() {
            return {
                pane: 'pane_JalurOperasiPancing_10',
                opacity: 1,
                color: 'rgba(221,228,0,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 1.0,
                fillOpacity: 0,
            }
        }
        map.createPane('pane_JalurOperasiPancing_10');
        map.getPane('pane_JalurOperasiPancing_10').style.zIndex = 410;
        map.getPane('pane_JalurOperasiPancing_10').style['mix-blend-mode'] = 'normal';
        var layer_JalurOperasiPancing_10 = new L.geoJson(json_JalurOperasiPancing_10, {
            attribution: '<a href=""></a>',
            pane: 'pane_JalurOperasiPancing_10',
            onEachFeature: pop_JalurOperasiPancing_10,
            style: style_JalurOperasiPancing_10_0,
        });
        bounds_group.addLayer(layer_JalurOperasiPancing_10);
        function pop_JalurOperasiJaringIngsang_11(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Kabupaten</th>\
                        <td>' + (feature.properties['Kabupaten'] !== null ? Autolinker.link(String(feature.properties['Kabupaten'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Altang</th>\
                        <td>' + (feature.properties['Altang'] !== null ? Autolinker.link(String(feature.properties['Altang'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tipe</th>\
                        <td>' + (feature.properties['Tipe'] !== null ? Autolinker.link(String(feature.properties['Tipe'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_JalurOperasiJaringIngsang_11_0() {
            return {
                pane: 'pane_JalurOperasiJaringIngsang_11',
                opacity: 1,
                color: 'rgba(149,5,140,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 1.0,
                fillOpacity: 0,
            }
        }
        map.createPane('pane_JalurOperasiJaringIngsang_11');
        map.getPane('pane_JalurOperasiJaringIngsang_11').style.zIndex = 411;
        map.getPane('pane_JalurOperasiJaringIngsang_11').style['mix-blend-mode'] = 'normal';
        var layer_JalurOperasiJaringIngsang_11 = new L.geoJson(json_JalurOperasiJaringIngsang_11, {
            attribution: '<a href=""></a>',
            pane: 'pane_JalurOperasiJaringIngsang_11',
            onEachFeature: pop_JalurOperasiJaringIngsang_11,
            style: style_JalurOperasiJaringIngsang_11_0,
        });
        bounds_group.addLayer(layer_JalurOperasiJaringIngsang_11);
        function pop_DaerahPenangkapanPukatKantong_12(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Kabupaten</th>\
                        <td>' + (feature.properties['Kabupaten'] !== null ? Autolinker.link(String(feature.properties['Kabupaten'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Altang</th>\
                        <td>' + (feature.properties['Altang'] !== null ? Autolinker.link(String(feature.properties['Altang'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tipe</th>\
                        <td>' + (feature.properties['Tipe'] !== null ? Autolinker.link(String(feature.properties['Tipe'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_DaerahPenangkapanPukatKantong_12_0() {
            return {
                pane: 'pane_DaerahPenangkapanPukatKantong_12',
                radius: 4.0,
                opacity: 1,
                color: 'rgba(0,0,0,0.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(242,0,4,1.0)',
            }
        }
        map.createPane('pane_DaerahPenangkapanPukatKantong_12');
        map.getPane('pane_DaerahPenangkapanPukatKantong_12').style.zIndex = 412;
        map.getPane('pane_DaerahPenangkapanPukatKantong_12').style['mix-blend-mode'] = 'normal';
        var layer_DaerahPenangkapanPukatKantong_12 = new L.geoJson(json_DaerahPenangkapanPukatKantong_12, {
            attribution: '<a href=""></a>',
            pane: 'pane_DaerahPenangkapanPukatKantong_12',
            onEachFeature: pop_DaerahPenangkapanPukatKantong_12,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_DaerahPenangkapanPukatKantong_12_0(feature));
            },
        });
        bounds_group.addLayer(layer_DaerahPenangkapanPukatKantong_12);
        function pop_DaerahPenangkapanPukatCincin_13(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Kabupaten</th>\
                        <td>' + (feature.properties['Kabupaten'] !== null ? Autolinker.link(String(feature.properties['Kabupaten'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Altang</th>\
                        <td>' + (feature.properties['Altang'] !== null ? Autolinker.link(String(feature.properties['Altang'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tipe</th>\
                        <td>' + (feature.properties['Tipe'] !== null ? Autolinker.link(String(feature.properties['Tipe'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_DaerahPenangkapanPukatCincin_13_0() {
            return {
                pane: 'pane_DaerahPenangkapanPukatCincin_13',
                radius: 4.0,
                opacity: 1,
                color: 'rgba(0,0,0,0.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(3,242,7,1.0)',
            }
        }
        map.createPane('pane_DaerahPenangkapanPukatCincin_13');
        map.getPane('pane_DaerahPenangkapanPukatCincin_13').style.zIndex = 413;
        map.getPane('pane_DaerahPenangkapanPukatCincin_13').style['mix-blend-mode'] = 'normal';
        var layer_DaerahPenangkapanPukatCincin_13 = new L.geoJson(json_DaerahPenangkapanPukatCincin_13, {
            attribution: '<a href=""></a>',
            pane: 'pane_DaerahPenangkapanPukatCincin_13',
            onEachFeature: pop_DaerahPenangkapanPukatCincin_13,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_DaerahPenangkapanPukatCincin_13_0(feature));
            },
        });
        bounds_group.addLayer(layer_DaerahPenangkapanPukatCincin_13);
        function pop_DaerahPenangkapanPerangkap_14(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Kabupaten</th>\
                        <td>' + (feature.properties['Kabupaten'] !== null ? Autolinker.link(String(feature.properties['Kabupaten'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Altang</th>\
                        <td>' + (feature.properties['Altang'] !== null ? Autolinker.link(String(feature.properties['Altang'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tipe</th>\
                        <td>' + (feature.properties['Tipe'] !== null ? Autolinker.link(String(feature.properties['Tipe'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_DaerahPenangkapanPerangkap_14_0() {
            return {
                pane: 'pane_DaerahPenangkapanPerangkap_14',
                radius: 4.0,
                opacity: 1,
                color: 'rgba(0,0,0,0.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(10,6,219,1.0)',
            }
        }
        map.createPane('pane_DaerahPenangkapanPerangkap_14');
        map.getPane('pane_DaerahPenangkapanPerangkap_14').style.zIndex = 414;
        map.getPane('pane_DaerahPenangkapanPerangkap_14').style['mix-blend-mode'] = 'normal';
        var layer_DaerahPenangkapanPerangkap_14 = new L.geoJson(json_DaerahPenangkapanPerangkap_14, {
            attribution: '<a href=""></a>',
            pane: 'pane_DaerahPenangkapanPerangkap_14',
            onEachFeature: pop_DaerahPenangkapanPerangkap_14,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_DaerahPenangkapanPerangkap_14_0(feature));
            },
        });
        bounds_group.addLayer(layer_DaerahPenangkapanPerangkap_14);
        function pop_DaerahPenangkapanPengumpulKerang_15(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Kabupaten</th>\
                        <td>' + (feature.properties['Kabupaten'] !== null ? Autolinker.link(String(feature.properties['Kabupaten'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Altang</th>\
                        <td>' + (feature.properties['Altang'] !== null ? Autolinker.link(String(feature.properties['Altang'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tipe</th>\
                        <td>' + (feature.properties['Tipe'] !== null ? Autolinker.link(String(feature.properties['Tipe'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_DaerahPenangkapanPengumpulKerang_15_0() {
            return {
                pane: 'pane_DaerahPenangkapanPengumpulKerang_15',
                radius: 4.0,
                opacity: 1,
                color: 'rgba(0,0,0,0.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(118,0,1,1.0)',
            }
        }
        map.createPane('pane_DaerahPenangkapanPengumpulKerang_15');
        map.getPane('pane_DaerahPenangkapanPengumpulKerang_15').style.zIndex = 415;
        map.getPane('pane_DaerahPenangkapanPengumpulKerang_15').style['mix-blend-mode'] = 'normal';
        var layer_DaerahPenangkapanPengumpulKerang_15 = new L.geoJson(json_DaerahPenangkapanPengumpulKerang_15, {
            attribution: '<a href=""></a>',
            pane: 'pane_DaerahPenangkapanPengumpulKerang_15',
            onEachFeature: pop_DaerahPenangkapanPengumpulKerang_15,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_DaerahPenangkapanPengumpulKerang_15_0(feature));
            },
        });
        bounds_group.addLayer(layer_DaerahPenangkapanPengumpulKerang_15);
        function pop_DaerahPenangkapanPancing_16(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Kabupaten</th>\
                        <td>' + (feature.properties['Kabupaten'] !== null ? Autolinker.link(String(feature.properties['Kabupaten'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Altang</th>\
                        <td>' + (feature.properties['Altang'] !== null ? Autolinker.link(String(feature.properties['Altang'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tipe</th>\
                        <td>' + (feature.properties['Tipe'] !== null ? Autolinker.link(String(feature.properties['Tipe'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_DaerahPenangkapanPancing_16_0() {
            return {
                pane: 'pane_DaerahPenangkapanPancing_16',
                radius: 4.0,
                opacity: 1,
                color: 'rgba(0,0,0,0.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(221,236,9,1.0)',
            }
        }
        map.createPane('pane_DaerahPenangkapanPancing_16');
        map.getPane('pane_DaerahPenangkapanPancing_16').style.zIndex = 416;
        map.getPane('pane_DaerahPenangkapanPancing_16').style['mix-blend-mode'] = 'normal';
        var layer_DaerahPenangkapanPancing_16 = new L.geoJson(json_DaerahPenangkapanPancing_16, {
            attribution: '<a href=""></a>',
            pane: 'pane_DaerahPenangkapanPancing_16',
            onEachFeature: pop_DaerahPenangkapanPancing_16,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_DaerahPenangkapanPancing_16_0(feature));
            },
        });
        bounds_group.addLayer(layer_DaerahPenangkapanPancing_16);
        function pop_DaerahPenangkapanJaringIngsang_17(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Kabupaten</th>\
                        <td>' + (feature.properties['Kabupaten'] !== null ? Autolinker.link(String(feature.properties['Kabupaten'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Altang</th>\
                        <td>' + (feature.properties['Altang'] !== null ? Autolinker.link(String(feature.properties['Altang'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Tipe</th>\
                        <td>' + (feature.properties['Tipe'] !== null ? Autolinker.link(String(feature.properties['Tipe'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_DaerahPenangkapanJaringIngsang_17_0() {
            return {
                pane: 'pane_DaerahPenangkapanJaringIngsang_17',
                radius: 4.0,
                opacity: 1,
                color: 'rgba(0,0,0,0.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(128,7,122,1.0)',
            }
        }
        map.createPane('pane_DaerahPenangkapanJaringIngsang_17');
        map.getPane('pane_DaerahPenangkapanJaringIngsang_17').style.zIndex = 417;
        map.getPane('pane_DaerahPenangkapanJaringIngsang_17').style['mix-blend-mode'] = 'normal';
        var layer_DaerahPenangkapanJaringIngsang_17 = new L.geoJson(json_DaerahPenangkapanJaringIngsang_17, {
            attribution: '<a href=""></a>',
            pane: 'pane_DaerahPenangkapanJaringIngsang_17',
            onEachFeature: pop_DaerahPenangkapanJaringIngsang_17,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_DaerahPenangkapanJaringIngsang_17_0(feature));
            },
        });
        bounds_group.addLayer(layer_DaerahPenangkapanJaringIngsang_17);
        function pop_FishingBase_18(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Kabupaten</th>\
                        <td>' + (feature.properties['Kabupaten'] !== null ? Autolinker.link(String(feature.properties['Kabupaten'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nama Fishi</th>\
                        <td>' + (feature.properties['Nama Fishi'] !== null ? Autolinker.link(String(feature.properties['Nama Fishi'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Longitude</th>\
                        <td>' + (feature.properties['Longitude'] !== null ? Autolinker.link(String(feature.properties['Longitude'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Latitude</th>\
                        <td>' + (feature.properties['Latitude'] !== null ? Autolinker.link(String(feature.properties['Latitude'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Keterangan</th>\
                        <td>' + (feature.properties['Keterangan'] !== null ? Autolinker.link(String(feature.properties['Keterangan'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kelas</th>\
                        <td>' + (feature.properties['Kelas'] !== null ? Autolinker.link(String(feature.properties['Kelas'])) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jenis Alat</th>\
                        <td>' + (feature.properties['Jenis Alat'] !== null ? Autolinker.link(String(feature.properties['Jenis Alat'])) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 400});
        }

        function style_FishingBase_18_0(feature) {
            switch(String(feature.properties['Kabupaten'])) {
                case 'Gresik':
                    return {
                pane: 'pane_FishingBase_18',
                shape: 'triangle',
                radius: 6.0,
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(68,197,206,1.0)',
            }
                    break;
                case 'Kota Pasuruan':
                    return {
                pane: 'pane_FishingBase_18',
                shape: 'triangle',
                radius: 6.0,
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(185,77,201,1.0)',
            }
                    break;
                case 'Kota Probolinggo':
                    return {
                pane: 'pane_FishingBase_18',
                shape: 'triangle',
                radius: 6.0,
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(61,110,206,1.0)',
            }
                    break;
                case 'Lamongan':
                    return {
                pane: 'pane_FishingBase_18',
                shape: 'triangle',
                radius: 6.0,
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(218,190,130,1.0)',
            }
                    break;
                case 'Pasuruan':
                    return {
                pane: 'pane_FishingBase_18',
                shape: 'triangle',
                radius: 6.0,
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(202,49,131,1.0)',
            }
                    break;
                case 'Probolinggo':
                    return {
                pane: 'pane_FishingBase_18',
                shape: 'triangle',
                radius: 6.0,
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(212,123,116,1.0)',
            }
                    break;
                case 'Sidoarjo':
                    return {
                pane: 'pane_FishingBase_18',
                shape: 'triangle',
                radius: 6.0,
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(59,207,128,1.0)',
            }
                    break;
                case 'Situbondo':
                    return {
                pane: 'pane_FishingBase_18',
                shape: 'triangle',
                radius: 6.0,
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(200,232,112,1.0)',
            }
                    break;
                case 'Tuban':
                    return {
                pane: 'pane_FishingBase_18',
                shape: 'triangle',
                radius: 6.0,
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(109,237,89,1.0)',
            }
                    break;
            }
        }
        map.createPane('pane_FishingBase_18');
        map.getPane('pane_FishingBase_18').style.zIndex = 418;
        map.getPane('pane_FishingBase_18').style['mix-blend-mode'] = 'normal';
        var layer_FishingBase_18 = new L.geoJson(json_FishingBase_18, {
            attribution: '<a href=""></a>',
            pane: 'pane_FishingBase_18',
            onEachFeature: pop_FishingBase_18,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.shapeMarker(latlng, style_FishingBase_18_0(feature));
            },
        });
        bounds_group.addLayer(layer_FishingBase_18);
        map.addLayer(layer_FishingBase_18);
        var baseMaps = {'OSM': basemap1, 'Imagery': basemap2,};
        L.control.layers(baseMaps,{'Fishing Base<br /><table><tr><td style="text-align: center;"><img src="legend/FishingBase_18_Gresik0.png" /></td><td>Gresik</td></tr><tr><td style="text-align: center;"><img src="legend/FishingBase_18_KotaPasuruan1.png" /></td><td>Kota Pasuruan</td></tr><tr><td style="text-align: center;"><img src="legend/FishingBase_18_KotaProbolinggo2.png" /></td><td>Kota Probolinggo</td></tr><tr><td style="text-align: center;"><img src="legend/FishingBase_18_Lamongan3.png" /></td><td>Lamongan</td></tr><tr><td style="text-align: center;"><img src="legend/FishingBase_18_Pasuruan4.png" /></td><td>Pasuruan</td></tr><tr><td style="text-align: center;"><img src="legend/FishingBase_18_Probolinggo5.png" /></td><td>Probolinggo</td></tr><tr><td style="text-align: center;"><img src="legend/FishingBase_18_Sidoarjo6.png" /></td><td>Sidoarjo</td></tr><tr><td style="text-align: center;"><img src="legend/FishingBase_18_Situbondo7.png" /></td><td>Situbondo</td></tr><tr><td style="text-align: center;"><img src="legend/FishingBase_18_Tuban8.png" /></td><td>Tuban</td></tr></table>': layer_FishingBase_18,'<img src="legend/DaerahPenangkapanJaringIngsang_17.png" /> Daerah Penangkapan Jaring Ingsang': layer_DaerahPenangkapanJaringIngsang_17,'<img src="legend/DaerahPenangkapanPancing_16.png" /> Daerah Penangkapan Pancing': layer_DaerahPenangkapanPancing_16,'<img src="legend/DaerahPenangkapanPengumpulKerang_15.png" /> Daerah Penangkapan Pengumpul Kerang': layer_DaerahPenangkapanPengumpulKerang_15,'<img src="legend/DaerahPenangkapanPerangkap_14.png" /> Daerah Penangkapan Perangkap': layer_DaerahPenangkapanPerangkap_14,'<img src="legend/DaerahPenangkapanPukatCincin_13.png" /> Daerah Penangkapan Pukat Cincin': layer_DaerahPenangkapanPukatCincin_13,'<img src="legend/DaerahPenangkapanPukatKantong_12.png" /> Daerah Penangkapan Pukat Kantong': layer_DaerahPenangkapanPukatKantong_12,'<img src="legend/JalurOperasiJaringIngsang_11.png" /> Jalur Operasi Jaring Ingsang': layer_JalurOperasiJaringIngsang_11,'<img src="legend/JalurOperasiPancing_10.png" /> Jalur Operasi Pancing': layer_JalurOperasiPancing_10,'<img src="legend/JalurOperasiPengumpulKerang_9.png" /> Jalur Operasi Pengumpul Kerang': layer_JalurOperasiPengumpulKerang_9,'<img src="legend/JalurOperasiPerangkap_8.png" /> Jalur Operasi Perangkap': layer_JalurOperasiPerangkap_8,'<img src="legend/JalurOperasiPukatCincin_7.png" /> Jalur Operasi Pukat Cincin': layer_JalurOperasiPukatCincin_7,'<img src="legend/JalurOperasiPukatKantong_6.png" /> Jalur Operasi Pukat Kantong': layer_JalurOperasiPukatKantong_6,'<img src="legend/AreaOperasiJaringIngsang_5.png" /> Area Operasi Jaring Ingsang': layer_AreaOperasiJaringIngsang_5,'<img src="legend/AreaOperasiPancing_4.png" /> Area Operasi Pancing': layer_AreaOperasiPancing_4,'<img src="legend/AreaOperasiPengumpulKerang_3.png" /> Area Operasi Pengumpul Kerang': layer_AreaOperasiPengumpulKerang_3,'<img src="legend/AreaOperasiPerangkap_2.png" /> Area Operasi Perangkap': layer_AreaOperasiPerangkap_2,'<img src="legend/AreaOperasiPukatCincin_1.png" /> Area Operasi Pukat Cincin': layer_AreaOperasiPukatCincin_1,'<img src="legend/AreaOperasiPukatKantong_0.png" /> Area Operasi Pukat Kantong': layer_AreaOperasiPukatKantong_0,},{collapsed:false}).addTo(map);

        L.latlngGraticule({
            showLabel: true,
            zoomInterval: [
                {start: 2, end: 3, interval: 30},
                {start: 4, end: 4, interval: 10},
                {start: 5, end: 7, interval: 5},
                {start: 8, end: 8, interval: 1},
                {start: 9, end: 9, interval: 0.5},
                {start: 10, end: 13, interval: 0.25},
            ]
        }).addTo(map);

        L.control.scale({position: 'bottomleft', maxWidth: 100, metric: true, imperial: true, updateWhenIdle: true}).addTo(map);
        L.control.mousePosition().addTo(map);
        L.control.locate().addTo(map);
        setBounds();
        
        </script>
    </body>
</html>
