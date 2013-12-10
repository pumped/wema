<?php
	$url = $_GET['url'];

	$data = file_get_contents($url);

	echo $data;

/*	echo '
	


<?xml version="1.0" ?><wfs:FeatureCollection
   xmlns:fs="http://featureserver.org/fs"
   xmlns:wfs="http://www.opengis.net/wfs"
   xmlns:gml="http://www.opengis.net/gml"
   xmlns:ogc="http://www.opengis.net/ogc"
   xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
   xsi:schemaLocation="http://www.opengis.net/wfs http://schemas.opengeospatial.net//wfs/1.0.0/WFS-basic.xsd">

<gml:featureMember gml:id="0"><fs:test fid="0"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.858708559,-17.964163498</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013408.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO132</fs:SITE_ID>
<fs:GRID_CODE>CEM152</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>4</fs:MONTH>
<fs:POINT_X>145.858708559</fs:POINT_X>
<fs:POINT_Y>-17.964163498</fs:POINT_Y>
<fs:SITE_ID_OR>CO1310</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/04/01</fs:DISCOVERY_>
<fs:LATITUDE__>379149.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="1"><fs:test fid="1"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.857938673,-17.9649452064</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013321.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO133</fs:SITE_ID>
<fs:GRID_CODE>CEM181</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>4</fs:MONTH>
<fs:POINT_X>145.857938673</fs:POINT_X>
<fs:POINT_Y>-17.9649452064</fs:POINT_Y>
<fs:SITE_ID_OR>CO1311</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/04/01</fs:DISCOVERY_>
<fs:LATITUDE__>379068.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="2"><fs:test fid="2"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.749154694,-17.9414201734</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015850.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO267</fs:SITE_ID>
<fs:GRID_CODE>CCX336</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>4</fs:MONTH>
<fs:POINT_X>145.749154694</fs:POINT_X>
<fs:POINT_Y>-17.9414201734</fs:POINT_Y>
<fs:SITE_ID_OR>CO217</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/04/15</fs:DISCOVERY_>
<fs:LATITUDE__>367530.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="3"><fs:test fid="3"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.074670309,-17.8112552977</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8030454.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO672</fs:SITE_ID>
<fs:GRID_CODE>BVO470</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>146.074670309</fs:POINT_X>
<fs:POINT_Y>-17.8112552977</fs:POINT_Y>
<fs:SITE_ID_OR>CO6054</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>401935.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="4"><fs:test fid="4"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.729536463,-17.9849318888</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8011021.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P1617</fs:SITE_ID>
<fs:GRID_CODE>CEH885</fs:GRID_CODE>
<fs:METHOD_OF_>BS</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.729536463</fs:POINT_X>
<fs:POINT_Y>-17.9849318888</fs:POINT_Y>
<fs:SITE_ID_OR>COKP363</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>365485.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="5"><fs:test fid="5"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.733485921,-17.9793458403</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8011642.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P768</fs:SITE_ID>
<fs:GRID_CODE>CEH709</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.733485921</fs:POINT_X>
<fs:POINT_Y>-17.9793458403</fs:POINT_Y>
<fs:SITE_ID_OR>CO701</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>365899.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="6"><fs:test fid="6"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.733453855,-17.9798697688</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8011584.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P769</fs:SITE_ID>
<fs:GRID_CODE>CEH739</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.733453855</fs:POINT_X>
<fs:POINT_Y>-17.9798697688</fs:POINT_Y>
<fs:SITE_ID_OR>CO702</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>365896.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="7"><fs:test fid="7"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.732183164,-17.9806115247</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8011501.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P770</fs:SITE_ID>
<fs:GRID_CODE>CEH738</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.732183164</fs:POINT_X>
<fs:POINT_Y>-17.9806115247</fs:POINT_Y>
<fs:SITE_ID_OR>CO703</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>365762.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="8"><fs:test fid="8"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.733032234,-17.986021113</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010903.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P771</fs:SITE_ID>
<fs:GRID_CODE>CFS19</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.733032234</fs:POINT_X>
<fs:POINT_Y>-17.986021113</fs:POINT_Y>
<fs:SITE_ID_OR>CO704</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>365856.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="9"><fs:test fid="9"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.718734801,-17.9899304575</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010460.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P774</fs:SITE_ID>
<fs:GRID_CODE>CFS154</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.718734801</fs:POINT_X>
<fs:POINT_Y>-17.9899304575</fs:POINT_Y>
<fs:SITE_ID_OR>CO708</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>364345.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="10"><fs:test fid="10"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.719709741,-17.9896206111</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010495.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P775</fs:SITE_ID>
<fs:GRID_CODE>CFS155</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.719709741</fs:POINT_X>
<fs:POINT_Y>-17.9896206111</fs:POINT_Y>
<fs:SITE_ID_OR>CO709</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>364448.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="11"><fs:test fid="11"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.719379868,-17.9908384013</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010360.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P776</fs:SITE_ID>
<fs:GRID_CODE>CFS185</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.719379868</fs:POINT_X>
<fs:POINT_Y>-17.9908384013</fs:POINT_Y>
<fs:SITE_ID_OR>CO710</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>364414.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="12"><fs:test fid="12"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.721297385,-17.9894684283</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010513.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P782</fs:SITE_ID>
<fs:GRID_CODE>CFS127</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.721297385</fs:POINT_X>
<fs:POINT_Y>-17.9894684283</fs:POINT_Y>
<fs:SITE_ID_OR>CO711</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>364616.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="13"><fs:test fid="13"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.721315226,-17.9883027967</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010642.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P783</fs:SITE_ID>
<fs:GRID_CODE>CFS97</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.721315226</fs:POINT_X>
<fs:POINT_Y>-17.9883027967</fs:POINT_Y>
<fs:SITE_ID_OR>CO712</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>364617.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="14"><fs:test fid="14"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.726923212,-17.9924695391</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010185.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P784</fs:SITE_ID>
<fs:GRID_CODE>CFS253</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.726923212</fs:POINT_X>
<fs:POINT_Y>-17.9924695391</fs:POINT_Y>
<fs:SITE_ID_OR>CO713</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>365214.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="15"><fs:test fid="15"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.730840716,-17.9861061841</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010892.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P788</fs:SITE_ID>
<fs:GRID_CODE>CFS47</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.730840716</fs:POINT_X>
<fs:POINT_Y>-17.9861061841</fs:POINT_Y>
<fs:SITE_ID_OR>CO717</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>365624.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="16"><fs:test fid="16"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.723921104,-17.9923232806</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010199.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P822</fs:SITE_ID>
<fs:GRID_CODE>CFS249</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.723921104</fs:POINT_X>
<fs:POINT_Y>-17.9923232806</fs:POINT_Y>
<fs:SITE_ID_OR>CO832</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>364896.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="17"><fs:test fid="17"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.727085525,-17.994856328</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009921.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P823</fs:SITE_ID>
<fs:GRID_CODE>CFS313</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.727085525</fs:POINT_X>
<fs:POINT_Y>-17.994856328</fs:POINT_Y>
<fs:SITE_ID_OR>CO833</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>365233.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="18"><fs:test fid="18"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.713112692,-18.0033760977</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8008968.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P824</fs:SITE_ID>
<fs:GRID_CODE>CFR628</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.713112692</fs:POINT_X>
<fs:POINT_Y>-18.0033760977</fs:POINT_Y>
<fs:SITE_ID_OR>CO834</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>363760.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="19"><fs:test fid="19"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.715178421,-18.0141616532</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8007776.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P833</fs:SITE_ID>
<fs:GRID_CODE>CHB90</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.715178421</fs:POINT_X>
<fs:POINT_Y>-18.0141616532</fs:POINT_Y>
<fs:SITE_ID_OR>CO907</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>363987.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="20"><fs:test fid="20"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.811419243,-17.9373467286</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016344.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO108</fs:SITE_ID>
<fs:GRID_CODE>CCZ192</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.811419243</fs:POINT_X>
<fs:POINT_Y>-17.9373467286</fs:POINT_Y>
<fs:SITE_ID_OR>CO1247</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>374122.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="21"><fs:test fid="21"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.759369083,-17.9212428424</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8018090.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1330</fs:SITE_ID>
<fs:GRID_CODE>CBM586</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.759369083</fs:POINT_X>
<fs:POINT_Y>-17.9212428424</fs:POINT_Y>
<fs:SITE_ID_OR>COKOP395</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>368597.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="22"><fs:test fid="22"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.921168372,-17.9960249523</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009922.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1487</fs:SITE_ID>
<fs:GRID_CODE>CFZ128</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.921168372</fs:POINT_X>
<fs:POINT_Y>-17.9960249523</fs:POINT_Y>
<fs:SITE_ID_OR>COKP241</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>385784.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="23"><fs:test fid="23"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.921510395,-17.9972468968</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009787.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1492</fs:SITE_ID>
<fs:GRID_CODE>CFZ153</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.921510395</fs:POINT_X>
<fs:POINT_Y>-17.9972468968</fs:POINT_Y>
<fs:SITE_ID_OR>COKP246</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>385821.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="24"><fs:test fid="24"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.877587404,-17.9951177149</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009995.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO162</fs:SITE_ID>
<fs:GRID_CODE>CFX322</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.877587404</fs:POINT_X>
<fs:POINT_Y>-17.9951177149</fs:POINT_Y>
<fs:SITE_ID_OR>CO1414</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>381169.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="25"><fs:test fid="25"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.889608721,-17.990831006</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010477.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO163</fs:SITE_ID>
<fs:GRID_CODE>CFY155</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.889608721</fs:POINT_X>
<fs:POINT_Y>-17.990831006</fs:POINT_Y>
<fs:SITE_ID_OR>CO1415</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>382439.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="26"><fs:test fid="26"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.756767648,-17.909830596</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8019351.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1649</fs:SITE_ID>
<fs:GRID_CODE>CBM194</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.756767648</fs:POINT_X>
<fs:POINT_Y>-17.909830596</fs:POINT_Y>
<fs:SITE_ID_OR>COKP393</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>368313.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="27"><fs:test fid="27"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.761866102,-17.9178337355</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8018469.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1650</fs:SITE_ID>
<fs:GRID_CODE>CBM469</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.761866102</fs:POINT_X>
<fs:POINT_Y>-17.9178337355</fs:POINT_Y>
<fs:SITE_ID_OR>COKP394</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>368859.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="28"><fs:test fid="28"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.742679096,-17.9051402653</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8019860.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO320</fs:SITE_ID>
<fs:GRID_CODE>CBL59</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.742679096</fs:POINT_X>
<fs:POINT_Y>-17.9051402653</fs:POINT_Y>
<fs:SITE_ID_OR>CO2605</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>366817.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="29"><fs:test fid="29"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.765050515,-17.8955687069</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8020935.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO321</fs:SITE_ID>
<fs:GRID_CODE>BZX622</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.765050515</fs:POINT_X>
<fs:POINT_Y>-17.8955687069</fs:POINT_Y>
<fs:SITE_ID_OR>CO2606</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>369180.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="30"><fs:test fid="30"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.75985586,-17.9123354759</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8019076.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO322</fs:SITE_ID>
<fs:GRID_CODE>CBM287</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.75985586</fs:POINT_X>
<fs:POINT_Y>-17.9123354759</fs:POINT_Y>
<fs:SITE_ID_OR>CO2607</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>368642.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="31"><fs:test fid="31"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.764474059,-17.9133860392</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8018963.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO323</fs:SITE_ID>
<fs:GRID_CODE>CBM322</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.764474059</fs:POINT_X>
<fs:POINT_Y>-17.9133860392</fs:POINT_Y>
<fs:SITE_ID_OR>CO2608</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>369132.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="32"><fs:test fid="32"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.740675124,-17.9001931357</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8020406.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO324</fs:SITE_ID>
<fs:GRID_CODE>BZW777</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.740675124</fs:POINT_X>
<fs:POINT_Y>-17.9001931357</fs:POINT_Y>
<fs:SITE_ID_OR>CO2609</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>366601.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="33"><fs:test fid="33"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.7894596,-17.9594694119</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013881.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO483</fs:SITE_ID>
<fs:GRID_CODE>CEJ49</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.7894596</fs:POINT_X>
<fs:POINT_Y>-17.9594694119</fs:POINT_Y>
<fs:SITE_ID_OR>CO511</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>371812.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="34"><fs:test fid="34"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.80767928,-17.9572596443</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014138.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO524</fs:SITE_ID>
<fs:GRID_CODE>CCZ848</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.80767928</fs:POINT_X>
<fs:POINT_Y>-17.9572596443</fs:POINT_Y>
<fs:SITE_ID_OR>CO520</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>373740.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="35"><fs:test fid="35"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.081099636,-17.8012716603</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8031562.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO617</fs:SITE_ID>
<fs:GRID_CODE>BVO147</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.081099636</fs:POINT_X>
<fs:POINT_Y>-17.8012716603</fs:POINT_Y>
<fs:SITE_ID_OR>CO6002</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>402611.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="36"><fs:test fid="36"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.730147669,-17.9588735986</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013905.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO625</fs:SITE_ID>
<fs:GRID_CODE>CEH16</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.730147669</fs:POINT_X>
<fs:POINT_Y>-17.9588735986</fs:POINT_Y>
<fs:SITE_ID_OR>CO601</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>365530.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="37"><fs:test fid="37"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.732681107,-17.959784805</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013806.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO636</fs:SITE_ID>
<fs:GRID_CODE>CEH48</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.732681107</fs:POINT_X>
<fs:POINT_Y>-17.959784805</fs:POINT_Y>
<fs:SITE_ID_OR>CO602</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>365799.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="38"><fs:test fid="38"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.744474363,-17.9678139168</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012926.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO647</fs:SITE_ID>
<fs:GRID_CODE>CEI301</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.744474363</fs:POINT_X>
<fs:POINT_Y>-17.9678139168</fs:POINT_Y>
<fs:SITE_ID_OR>CO603</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>367054.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="39"><fs:test fid="39"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.740564336,-17.9599264809</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013796.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO658</fs:SITE_ID>
<fs:GRID_CODE>CEH87</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.740564336</fs:POINT_X>
<fs:POINT_Y>-17.9599264809</fs:POINT_Y>
<fs:SITE_ID_OR>CO604</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>366634.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="40"><fs:test fid="40"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.081082783,-17.8082488163</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8030790.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO662</fs:SITE_ID>
<fs:GRID_CODE>BVO387</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.081082783</fs:POINT_X>
<fs:POINT_Y>-17.8082488163</fs:POINT_Y>
<fs:SITE_ID_OR>CO6043</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>402613.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="41"><fs:test fid="41"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.080664881,-17.8143112579</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8030119.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO663</fs:SITE_ID>
<fs:GRID_CODE>BVO566</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.080664881</fs:POINT_X>
<fs:POINT_Y>-17.8143112579</fs:POINT_Y>
<fs:SITE_ID_OR>CO6044</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>402572.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="42"><fs:test fid="42"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.743033121,-17.9699915148</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012684.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO667</fs:SITE_ID>
<fs:GRID_CODE>CEH420</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.743033121</fs:POINT_X>
<fs:POINT_Y>-17.9699915148</fs:POINT_Y>
<fs:SITE_ID_OR>CO605</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>366903.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="43"><fs:test fid="43"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.076642756,-17.8019917794</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8031480.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO673</fs:SITE_ID>
<fs:GRID_CODE>BVO172</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.076642756</fs:POINT_X>
<fs:POINT_Y>-17.8019917794</fs:POINT_Y>
<fs:SITE_ID_OR>CO6055</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>402139.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="44"><fs:test fid="44"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.0837873,-17.8125996833</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8030310.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO674</fs:SITE_ID>
<fs:GRID_CODE>BVO510</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.0837873</fs:POINT_X>
<fs:POINT_Y>-17.8125996833</fs:POINT_Y>
<fs:SITE_ID_OR>CO6056</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>402902.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="45"><fs:test fid="45"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.089253023,-17.8157884768</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029960.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO679</fs:SITE_ID>
<fs:GRID_CODE>BVP605</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.089253023</fs:POINT_X>
<fs:POINT_Y>-17.8157884768</fs:POINT_Y>
<fs:SITE_ID_OR>CO6060</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>403483.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="46"><fs:test fid="46"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.10630642,-17.8529315854</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8025859.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO757</fs:SITE_ID>
<fs:GRID_CODE>BYT54</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.10630642</fs:POINT_X>
<fs:POINT_Y>-17.8529315854</fs:POINT_Y>
<fs:SITE_ID_OR>CO6701</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>405310.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="47"><fs:test fid="47"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.718013047,-17.9826420171</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8011266.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P773</fs:SITE_ID>
<fs:GRID_CODE>CEH813</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.718013047</fs:POINT_X>
<fs:POINT_Y>-17.9826420171</fs:POINT_Y>
<fs:SITE_ID_OR>CO706</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>364263.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="48"><fs:test fid="48"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.722986908,-17.9817169344</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8011372.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P785</fs:SITE_ID>
<fs:GRID_CODE>CEH788</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.722986908</fs:POINT_X>
<fs:POINT_Y>-17.9817169344</fs:POINT_Y>
<fs:SITE_ID_OR>CO714</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>364789.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="49"><fs:test fid="49"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.719977803,-17.98911632</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010551.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P786</fs:SITE_ID>
<fs:GRID_CODE>CFS125</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.719977803</fs:POINT_X>
<fs:POINT_Y>-17.98911632</fs:POINT_Y>
<fs:SITE_ID_OR>CO715</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>364476.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="50"><fs:test fid="50"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.729883529,-17.9852594891</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010985.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P787</fs:SITE_ID>
<fs:GRID_CODE>CFS16</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.729883529</fs:POINT_X>
<fs:POINT_Y>-17.9852594891</fs:POINT_Y>
<fs:SITE_ID_OR>CO716</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365522.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="51"><fs:test fid="51"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.709443197,-17.9988784833</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009463.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P793</fs:SITE_ID>
<fs:GRID_CODE>CFR474</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.709443197</fs:POINT_X>
<fs:POINT_Y>-17.9988784833</fs:POINT_Y>
<fs:SITE_ID_OR>CO801</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>363368.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="52"><fs:test fid="52"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.715418425,-17.9927641354</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010144.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P794</fs:SITE_ID>
<fs:GRID_CODE>CFR270</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.715418425</fs:POINT_X>
<fs:POINT_Y>-17.9927641354</fs:POINT_Y>
<fs:SITE_ID_OR>CO802</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>363996.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="53"><fs:test fid="53"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.7103052,-18.0037188969</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8008928.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P795</fs:SITE_ID>
<fs:GRID_CODE>CFR625</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.7103052</fs:POINT_X>
<fs:POINT_Y>-18.0037188969</fs:POINT_Y>
<fs:SITE_ID_OR>CO803</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>363463.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="54"><fs:test fid="54"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.711456055,-18.0039072914</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8008908.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P796</fs:SITE_ID>
<fs:GRID_CODE>CFR626</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.711456055</fs:POINT_X>
<fs:POINT_Y>-18.0039072914</fs:POINT_Y>
<fs:SITE_ID_OR>CO804</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>363585.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="55"><fs:test fid="55"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.710101552,-18.0044495194</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8008847.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P797</fs:SITE_ID>
<fs:GRID_CODE>CFR655</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.710101552</fs:POINT_X>
<fs:POINT_Y>-18.0044495194</fs:POINT_Y>
<fs:SITE_ID_OR>CO805</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>363442.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="56"><fs:test fid="56"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.711383381,-18.0048104854</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8008808.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P798</fs:SITE_ID>
<fs:GRID_CODE>CFR656</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.711383381</fs:POINT_X>
<fs:POINT_Y>-18.0048104854</fs:POINT_Y>
<fs:SITE_ID_OR>CO806</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>363578.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="57"><fs:test fid="57"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.712080344,-18.0037758916</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8008923.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P799</fs:SITE_ID>
<fs:GRID_CODE>CFR627</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.712080344</fs:POINT_X>
<fs:POINT_Y>-18.0037758916</fs:POINT_Y>
<fs:SITE_ID_OR>CO807</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>363651.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="58"><fs:test fid="58"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.712709158,-17.9991170928</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009439.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P800</fs:SITE_ID>
<fs:GRID_CODE>CFR478</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.712709158</fs:POINT_X>
<fs:POINT_Y>-17.9991170928</fs:POINT_Y>
<fs:SITE_ID_OR>CO808</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>363714.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="59"><fs:test fid="59"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.71175119,-18.0022826348</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009088.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P801</fs:SITE_ID>
<fs:GRID_CODE>CFR597</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.71175119</fs:POINT_X>
<fs:POINT_Y>-18.0022826348</fs:POINT_Y>
<fs:SITE_ID_OR>CO809</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>363615.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="60"><fs:test fid="60"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.7127228,-18.0024427189</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009071.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P802</fs:SITE_ID>
<fs:GRID_CODE>CFR598</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.7127228</fs:POINT_X>
<fs:POINT_Y>-18.0024427189</fs:POINT_Y>
<fs:SITE_ID_OR>CO810</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>363718.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="61"><fs:test fid="61"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.713926701,-18.0018271771</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009140.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P803</fs:SITE_ID>
<fs:GRID_CODE>CFR569</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.713926701</fs:POINT_X>
<fs:POINT_Y>-18.0018271771</fs:POINT_Y>
<fs:SITE_ID_OR>CO811</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>363845.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="62"><fs:test fid="62"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.712500606,-18.0018267412</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009139.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P804</fs:SITE_ID>
<fs:GRID_CODE>CFR567</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.712500606</fs:POINT_X>
<fs:POINT_Y>-18.0018267412</fs:POINT_Y>
<fs:SITE_ID_OR>CO812</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>363694.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="63"><fs:test fid="63"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.71356993,-18.0015356313</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009172.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P805</fs:SITE_ID>
<fs:GRID_CODE>CFR569</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.71356993</fs:POINT_X>
<fs:POINT_Y>-18.0015356313</fs:POINT_Y>
<fs:SITE_ID_OR>CO813</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>363807.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="64"><fs:test fid="64"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.715127518,-18.001636336</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009162.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P806</fs:SITE_ID>
<fs:GRID_CODE>CFR570</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.715127518</fs:POINT_X>
<fs:POINT_Y>-18.001636336</fs:POINT_Y>
<fs:SITE_ID_OR>CO814</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>363972.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="65"><fs:test fid="65"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.718307314,-17.9981240117</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009553.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P807</fs:SITE_ID>
<fs:GRID_CODE>CFS424</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.718307314</fs:POINT_X>
<fs:POINT_Y>-17.9981240117</fs:POINT_Y>
<fs:SITE_ID_OR>CO815</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>364306.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="66"><fs:test fid="66"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.720755717,-17.9977967936</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009591.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P808</fs:SITE_ID>
<fs:GRID_CODE>CFS426</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.720755717</fs:POINT_X>
<fs:POINT_Y>-17.9977967936</fs:POINT_Y>
<fs:SITE_ID_OR>CO816</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>364565.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="67"><fs:test fid="67"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.721694679,-17.9959323707</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009798.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P809</fs:SITE_ID>
<fs:GRID_CODE>CFS367</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.721694679</fs:POINT_X>
<fs:POINT_Y>-17.9959323707</fs:POINT_Y>
<fs:SITE_ID_OR>CO817</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>364663.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="68"><fs:test fid="68"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.721305079,-17.9936434871</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010051.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P810</fs:SITE_ID>
<fs:GRID_CODE>CFS277</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.721305079</fs:POINT_X>
<fs:POINT_Y>-17.9936434871</fs:POINT_Y>
<fs:SITE_ID_OR>CO818</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>364620.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="69"><fs:test fid="69"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.724073738,-17.9947371164</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009932.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P811</fs:SITE_ID>
<fs:GRID_CODE>CFS310</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.724073738</fs:POINT_X>
<fs:POINT_Y>-17.9947371164</fs:POINT_Y>
<fs:SITE_ID_OR>CO819</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>364914.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="70"><fs:test fid="70"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.722881052,-17.9951178431</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009889.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P812</fs:SITE_ID>
<fs:GRID_CODE>CFS338</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.722881052</fs:POINT_X>
<fs:POINT_Y>-17.9951178431</fs:POINT_Y>
<fs:SITE_ID_OR>CO821</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>364788.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="71"><fs:test fid="71"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.720841238,-17.9951043893</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009889.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P813</fs:SITE_ID>
<fs:GRID_CODE>CFS336</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.720841238</fs:POINT_X>
<fs:POINT_Y>-17.9951043893</fs:POINT_Y>
<fs:SITE_ID_OR>CO822</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>364572.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="72"><fs:test fid="72"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.711363469,-18.0088497899</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8008361.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P827</fs:SITE_ID>
<fs:GRID_CODE>CFR806</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.711363469</fs:POINT_X>
<fs:POINT_Y>-18.0088497899</fs:POINT_Y>
<fs:SITE_ID_OR>CO901</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>363579.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="73"><fs:test fid="73"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.711669548,-18.0096199519</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8008276.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P828</fs:SITE_ID>
<fs:GRID_CODE>CFR837</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.711669548</fs:POINT_X>
<fs:POINT_Y>-18.0096199519</fs:POINT_Y>
<fs:SITE_ID_OR>CO902</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>363612.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="74"><fs:test fid="74"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.719431724,-18.0111263603</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8008115.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P830</fs:SITE_ID>
<fs:GRID_CODE>CFS845</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.719431724</fs:POINT_X>
<fs:POINT_Y>-18.0111263603</fs:POINT_Y>
<fs:SITE_ID_OR>CO904</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>364435.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="75"><fs:test fid="75"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.724045848,-18.0078041646</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8008486.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P831</fs:SITE_ID>
<fs:GRID_CODE>CFS760</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.724045848</fs:POINT_X>
<fs:POINT_Y>-18.0078041646</fs:POINT_Y>
<fs:SITE_ID_OR>CO905</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>364921.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="76"><fs:test fid="76"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.712172875,-18.0053398691</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8008750.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P832</fs:SITE_ID>
<fs:GRID_CODE>CFR687</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.712172875</fs:POINT_X>
<fs:POINT_Y>-18.0053398691</fs:POINT_Y>
<fs:SITE_ID_OR>CO906</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>363662.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="77"><fs:test fid="77"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.721463116,-17.9428032961</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015677.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO10</fs:SITE_ID>
<fs:GRID_CODE>CCW396</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.721463116</fs:POINT_X>
<fs:POINT_Y>-17.9428032961</fs:POINT_Y>
<fs:SITE_ID_OR>CO101</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>364598.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="78"><fs:test fid="78"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.741738325,-17.9501380899</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014880.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO100</fs:SITE_ID>
<fs:GRID_CODE>CCW658</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.741738325</fs:POINT_X>
<fs:POINT_Y>-17.9501380899</fs:POINT_Y>
<fs:SITE_ID_OR>CO124</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366751.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="79"><fs:test fid="79"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.818946502,-17.9326842753</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016865.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO107</fs:SITE_ID>
<fs:GRID_CODE>CCZ50</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.818946502</fs:POINT_X>
<fs:POINT_Y>-17.9326842753</fs:POINT_Y>
<fs:SITE_ID_OR>CO1246</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>374916.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="80"><fs:test fid="80"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.730499656,-17.9426275973</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015703.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO109</fs:SITE_ID>
<fs:GRID_CODE>CCW376</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.730499656</fs:POINT_X>
<fs:POINT_Y>-17.9426275973</fs:POINT_Y>
<fs:SITE_ID_OR>CO125</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365555.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="81"><fs:test fid="81"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.834394153,-17.9727036906</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012447.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO112</fs:SITE_ID>
<fs:GRID_CODE>CEL456</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.834394153</fs:POINT_X>
<fs:POINT_Y>-17.9727036906</fs:POINT_Y>
<fs:SITE_ID_OR>CO1252</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>376580.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="82"><fs:test fid="82"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.806095581,-17.9442093975</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015581.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO114</fs:SITE_ID>
<fs:GRID_CODE>CCZ426</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.806095581</fs:POINT_X>
<fs:POINT_Y>-17.9442093975</fs:POINT_Y>
<fs:SITE_ID_OR>CO1254</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>373563.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="83"><fs:test fid="83"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.732777453,-17.9436094154</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015596.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO117</fs:SITE_ID>
<fs:GRID_CODE>CCW438</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.732777453</fs:POINT_X>
<fs:POINT_Y>-17.9436094154</fs:POINT_Y>
<fs:SITE_ID_OR>CO126</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365797.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="84"><fs:test fid="84"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.731755913,-17.9398976251</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016006.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO118</fs:SITE_ID>
<fs:GRID_CODE>CCW287</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.731755913</fs:POINT_X>
<fs:POINT_Y>-17.9398976251</fs:POINT_Y>
<fs:SITE_ID_OR>CO127</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365686.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="85"><fs:test fid="85"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.732488121,-17.9391613778</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016088.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO119</fs:SITE_ID>
<fs:GRID_CODE>CCW288</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.732488121</fs:POINT_X>
<fs:POINT_Y>-17.9391613778</fs:POINT_Y>
<fs:SITE_ID_OR>CO128</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365763.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="86"><fs:test fid="86"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.732775214,-17.9372926133</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016295.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO120</fs:SITE_ID>
<fs:GRID_CODE>CCW228</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.732775214</fs:POINT_X>
<fs:POINT_Y>-17.9372926133</fs:POINT_Y>
<fs:SITE_ID_OR>CO129</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365792.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="87"><fs:test fid="87"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.739436423,-17.9458758174</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015350.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO121</fs:SITE_ID>
<fs:GRID_CODE>CCW506</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.739436423</fs:POINT_X>
<fs:POINT_Y>-17.9458758174</fs:POINT_Y>
<fs:SITE_ID_OR>CO130</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366504.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="88"><fs:test fid="88"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.849824486,-17.9770522977</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8011976.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO122</fs:SITE_ID>
<fs:GRID_CODE>CEL623</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.849824486</fs:POINT_X>
<fs:POINT_Y>-17.9770522977</fs:POINT_Y>
<fs:SITE_ID_OR>CO1301</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>378217.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="89"><fs:test fid="89"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.854969508,-17.9773086689</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8011951.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO123</fs:SITE_ID>
<fs:GRID_CODE>CEL628</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.854969508</fs:POINT_X>
<fs:POINT_Y>-17.9773086689</fs:POINT_Y>
<fs:SITE_ID_OR>CO1302</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>378762.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="90"><fs:test fid="90"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.855773103,-17.9771688162</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8011967.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO124</fs:SITE_ID>
<fs:GRID_CODE>CEL629</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.855773103</fs:POINT_X>
<fs:POINT_Y>-17.9771688162</fs:POINT_Y>
<fs:SITE_ID_OR>CO1303</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>378847.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="91"><fs:test fid="91"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.858181068,-17.9786560697</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8011804.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO125</fs:SITE_ID>
<fs:GRID_CODE>CEM632</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.858181068</fs:POINT_X>
<fs:POINT_Y>-17.9786560697</fs:POINT_Y>
<fs:SITE_ID_OR>CO1304</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>379103.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="92"><fs:test fid="92"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.859238589,-17.9786803672</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8011802.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO126</fs:SITE_ID>
<fs:GRID_CODE>CEM633</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.859238589</fs:POINT_X>
<fs:POINT_Y>-17.9786803672</fs:POINT_Y>
<fs:SITE_ID_OR>CO1305</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>379215.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="93"><fs:test fid="93"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.740076721,-17.9474523934</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015176.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO131</fs:SITE_ID>
<fs:GRID_CODE>CCW566</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.740076721</fs:POINT_X>
<fs:POINT_Y>-17.9474523934</fs:POINT_Y>
<fs:SITE_ID_OR>CO131</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366573.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="94"><fs:test fid="94"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.858541036,-17.9770134185</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8011986.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1329</fs:SITE_ID>
<fs:GRID_CODE>CEM602</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.858541036</fs:POINT_X>
<fs:POINT_Y>-17.9770134185</fs:POINT_Y>
<fs:SITE_ID_OR>COKOP371</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>379140.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="95"><fs:test fid="95"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.727335302,-17.9428418527</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015677.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1333</fs:SITE_ID>
<fs:GRID_CODE>CCW403</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.727335302</fs:POINT_X>
<fs:POINT_Y>-17.9428418527</fs:POINT_Y>
<fs:SITE_ID_OR>COKP10</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365220.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="96"><fs:test fid="96"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.727824998,-17.9430167607</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015658.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1342</fs:SITE_ID>
<fs:GRID_CODE>CCW403</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.727824998</fs:POINT_X>
<fs:POINT_Y>-17.9430167607</fs:POINT_Y>
<fs:SITE_ID_OR>COKP11</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365272.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="97"><fs:test fid="97"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.727771765,-17.9412180737</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015857.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1353</fs:SITE_ID>
<fs:GRID_CODE>CCW343</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.727771765</fs:POINT_X>
<fs:POINT_Y>-17.9412180737</fs:POINT_Y>
<fs:SITE_ID_OR>COKP12</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365265.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="98"><fs:test fid="98"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.853824506,-17.9762084063</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012072.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO136</fs:SITE_ID>
<fs:GRID_CODE>CEL597</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.853824506</fs:POINT_X>
<fs:POINT_Y>-17.9762084063</fs:POINT_Y>
<fs:SITE_ID_OR>CO1314</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>378640.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="99"><fs:test fid="99"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.765302829,-17.9409089504</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015918.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1364</fs:SITE_ID>
<fs:GRID_CODE>CCX323</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.765302829</fs:POINT_X>
<fs:POINT_Y>-17.9409089504</fs:POINT_Y>
<fs:SITE_ID_OR>COKP13</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>369240.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="100"><fs:test fid="100"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.848910937,-17.9737573462</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012340.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO137</fs:SITE_ID>
<fs:GRID_CODE>CEL502</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.848910937</fs:POINT_X>
<fs:POINT_Y>-17.9737573462</fs:POINT_Y>
<fs:SITE_ID_OR>CO1315</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>378118.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="101"><fs:test fid="101"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.764503492,-17.9404520201</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015968.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1375</fs:SITE_ID>
<fs:GRID_CODE>CCX322</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.764503492</fs:POINT_X>
<fs:POINT_Y>-17.9404520201</fs:POINT_Y>
<fs:SITE_ID_OR>COKP14</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>369155.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="102"><fs:test fid="102"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.758931282,-17.9380126748</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016234.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1386</fs:SITE_ID>
<fs:GRID_CODE>CCX226</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.758931282</fs:POINT_X>
<fs:POINT_Y>-17.9380126748</fs:POINT_Y>
<fs:SITE_ID_OR>COKP15</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368563.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="103"><fs:test fid="103"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.74117641,-17.9481553656</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015099.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO139</fs:SITE_ID>
<fs:GRID_CODE>CCW597</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.74117641</fs:POINT_X>
<fs:POINT_Y>-17.9481553656</fs:POINT_Y>
<fs:SITE_ID_OR>CO132</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366690.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="104"><fs:test fid="104"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.73729438,-17.9497025865</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014925.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO140</fs:SITE_ID>
<fs:GRID_CODE>CCW623</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.73729438</fs:POINT_X>
<fs:POINT_Y>-17.9497025865</fs:POINT_Y>
<fs:SITE_ID_OR>CO133</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366280.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="105"><fs:test fid="105"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.737622947,-17.9486383685</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015043.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO141</fs:SITE_ID>
<fs:GRID_CODE>CCW594</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.737622947</fs:POINT_X>
<fs:POINT_Y>-17.9486383685</fs:POINT_Y>
<fs:SITE_ID_OR>CO134</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366314.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="106"><fs:test fid="106"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.738185103,-17.9479190695</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015123.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO142</fs:SITE_ID>
<fs:GRID_CODE>CCW564</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.738185103</fs:POINT_X>
<fs:POINT_Y>-17.9479190695</fs:POINT_Y>
<fs:SITE_ID_OR>CO135</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366373.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="107"><fs:test fid="107"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.771916953,-17.9415202002</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015855.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1429</fs:SITE_ID>
<fs:GRID_CODE>CCX360</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.771916953</fs:POINT_X>
<fs:POINT_Y>-17.9415202002</fs:POINT_Y>
<fs:SITE_ID_OR>COKP19</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>369941.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="108"><fs:test fid="108"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.739892093,-17.9481922219</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015094.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO143</fs:SITE_ID>
<fs:GRID_CODE>CCW596</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.739892093</fs:POINT_X>
<fs:POINT_Y>-17.9481922219</fs:POINT_Y>
<fs:SITE_ID_OR>CO136</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366554.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="109"><fs:test fid="109"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.738693618,-17.9467746859</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015250.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO144</fs:SITE_ID>
<fs:GRID_CODE>CCW535</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.738693618</fs:POINT_X>
<fs:POINT_Y>-17.9467746859</fs:POINT_Y>
<fs:SITE_ID_OR>CO137</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366426.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="110"><fs:test fid="110"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.822038168,-17.9605374011</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013785.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1441</fs:SITE_ID>
<fs:GRID_CODE>CEK83</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.822038168</fs:POINT_X>
<fs:POINT_Y>-17.9605374011</fs:POINT_Y>
<fs:SITE_ID_OR>COKP20</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>375263.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="111"><fs:test fid="111"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.857730295,-17.978264816</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8011847.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1449</fs:SITE_ID>
<fs:GRID_CODE>CEM631</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.857730295</fs:POINT_X>
<fs:POINT_Y>-17.978264816</fs:POINT_Y>
<fs:SITE_ID_OR>COKP207</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>379055.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="112"><fs:test fid="112"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.737438067,-17.9454200306</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015399.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO145</fs:SITE_ID>
<fs:GRID_CODE>CCW503</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.737438067</fs:POINT_X>
<fs:POINT_Y>-17.9454200306</fs:POINT_Y>
<fs:SITE_ID_OR>CO138</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366292.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="113"><fs:test fid="113"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.824295429,-17.9633164459</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013479.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1452</fs:SITE_ID>
<fs:GRID_CODE>CEK176</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.824295429</fs:POINT_X>
<fs:POINT_Y>-17.9633164459</fs:POINT_Y>
<fs:SITE_ID_OR>COKP21</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>375504.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="114"><fs:test fid="114"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.741105185,-17.9502153189</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014871.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO146</fs:SITE_ID>
<fs:GRID_CODE>CCW657</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.741105185</fs:POINT_X>
<fs:POINT_Y>-17.9502153189</fs:POINT_Y>
<fs:SITE_ID_OR>CO139</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366684.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="115"><fs:test fid="115"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.825287709,-17.9646238001</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013335.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1463</fs:SITE_ID>
<fs:GRID_CODE>CEK207</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.825287709</fs:POINT_X>
<fs:POINT_Y>-17.9646238001</fs:POINT_Y>
<fs:SITE_ID_OR>COKP22</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>375610.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="116"><fs:test fid="116"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.742088459,-17.9380037812</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016223.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO147</fs:SITE_ID>
<fs:GRID_CODE>CCW238</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.742088459</fs:POINT_X>
<fs:POINT_Y>-17.9380037812</fs:POINT_Y>
<fs:SITE_ID_OR>CO140</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366779.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="117"><fs:test fid="117"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.748023103,-17.9479375492</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015128.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1472</fs:SITE_ID>
<fs:GRID_CODE>CCX545</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.748023103</fs:POINT_X>
<fs:POINT_Y>-17.9479375492</fs:POINT_Y>
<fs:SITE_ID_OR>COKP228</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367415.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="118"><fs:test fid="118"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.746429734,-17.9449360497</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015459.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1473</fs:SITE_ID>
<fs:GRID_CODE>CCX453</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.746429734</fs:POINT_X>
<fs:POINT_Y>-17.9449360497</fs:POINT_Y>
<fs:SITE_ID_OR>COKP229</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367244.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="119"><fs:test fid="119"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.811710991,-17.9516271402</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014764.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1474</fs:SITE_ID>
<fs:GRID_CODE>CCZ672</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.811710991</fs:POINT_X>
<fs:POINT_Y>-17.9516271402</fs:POINT_Y>
<fs:SITE_ID_OR>COKP23</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>374163.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="120"><fs:test fid="120"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.744265902,-17.9478590727</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015134.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1475</fs:SITE_ID>
<fs:GRID_CODE>CCX541</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.744265902</fs:POINT_X>
<fs:POINT_Y>-17.9478590727</fs:POINT_Y>
<fs:SITE_ID_OR>COKP230</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367017.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="121"><fs:test fid="121"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.747223975,-17.9474534393</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015181.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1476</fs:SITE_ID>
<fs:GRID_CODE>CCX544</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.747223975</fs:POINT_X>
<fs:POINT_Y>-17.9474534393</fs:POINT_Y>
<fs:SITE_ID_OR>COKP231</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367330.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="122"><fs:test fid="122"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.751339062,-17.9449676685</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015459.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1477</fs:SITE_ID>
<fs:GRID_CODE>CCX458</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.751339062</fs:POINT_X>
<fs:POINT_Y>-17.9449676685</fs:POINT_Y>
<fs:SITE_ID_OR>COKP232</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367764.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="123"><fs:test fid="123"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.75227917,-17.9428500274</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015694.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1478</fs:SITE_ID>
<fs:GRID_CODE>CCX399</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.75227917</fs:POINT_X>
<fs:POINT_Y>-17.9428500274</fs:POINT_Y>
<fs:SITE_ID_OR>COKP233</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367862.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="124"><fs:test fid="124"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.752878879,-17.940802491</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015921.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1479</fs:SITE_ID>
<fs:GRID_CODE>CCX310</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.752878879</fs:POINT_X>
<fs:POINT_Y>-17.940802491</fs:POINT_Y>
<fs:SITE_ID_OR>COKP234</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367924.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="125"><fs:test fid="125"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.878736068,-17.9971758163</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009768.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO148</fs:SITE_ID>
<fs:GRID_CODE>CFX383</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.878736068</fs:POINT_X>
<fs:POINT_Y>-17.9971758163</fs:POINT_Y>
<fs:SITE_ID_OR>CO1401</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>381292.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="126"><fs:test fid="126"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.741083617,-17.9505947292</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014829.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1481</fs:SITE_ID>
<fs:GRID_CODE>CCW657</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.741083617</fs:POINT_X>
<fs:POINT_Y>-17.9505947292</fs:POINT_Y>
<fs:SITE_ID_OR>COKP236</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366682.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="127"><fs:test fid="127"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.742526176,-17.9482092937</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015094.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1482</fs:SITE_ID>
<fs:GRID_CODE>CCW599</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.742526176</fs:POINT_X>
<fs:POINT_Y>-17.9482092937</fs:POINT_Y>
<fs:SITE_ID_OR>COKP237</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366833.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="128"><fs:test fid="128"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.72606471,-17.960744587</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013695.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1483</fs:SITE_ID>
<fs:GRID_CODE>CEH101</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.72606471</fs:POINT_X>
<fs:POINT_Y>-17.960744587</fs:POINT_Y>
<fs:SITE_ID_OR>COKP238</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365099.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="129"><fs:test fid="129"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.821111428,-17.9593208013</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013919.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1485</fs:SITE_ID>
<fs:GRID_CODE>CEK22</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.821111428</fs:POINT_X>
<fs:POINT_Y>-17.9593208013</fs:POINT_Y>
<fs:SITE_ID_OR>COKP24</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>375164.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="130"><fs:test fid="130"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.792802542,-17.937150638</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016353.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1488</fs:SITE_ID>
<fs:GRID_CODE>CCY202</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.792802542</fs:POINT_X>
<fs:POINT_Y>-17.937150638</fs:POINT_Y>
<fs:SITE_ID_OR>COKP242</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372150.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="131"><fs:test fid="131"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.791278783,-17.936309757</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016445.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1489</fs:SITE_ID>
<fs:GRID_CODE>CCY170</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.791278783</fs:POINT_X>
<fs:POINT_Y>-17.936309757</fs:POINT_Y>
<fs:SITE_ID_OR>COKP243</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>371988.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="132"><fs:test fid="132"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.879618661,-17.9935118034</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010174.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO149</fs:SITE_ID>
<fs:GRID_CODE>CFX264</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.879618661</fs:POINT_X>
<fs:POINT_Y>-17.9935118034</fs:POINT_Y>
<fs:SITE_ID_OR>CO1402</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>381383.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="133"><fs:test fid="133"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.789713819,-17.9373663895</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016327.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1490</fs:SITE_ID>
<fs:GRID_CODE>CCY199</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.789713819</fs:POINT_X>
<fs:POINT_Y>-17.9373663895</fs:POINT_Y>
<fs:SITE_ID_OR>COKP244</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>371823.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="134"><fs:test fid="134"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.789515379,-17.9373922646</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016324.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1491</fs:SITE_ID>
<fs:GRID_CODE>CCY199</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.789515379</fs:POINT_X>
<fs:POINT_Y>-17.9373922646</fs:POINT_Y>
<fs:SITE_ID_OR>COKP245</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>371802.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="135"><fs:test fid="135"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.901188239,-17.9906981736</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010499.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1493</fs:SITE_ID>
<fs:GRID_CODE>CFY167</fs:GRID_CODE>
<fs:METHOD_OF_>PI</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.901188239</fs:POINT_X>
<fs:POINT_Y>-17.9906981736</fs:POINT_Y>
<fs:SITE_ID_OR>COKP247</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>383665.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="136"><fs:test fid="136"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.809063506,-17.9451313247</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015481.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1496</fs:SITE_ID>
<fs:GRID_CODE>CCZ459</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.809063506</fs:POINT_X>
<fs:POINT_Y>-17.9451313247</fs:POINT_Y>
<fs:SITE_ID_OR>COKP25</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>373878.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="137"><fs:test fid="137"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.792802542,-17.937150638</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016353.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1499</fs:SITE_ID>
<fs:GRID_CODE>CCY202</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.792802542</fs:POINT_X>
<fs:POINT_Y>-17.937150638</fs:POINT_Y>
<fs:SITE_ID_OR>COKP252</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372150.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="138"><fs:test fid="138"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.882635864,-17.9928062422</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010254.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO150</fs:SITE_ID>
<fs:GRID_CODE>CFX238</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.882635864</fs:POINT_X>
<fs:POINT_Y>-17.9928062422</fs:POINT_Y>
<fs:SITE_ID_OR>CO1403</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>381702.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="139"><fs:test fid="139"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.810486874,-17.948303031</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015131.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1500</fs:SITE_ID>
<fs:GRID_CODE>CCZ551</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.810486874</fs:POINT_X>
<fs:POINT_Y>-17.948303031</fs:POINT_Y>
<fs:SITE_ID_OR>COKP253</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>374031.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="140"><fs:test fid="140"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.799324159,-17.938880975</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016166.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1501</fs:SITE_ID>
<fs:GRID_CODE>CCY269</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.799324159</fs:POINT_X>
<fs:POINT_Y>-17.938880975</fs:POINT_Y>
<fs:SITE_ID_OR>COKP254</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372842.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="141"><fs:test fid="141"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.804790574,-17.9445176709</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015546.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1502</fs:SITE_ID>
<fs:GRID_CODE>CCZ425</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.804790574</fs:POINT_X>
<fs:POINT_Y>-17.9445176709</fs:POINT_Y>
<fs:SITE_ID_OR>COKP255</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>373425.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="142"><fs:test fid="142"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.808614026,-17.9572653827</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014138.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1503</fs:SITE_ID>
<fs:GRID_CODE>CCZ849</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.808614026</fs:POINT_X>
<fs:POINT_Y>-17.9572653827</fs:POINT_Y>
<fs:SITE_ID_OR>COKP256</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>373839.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="143"><fs:test fid="143"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.804790574,-17.9445176709</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015546.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1504</fs:SITE_ID>
<fs:GRID_CODE>CCZ425</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.804790574</fs:POINT_X>
<fs:POINT_Y>-17.9445176709</fs:POINT_Y>
<fs:SITE_ID_OR>COKP257</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>373425.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="144"><fs:test fid="144"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.808614026,-17.9572653827</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014138.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1505</fs:SITE_ID>
<fs:GRID_CODE>CCZ849</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.808614026</fs:POINT_X>
<fs:POINT_Y>-17.9572653827</fs:POINT_Y>
<fs:SITE_ID_OR>COKP258</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>373839.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="145"><fs:test fid="145"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.811755132,-17.956326701</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014244.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1506</fs:SITE_ID>
<fs:GRID_CODE>CCZ822</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.811755132</fs:POINT_X>
<fs:POINT_Y>-17.956326701</fs:POINT_Y>
<fs:SITE_ID_OR>COKP259</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>374171.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="146"><fs:test fid="146"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.838304105,-17.9654070484</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013257.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1507</fs:SITE_ID>
<fs:GRID_CODE>CEL220</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.838304105</fs:POINT_X>
<fs:POINT_Y>-17.9654070484</fs:POINT_Y>
<fs:SITE_ID_OR>COKP26</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>376989.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="147"><fs:test fid="147"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.809196331,-17.954910275</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014399.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1508</fs:SITE_ID>
<fs:GRID_CODE>CCZ789</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.809196331</fs:POINT_X>
<fs:POINT_Y>-17.954910275</fs:POINT_Y>
<fs:SITE_ID_OR>COKP260</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>373899.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="148"><fs:test fid="148"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.883124337,-17.9932247711</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010208.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO151</fs:SITE_ID>
<fs:GRID_CODE>CFX238</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.883124337</fs:POINT_X>
<fs:POINT_Y>-17.9932247711</fs:POINT_Y>
<fs:SITE_ID_OR>CO1404</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>381754.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="149"><fs:test fid="149"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.813693383,-17.9502746574</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014915.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1510</fs:SITE_ID>
<fs:GRID_CODE>CCZ614</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.813693383</fs:POINT_X>
<fs:POINT_Y>-17.9502746574</fs:POINT_Y>
<fs:SITE_ID_OR>COKP262</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>374372.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="150"><fs:test fid="150"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.833459495,-17.9726709613</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012450.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1512</fs:SITE_ID>
<fs:GRID_CODE>CEL455</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.833459495</fs:POINT_X>
<fs:POINT_Y>-17.9726709613</fs:POINT_Y>
<fs:SITE_ID_OR>COKP264</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>376481.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="151"><fs:test fid="151"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.834573743,-17.9726776582</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012450.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1513</fs:SITE_ID>
<fs:GRID_CODE>CEL456</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.834573743</fs:POINT_X>
<fs:POINT_Y>-17.9726776582</fs:POINT_Y>
<fs:SITE_ID_OR>COKP265</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>376599.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="152"><fs:test fid="152"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.834185996,-17.9727656998</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012440.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1514</fs:SITE_ID>
<fs:GRID_CODE>CEL456</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.834185996</fs:POINT_X>
<fs:POINT_Y>-17.9727656998</fs:POINT_Y>
<fs:SITE_ID_OR>COKP266</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>376558.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="153"><fs:test fid="153"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.807819869,-17.9390959522</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016148.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1515</fs:SITE_ID>
<fs:GRID_CODE>CCZ248</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.807819869</fs:POINT_X>
<fs:POINT_Y>-17.9390959522</fs:POINT_Y>
<fs:SITE_ID_OR>COKP267</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>373742.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="154"><fs:test fid="154"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.840642676,-17.96300811</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013524.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1516</fs:SITE_ID>
<fs:GRID_CODE>CEL133</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.840642676</fs:POINT_X>
<fs:POINT_Y>-17.96300811</fs:POINT_Y>
<fs:SITE_ID_OR>COKP268</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>377235.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="155"><fs:test fid="155"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.838993689,-17.9697038247</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012782.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1517</fs:SITE_ID>
<fs:GRID_CODE>CEL371</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.838993689</fs:POINT_X>
<fs:POINT_Y>-17.9697038247</fs:POINT_Y>
<fs:SITE_ID_OR>COKP269</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>377065.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="156"><fs:test fid="156"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.84068753,-17.9633698646</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013484.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1519</fs:SITE_ID>
<fs:GRID_CODE>CEL163</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.84068753</fs:POINT_X>
<fs:POINT_Y>-17.9633698646</fs:POINT_Y>
<fs:SITE_ID_OR>COKP270</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>377240.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="157"><fs:test fid="157"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.840689913,-17.9659002848</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013204.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1520</fs:SITE_ID>
<fs:GRID_CODE>CEL223</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.840689913</fs:POINT_X>
<fs:POINT_Y>-17.9659002848</fs:POINT_Y>
<fs:SITE_ID_OR>COKP271</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>377242.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="158"><fs:test fid="158"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.811399039,-17.9587464624</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013976.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1522</fs:SITE_ID>
<fs:GRID_CODE>CEK12</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.811399039</fs:POINT_X>
<fs:POINT_Y>-17.9587464624</fs:POINT_Y>
<fs:SITE_ID_OR>COKP273</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>374135.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="159"><fs:test fid="159"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.81135183,-17.9587461733</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013976.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1523</fs:SITE_ID>
<fs:GRID_CODE>CEK12</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.81135183</fs:POINT_X>
<fs:POINT_Y>-17.9587461733</fs:POINT_Y>
<fs:SITE_ID_OR>COKP274</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>374130.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="160"><fs:test fid="160"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.814608368,-17.9504067639</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014901.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1524</fs:SITE_ID>
<fs:GRID_CODE>CCZ615</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.814608368</fs:POINT_X>
<fs:POINT_Y>-17.9504067639</fs:POINT_Y>
<fs:SITE_ID_OR>COKP275</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>374469.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="161"><fs:test fid="161"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.81462076,-17.9499640212</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014950.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1525</fs:SITE_ID>
<fs:GRID_CODE>CCZ615</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.81462076</fs:POINT_X>
<fs:POINT_Y>-17.9499640212</fs:POINT_Y>
<fs:SITE_ID_OR>COKP276</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>374470.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="162"><fs:test fid="162"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.812765219,-17.9507027665</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014867.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1526</fs:SITE_ID>
<fs:GRID_CODE>CCZ643</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.812765219</fs:POINT_X>
<fs:POINT_Y>-17.9507027665</fs:POINT_Y>
<fs:SITE_ID_OR>COKP277</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>374274.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="163"><fs:test fid="163"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.73065044,-17.9572231395</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014088.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1527</fs:SITE_ID>
<fs:GRID_CODE>CCW886</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.73065044</fs:POINT_X>
<fs:POINT_Y>-17.9572231395</fs:POINT_Y>
<fs:SITE_ID_OR>COKP278</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365582.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="164"><fs:test fid="164"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.803570566,-17.9588610403</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013958.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1528</fs:SITE_ID>
<fs:GRID_CODE>CEK4</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.803570566</fs:POINT_X>
<fs:POINT_Y>-17.9588610403</fs:POINT_Y>
<fs:SITE_ID_OR>COKP279</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>373306.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="165"><fs:test fid="165"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.8405464,-17.9676345626</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013012.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1529</fs:SITE_ID>
<fs:GRID_CODE>CEL283</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.8405464</fs:POINT_X>
<fs:POINT_Y>-17.9676345626</fs:POINT_Y>
<fs:SITE_ID_OR>COKP28</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>377228.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="166"><fs:test fid="166"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.799104466,-17.9378584276</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016279.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1530</fs:SITE_ID>
<fs:GRID_CODE>CCY239</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.799104466</fs:POINT_X>
<fs:POINT_Y>-17.9378584276</fs:POINT_Y>
<fs:SITE_ID_OR>COKP280</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372818.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="167"><fs:test fid="167"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.798035274,-17.9382042632</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016240.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1531</fs:SITE_ID>
<fs:GRID_CODE>CCY238</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.798035274</fs:POINT_X>
<fs:POINT_Y>-17.9382042632</fs:POINT_Y>
<fs:SITE_ID_OR>COKP281</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372705.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="168"><fs:test fid="168"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.79779024,-17.9381394878</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016247.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1532</fs:SITE_ID>
<fs:GRID_CODE>CCY237</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.79779024</fs:POINT_X>
<fs:POINT_Y>-17.9381394878</fs:POINT_Y>
<fs:SITE_ID_OR>COKP282</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372679.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="169"><fs:test fid="169"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.796558745,-17.9373546769</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016333.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1533</fs:SITE_ID>
<fs:GRID_CODE>CCY206</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.796558745</fs:POINT_X>
<fs:POINT_Y>-17.9373546769</fs:POINT_Y>
<fs:SITE_ID_OR>COKP283</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372548.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="170"><fs:test fid="170"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.795333191,-17.9356932998</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016516.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1534</fs:SITE_ID>
<fs:GRID_CODE>CCY145</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.795333191</fs:POINT_X>
<fs:POINT_Y>-17.9356932998</fs:POINT_Y>
<fs:SITE_ID_OR>COKP284</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372417.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="171"><fs:test fid="171"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.792877639,-17.9372143639</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016346.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1535</fs:SITE_ID>
<fs:GRID_CODE>CCY202</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.792877639</fs:POINT_X>
<fs:POINT_Y>-17.9372143639</fs:POINT_Y>
<fs:SITE_ID_OR>COKP285</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372158.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="172"><fs:test fid="172"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.7909144,-17.9357471928</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016507.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1536</fs:SITE_ID>
<fs:GRID_CODE>CCY140</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.7909144</fs:POINT_X>
<fs:POINT_Y>-17.9357471928</fs:POINT_Y>
<fs:SITE_ID_OR>COKP286</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>371949.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="173"><fs:test fid="173"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.79149114,-17.9356242612</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016521.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1537</fs:SITE_ID>
<fs:GRID_CODE>CCY141</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.79149114</fs:POINT_X>
<fs:POINT_Y>-17.9356242612</fs:POINT_Y>
<fs:SITE_ID_OR>COKP287</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372010.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="174"><fs:test fid="174"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.793230674,-17.9352735879</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016561.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1538</fs:SITE_ID>
<fs:GRID_CODE>CCY142</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.793230674</fs:POINT_X>
<fs:POINT_Y>-17.9352735879</fs:POINT_Y>
<fs:SITE_ID_OR>COKP288</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372194.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="175"><fs:test fid="175"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.793172499,-17.9354991533</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016536.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1539</fs:SITE_ID>
<fs:GRID_CODE>CCY142</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.793172499</fs:POINT_X>
<fs:POINT_Y>-17.9354991533</fs:POINT_Y>
<fs:SITE_ID_OR>COKP289</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372188.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="176"><fs:test fid="176"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.840696855,-17.9633879946</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013482.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1540</fs:SITE_ID>
<fs:GRID_CODE>CEL163</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.840696855</fs:POINT_X>
<fs:POINT_Y>-17.9633879946</fs:POINT_Y>
<fs:SITE_ID_OR>COKP29</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>377241.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="177"><fs:test fid="177"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.795184525,-17.9353399325</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016555.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1541</fs:SITE_ID>
<fs:GRID_CODE>CCY145</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.795184525</fs:POINT_X>
<fs:POINT_Y>-17.9353399325</fs:POINT_Y>
<fs:SITE_ID_OR>COKP290</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372401.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="178"><fs:test fid="178"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.827301436,-17.9685490547</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012902.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1551</fs:SITE_ID>
<fs:GRID_CODE>CEK329</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.827301436</fs:POINT_X>
<fs:POINT_Y>-17.9685490547</fs:POINT_Y>
<fs:SITE_ID_OR>COKP30</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>375826.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="179"><fs:test fid="179"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.831381192,-17.9727940102</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012435.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1562</fs:SITE_ID>
<fs:GRID_CODE>CEL453</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.831381192</fs:POINT_X>
<fs:POINT_Y>-17.9727940102</fs:POINT_Y>
<fs:SITE_ID_OR>COKP31</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>376261.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="180"><fs:test fid="180"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.741952396,-17.9385541524</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016162.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO157</fs:SITE_ID>
<fs:GRID_CODE>CCW268</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.741952396</fs:POINT_X>
<fs:POINT_Y>-17.9385541524</fs:POINT_Y>
<fs:SITE_ID_OR>CO141</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366765.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="181"><fs:test fid="181"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.828154808,-17.9694488859</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012803.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1573</fs:SITE_ID>
<fs:GRID_CODE>CEK360</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.828154808</fs:POINT_X>
<fs:POINT_Y>-17.9694488859</fs:POINT_Y>
<fs:SITE_ID_OR>COKP32</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>375917.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="182"><fs:test fid="182"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.877850953,-17.998246123</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009649.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO158</fs:SITE_ID>
<fs:GRID_CODE>CFX412</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.877850953</fs:POINT_X>
<fs:POINT_Y>-17.998246123</fs:POINT_Y>
<fs:SITE_ID_OR>CO1410</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>381199.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="183"><fs:test fid="183"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.899805915,-17.9897323797</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010605.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1587</fs:SITE_ID>
<fs:GRID_CODE>CFY106</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.899805915</fs:POINT_X>
<fs:POINT_Y>-17.9897323797</fs:POINT_Y>
<fs:SITE_ID_OR>COKP334</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>383518.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="184"><fs:test fid="184"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.852869427,-17.9749465915</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012211.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1595</fs:SITE_ID>
<fs:GRID_CODE>CEL536</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.852869427</fs:POINT_X>
<fs:POINT_Y>-17.9749465915</fs:POINT_Y>
<fs:SITE_ID_OR>COKP342</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>378538.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="185"><fs:test fid="185"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.837404901,-17.9700648346</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012741.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1598</fs:SITE_ID>
<fs:GRID_CODE>CEL369</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.837404901</fs:POINT_X>
<fs:POINT_Y>-17.9700648346</fs:POINT_Y>
<fs:SITE_ID_OR>COKP345</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>376897.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="186"><fs:test fid="186"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.840822873,-17.9599907724</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013858.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1599</fs:SITE_ID>
<fs:GRID_CODE>CEL43</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.840822873</fs:POINT_X>
<fs:POINT_Y>-17.9599907724</fs:POINT_Y>
<fs:SITE_ID_OR>COKP346</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>377252.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="187"><fs:test fid="187"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.840961106,-17.9677545231</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012999.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1604</fs:SITE_ID>
<fs:GRID_CODE>CEL313</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.840961106</fs:POINT_X>
<fs:POINT_Y>-17.9677545231</fs:POINT_Y>
<fs:SITE_ID_OR>COKP350</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>377272.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="188"><fs:test fid="188"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.839566737,-17.9672672202</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013052.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1605</fs:SITE_ID>
<fs:GRID_CODE>CEL282</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.839566737</fs:POINT_X>
<fs:POINT_Y>-17.9672672202</fs:POINT_Y>
<fs:SITE_ID_OR>COKP351</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>377124.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="189"><fs:test fid="189"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.840955756,-17.9700228186</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012748.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1606</fs:SITE_ID>
<fs:GRID_CODE>CEL373</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.840955756</fs:POINT_X>
<fs:POINT_Y>-17.9700228186</fs:POINT_Y>
<fs:SITE_ID_OR>COKP352</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>377273.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="190"><fs:test fid="190"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.831391526,-17.9726585154</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012450.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1607</fs:SITE_ID>
<fs:GRID_CODE>CEL453</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.831391526</fs:POINT_X>
<fs:POINT_Y>-17.9726585154</fs:POINT_Y>
<fs:SITE_ID_OR>COKP353</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>376262.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="191"><fs:test fid="191"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.901143693,-17.9917914336</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010378.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1608</fs:SITE_ID>
<fs:GRID_CODE>CFY197</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.901143693</fs:POINT_X>
<fs:POINT_Y>-17.9917914336</fs:POINT_Y>
<fs:SITE_ID_OR>COKP355</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>383661.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="192"><fs:test fid="192"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.844643065,-17.9722318052</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012506.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1609</fs:SITE_ID>
<fs:GRID_CODE>CEL437</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.844643065</fs:POINT_X>
<fs:POINT_Y>-17.9722318052</fs:POINT_Y>
<fs:SITE_ID_OR>COKP356</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>377665.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="193"><fs:test fid="193"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.841992231,-17.9718183655</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012550.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1610</fs:SITE_ID>
<fs:GRID_CODE>CEL434</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.841992231</fs:POINT_X>
<fs:POINT_Y>-17.9718183655</fs:POINT_Y>
<fs:SITE_ID_OR>COKP357</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>377384.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="194"><fs:test fid="194"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.84110526,-17.9717136606</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012561.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1611</fs:SITE_ID>
<fs:GRID_CODE>CEL433</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.84110526</fs:POINT_X>
<fs:POINT_Y>-17.9717136606</fs:POINT_Y>
<fs:SITE_ID_OR>COKP358</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>377290.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="195"><fs:test fid="195"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.781864997,-17.9447367485</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015506.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1618</fs:SITE_ID>
<fs:GRID_CODE>CCY430</fs:GRID_CODE>
<fs:METHOD_OF_>BS</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.781864997</fs:POINT_X>
<fs:POINT_Y>-17.9447367485</fs:POINT_Y>
<fs:SITE_ID_OR>COKP364</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>370997.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="196"><fs:test fid="196"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.798120242,-17.9382047887</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016240.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1619</fs:SITE_ID>
<fs:GRID_CODE>CCY238</fs:GRID_CODE>
<fs:METHOD_OF_>BS</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.798120242</fs:POINT_X>
<fs:POINT_Y>-17.9382047887</fs:POINT_Y>
<fs:SITE_ID_OR>COKP365</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372714.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="197"><fs:test fid="197"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.795741826,-17.9380906559</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016251.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1620</fs:SITE_ID>
<fs:GRID_CODE>CCY235</fs:GRID_CODE>
<fs:METHOD_OF_>BS</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.795741826</fs:POINT_X>
<fs:POINT_Y>-17.9380906559</fs:POINT_Y>
<fs:SITE_ID_OR>COKP366</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372462.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="198"><fs:test fid="198"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.750809939,-17.9423345171</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015750.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1622</fs:SITE_ID>
<fs:GRID_CODE>CCX368</fs:GRID_CODE>
<fs:METHOD_OF_>BS</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.750809939</fs:POINT_X>
<fs:POINT_Y>-17.9423345171</fs:POINT_Y>
<fs:SITE_ID_OR>COKP368</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367706.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="199"><fs:test fid="199"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.843475248,-17.9732008607</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012398.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1626</fs:SITE_ID>
<fs:GRID_CODE>CEL496</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.843475248</fs:POINT_X>
<fs:POINT_Y>-17.9732008607</fs:POINT_Y>
<fs:SITE_ID_OR>COKP372</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>377542.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="200"><fs:test fid="200"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.842760535,-17.9727447405</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012448.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1627</fs:SITE_ID>
<fs:GRID_CODE>CEL465</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.842760535</fs:POINT_X>
<fs:POINT_Y>-17.9727447405</fs:POINT_Y>
<fs:SITE_ID_OR>COKP373</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>377466.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="201"><fs:test fid="201"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.710813615,-17.8630910553</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8024490.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1628</fs:SITE_ID>
<fs:GRID_CODE>BYF475</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.710813615</fs:POINT_X>
<fs:POINT_Y>-17.8630910553</fs:POINT_Y>
<fs:SITE_ID_OR>COKP374</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>363409.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="202"><fs:test fid="202"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.85698296,-17.97553118</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012149.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1634</fs:SITE_ID>
<fs:GRID_CODE>CEL570</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.85698296</fs:POINT_X>
<fs:POINT_Y>-17.97553118</fs:POINT_Y>
<fs:SITE_ID_OR>COKP38</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>378974.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="203"><fs:test fid="203"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.714630761,-17.8650772597</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8024273.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1651</fs:SITE_ID>
<fs:GRID_CODE>BYF539</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.714630761</fs:POINT_X>
<fs:POINT_Y>-17.8650772597</fs:POINT_Y>
<fs:SITE_ID_OR>COKP396</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>363815.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="204"><fs:test fid="204"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.850522894,-17.9727366656</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012454.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1656</fs:SITE_ID>
<fs:GRID_CODE>CEL473</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.850522894</fs:POINT_X>
<fs:POINT_Y>-17.9727366656</fs:POINT_Y>
<fs:SITE_ID_OR>COKP40</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>378288.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="205"><fs:test fid="205"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.729155015,-17.9445075137</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015494.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO168</fs:SITE_ID>
<fs:GRID_CODE>CCW465</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.729155015</fs:POINT_X>
<fs:POINT_Y>-17.9445075137</fs:POINT_Y>
<fs:SITE_ID_OR>CO142</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365414.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="206"><fs:test fid="206"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.758493092,-17.9399257125</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016022.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1686</fs:SITE_ID>
<fs:GRID_CODE>CCX286</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.758493092</fs:POINT_X>
<fs:POINT_Y>-17.9399257125</fs:POINT_Y>
<fs:SITE_ID_OR>COKP43</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368518.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="207"><fs:test fid="207"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.898452464,-17.9902036696</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010552.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO180</fs:SITE_ID>
<fs:GRID_CODE>CFY134</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.898452464</fs:POINT_X>
<fs:POINT_Y>-17.9902036696</fs:POINT_Y>
<fs:SITE_ID_OR>CO1501</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>383375.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="208"><fs:test fid="208"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.934559823,-17.9899084404</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010607.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO185</fs:SITE_ID>
<fs:GRID_CODE>CFZ424</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.934559823</fs:POINT_X>
<fs:POINT_Y>-17.9899084404</fs:POINT_Y>
<fs:SITE_ID_OR>CO1506</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>387198.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="209"><fs:test fid="209"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.898508712,-17.9887489857</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010713.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO186</fs:SITE_ID>
<fs:GRID_CODE>CFY74</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.898508712</fs:POINT_X>
<fs:POINT_Y>-17.9887489857</fs:POINT_Y>
<fs:SITE_ID_OR>CO1507</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>383380.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="210"><fs:test fid="210"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.902311009,-17.9908762437</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010480.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO187</fs:SITE_ID>
<fs:GRID_CODE>CFY168</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.902311009</fs:POINT_X>
<fs:POINT_Y>-17.9908762437</fs:POINT_Y>
<fs:SITE_ID_OR>CO1508</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>383784.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="211"><fs:test fid="211"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.741603782,-17.9504715838</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014843.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1872</fs:SITE_ID>
<fs:GRID_CODE>CCW658</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.741603782</fs:POINT_X>
<fs:POINT_Y>-17.9504715838</fs:POINT_Y>
<fs:SITE_ID_OR>COKP6</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366737.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="212"><fs:test fid="212"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.757342533,-17.9613720817</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013648.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1877</fs:SITE_ID>
<fs:GRID_CODE>CEI105</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.757342533</fs:POINT_X>
<fs:POINT_Y>-17.9613720817</fs:POINT_Y>
<fs:SITE_ID_OR>COKP603</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368412.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="213"><fs:test fid="213"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.75847569,-17.9613612591</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013650.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1878</fs:SITE_ID>
<fs:GRID_CODE>CEI106</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.75847569</fs:POINT_X>
<fs:POINT_Y>-17.9613612591</fs:POINT_Y>
<fs:SITE_ID_OR>COKP604</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368532.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="214"><fs:test fid="214"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.757818606,-17.9608058015</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013711.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1879</fs:SITE_ID>
<fs:GRID_CODE>CEI75</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.757818606</fs:POINT_X>
<fs:POINT_Y>-17.9608058015</fs:POINT_Y>
<fs:SITE_ID_OR>COKP605</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368462.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="215"><fs:test fid="215"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.903713361,-17.991661388</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010394.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO188</fs:SITE_ID>
<fs:GRID_CODE>CFY200</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.903713361</fs:POINT_X>
<fs:POINT_Y>-17.991661388</fs:POINT_Y>
<fs:SITE_ID_OR>CO1509</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>383933.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="216"><fs:test fid="216"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.758779471,-17.9611282413</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013676.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1880</fs:SITE_ID>
<fs:GRID_CODE>CEI106</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.758779471</fs:POINT_X>
<fs:POINT_Y>-17.9611282413</fs:POINT_Y>
<fs:SITE_ID_OR>COKP606</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368564.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="217"><fs:test fid="217"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.811531529,-17.9587020881</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013981.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1888</fs:SITE_ID>
<fs:GRID_CODE>CEK12</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.811531529</fs:POINT_X>
<fs:POINT_Y>-17.9587020881</fs:POINT_Y>
<fs:SITE_ID_OR>COKP613</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>374149.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="218"><fs:test fid="218"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.758520595,-17.9400433687</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016009.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1891</fs:SITE_ID>
<fs:GRID_CODE>CCX286</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.758520595</fs:POINT_X>
<fs:POINT_Y>-17.9400433687</fs:POINT_Y>
<fs:SITE_ID_OR>COKP616</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368521.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="219"><fs:test fid="219"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.755351677,-17.9409177539</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015910.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1892</fs:SITE_ID>
<fs:GRID_CODE>CCX312</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.755351677</fs:POINT_X>
<fs:POINT_Y>-17.9409177539</fs:POINT_Y>
<fs:SITE_ID_OR>COKP617</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368186.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="220"><fs:test fid="220"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.756577092,-17.964159594</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013339.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1893</fs:SITE_ID>
<fs:GRID_CODE>CEI194</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.756577092</fs:POINT_X>
<fs:POINT_Y>-17.964159594</fs:POINT_Y>
<fs:SITE_ID_OR>COKP618</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368333.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="221"><fs:test fid="221"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.756227483,-17.9641935015</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013335.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1894</fs:SITE_ID>
<fs:GRID_CODE>CEI193</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.756227483</fs:POINT_X>
<fs:POINT_Y>-17.9641935015</fs:POINT_Y>
<fs:SITE_ID_OR>COKP619</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368296.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="222"><fs:test fid="222"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.77673108,-17.9416590144</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015843.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1896</fs:SITE_ID>
<fs:GRID_CODE>CCY335</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.77673108</fs:POINT_X>
<fs:POINT_Y>-17.9416590144</fs:POINT_Y>
<fs:SITE_ID_OR>COKP620</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>370451.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="223"><fs:test fid="223"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.774774642,-17.9405893565</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015960.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1897</fs:SITE_ID>
<fs:GRID_CODE>CCY303</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.774774642</fs:POINT_X>
<fs:POINT_Y>-17.9405893565</fs:POINT_Y>
<fs:SITE_ID_OR>COKP621</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>370243.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="224"><fs:test fid="224"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.771222776,-17.942238771</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015775.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1898</fs:SITE_ID>
<fs:GRID_CODE>CCX389</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.771222776</fs:POINT_X>
<fs:POINT_Y>-17.942238771</fs:POINT_Y>
<fs:SITE_ID_OR>COKP622</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>369868.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="225"><fs:test fid="225"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.757988837,-17.939127237</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016110.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1899</fs:SITE_ID>
<fs:GRID_CODE>CCX255</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.757988837</fs:POINT_X>
<fs:POINT_Y>-17.939127237</fs:POINT_Y>
<fs:SITE_ID_OR>COKP623</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368464.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="226"><fs:test fid="226"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.758857446,-17.9621318409</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013565.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1900</fs:SITE_ID>
<fs:GRID_CODE>CEI136</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.758857446</fs:POINT_X>
<fs:POINT_Y>-17.9621318409</fs:POINT_Y>
<fs:SITE_ID_OR>COKP624</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368573.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="227"><fs:test fid="227"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.757069469,-17.9639639353</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013361.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1901</fs:SITE_ID>
<fs:GRID_CODE>CEI194</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.757069469</fs:POINT_X>
<fs:POINT_Y>-17.9639639353</fs:POINT_Y>
<fs:SITE_ID_OR>COKP625</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368385.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="228"><fs:test fid="228"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.758642805,-17.9617689905</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013605.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1902</fs:SITE_ID>
<fs:GRID_CODE>CEI106</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.758642805</fs:POINT_X>
<fs:POINT_Y>-17.9617689905</fs:POINT_Y>
<fs:SITE_ID_OR>COKP626</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368550.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="229"><fs:test fid="229"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.735833944,-17.9492773886</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014971.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO197</fs:SITE_ID>
<fs:GRID_CODE>CCW622</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.735833944</fs:POINT_X>
<fs:POINT_Y>-17.9492773886</fs:POINT_Y>
<fs:SITE_ID_OR>CO159</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366125.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="230"><fs:test fid="230"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.740639198,-17.9493537917</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014966.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1978</fs:SITE_ID>
<fs:GRID_CODE>CCW627</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.740639198</fs:POINT_X>
<fs:POINT_Y>-17.9493537917</fs:POINT_Y>
<fs:SITE_ID_OR>COKP7</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366634.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="231"><fs:test fid="231"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.729091389,-17.9494502684</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014947.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO198</fs:SITE_ID>
<fs:GRID_CODE>CCW615</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.729091389</fs:POINT_X>
<fs:POINT_Y>-17.9494502684</fs:POINT_Y>
<fs:SITE_ID_OR>CO160</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365411.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="232"><fs:test fid="232"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.99060466,-18.0062047545</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8008837.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO199</fs:SITE_ID>
<fs:GRID_CODE>CGB652</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.99060466</fs:POINT_X>
<fs:POINT_Y>-18.0062047545</fs:POINT_Y>
<fs:SITE_ID_OR>CO1601</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>393142.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="233"><fs:test fid="233"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.826197439,-17.9627043963</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013548.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2015</fs:SITE_ID>
<fs:GRID_CODE>CEK148</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.826197439</fs:POINT_X>
<fs:POINT_Y>-17.9627043963</fs:POINT_Y>
<fs:SITE_ID_OR>COKP732</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>375705.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="234"><fs:test fid="234"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.816209881,-17.9495308954</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014999.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2017</fs:SITE_ID>
<fs:GRID_CODE>CCZ617</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.816209881</fs:POINT_X>
<fs:POINT_Y>-17.9495308954</fs:POINT_Y>
<fs:SITE_ID_OR>COKP734</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>374638.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="235"><fs:test fid="235"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.839014411,-17.9650859612</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013293.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2024</fs:SITE_ID>
<fs:GRID_CODE>CEL221</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.839014411</fs:POINT_X>
<fs:POINT_Y>-17.9650859612</fs:POINT_Y>
<fs:SITE_ID_OR>COKP740</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>377064.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="236"><fs:test fid="236"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.838842564,-17.9595903389</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013901.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2025</fs:SITE_ID>
<fs:GRID_CODE>CEL11</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.838842564</fs:POINT_X>
<fs:POINT_Y>-17.9595903389</fs:POINT_Y>
<fs:SITE_ID_OR>COKP741</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>377042.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="237"><fs:test fid="237"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.737587042,-17.9483760651</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015072.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2039</fs:SITE_ID>
<fs:GRID_CODE>CCW594</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.737587042</fs:POINT_X>
<fs:POINT_Y>-17.9483760651</fs:POINT_Y>
<fs:SITE_ID_OR>COKP8</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366310.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="238"><fs:test fid="238"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.983614964,-17.9979892843</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009742.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO204</fs:SITE_ID>
<fs:GRID_CODE>CGB374</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.983614964</fs:POINT_X>
<fs:POINT_Y>-17.9979892843</fs:POINT_Y>
<fs:SITE_ID_OR>CO1606</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>392397.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="239"><fs:test fid="239"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.743151611,-17.9412006939</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015870.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2049</fs:SITE_ID>
<fs:GRID_CODE>CCW359</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.743151611</fs:POINT_X>
<fs:POINT_Y>-17.9412006939</fs:POINT_Y>
<fs:SITE_ID_OR>COKP9</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366894.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="240"><fs:test fid="240"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.726059887,-17.9416406265</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015809.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO205</fs:SITE_ID>
<fs:GRID_CODE>CCW341</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.726059887</fs:POINT_X>
<fs:POINT_Y>-17.9416406265</fs:POINT_Y>
<fs:SITE_ID_OR>CO161</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365084.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="241"><fs:test fid="241"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.727165361,-17.9415213558</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015823.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO206</fs:SITE_ID>
<fs:GRID_CODE>CCW343</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.727165361</fs:POINT_X>
<fs:POINT_Y>-17.9415213558</fs:POINT_Y>
<fs:SITE_ID_OR>CO162</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365201.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="242"><fs:test fid="242"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.72102632,-17.940523133</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015929.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO207</fs:SITE_ID>
<fs:GRID_CODE>CCW306</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.72102632</fs:POINT_X>
<fs:POINT_Y>-17.940523133</fs:POINT_Y>
<fs:SITE_ID_OR>CO164</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>364550.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="243"><fs:test fid="243"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.721579426,-17.9410689847</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015869.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO208</fs:SITE_ID>
<fs:GRID_CODE>CCW337</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.721579426</fs:POINT_X>
<fs:POINT_Y>-17.9410689847</fs:POINT_Y>
<fs:SITE_ID_OR>CO165</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>364609.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="244"><fs:test fid="244"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.721477425,-17.9421256259</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015752.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO209</fs:SITE_ID>
<fs:GRID_CODE>CCW366</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.721477425</fs:POINT_X>
<fs:POINT_Y>-17.9421256259</fs:POINT_Y>
<fs:SITE_ID_OR>CO166</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>364599.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="245"><fs:test fid="245"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.724984677,-17.9414889834</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015825.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO21</fs:SITE_ID>
<fs:GRID_CODE>CCW340</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.724984677</fs:POINT_X>
<fs:POINT_Y>-17.9414889834</fs:POINT_Y>
<fs:SITE_ID_OR>CO102</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>364970.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="246"><fs:test fid="246"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.73395525,-17.9439424228</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015560.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO220</fs:SITE_ID>
<fs:GRID_CODE>CCW440</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.73395525</fs:POINT_X>
<fs:POINT_Y>-17.9439424228</fs:POINT_Y>
<fs:SITE_ID_OR>CO174</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365922.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="247"><fs:test fid="247"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.837673512,-17.9780823943</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8011854.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO247</fs:SITE_ID>
<fs:GRID_CODE>CEL640</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.837673512</fs:POINT_X>
<fs:POINT_Y>-17.9780823943</fs:POINT_Y>
<fs:SITE_ID_OR>CO2006</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>376931.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="248"><fs:test fid="248"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.744072289,-17.9445231978</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015503.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO251</fs:SITE_ID>
<fs:GRID_CODE>CCW450</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.744072289</fs:POINT_X>
<fs:POINT_Y>-17.9445231978</fs:POINT_Y>
<fs:SITE_ID_OR>CO201</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366994.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="249"><fs:test fid="249"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.747288625,-17.9396098009</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016049.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO252</fs:SITE_ID>
<fs:GRID_CODE>CCX274</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.747288625</fs:POINT_X>
<fs:POINT_Y>-17.9396098009</fs:POINT_Y>
<fs:SITE_ID_OR>CO204</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367331.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="250"><fs:test fid="250"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.751165284,-17.9387852827</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016143.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO253</fs:SITE_ID>
<fs:GRID_CODE>CCX248</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.751165284</fs:POINT_X>
<fs:POINT_Y>-17.9387852827</fs:POINT_Y>
<fs:SITE_ID_OR>CO205</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367741.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="251"><fs:test fid="251"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.751105855,-17.9378360214</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016248.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO254</fs:SITE_ID>
<fs:GRID_CODE>CCX218</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.751105855</fs:POINT_X>
<fs:POINT_Y>-17.9378360214</fs:POINT_Y>
<fs:SITE_ID_OR>CO206</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367734.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="252"><fs:test fid="252"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.752277146,-17.94717871</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015215.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO255</fs:SITE_ID>
<fs:GRID_CODE>CCX519</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.752277146</fs:POINT_X>
<fs:POINT_Y>-17.94717871</fs:POINT_Y>
<fs:SITE_ID_OR>CO207</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367865.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="253"><fs:test fid="253"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.752924112,-17.9397364213</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016039.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO256</fs:SITE_ID>
<fs:GRID_CODE>CCX280</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.752924112</fs:POINT_X>
<fs:POINT_Y>-17.9397364213</fs:POINT_Y>
<fs:SITE_ID_OR>CO208</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367928.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="254"><fs:test fid="254"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.743469336,-17.9483509514</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015079.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO257</fs:SITE_ID>
<fs:GRID_CODE>CCW600</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.743469336</fs:POINT_X>
<fs:POINT_Y>-17.9483509514</fs:POINT_Y>
<fs:SITE_ID_OR>CO210</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366933.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="255"><fs:test fid="255"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.842317077,-17.9509354009</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014861.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2591</fs:SITE_ID>
<fs:GRID_CODE>CDA645</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.842317077</fs:POINT_X>
<fs:POINT_Y>-17.9509354009</fs:POINT_Y>
<fs:SITE_ID_OR>COSL81</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>377404.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="256"><fs:test fid="256"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.74718602,-17.9474803053</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015178.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO261</fs:SITE_ID>
<fs:GRID_CODE>CCX544</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.74718602</fs:POINT_X>
<fs:POINT_Y>-17.9474803053</fs:POINT_Y>
<fs:SITE_ID_OR>CO211</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367326.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="257"><fs:test fid="257"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.748094023,-17.9472511997</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015204.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO262</fs:SITE_ID>
<fs:GRID_CODE>CCX515</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.748094023</fs:POINT_X>
<fs:POINT_Y>-17.9472511997</fs:POINT_Y>
<fs:SITE_ID_OR>CO212</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367422.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="258"><fs:test fid="258"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.732889792,-17.9596506142</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013821.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2629</fs:SITE_ID>
<fs:GRID_CODE>CEH49</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.732889792</fs:POINT_X>
<fs:POINT_Y>-17.9596506142</fs:POINT_Y>
<fs:SITE_ID_OR>SUE04</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365821.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="259"><fs:test fid="259"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.746715214,-17.9459590644</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015346.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO263</fs:SITE_ID>
<fs:GRID_CODE>CCX483</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.746715214</fs:POINT_X>
<fs:POINT_Y>-17.9459590644</fs:POINT_Y>
<fs:SITE_ID_OR>CO213</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367275.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="260"><fs:test fid="260"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.813674138,-17.9503287625</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014909.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2630</fs:SITE_ID>
<fs:GRID_CODE>CCZ614</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.813674138</fs:POINT_X>
<fs:POINT_Y>-17.9503287625</fs:POINT_Y>
<fs:SITE_ID_OR>SUE05</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>374370.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="261"><fs:test fid="261"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.746255002,-17.9442752264</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015532.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO264</fs:SITE_ID>
<fs:GRID_CODE>CCX423</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.746255002</fs:POINT_X>
<fs:POINT_Y>-17.9442752264</fs:POINT_Y>
<fs:SITE_ID_OR>CO214</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367225.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="262"><fs:test fid="262"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.746826232,-17.9436011426</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015607.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO265</fs:SITE_ID>
<fs:GRID_CODE>CCX393</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.746826232</fs:POINT_X>
<fs:POINT_Y>-17.9436011426</fs:POINT_Y>
<fs:SITE_ID_OR>CO215</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367285.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="263"><fs:test fid="263"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.747462781,-17.9430359211</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015670.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO266</fs:SITE_ID>
<fs:GRID_CODE>CCX394</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.747462781</fs:POINT_X>
<fs:POINT_Y>-17.9430359211</fs:POINT_Y>
<fs:SITE_ID_OR>CO216</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367352.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="264"><fs:test fid="264"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.751009973,-17.9420827688</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015778.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO268</fs:SITE_ID>
<fs:GRID_CODE>CCX368</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.751009973</fs:POINT_X>
<fs:POINT_Y>-17.9420827688</fs:POINT_Y>
<fs:SITE_ID_OR>CO218</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367727.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="265"><fs:test fid="265"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.752886547,-17.9410555747</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015893.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO269</fs:SITE_ID>
<fs:GRID_CODE>CCX340</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.752886547</fs:POINT_X>
<fs:POINT_Y>-17.9410555747</fs:POINT_Y>
<fs:SITE_ID_OR>CO219</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367925.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="266"><fs:test fid="266"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.756383063,-17.9405899908</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015947.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO270</fs:SITE_ID>
<fs:GRID_CODE>CCX313</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.756383063</fs:POINT_X>
<fs:POINT_Y>-17.9405899908</fs:POINT_Y>
<fs:SITE_ID_OR>CO220</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368295.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="267"><fs:test fid="267"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.757399076,-17.941111598</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015890.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO272</fs:SITE_ID>
<fs:GRID_CODE>CCX345</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.757399076</fs:POINT_X>
<fs:POINT_Y>-17.941111598</fs:POINT_Y>
<fs:SITE_ID_OR>CO221</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368403.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="268"><fs:test fid="268"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.75782894,-17.941746934</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015820.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO273</fs:SITE_ID>
<fs:GRID_CODE>CCX345</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.75782894</fs:POINT_X>
<fs:POINT_Y>-17.941746934</fs:POINT_Y>
<fs:SITE_ID_OR>CO222</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368449.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="269"><fs:test fid="269"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.758595302,-17.9401613266</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015996.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO274</fs:SITE_ID>
<fs:GRID_CODE>CCX316</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.758595302</fs:POINT_X>
<fs:POINT_Y>-17.9401613266</fs:POINT_Y>
<fs:SITE_ID_OR>CO223</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368529.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="270"><fs:test fid="270"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.757800842,-17.9390085548</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016123.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO275</fs:SITE_ID>
<fs:GRID_CODE>CCX255</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.757800842</fs:POINT_X>
<fs:POINT_Y>-17.9390085548</fs:POINT_Y>
<fs:SITE_ID_OR>CO224</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368444.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="271"><fs:test fid="271"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.758854992,-17.9394761762</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016072.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO276</fs:SITE_ID>
<fs:GRID_CODE>CCX286</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.758854992</fs:POINT_X>
<fs:POINT_Y>-17.9394761762</fs:POINT_Y>
<fs:SITE_ID_OR>CO225</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368556.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="272"><fs:test fid="272"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.760404535,-17.9393053284</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016092.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO277</fs:SITE_ID>
<fs:GRID_CODE>CCX288</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.760404535</fs:POINT_X>
<fs:POINT_Y>-17.9393053284</fs:POINT_Y>
<fs:SITE_ID_OR>CO226</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368720.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="273"><fs:test fid="273"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.743219982,-17.9462256629</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015314.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO278</fs:SITE_ID>
<fs:GRID_CODE>CCW510</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.743219982</fs:POINT_X>
<fs:POINT_Y>-17.9462256629</fs:POINT_Y>
<fs:SITE_ID_OR>CO227</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366905.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="274"><fs:test fid="274"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.743957469,-17.9460768056</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015331.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO279</fs:SITE_ID>
<fs:GRID_CODE>CCW510</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.743957469</fs:POINT_X>
<fs:POINT_Y>-17.9460768056</fs:POINT_Y>
<fs:SITE_ID_OR>CO228</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366983.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="275"><fs:test fid="275"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.747362831,-17.9465054575</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015286.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO280</fs:SITE_ID>
<fs:GRID_CODE>CCX514</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.747362831</fs:POINT_X>
<fs:POINT_Y>-17.9465054575</fs:POINT_Y>
<fs:SITE_ID_OR>CO229</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367344.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="276"><fs:test fid="276"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.746049819,-17.9465963918</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015275.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO281</fs:SITE_ID>
<fs:GRID_CODE>CCX513</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.746049819</fs:POINT_X>
<fs:POINT_Y>-17.9465963918</fs:POINT_Y>
<fs:SITE_ID_OR>CO230</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367205.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="277"><fs:test fid="277"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.7469554,-17.9467106789</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015263.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO284</fs:SITE_ID>
<fs:GRID_CODE>CCX514</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.7469554</fs:POINT_X>
<fs:POINT_Y>-17.9467106789</fs:POINT_Y>
<fs:SITE_ID_OR>CO231</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367301.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="278"><fs:test fid="278"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.746280225,-17.9460556636</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015335.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO285</fs:SITE_ID>
<fs:GRID_CODE>CCX483</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.746280225</fs:POINT_X>
<fs:POINT_Y>-17.9460556636</fs:POINT_Y>
<fs:SITE_ID_OR>CO232</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367229.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="279"><fs:test fid="279"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.745959738,-17.9459812994</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015343.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO286</fs:SITE_ID>
<fs:GRID_CODE>CCX482</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.745959738</fs:POINT_X>
<fs:POINT_Y>-17.9459812994</fs:POINT_Y>
<fs:SITE_ID_OR>CO233</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367195.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="280"><fs:test fid="280"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.746155098,-17.9437142921</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015594.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO287</fs:SITE_ID>
<fs:GRID_CODE>CCX423</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.746155098</fs:POINT_X>
<fs:POINT_Y>-17.9437142921</fs:POINT_Y>
<fs:SITE_ID_OR>CO234</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367214.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="281"><fs:test fid="281"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.745691075,-17.942572644</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015720.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO288</fs:SITE_ID>
<fs:GRID_CODE>CCX362</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.745691075</fs:POINT_X>
<fs:POINT_Y>-17.942572644</fs:POINT_Y>
<fs:SITE_ID_OR>CO235</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367164.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="282"><fs:test fid="282"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.747373015,-17.9423756463</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015743.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO289</fs:SITE_ID>
<fs:GRID_CODE>CCX364</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.747373015</fs:POINT_X>
<fs:POINT_Y>-17.9423756463</fs:POINT_Y>
<fs:SITE_ID_OR>CO236</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367342.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="283"><fs:test fid="283"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.724229562,-17.9401465701</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015973.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO29</fs:SITE_ID>
<fs:GRID_CODE>CCW309</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.724229562</fs:POINT_X>
<fs:POINT_Y>-17.9401465701</fs:POINT_Y>
<fs:SITE_ID_OR>CO103</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>364889.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="284"><fs:test fid="284"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.748068491,-17.9414854728</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015842.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO290</fs:SITE_ID>
<fs:GRID_CODE>CCX335</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.748068491</fs:POINT_X>
<fs:POINT_Y>-17.9414854728</fs:POINT_Y>
<fs:SITE_ID_OR>CO237</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367415.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="285"><fs:test fid="285"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.748675054,-17.9411550137</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015879.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO291</fs:SITE_ID>
<fs:GRID_CODE>CCX335</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.748675054</fs:POINT_X>
<fs:POINT_Y>-17.9411550137</fs:POINT_Y>
<fs:SITE_ID_OR>CO238</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367479.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="286"><fs:test fid="286"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.752302356,-17.940889159</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015911.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO292</fs:SITE_ID>
<fs:GRID_CODE>CCX309</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.752302356</fs:POINT_X>
<fs:POINT_Y>-17.940889159</fs:POINT_Y>
<fs:SITE_ID_OR>CO239</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367863.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="287"><fs:test fid="287"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.753240921,-17.9403348931</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015973.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO293</fs:SITE_ID>
<fs:GRID_CODE>CCX310</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.753240921</fs:POINT_X>
<fs:POINT_Y>-17.9403348931</fs:POINT_Y>
<fs:SITE_ID_OR>CO240</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367962.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="288"><fs:test fid="288"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.75350468,-17.9390714122</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016113.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO295</fs:SITE_ID>
<fs:GRID_CODE>CCX250</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.75350468</fs:POINT_X>
<fs:POINT_Y>-17.9390714122</fs:POINT_Y>
<fs:SITE_ID_OR>CO241</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367989.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="289"><fs:test fid="289"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.755647817,-17.9404226182</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015965.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO296</fs:SITE_ID>
<fs:GRID_CODE>CCX313</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.755647817</fs:POINT_X>
<fs:POINT_Y>-17.9404226182</fs:POINT_Y>
<fs:SITE_ID_OR>CO242</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368217.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="290"><fs:test fid="290"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.756877204,-17.940132268</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015998.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO297</fs:SITE_ID>
<fs:GRID_CODE>CCX314</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.756877204</fs:POINT_X>
<fs:POINT_Y>-17.940132268</fs:POINT_Y>
<fs:SITE_ID_OR>CO243</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368347.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="291"><fs:test fid="291"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.758059935,-17.9411158234</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015890.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO298</fs:SITE_ID>
<fs:GRID_CODE>CCX345</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.758059935</fs:POINT_X>
<fs:POINT_Y>-17.9411158234</fs:POINT_Y>
<fs:SITE_ID_OR>CO244</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368473.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="292"><fs:test fid="292"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.758166621,-17.940709842</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015935.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO299</fs:SITE_ID>
<fs:GRID_CODE>CCX315</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.758166621</fs:POINT_X>
<fs:POINT_Y>-17.940709842</fs:POINT_Y>
<fs:SITE_ID_OR>CO245</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368484.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="293"><fs:test fid="293"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.724016426,-17.9409042674</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015889.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO30</fs:SITE_ID>
<fs:GRID_CODE>CCW339</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.724016426</fs:POINT_X>
<fs:POINT_Y>-17.9409042674</fs:POINT_Y>
<fs:SITE_ID_OR>CO104</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>364867.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="294"><fs:test fid="294"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.742545561,-17.9387839149</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016137.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO300</fs:SITE_ID>
<fs:GRID_CODE>CCW269</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.742545561</fs:POINT_X>
<fs:POINT_Y>-17.9387839149</fs:POINT_Y>
<fs:SITE_ID_OR>CO246</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366828.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="295"><fs:test fid="295"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.742885932,-17.9400512862</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015997.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO301</fs:SITE_ID>
<fs:GRID_CODE>CCW329</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.742885932</fs:POINT_X>
<fs:POINT_Y>-17.9400512862</fs:POINT_Y>
<fs:SITE_ID_OR>CO247</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366865.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="296"><fs:test fid="296"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.743928685,-17.939452556</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016064.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO302</fs:SITE_ID>
<fs:GRID_CODE>CCW300</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.743928685</fs:POINT_X>
<fs:POINT_Y>-17.939452556</fs:POINT_Y>
<fs:SITE_ID_OR>CO248</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366975.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="297"><fs:test fid="297"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.74663906,-17.9393435409</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016078.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO303</fs:SITE_ID>
<fs:GRID_CODE>CCX273</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.74663906</fs:POINT_X>
<fs:POINT_Y>-17.9393435409</fs:POINT_Y>
<fs:SITE_ID_OR>CO249</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367262.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="298"><fs:test fid="298"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.750143227,-17.9377846476</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016253.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO304</fs:SITE_ID>
<fs:GRID_CODE>CCX217</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.750143227</fs:POINT_X>
<fs:POINT_Y>-17.9377846476</fs:POINT_Y>
<fs:SITE_ID_OR>CO250</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367632.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="299"><fs:test fid="299"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.750507489,-17.937000776</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016340.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO306</fs:SITE_ID>
<fs:GRID_CODE>CCX187</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.750507489</fs:POINT_X>
<fs:POINT_Y>-17.937000776</fs:POINT_Y>
<fs:SITE_ID_OR>CO251</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367670.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="300"><fs:test fid="300"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.753158716,-17.9372437284</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016315.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO307</fs:SITE_ID>
<fs:GRID_CODE>CCX190</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.753158716</fs:POINT_X>
<fs:POINT_Y>-17.9372437284</fs:POINT_Y>
<fs:SITE_ID_OR>CO252</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367951.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="301"><fs:test fid="301"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.755533867,-17.9391657514</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016104.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO308</fs:SITE_ID>
<fs:GRID_CODE>CCX253</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.755533867</fs:POINT_X>
<fs:POINT_Y>-17.9391657514</fs:POINT_Y>
<fs:SITE_ID_OR>CO253</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368204.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="302"><fs:test fid="302"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.75736556,-17.939150363</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016107.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO309</fs:SITE_ID>
<fs:GRID_CODE>CCX254</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.75736556</fs:POINT_X>
<fs:POINT_Y>-17.939150363</fs:POINT_Y>
<fs:SITE_ID_OR>CO254</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368398.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="303"><fs:test fid="303"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.72614453,-17.943005749</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015658.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO31</fs:SITE_ID>
<fs:GRID_CODE>CCW401</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.72614453</fs:POINT_X>
<fs:POINT_Y>-17.943005749</fs:POINT_Y>
<fs:SITE_ID_OR>CO106</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365094.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="304"><fs:test fid="304"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.726421224,-17.9439202871</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015557.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO32</fs:SITE_ID>
<fs:GRID_CODE>CCW432</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.726421224</fs:POINT_X>
<fs:POINT_Y>-17.9439202871</fs:POINT_Y>
<fs:SITE_ID_OR>CO107</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365124.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="305"><fs:test fid="305"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.723304471,-17.9493400183</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014955.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO33</fs:SITE_ID>
<fs:GRID_CODE>CCW608</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.723304471</fs:POINT_X>
<fs:POINT_Y>-17.9493400183</fs:POINT_Y>
<fs:SITE_ID_OR>CO108</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>364798.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="306"><fs:test fid="306"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.748206481,-17.9420014671</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015785.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO332</fs:SITE_ID>
<fs:GRID_CODE>CCX365</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.748206481</fs:POINT_X>
<fs:POINT_Y>-17.9420014671</fs:POINT_Y>
<fs:SITE_ID_OR>CO267</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367430.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="307"><fs:test fid="307"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.757853594,-17.9382136392</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016211.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO333</fs:SITE_ID>
<fs:GRID_CODE>CCX225</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.757853594</fs:POINT_X>
<fs:POINT_Y>-17.9382136392</fs:POINT_Y>
<fs:SITE_ID_OR>CO268</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368449.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="308"><fs:test fid="308"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.757223276,-17.9378933153</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016246.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO334</fs:SITE_ID>
<fs:GRID_CODE>CCX224</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.757223276</fs:POINT_X>
<fs:POINT_Y>-17.9378933153</fs:POINT_Y>
<fs:SITE_ID_OR>CO269</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368382.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="309"><fs:test fid="309"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.761324376,-17.938723791</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016157.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO335</fs:SITE_ID>
<fs:GRID_CODE>CCX259</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.761324376</fs:POINT_X>
<fs:POINT_Y>-17.938723791</fs:POINT_Y>
<fs:SITE_ID_OR>CO270</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368817.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="310"><fs:test fid="310"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.728669557,-17.947703391</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015140.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO34</fs:SITE_ID>
<fs:GRID_CODE>CCW554</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.728669557</fs:POINT_X>
<fs:POINT_Y>-17.947703391</fs:POINT_Y>
<fs:SITE_ID_OR>CO109</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365365.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="311"><fs:test fid="311"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.758852541,-17.9465972874</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015284.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO341</fs:SITE_ID>
<fs:GRID_CODE>CCX526</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.758852541</fs:POINT_X>
<fs:POINT_Y>-17.9465972874</fs:POINT_Y>
<fs:SITE_ID_OR>CO271</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368561.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="312"><fs:test fid="312"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.745693272,-17.9449403327</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015458.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO342</fs:SITE_ID>
<fs:GRID_CODE>CCX452</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.745693272</fs:POINT_X>
<fs:POINT_Y>-17.9449403327</fs:POINT_Y>
<fs:SITE_ID_OR>CO272</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367166.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="313"><fs:test fid="313"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.732132682,-17.9453222168</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015406.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO35</fs:SITE_ID>
<fs:GRID_CODE>CCW468</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.732132682</fs:POINT_X>
<fs:POINT_Y>-17.9453222168</fs:POINT_Y>
<fs:SITE_ID_OR>CO110</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365730.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="314"><fs:test fid="314"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.755855831,-17.937676715</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016269.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO350</fs:SITE_ID>
<fs:GRID_CODE>CCX223</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.755855831</fs:POINT_X>
<fs:POINT_Y>-17.937676715</fs:POINT_Y>
<fs:SITE_ID_OR>CO280</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368237.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="315"><fs:test fid="315"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.762885342,-17.9409839426</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015908.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO353</fs:SITE_ID>
<fs:GRID_CODE>CCX320</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.762885342</fs:POINT_X>
<fs:POINT_Y>-17.9409839426</fs:POINT_Y>
<fs:SITE_ID_OR>CO281</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368984.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="316"><fs:test fid="316"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.755975624,-17.9394487258</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016073.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO354</fs:SITE_ID>
<fs:GRID_CODE>CCX283</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.755975624</fs:POINT_X>
<fs:POINT_Y>-17.9394487258</fs:POINT_Y>
<fs:SITE_ID_OR>CO282</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368251.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="317"><fs:test fid="317"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.747800079,-17.9447460755</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015481.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO355</fs:SITE_ID>
<fs:GRID_CODE>CCX454</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.747800079</fs:POINT_X>
<fs:POINT_Y>-17.9447460755</fs:POINT_Y>
<fs:SITE_ID_OR>CO283</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367389.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="318"><fs:test fid="318"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.74450869,-17.9469027288</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015240.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO356</fs:SITE_ID>
<fs:GRID_CODE>CCX511</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.74450869</fs:POINT_X>
<fs:POINT_Y>-17.9469027288</fs:POINT_Y>
<fs:SITE_ID_OR>CO284</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367042.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="319"><fs:test fid="319"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.753873327,-17.9403570239</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015971.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO357</fs:SITE_ID>
<fs:GRID_CODE>CCX311</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.753873327</fs:POINT_X>
<fs:POINT_Y>-17.9403570239</fs:POINT_Y>
<fs:SITE_ID_OR>CO285</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368029.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="320"><fs:test fid="320"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.754727107,-17.9397750957</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016036.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO358</fs:SITE_ID>
<fs:GRID_CODE>CCX282</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.754727107</fs:POINT_X>
<fs:POINT_Y>-17.9397750957</fs:POINT_Y>
<fs:SITE_ID_OR>CO286</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368119.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="321"><fs:test fid="321"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.754508495,-17.9386350383</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016162.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO359</fs:SITE_ID>
<fs:GRID_CODE>CCX251</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.754508495</fs:POINT_X>
<fs:POINT_Y>-17.9386350383</fs:POINT_Y>
<fs:SITE_ID_OR>CO287</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368095.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="322"><fs:test fid="322"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.744159672,-17.9415054308</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015837.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO360</fs:SITE_ID>
<fs:GRID_CODE>CCX331</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.744159672</fs:POINT_X>
<fs:POINT_Y>-17.9415054308</fs:POINT_Y>
<fs:SITE_ID_OR>CO288</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367001.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="323"><fs:test fid="323"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.768955079,-17.9452246961</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015443.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO368</fs:SITE_ID>
<fs:GRID_CODE>CCX477</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.768955079</fs:POINT_X>
<fs:POINT_Y>-17.9452246961</fs:POINT_Y>
<fs:SITE_ID_OR>CO301</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>369630.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="324"><fs:test fid="324"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.771098484,-17.9424639098</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015750.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO369</fs:SITE_ID>
<fs:GRID_CODE>CCX389</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.771098484</fs:POINT_X>
<fs:POINT_Y>-17.9424639098</fs:POINT_Y>
<fs:SITE_ID_OR>CO302</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>369855.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="325"><fs:test fid="325"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.763072127,-17.9399187685</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016026.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO370</fs:SITE_ID>
<fs:GRID_CODE>CCX291</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.763072127</fs:POINT_X>
<fs:POINT_Y>-17.9399187685</fs:POINT_Y>
<fs:SITE_ID_OR>CO303</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>369003.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="326"><fs:test fid="326"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.763192472,-17.9402629397</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015988.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO371</fs:SITE_ID>
<fs:GRID_CODE>CCX321</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.763192472</fs:POINT_X>
<fs:POINT_Y>-17.9402629397</fs:POINT_Y>
<fs:SITE_ID_OR>CO304</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>369016.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="327"><fs:test fid="327"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.763925907,-17.940692345</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015941.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO372</fs:SITE_ID>
<fs:GRID_CODE>CCX321</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.763925907</fs:POINT_X>
<fs:POINT_Y>-17.940692345</fs:POINT_Y>
<fs:SITE_ID_OR>CO305</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>369094.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="328"><fs:test fid="328"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.764932503,-17.9412138541</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015884.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO373</fs:SITE_ID>
<fs:GRID_CODE>CCX353</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.764932503</fs:POINT_X>
<fs:POINT_Y>-17.9412138541</fs:POINT_Y>
<fs:SITE_ID_OR>CO306</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>369201.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="329"><fs:test fid="329"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.763774763,-17.9393448735</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016090.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO374</fs:SITE_ID>
<fs:GRID_CODE>CCX291</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.763774763</fs:POINT_X>
<fs:POINT_Y>-17.9393448735</fs:POINT_Y>
<fs:SITE_ID_OR>CO307</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>369077.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="330"><fs:test fid="330"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.761059621,-17.9333541398</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016751.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO375</fs:SITE_ID>
<fs:GRID_CODE>CCX78</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.761059621</fs:POINT_X>
<fs:POINT_Y>-17.9333541398</fs:POINT_Y>
<fs:SITE_ID_OR>CO308</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368785.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="331"><fs:test fid="331"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.770327196,-17.9420433278</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015796.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO376</fs:SITE_ID>
<fs:GRID_CODE>CCX388</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.770327196</fs:POINT_X>
<fs:POINT_Y>-17.9420433278</fs:POINT_Y>
<fs:SITE_ID_OR>CO309</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>369773.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="332"><fs:test fid="332"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.772078446,-17.9413766289</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015871.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO377</fs:SITE_ID>
<fs:GRID_CODE>CCX360</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.772078446</fs:POINT_X>
<fs:POINT_Y>-17.9413766289</fs:POINT_Y>
<fs:SITE_ID_OR>CO310</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>369958.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="333"><fs:test fid="333"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.774228316,-17.9404051704</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015980.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO379</fs:SITE_ID>
<fs:GRID_CODE>CCY302</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.774228316</fs:POINT_X>
<fs:POINT_Y>-17.9404051704</fs:POINT_Y>
<fs:SITE_ID_OR>CO311</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>370185.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="334"><fs:test fid="334"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.774645767,-17.9401095823</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016013.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO380</fs:SITE_ID>
<fs:GRID_CODE>CCY273</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.774645767</fs:POINT_X>
<fs:POINT_Y>-17.9401095823</fs:POINT_Y>
<fs:SITE_ID_OR>CO312</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>370229.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="335"><fs:test fid="335"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.777139834,-17.9412549219</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015888.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO381</fs:SITE_ID>
<fs:GRID_CODE>CCY335</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.777139834</fs:POINT_X>
<fs:POINT_Y>-17.9412549219</fs:POINT_Y>
<fs:SITE_ID_OR>CO313</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>370494.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="336"><fs:test fid="336"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.779318064,-17.9444044652</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015541.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO382</fs:SITE_ID>
<fs:GRID_CODE>CCY428</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.779318064</fs:POINT_X>
<fs:POINT_Y>-17.9444044652</fs:POINT_Y>
<fs:SITE_ID_OR>CO314</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>370727.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="337"><fs:test fid="337"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.779883167,-17.9446068297</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015519.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO383</fs:SITE_ID>
<fs:GRID_CODE>CCY428</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.779883167</fs:POINT_X>
<fs:POINT_Y>-17.9446068297</fs:POINT_Y>
<fs:SITE_ID_OR>CO315</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>370787.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="338"><fs:test fid="338"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.78176201,-17.9446095843</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015520.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO384</fs:SITE_ID>
<fs:GRID_CODE>CCY430</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.78176201</fs:POINT_X>
<fs:POINT_Y>-17.9446095843</fs:POINT_Y>
<fs:SITE_ID_OR>CO316</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>370986.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="339"><fs:test fid="339"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.78165948,-17.9430364989</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015694.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO385</fs:SITE_ID>
<fs:GRID_CODE>CCY400</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.78165948</fs:POINT_X>
<fs:POINT_Y>-17.9430364989</fs:POINT_Y>
<fs:SITE_ID_OR>CO317</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>370974.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="340"><fs:test fid="340"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.781880211,-17.9425137355</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015752.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO386</fs:SITE_ID>
<fs:GRID_CODE>CCY370</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.781880211</fs:POINT_X>
<fs:POINT_Y>-17.9425137355</fs:POINT_Y>
<fs:SITE_ID_OR>CO318</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>370997.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="341"><fs:test fid="341"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.783167339,-17.9420609128</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015803.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO387</fs:SITE_ID>
<fs:GRID_CODE>CCY342</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.783167339</fs:POINT_X>
<fs:POINT_Y>-17.9420609128</fs:POINT_Y>
<fs:SITE_ID_OR>CO319</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>371133.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="342"><fs:test fid="342"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.784231767,-17.9396546882</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016070.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO388</fs:SITE_ID>
<fs:GRID_CODE>CCY283</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.784231767</fs:POINT_X>
<fs:POINT_Y>-17.9396546882</fs:POINT_Y>
<fs:SITE_ID_OR>CO320</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>371244.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="343"><fs:test fid="343"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.778286292,-17.9420393178</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015802.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO390</fs:SITE_ID>
<fs:GRID_CODE>CCY337</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.778286292</fs:POINT_X>
<fs:POINT_Y>-17.9420393178</fs:POINT_Y>
<fs:SITE_ID_OR>CO321</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>370616.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="344"><fs:test fid="344"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.778520609,-17.9450410807</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015470.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO391</fs:SITE_ID>
<fs:GRID_CODE>CCY457</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.778520609</fs:POINT_X>
<fs:POINT_Y>-17.9450410807</fs:POINT_Y>
<fs:SITE_ID_OR>CO322</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>370643.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="345"><fs:test fid="345"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.778245203,-17.9452743112</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015444.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO392</fs:SITE_ID>
<fs:GRID_CODE>CCY457</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.778245203</fs:POINT_X>
<fs:POINT_Y>-17.9452743112</fs:POINT_Y>
<fs:SITE_ID_OR>CO323</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>370614.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="346"><fs:test fid="346"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.778260611,-17.9457804809</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015388.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO393</fs:SITE_ID>
<fs:GRID_CODE>CCY487</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.778260611</fs:POINT_X>
<fs:POINT_Y>-17.9457804809</fs:POINT_Y>
<fs:SITE_ID_OR>CO324</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>370616.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="347"><fs:test fid="347"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.777808064,-17.9470608898</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015246.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO394</fs:SITE_ID>
<fs:GRID_CODE>CCY516</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.777808064</fs:POINT_X>
<fs:POINT_Y>-17.9470608898</fs:POINT_Y>
<fs:SITE_ID_OR>CO325</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>370569.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="348"><fs:test fid="348"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.782468301,-17.9448760861</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015491.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO395</fs:SITE_ID>
<fs:GRID_CODE>CCY461</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.782468301</fs:POINT_X>
<fs:POINT_Y>-17.9448760861</fs:POINT_Y>
<fs:SITE_ID_OR>CO326</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>371061.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="349"><fs:test fid="349"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.782812693,-17.9442185412</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015564.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO396</fs:SITE_ID>
<fs:GRID_CODE>CCY431</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.782812693</fs:POINT_X>
<fs:POINT_Y>-17.9442185412</fs:POINT_Y>
<fs:SITE_ID_OR>CO327</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>371097.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="350"><fs:test fid="350"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.783802483,-17.9403026682</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015998.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO397</fs:SITE_ID>
<fs:GRID_CODE>CCY312</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.783802483</fs:POINT_X>
<fs:POINT_Y>-17.9403026682</fs:POINT_Y>
<fs:SITE_ID_OR>CO328</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>371199.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="351"><fs:test fid="351"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.784502282,-17.9401353436</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016017.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO398</fs:SITE_ID>
<fs:GRID_CODE>CCY283</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.784502282</fs:POINT_X>
<fs:POINT_Y>-17.9401353436</fs:POINT_Y>
<fs:SITE_ID_OR>CO329</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>371273.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="352"><fs:test fid="352"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.778384485,-17.9414886771</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015863.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO399</fs:SITE_ID>
<fs:GRID_CODE>CCY337</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.778384485</fs:POINT_X>
<fs:POINT_Y>-17.9414886771</fs:POINT_Y>
<fs:SITE_ID_OR>CO330</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>370626.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="353"><fs:test fid="353"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.763961478,-17.9382887345</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016207.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO411</fs:SITE_ID>
<fs:GRID_CODE>CCX231</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.763961478</fs:POINT_X>
<fs:POINT_Y>-17.9382887345</fs:POINT_Y>
<fs:SITE_ID_OR>CO342</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>369096.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="354"><fs:test fid="354"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.783496422,-17.9408791224</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015934.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO412</fs:SITE_ID>
<fs:GRID_CODE>CCY312</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.783496422</fs:POINT_X>
<fs:POINT_Y>-17.9408791224</fs:POINT_Y>
<fs:SITE_ID_OR>CO343</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>371167.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="355"><fs:test fid="355"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.778733073,-17.9429729397</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015699.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO413</fs:SITE_ID>
<fs:GRID_CODE>CCY397</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.778733073</fs:POINT_X>
<fs:POINT_Y>-17.9429729397</fs:POINT_Y>
<fs:SITE_ID_OR>CO344</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>370664.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="356"><fs:test fid="356"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.78120761,-17.9428438871</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015715.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO414</fs:SITE_ID>
<fs:GRID_CODE>CCY370</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.78120761</fs:POINT_X>
<fs:POINT_Y>-17.9428438871</fs:POINT_Y>
<fs:SITE_ID_OR>CO345</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>370926.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="357"><fs:test fid="357"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.765312708,-17.9408457543</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015925.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO415</fs:SITE_ID>
<fs:GRID_CODE>CCX323</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.765312708</fs:POINT_X>
<fs:POINT_Y>-17.9408457543</fs:POINT_Y>
<fs:SITE_ID_OR>CO346</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>369241.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="358"><fs:test fid="358"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.764736405,-17.9395407659</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016069.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO416</fs:SITE_ID>
<fs:GRID_CODE>CCX292</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.764736405</fs:POINT_X>
<fs:POINT_Y>-17.9395407659</fs:POINT_Y>
<fs:SITE_ID_OR>CO347</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>369179.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="359"><fs:test fid="359"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.762708877,-17.9378469879</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016255.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO417</fs:SITE_ID>
<fs:GRID_CODE>CCX230</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.762708877</fs:POINT_X>
<fs:POINT_Y>-17.9378469879</fs:POINT_Y>
<fs:SITE_ID_OR>CO348</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368963.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="360"><fs:test fid="360"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.768085755,-17.9425984585</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015733.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO418</fs:SITE_ID>
<fs:GRID_CODE>CCX386</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.768085755</fs:POINT_X>
<fs:POINT_Y>-17.9425984585</fs:POINT_Y>
<fs:SITE_ID_OR>CO349</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>369536.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="361"><fs:test fid="361"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.774688617,-17.9407424431</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015943.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO419</fs:SITE_ID>
<fs:GRID_CODE>CCY303</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.774688617</fs:POINT_X>
<fs:POINT_Y>-17.9407424431</fs:POINT_Y>
<fs:SITE_ID_OR>CO350</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>370234.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="362"><fs:test fid="362"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.782689974,-17.9428351069</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015717.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO420</fs:SITE_ID>
<fs:GRID_CODE>CCY371</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.782689974</fs:POINT_X>
<fs:POINT_Y>-17.9428351069</fs:POINT_Y>
<fs:SITE_ID_OR>CO351</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>371083.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="363"><fs:test fid="363"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.776626795,-17.9417216169</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015836.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO421</fs:SITE_ID>
<fs:GRID_CODE>CCY335</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.776626795</fs:POINT_X>
<fs:POINT_Y>-17.9417216169</fs:POINT_Y>
<fs:SITE_ID_OR>CO352</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>370440.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="364"><fs:test fid="364"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.780113134,-17.9427376106</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015726.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO425</fs:SITE_ID>
<fs:GRID_CODE>CCY369</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.780113134</fs:POINT_X>
<fs:POINT_Y>-17.9427376106</fs:POINT_Y>
<fs:SITE_ID_OR>CO356</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>370810.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="365"><fs:test fid="365"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.791658248,-17.9374327121</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016321.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO427</fs:SITE_ID>
<fs:GRID_CODE>CCY201</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.791658248</fs:POINT_X>
<fs:POINT_Y>-17.9374327121</fs:POINT_Y>
<fs:SITE_ID_OR>CO402</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372029.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="366"><fs:test fid="366"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.795209066,-17.9400845452</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016030.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO428</fs:SITE_ID>
<fs:GRID_CODE>CCY295</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.795209066</fs:POINT_X>
<fs:POINT_Y>-17.9400845452</fs:POINT_Y>
<fs:SITE_ID_OR>CO403</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372407.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="367"><fs:test fid="367"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.795044138,-17.9351583208</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016575.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO429</fs:SITE_ID>
<fs:GRID_CODE>CCY144</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.795044138</fs:POINT_X>
<fs:POINT_Y>-17.9351583208</fs:POINT_Y>
<fs:SITE_ID_OR>CO405</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372386.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="368"><fs:test fid="368"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.785094832,-17.939081716</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016134.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO430</fs:SITE_ID>
<fs:GRID_CODE>CCY254</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.785094832</fs:POINT_X>
<fs:POINT_Y>-17.939081716</fs:POINT_Y>
<fs:SITE_ID_OR>CO406</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>371335.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="369"><fs:test fid="369"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.787607326,-17.9389166678</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016154.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO431</fs:SITE_ID>
<fs:GRID_CODE>CCY257</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.787607326</fs:POINT_X>
<fs:POINT_Y>-17.9389166678</fs:POINT_Y>
<fs:SITE_ID_OR>CO407</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>371601.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="370"><fs:test fid="370"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.788806988,-17.9388247416</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016165.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO432</fs:SITE_ID>
<fs:GRID_CODE>CCY258</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.788806988</fs:POINT_X>
<fs:POINT_Y>-17.9388247416</fs:POINT_Y>
<fs:SITE_ID_OR>CO408</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>371728.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="371"><fs:test fid="371"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.789744291,-17.9370502824</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016362.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO433</fs:SITE_ID>
<fs:GRID_CODE>CCY199</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.789744291</fs:POINT_X>
<fs:POINT_Y>-17.9370502824</fs:POINT_Y>
<fs:SITE_ID_OR>CO409</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>371826.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="372"><fs:test fid="372"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.793095267,-17.9371434191</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016354.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO434</fs:SITE_ID>
<fs:GRID_CODE>CCY202</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.793095267</fs:POINT_X>
<fs:POINT_Y>-17.9371434191</fs:POINT_Y>
<fs:SITE_ID_OR>CO410</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372181.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="373"><fs:test fid="373"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.793949587,-17.9364619061</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016430.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO435</fs:SITE_ID>
<fs:GRID_CODE>CCY173</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.793949587</fs:POINT_X>
<fs:POINT_Y>-17.9364619061</fs:POINT_Y>
<fs:SITE_ID_OR>CO411</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372271.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="374"><fs:test fid="374"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.794786203,-17.9370002833</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016371.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO436</fs:SITE_ID>
<fs:GRID_CODE>CCY204</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.794786203</fs:POINT_X>
<fs:POINT_Y>-17.9370002833</fs:POINT_Y>
<fs:SITE_ID_OR>CO412</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372360.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="375"><fs:test fid="375"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.794942369,-17.9348504295</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016609.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO437</fs:SITE_ID>
<fs:GRID_CODE>CCY114</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.794942369</fs:POINT_X>
<fs:POINT_Y>-17.9348504295</fs:POINT_Y>
<fs:SITE_ID_OR>CO413</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372375.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="376"><fs:test fid="376"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.800068221,-17.937746899</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016292.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO438</fs:SITE_ID>
<fs:GRID_CODE>CCY240</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.800068221</fs:POINT_X>
<fs:POINT_Y>-17.937746899</fs:POINT_Y>
<fs:SITE_ID_OR>CO414</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372920.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="377"><fs:test fid="377"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.800679257,-17.9381392657</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016249.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO439</fs:SITE_ID>
<fs:GRID_CODE>CCY240</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.800679257</fs:POINT_X>
<fs:POINT_Y>-17.9381392657</fs:POINT_Y>
<fs:SITE_ID_OR>CO415</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372985.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="378"><fs:test fid="378"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.798723358,-17.9383711854</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016222.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO440</fs:SITE_ID>
<fs:GRID_CODE>CCY238</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.798723358</fs:POINT_X>
<fs:POINT_Y>-17.9383711854</fs:POINT_Y>
<fs:SITE_ID_OR>CO416</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372778.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="379"><fs:test fid="379"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.800124075,-17.9406662206</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015969.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO441</fs:SITE_ID>
<fs:GRID_CODE>CCY330</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.800124075</fs:POINT_X>
<fs:POINT_Y>-17.9406662206</fs:POINT_Y>
<fs:SITE_ID_OR>CO417</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372928.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="380"><fs:test fid="380"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.794686901,-17.9377226328</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016291.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO442</fs:SITE_ID>
<fs:GRID_CODE>CCY234</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.794686901</fs:POINT_X>
<fs:POINT_Y>-17.9377226328</fs:POINT_Y>
<fs:SITE_ID_OR>CO418</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372350.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="381"><fs:test fid="381"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.794882508,-17.9409048929</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015939.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO443</fs:SITE_ID>
<fs:GRID_CODE>CCY324</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.794882508</fs:POINT_X>
<fs:POINT_Y>-17.9409048929</fs:POINT_Y>
<fs:SITE_ID_OR>CO419</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372373.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="382"><fs:test fid="382"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.793759656,-17.9421992618</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015795.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO444</fs:SITE_ID>
<fs:GRID_CODE>CCY383</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.793759656</fs:POINT_X>
<fs:POINT_Y>-17.9421992618</fs:POINT_Y>
<fs:SITE_ID_OR>CO420</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372255.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="383"><fs:test fid="383"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.791952752,-17.9357717241</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016505.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO445</fs:SITE_ID>
<fs:GRID_CODE>CCY141</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.791952752</fs:POINT_X>
<fs:POINT_Y>-17.9357717241</fs:POINT_Y>
<fs:SITE_ID_OR>CO421</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372059.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="384"><fs:test fid="384"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.788302319,-17.9394541886</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016095.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO446</fs:SITE_ID>
<fs:GRID_CODE>CCY287</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.788302319</fs:POINT_X>
<fs:POINT_Y>-17.9394541886</fs:POINT_Y>
<fs:SITE_ID_OR>CO422</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>371675.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="385"><fs:test fid="385"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.784959392,-17.9395598322</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016081.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO447</fs:SITE_ID>
<fs:GRID_CODE>CCY284</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.784959392</fs:POINT_X>
<fs:POINT_Y>-17.9395598322</fs:POINT_Y>
<fs:SITE_ID_OR>CO423</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>371321.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="386"><fs:test fid="386"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.786111978,-17.9394495545</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016094.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO448</fs:SITE_ID>
<fs:GRID_CODE>CCY285</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.786111978</fs:POINT_X>
<fs:POINT_Y>-17.9394495545</fs:POINT_Y>
<fs:SITE_ID_OR>CO424</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>371443.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="387"><fs:test fid="387"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.73176447,-17.9426720056</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015699.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO45</fs:SITE_ID>
<fs:GRID_CODE>CCW407</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.73176447</fs:POINT_X>
<fs:POINT_Y>-17.9426720056</fs:POINT_Y>
<fs:SITE_ID_OR>CO111</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365689.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="388"><fs:test fid="388"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.811065073,-17.9465533736</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015325.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO453</fs:SITE_ID>
<fs:GRID_CODE>CCZ491</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.811065073</fs:POINT_X>
<fs:POINT_Y>-17.9465533736</fs:POINT_Y>
<fs:SITE_ID_OR>CO429</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>374091.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="389"><fs:test fid="389"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.798499095,-17.93802639</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016260.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO454</fs:SITE_ID>
<fs:GRID_CODE>CCY238</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.798499095</fs:POINT_X>
<fs:POINT_Y>-17.93802639</fs:POINT_Y>
<fs:SITE_ID_OR>CO430</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372754.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="390"><fs:test fid="390"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.801574238,-17.9370241887</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016373.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO455</fs:SITE_ID>
<fs:GRID_CODE>CCZ181</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.801574238</fs:POINT_X>
<fs:POINT_Y>-17.9370241887</fs:POINT_Y>
<fs:SITE_ID_OR>CO431</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>373079.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="391"><fs:test fid="391"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.808525409,-17.9422994134</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015794.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO456</fs:SITE_ID>
<fs:GRID_CODE>CCZ369</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.808525409</fs:POINT_X>
<fs:POINT_Y>-17.9422994134</fs:POINT_Y>
<fs:SITE_ID_OR>CO432</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>373819.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="392"><fs:test fid="392"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.806722637,-17.9436258391</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015646.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO457</fs:SITE_ID>
<fs:GRID_CODE>CCZ397</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.806722637</fs:POINT_X>
<fs:POINT_Y>-17.9436258391</fs:POINT_Y>
<fs:SITE_ID_OR>CO433</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>373629.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="393"><fs:test fid="393"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.793766724,-17.9369758839</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016373.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO458</fs:SITE_ID>
<fs:GRID_CODE>CCY203</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.793766724</fs:POINT_X>
<fs:POINT_Y>-17.9369758839</fs:POINT_Y>
<fs:SITE_ID_OR>CO435</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372252.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="394"><fs:test fid="394"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.795427772,-17.9384592291</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016210.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO459</fs:SITE_ID>
<fs:GRID_CODE>CCY235</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.795427772</fs:POINT_X>
<fs:POINT_Y>-17.9384592291</fs:POINT_Y>
<fs:SITE_ID_OR>CO436</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372429.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="395"><fs:test fid="395"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.724181772,-17.8610191384</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8024729.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO46</fs:SITE_ID>
<fs:GRID_CODE>BYG369</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.724181772</fs:POINT_X>
<fs:POINT_Y>-17.8610191384</fs:POINT_Y>
<fs:SITE_ID_OR>CO1110</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>364824.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="396"><fs:test fid="396"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.802742629,-17.9401762969</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016025.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO460</fs:SITE_ID>
<fs:GRID_CODE>CCZ273</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.802742629</fs:POINT_X>
<fs:POINT_Y>-17.9401762969</fs:POINT_Y>
<fs:SITE_ID_OR>CO437</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>373205.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="397"><fs:test fid="397"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.794056603,-17.9722041018</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012475.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO464</fs:SITE_ID>
<fs:GRID_CODE>CEJ474</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.794056603</fs:POINT_X>
<fs:POINT_Y>-17.9722041018</fs:POINT_Y>
<fs:SITE_ID_OR>CO501</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372308.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="398"><fs:test fid="398"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.788710615,-17.9640736244</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013371.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO465</fs:SITE_ID>
<fs:GRID_CODE>CEJ198</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.788710615</fs:POINT_X>
<fs:POINT_Y>-17.9640736244</fs:POINT_Y>
<fs:SITE_ID_OR>CO502</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>371736.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="399"><fs:test fid="399"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.804470163,-17.9584779884</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014001.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO466</fs:SITE_ID>
<fs:GRID_CODE>CCZ875</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.804470163</fs:POINT_X>
<fs:POINT_Y>-17.9584779884</fs:POINT_Y>
<fs:SITE_ID_OR>CO503</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>373401.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="400"><fs:test fid="400"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.805133951,-17.9552468014</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014359.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO467</fs:SITE_ID>
<fs:GRID_CODE>CCZ785</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.805133951</fs:POINT_X>
<fs:POINT_Y>-17.9552468014</fs:POINT_Y>
<fs:SITE_ID_OR>CO504</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>373469.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="401"><fs:test fid="401"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.801690398,-17.9576294396</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014093.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO468</fs:SITE_ID>
<fs:GRID_CODE>CCZ872</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.801690398</fs:POINT_X>
<fs:POINT_Y>-17.9576294396</fs:POINT_Y>
<fs:SITE_ID_OR>CO505</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>373106.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="402"><fs:test fid="402"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.795061722,-17.9660199752</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013160.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO469</fs:SITE_ID>
<fs:GRID_CODE>CEJ265</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.795061722</fs:POINT_X>
<fs:POINT_Y>-17.9660199752</fs:POINT_Y>
<fs:SITE_ID_OR>CO506</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372410.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="403"><fs:test fid="403"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.725142681,-17.8586035213</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8024997.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO50</fs:SITE_ID>
<fs:GRID_CODE>BYG310</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.725142681</fs:POINT_X>
<fs:POINT_Y>-17.8586035213</fs:POINT_Y>
<fs:SITE_ID_OR>CO1114</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>364924.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="404"><fs:test fid="404"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.730438276,-17.9419675037</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015776.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO51</fs:SITE_ID>
<fs:GRID_CODE>CCW376</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.730438276</fs:POINT_X>
<fs:POINT_Y>-17.9419675037</fs:POINT_Y>
<fs:SITE_ID_OR>CO112</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365548.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="405"><fs:test fid="405"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.788606647,-17.9613166821</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013676.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO519</fs:SITE_ID>
<fs:GRID_CODE>CEJ108</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.788606647</fs:POINT_X>
<fs:POINT_Y>-17.9613166821</fs:POINT_Y>
<fs:SITE_ID_OR>CO516</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>371723.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="406"><fs:test fid="406"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.730433475,-17.9413168166</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015848.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO52</fs:SITE_ID>
<fs:GRID_CODE>CCW346</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.730433475</fs:POINT_X>
<fs:POINT_Y>-17.9413168166</fs:POINT_Y>
<fs:SITE_ID_OR>CO113</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365547.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="407"><fs:test fid="407"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.78516257,-17.9664914421</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013101.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO521</fs:SITE_ID>
<fs:GRID_CODE>CEJ254</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.78516257</fs:POINT_X>
<fs:POINT_Y>-17.9664914421</fs:POINT_Y>
<fs:SITE_ID_OR>CO517</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>371362.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="408"><fs:test fid="408"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.789474904,-17.9655423915</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013209.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO522</fs:SITE_ID>
<fs:GRID_CODE>CEJ229</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.789474904</fs:POINT_X>
<fs:POINT_Y>-17.9655423915</fs:POINT_Y>
<fs:SITE_ID_OR>CO518</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>371818.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="409"><fs:test fid="409"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.789892814,-17.9707322509</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012635.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO523</fs:SITE_ID>
<fs:GRID_CODE>CEJ409</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.789892814</fs:POINT_X>
<fs:POINT_Y>-17.9707322509</fs:POINT_Y>
<fs:SITE_ID_OR>CO519</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>371866.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="410"><fs:test fid="410"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.729061255,-17.9404493414</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015943.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO53</fs:SITE_ID>
<fs:GRID_CODE>CCW315</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.729061255</fs:POINT_X>
<fs:POINT_Y>-17.9404493414</fs:POINT_Y>
<fs:SITE_ID_OR>CO114</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365401.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="411"><fs:test fid="411"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.736178115,-17.9460173094</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015332.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO54</fs:SITE_ID>
<fs:GRID_CODE>CCW502</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.736178115</fs:POINT_X>
<fs:POINT_Y>-17.9460173094</fs:POINT_Y>
<fs:SITE_ID_OR>CO115</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366159.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="412"><fs:test fid="412"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.732992578,-17.93991473</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016005.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO55</fs:SITE_ID>
<fs:GRID_CODE>CCW289</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.732992578</fs:POINT_X>
<fs:POINT_Y>-17.93991473</fs:POINT_Y>
<fs:SITE_ID_OR>CO117</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365817.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="413"><fs:test fid="413"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.732576432,-17.9386920355</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016140.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO56</fs:SITE_ID>
<fs:GRID_CODE>CCW258</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.732576432</fs:POINT_X>
<fs:POINT_Y>-17.9386920355</fs:POINT_Y>
<fs:SITE_ID_OR>CO118</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365772.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="414"><fs:test fid="414"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.739247285,-17.9432538869</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015640.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO57</fs:SITE_ID>
<fs:GRID_CODE>CCW415</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.739247285</fs:POINT_X>
<fs:POINT_Y>-17.9432538869</fs:POINT_Y>
<fs:SITE_ID_OR>CO119</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366482.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="415"><fs:test fid="415"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.737412556,-17.9396995051</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016032.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO58</fs:SITE_ID>
<fs:GRID_CODE>CCW293</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.737412556</fs:POINT_X>
<fs:POINT_Y>-17.9396995051</fs:POINT_Y>
<fs:SITE_ID_OR>CO120</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366285.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="416"><fs:test fid="416"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.808314076,-17.9527088497</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014642.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO59</fs:SITE_ID>
<fs:GRID_CODE>CCZ699</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.808314076</fs:POINT_X>
<fs:POINT_Y>-17.9527088497</fs:POINT_Y>
<fs:SITE_ID_OR>CO1202</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>373804.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="417"><fs:test fid="417"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.823689634,-17.9621108381</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013612.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO60</fs:SITE_ID>
<fs:GRID_CODE>CEK115</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.823689634</fs:POINT_X>
<fs:POINT_Y>-17.9621108381</fs:POINT_Y>
<fs:SITE_ID_OR>CO1203</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>375439.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="418"><fs:test fid="418"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.825432687,-17.9641185986</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013391.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO61</fs:SITE_ID>
<fs:GRID_CODE>CEK207</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.825432687</fs:POINT_X>
<fs:POINT_Y>-17.9641185986</fs:POINT_Y>
<fs:SITE_ID_OR>CO1204</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>375625.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="419"><fs:test fid="419"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.080410918,-17.8086342862</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8030747.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO618</fs:SITE_ID>
<fs:GRID_CODE>BVO386</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.080410918</fs:POINT_X>
<fs:POINT_Y>-17.8086342862</fs:POINT_Y>
<fs:SITE_ID_OR>CO6003</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>402542.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="420"><fs:test fid="420"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.827813284,-17.9610965148</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013727.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO62</fs:SITE_ID>
<fs:GRID_CODE>CEK89</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.827813284</fs:POINT_X>
<fs:POINT_Y>-17.9610965148</fs:POINT_Y>
<fs:SITE_ID_OR>CO1205</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>375875.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="421"><fs:test fid="421"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.078547821,-17.8131625213</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8030245.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO621</fs:SITE_ID>
<fs:GRID_CODE>BVO534</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.078547821</fs:POINT_X>
<fs:POINT_Y>-17.8131625213</fs:POINT_Y>
<fs:SITE_ID_OR>CO6006</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>402347.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="422"><fs:test fid="422"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.080274993,-17.8222627369</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029239.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO624</fs:SITE_ID>
<fs:GRID_CODE>BVO836</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.080274993</fs:POINT_X>
<fs:POINT_Y>-17.8222627369</fs:POINT_Y>
<fs:SITE_ID_OR>CO6009</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>402535.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="423"><fs:test fid="423"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.081313241,-17.820360633</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029450.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO626</fs:SITE_ID>
<fs:GRID_CODE>BVO777</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.081313241</fs:POINT_X>
<fs:POINT_Y>-17.820360633</fs:POINT_Y>
<fs:SITE_ID_OR>CO6010</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>402644.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="424"><fs:test fid="424"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.080790692,-17.8192194063</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029576.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO627</fs:SITE_ID>
<fs:GRID_CODE>BVO746</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.080790692</fs:POINT_X>
<fs:POINT_Y>-17.8192194063</fs:POINT_Y>
<fs:SITE_ID_OR>CO6011</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>402588.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="425"><fs:test fid="425"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.085297688,-17.8198551251</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029508.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO628</fs:SITE_ID>
<fs:GRID_CODE>BVP721</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.085297688</fs:POINT_X>
<fs:POINT_Y>-17.8198551251</fs:POINT_Y>
<fs:SITE_ID_OR>CO6012</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>403066.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="426"><fs:test fid="426"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.082951719,-17.8173225688</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029787.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO629</fs:SITE_ID>
<fs:GRID_CODE>BVO689</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.082951719</fs:POINT_X>
<fs:POINT_Y>-17.8173225688</fs:POINT_Y>
<fs:SITE_ID_OR>CO6013</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>402816.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="427"><fs:test fid="427"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.831692525,-17.9613458307</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013702.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO63</fs:SITE_ID>
<fs:GRID_CODE>CEL63</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.831692525</fs:POINT_X>
<fs:POINT_Y>-17.9613458307</fs:POINT_Y>
<fs:SITE_ID_OR>CO1206</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>376286.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="428"><fs:test fid="428"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.08567074,-17.8188627054</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029618.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO630</fs:SITE_ID>
<fs:GRID_CODE>BVP692</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.08567074</fs:POINT_X>
<fs:POINT_Y>-17.8188627054</fs:POINT_Y>
<fs:SITE_ID_OR>CO6014</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>403105.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="429"><fs:test fid="429"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.084531178,-17.8184416297</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029664.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO631</fs:SITE_ID>
<fs:GRID_CODE>BVO720</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.084531178</fs:POINT_X>
<fs:POINT_Y>-17.8184416297</fs:POINT_Y>
<fs:SITE_ID_OR>CO6015</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>402984.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="430"><fs:test fid="430"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.086092853,-17.8174999615</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029769.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO632</fs:SITE_ID>
<fs:GRID_CODE>BVP662</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.086092853</fs:POINT_X>
<fs:POINT_Y>-17.8174999615</fs:POINT_Y>
<fs:SITE_ID_OR>CO6016</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>403149.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="431"><fs:test fid="431"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.088217689,-17.8171393316</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029810.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO633</fs:SITE_ID>
<fs:GRID_CODE>BVP634</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.088217689</fs:POINT_X>
<fs:POINT_Y>-17.8171393316</fs:POINT_Y>
<fs:SITE_ID_OR>CO6017</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>403374.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="432"><fs:test fid="432"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.08781652,-17.8162427106</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029909.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO634</fs:SITE_ID>
<fs:GRID_CODE>BVP604</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.08781652</fs:POINT_X>
<fs:POINT_Y>-17.8162427106</fs:POINT_Y>
<fs:SITE_ID_OR>CO6018</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>403331.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="433"><fs:test fid="433"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.088740832,-17.8181720887</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029696.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO635</fs:SITE_ID>
<fs:GRID_CODE>BVP695</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.088740832</fs:POINT_X>
<fs:POINT_Y>-17.8181720887</fs:POINT_Y>
<fs:SITE_ID_OR>CO6019</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>403430.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="434"><fs:test fid="434"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.081857161,-17.8228576371</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029174.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO637</fs:SITE_ID>
<fs:GRID_CODE>BVO868</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.081857161</fs:POINT_X>
<fs:POINT_Y>-17.8228576371</fs:POINT_Y>
<fs:SITE_ID_OR>CO6020</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>402703.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="435"><fs:test fid="435"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.078811745,-17.8242351337</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029020.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO638</fs:SITE_ID>
<fs:GRID_CODE>BVO894</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.078811745</fs:POINT_X>
<fs:POINT_Y>-17.8242351337</fs:POINT_Y>
<fs:SITE_ID_OR>CO6021</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>402381.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="436"><fs:test fid="436"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.081766678,-17.8257854764</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8028850.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO639</fs:SITE_ID>
<fs:GRID_CODE>BXD57</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.081766678</fs:POINT_X>
<fs:POINT_Y>-17.8257854764</fs:POINT_Y>
<fs:SITE_ID_OR>CO6022</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>402695.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="437"><fs:test fid="437"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.836090749,-17.9616524051</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013671.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO64</fs:SITE_ID>
<fs:GRID_CODE>CEL98</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.836090749</fs:POINT_X>
<fs:POINT_Y>-17.9616524051</fs:POINT_Y>
<fs:SITE_ID_OR>CO1207</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>376752.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="438"><fs:test fid="438"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.084669387,-17.826485973</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8028774.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO640</fs:SITE_ID>
<fs:GRID_CODE>BXE61</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.084669387</fs:POINT_X>
<fs:POINT_Y>-17.826485973</fs:POINT_Y>
<fs:SITE_ID_OR>CO6023</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>403003.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="439"><fs:test fid="439"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.081433218,-17.8282512421</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8028577.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO641</fs:SITE_ID>
<fs:GRID_CODE>BXD147</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.081433218</fs:POINT_X>
<fs:POINT_Y>-17.8282512421</fs:POINT_Y>
<fs:SITE_ID_OR>CO6024</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>402661.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="440"><fs:test fid="440"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.0828974,-17.8279417959</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8028612.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO642</fs:SITE_ID>
<fs:GRID_CODE>BXD119</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.0828974</fs:POINT_X>
<fs:POINT_Y>-17.8279417959</fs:POINT_Y>
<fs:SITE_ID_OR>CO6025</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>402816.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="441"><fs:test fid="441"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.085285009,-17.8223404782</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029233.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO643</fs:SITE_ID>
<fs:GRID_CODE>BVP811</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.085285009</fs:POINT_X>
<fs:POINT_Y>-17.8223404782</fs:POINT_Y>
<fs:SITE_ID_OR>CO6026</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>403066.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="442"><fs:test fid="442"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.090163888,-17.8166513166</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029865.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO644</fs:SITE_ID>
<fs:GRID_CODE>BVP636</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.090163888</fs:POINT_X>
<fs:POINT_Y>-17.8166513166</fs:POINT_Y>
<fs:SITE_ID_OR>CO6027</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>403580.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="443"><fs:test fid="443"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.101163446,-17.8189887913</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029612.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO645</fs:SITE_ID>
<fs:GRID_CODE>BVP708</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.101163446</fs:POINT_X>
<fs:POINT_Y>-17.8189887913</fs:POINT_Y>
<fs:SITE_ID_OR>CO6028</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>404747.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="444"><fs:test fid="444"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.08671788,-17.8114926978</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8030434.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO646</fs:SITE_ID>
<fs:GRID_CODE>BVP453</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.08671788</fs:POINT_X>
<fs:POINT_Y>-17.8114926978</fs:POINT_Y>
<fs:SITE_ID_OR>CO6029</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>403212.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="445"><fs:test fid="445"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.086761232,-17.8103902795</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8030556.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO648</fs:SITE_ID>
<fs:GRID_CODE>BVP423</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.086761232</fs:POINT_X>
<fs:POINT_Y>-17.8103902795</fs:POINT_Y>
<fs:SITE_ID_OR>CO6030</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>403216.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="446"><fs:test fid="446"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.084022275,-17.8146252666</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8030086.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO649</fs:SITE_ID>
<fs:GRID_CODE>BVO600</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.084022275</fs:POINT_X>
<fs:POINT_Y>-17.8146252666</fs:POINT_Y>
<fs:SITE_ID_OR>CO6031</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>402928.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="447"><fs:test fid="447"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.837681362,-17.9595562781</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013904.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO65</fs:SITE_ID>
<fs:GRID_CODE>CEL10</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.837681362</fs:POINT_X>
<fs:POINT_Y>-17.9595562781</fs:POINT_Y>
<fs:SITE_ID_OR>CO1208</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>376919.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="448"><fs:test fid="448"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.086356587,-17.8138860463</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8030169.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO650</fs:SITE_ID>
<fs:GRID_CODE>BVP542</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.086356587</fs:POINT_X>
<fs:POINT_Y>-17.8138860463</fs:POINT_Y>
<fs:SITE_ID_OR>CO6032</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>403175.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="449"><fs:test fid="449"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.087478023,-17.821573474</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029319.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO651</fs:SITE_ID>
<fs:GRID_CODE>BVP783</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.087478023</fs:POINT_X>
<fs:POINT_Y>-17.821573474</fs:POINT_Y>
<fs:SITE_ID_OR>CO6033</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>403298.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="450"><fs:test fid="450"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.092610263,-17.8254655811</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8028891.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO652</fs:SITE_ID>
<fs:GRID_CODE>BXE39</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.092610263</fs:POINT_X>
<fs:POINT_Y>-17.8254655811</fs:POINT_Y>
<fs:SITE_ID_OR>CO6034</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>403844.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="451"><fs:test fid="451"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.838860799,-17.9596898568</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013890.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO66</fs:SITE_ID>
<fs:GRID_CODE>CEL41</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.838860799</fs:POINT_X>
<fs:POINT_Y>-17.9596898568</fs:POINT_Y>
<fs:SITE_ID_OR>CO1209</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>377044.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="452"><fs:test fid="452"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.088139204,-17.8158736633</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029950.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO669</fs:SITE_ID>
<fs:GRID_CODE>BVP604</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.088139204</fs:POINT_X>
<fs:POINT_Y>-17.8158736633</fs:POINT_Y>
<fs:SITE_ID_OR>CO6051</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>403365.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="453"><fs:test fid="453"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.736804025,-17.9376441725</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016259.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO67</fs:SITE_ID>
<fs:GRID_CODE>CCW233</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.736804025</fs:POINT_X>
<fs:POINT_Y>-17.9376441725</fs:POINT_Y>
<fs:SITE_ID_OR>CO121</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366219.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="454"><fs:test fid="454"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.837911213,-17.9691731896</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012840.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO68</fs:SITE_ID>
<fs:GRID_CODE>CEL340</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.837911213</fs:POINT_X>
<fs:POINT_Y>-17.9691731896</fs:POINT_Y>
<fs:SITE_ID_OR>CO1210</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>376950.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="455"><fs:test fid="455"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.079715936,-17.8190426297</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029595.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO686</fs:SITE_ID>
<fs:GRID_CODE>BVO745</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.079715936</fs:POINT_X>
<fs:POINT_Y>-17.8190426297</fs:POINT_Y>
<fs:SITE_ID_OR>CO6067</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>402474.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="456"><fs:test fid="456"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.83836217,-17.9666364493</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013121.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO69</fs:SITE_ID>
<fs:GRID_CODE>CEL250</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.83836217</fs:POINT_X>
<fs:POINT_Y>-17.9666364493</fs:POINT_Y>
<fs:SITE_ID_OR>CO1211</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>376996.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="457"><fs:test fid="457"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.732890149,-17.9675488424</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012947.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO695</fs:SITE_ID>
<fs:GRID_CODE>CEH319</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.732890149</fs:POINT_X>
<fs:POINT_Y>-17.9675488424</fs:POINT_Y>
<fs:SITE_ID_OR>CO608</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365827.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="458"><fs:test fid="458"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.93869405,-17.7326425029</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8039076.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO698</fs:SITE_ID>
<fs:GRID_CODE>BQQ715</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.93869405</fs:POINT_X>
<fs:POINT_Y>-17.7326425029</fs:POINT_Y>
<fs:SITE_ID_OR>CO6101</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>387474.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="459"><fs:test fid="459"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.847413621,-17.9731158536</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012410.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO70</fs:SITE_ID>
<fs:GRID_CODE>CEL470</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.847413621</fs:POINT_X>
<fs:POINT_Y>-17.9731158536</fs:POINT_Y>
<fs:SITE_ID_OR>CO1212</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>377959.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="460"><fs:test fid="460"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.750636622,-17.9616362896</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013614.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO703</fs:SITE_ID>
<fs:GRID_CODE>CEI98</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.750636622</fs:POINT_X>
<fs:POINT_Y>-17.9616362896</fs:POINT_Y>
<fs:SITE_ID_OR>CO611</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>367702.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="461"><fs:test fid="461"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.753533262,-17.9619440946</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013582.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO704</fs:SITE_ID>
<fs:GRID_CODE>CEI131</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.753533262</fs:POINT_X>
<fs:POINT_Y>-17.9619440946</fs:POINT_Y>
<fs:SITE_ID_OR>CO612</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>368009.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="462"><fs:test fid="462"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.740876206,-17.9612207803</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013653.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO705</fs:SITE_ID>
<fs:GRID_CODE>CEH117</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.740876206</fs:POINT_X>
<fs:POINT_Y>-17.9612207803</fs:POINT_Y>
<fs:SITE_ID_OR>CO613</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366668.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="463"><fs:test fid="463"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.740946669,-17.9566033822</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014164.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO706</fs:SITE_ID>
<fs:GRID_CODE>CCW867</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.740946669</fs:POINT_X>
<fs:POINT_Y>-17.9566033822</fs:POINT_Y>
<fs:SITE_ID_OR>CO614</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366672.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="464"><fs:test fid="464"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.727685848,-17.9598334601</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013797.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO707</fs:SITE_ID>
<fs:GRID_CODE>CEH73</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.727685848</fs:POINT_X>
<fs:POINT_Y>-17.9598334601</fs:POINT_Y>
<fs:SITE_ID_OR>CO615</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365270.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="465"><fs:test fid="465"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.72858412,-17.9622973721</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013525.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO708</fs:SITE_ID>
<fs:GRID_CODE>CEH134</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.72858412</fs:POINT_X>
<fs:POINT_Y>-17.9622973721</fs:POINT_Y>
<fs:SITE_ID_OR>CO616</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365367.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="466"><fs:test fid="466"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.731244534,-17.9626220346</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013491.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO709</fs:SITE_ID>
<fs:GRID_CODE>CEH167</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.731244534</fs:POINT_X>
<fs:POINT_Y>-17.9626220346</fs:POINT_Y>
<fs:SITE_ID_OR>CO617</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365649.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="467"><fs:test fid="467"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.838038182,-17.9656404224</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013231.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO71</fs:SITE_ID>
<fs:GRID_CODE>CEL220</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.838038182</fs:POINT_X>
<fs:POINT_Y>-17.9656404224</fs:POINT_Y>
<fs:SITE_ID_OR>CO1213</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>376961.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="468"><fs:test fid="468"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.73269887,-17.9612669683</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013642.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO710</fs:SITE_ID>
<fs:GRID_CODE>CEH109</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.73269887</fs:POINT_X>
<fs:POINT_Y>-17.9612669683</fs:POINT_Y>
<fs:SITE_ID_OR>CO618</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365802.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="469"><fs:test fid="469"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.728727807,-17.9606897519</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013703.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO711</fs:SITE_ID>
<fs:GRID_CODE>CEH74</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.728727807</fs:POINT_X>
<fs:POINT_Y>-17.9606897519</fs:POINT_Y>
<fs:SITE_ID_OR>CO619</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365381.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="470"><fs:test fid="470"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.730002805,-17.9632916783</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013416.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO712</fs:SITE_ID>
<fs:GRID_CODE>CEH166</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.730002805</fs:POINT_X>
<fs:POINT_Y>-17.9632916783</fs:POINT_Y>
<fs:SITE_ID_OR>CO620</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365518.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="471"><fs:test fid="471"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.846339307,-17.9727750925</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012447.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO72</fs:SITE_ID>
<fs:GRID_CODE>CEL469</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.846339307</fs:POINT_X>
<fs:POINT_Y>-17.9727750925</fs:POINT_Y>
<fs:SITE_ID_OR>CO1214</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>377845.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="472"><fs:test fid="472"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.849099542,-17.9723396282</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012497.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO73</fs:SITE_ID>
<fs:GRID_CODE>CEL472</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.849099542</fs:POINT_X>
<fs:POINT_Y>-17.9723396282</fs:POINT_Y>
<fs:SITE_ID_OR>CO1215</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>378137.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="473"><fs:test fid="473"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.808173356,-17.9539822155</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014501.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO74</fs:SITE_ID>
<fs:GRID_CODE>CCZ728</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.808173356</fs:POINT_X>
<fs:POINT_Y>-17.9539822155</fs:POINT_Y>
<fs:SITE_ID_OR>CO1216</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>373790.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="474"><fs:test fid="474"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.814392417,-17.9502247035</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014921.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO75</fs:SITE_ID>
<fs:GRID_CODE>CCZ615</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.814392417</fs:POINT_X>
<fs:POINT_Y>-17.9502247035</fs:POINT_Y>
<fs:SITE_ID_OR>CO1217</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>374446.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="475"><fs:test fid="475"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.811001541,-17.9475832143</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015211.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO76</fs:SITE_ID>
<fs:GRID_CODE>CCZ521</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.811001541</fs:POINT_X>
<fs:POINT_Y>-17.9475832143</fs:POINT_Y>
<fs:SITE_ID_OR>CO1218</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>374085.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="476"><fs:test fid="476"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.823828513,-17.9639552525</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013408.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO77</fs:SITE_ID>
<fs:GRID_CODE>CEK175</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.823828513</fs:POINT_X>
<fs:POINT_Y>-17.9639552525</fs:POINT_Y>
<fs:SITE_ID_OR>CO1219</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>375455.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="477"><fs:test fid="477"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.724521943,-17.9823053946</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8011308.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO772</fs:SITE_ID>
<fs:GRID_CODE>CEH790</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.724521943</fs:POINT_X>
<fs:POINT_Y>-17.9823053946</fs:POINT_Y>
<fs:SITE_ID_OR>CO705</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>364952.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="478"><fs:test fid="478"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.74132679,-17.9415774681</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015827.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO78</fs:SITE_ID>
<fs:GRID_CODE>CCW358</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.74132679</fs:POINT_X>
<fs:POINT_Y>-17.9415774681</fs:POINT_Y>
<fs:SITE_ID_OR>CO122</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366701.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="479"><fs:test fid="479"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.825817574,-17.9673200696</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013037.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO79</fs:SITE_ID>
<fs:GRID_CODE>CEK297</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.825817574</fs:POINT_X>
<fs:POINT_Y>-17.9673200696</fs:POINT_Y>
<fs:SITE_ID_OR>CO1220</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>375668.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="480"><fs:test fid="480"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.824443812,-17.969435475</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012802.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO80</fs:SITE_ID>
<fs:GRID_CODE>CEK356</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.824443812</fs:POINT_X>
<fs:POINT_Y>-17.969435475</fs:POINT_Y>
<fs:SITE_ID_OR>CO1221</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>375524.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="481"><fs:test fid="481"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.815412218,-17.9686395042</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012884.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO81</fs:SITE_ID>
<fs:GRID_CODE>CEK346</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.815412218</fs:POINT_X>
<fs:POINT_Y>-17.9686395042</fs:POINT_Y>
<fs:SITE_ID_OR>CO1222</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>374567.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="482"><fs:test fid="482"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.828538321,-17.9700024666</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012742.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO82</fs:SITE_ID>
<fs:GRID_CODE>CEK390</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.828538321</fs:POINT_X>
<fs:POINT_Y>-17.9700024666</fs:POINT_Y>
<fs:SITE_ID_OR>CO1223</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>375958.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="483"><fs:test fid="483"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.723240491,-18.0094706658</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8008301.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO829</fs:SITE_ID>
<fs:GRID_CODE>CFS789</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.723240491</fs:POINT_X>
<fs:POINT_Y>-18.0094706658</fs:POINT_Y>
<fs:SITE_ID_OR>CO903</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>364837.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="484"><fs:test fid="484"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.833331161,-17.9735196805</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012356.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO83</fs:SITE_ID>
<fs:GRID_CODE>CEL485</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.833331161</fs:POINT_X>
<fs:POINT_Y>-17.9735196805</fs:POINT_Y>
<fs:SITE_ID_OR>CO1224</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>376468.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="485"><fs:test fid="485"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.83492611,-17.9736648231</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012341.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO84</fs:SITE_ID>
<fs:GRID_CODE>CEL487</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.83492611</fs:POINT_X>
<fs:POINT_Y>-17.9736648231</fs:POINT_Y>
<fs:SITE_ID_OR>CO1225</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>376637.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="486"><fs:test fid="486"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.84051237,-17.9627181423</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013556.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO85</fs:SITE_ID>
<fs:GRID_CODE>CEL133</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.84051237</fs:POINT_X>
<fs:POINT_Y>-17.9627181423</fs:POINT_Y>
<fs:SITE_ID_OR>CO1226</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>377221.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="487"><fs:test fid="487"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.738825691,-17.948122042</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015101.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO89</fs:SITE_ID>
<fs:GRID_CODE>CCW565</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.738825691</fs:POINT_X>
<fs:POINT_Y>-17.948122042</fs:POINT_Y>
<fs:SITE_ID_OR>CO123</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366441.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="488"><fs:test fid="488"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.840979402,-17.967845004</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012989.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO90</fs:SITE_ID>
<fs:GRID_CODE>CEL313</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.840979402</fs:POINT_X>
<fs:POINT_Y>-17.967845004</fs:POINT_Y>
<fs:SITE_ID_OR>CO1230</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>377274.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="489"><fs:test fid="489"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.815236016,-17.9511516368</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014819.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO96</fs:SITE_ID>
<fs:GRID_CODE>CCZ646</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.815236016</fs:POINT_X>
<fs:POINT_Y>-17.9511516368</fs:POINT_Y>
<fs:SITE_ID_OR>CO1236</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>374536.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="490"><fs:test fid="490"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.812938518,-17.9516165733</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014766.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO97</fs:SITE_ID>
<fs:GRID_CODE>CCZ673</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.812938518</fs:POINT_X>
<fs:POINT_Y>-17.9516165733</fs:POINT_Y>
<fs:SITE_ID_OR>CO1237</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>374293.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="491"><fs:test fid="491"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.808198116,-17.951695984</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014754.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO98</fs:SITE_ID>
<fs:GRID_CODE>CCZ668</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.808198116</fs:POINT_X>
<fs:POINT_Y>-17.951695984</fs:POINT_Y>
<fs:SITE_ID_OR>CO1238</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>373791.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="492"><fs:test fid="492"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.841503868,-17.9627150257</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013557.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO99</fs:SITE_ID>
<fs:GRID_CODE>CEL134</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.841503868</fs:POINT_X>
<fs:POINT_Y>-17.9627150257</fs:POINT_Y>
<fs:SITE_ID_OR>CO1239</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>377326.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="493"><fs:test fid="493"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.733659699,-17.9430187335</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015662.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO178</fs:SITE_ID>
<fs:GRID_CODE>CCW409</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.733659699</fs:POINT_X>
<fs:POINT_Y>-17.9430187335</fs:POINT_Y>
<fs:SITE_ID_OR>CO149</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/07/09</fs:DISCOVERY_>
<fs:LATITUDE__>365890.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="494"><fs:test fid="494"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.718915563,-17.997594863</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009612.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P814</fs:SITE_ID>
<fs:GRID_CODE>CFS394</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.718915563</fs:POINT_X>
<fs:POINT_Y>-17.997594863</fs:POINT_Y>
<fs:SITE_ID_OR>CO823</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>364370.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="495"><fs:test fid="495"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.721203741,-17.9972213952</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009655.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P815</fs:SITE_ID>
<fs:GRID_CODE>CFS397</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.721203741</fs:POINT_X>
<fs:POINT_Y>-17.9972213952</fs:POINT_Y>
<fs:SITE_ID_OR>CO824</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>364612.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="496"><fs:test fid="496"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.720419269,-17.9959962475</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009790.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P816</fs:SITE_ID>
<fs:GRID_CODE>CFS366</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.720419269</fs:POINT_X>
<fs:POINT_Y>-17.9959962475</fs:POINT_Y>
<fs:SITE_ID_OR>CO825</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>364528.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="497"><fs:test fid="497"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.71914624,-17.9983464426</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009529.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P817</fs:SITE_ID>
<fs:GRID_CODE>CFS424</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.71914624</fs:POINT_X>
<fs:POINT_Y>-17.9983464426</fs:POINT_Y>
<fs:SITE_ID_OR>CO827</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>364395.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="498"><fs:test fid="498"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.71995261,-17.9978457105</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009585.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P818</fs:SITE_ID>
<fs:GRID_CODE>CFS425</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.71995261</fs:POINT_X>
<fs:POINT_Y>-17.9978457105</fs:POINT_Y>
<fs:SITE_ID_OR>CO828</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>364480.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="499"><fs:test fid="499"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.723064056,-17.9946220242</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009944.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P819</fs:SITE_ID>
<fs:GRID_CODE>CFS309</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.723064056</fs:POINT_X>
<fs:POINT_Y>-17.9946220242</fs:POINT_Y>
<fs:SITE_ID_OR>CO829</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>364807.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="500"><fs:test fid="500"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.720678347,-17.9967389763</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009708.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO2P821</fs:SITE_ID>
<fs:GRID_CODE>CFS366</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.720678347</fs:POINT_X>
<fs:POINT_Y>-17.9967389763</fs:POINT_Y>
<fs:SITE_ID_OR>CO831</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>364556.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="501"><fs:test fid="501"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.811974032,-17.948998953</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015055.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO110</fs:SITE_ID>
<fs:GRID_CODE>CCZ582</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.811974032</fs:POINT_X>
<fs:POINT_Y>-17.948998953</fs:POINT_Y>
<fs:SITE_ID_OR>CO1250</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>374189.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="502"><fs:test fid="502"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.807929183,-17.9580112568</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014055.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO111</fs:SITE_ID>
<fs:GRID_CODE>CCZ878</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.807929183</fs:POINT_X>
<fs:POINT_Y>-17.9580112568</fs:POINT_Y>
<fs:SITE_ID_OR>CO1251</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>373767.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="503"><fs:test fid="503"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.836401942,-17.9718120289</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012547.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO113</fs:SITE_ID>
<fs:GRID_CODE>CEL428</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.836401942</fs:POINT_X>
<fs:POINT_Y>-17.9718120289</fs:POINT_Y>
<fs:SITE_ID_OR>CO1253</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>376792.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="504"><fs:test fid="504"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.827181339,-17.9624211559</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013580.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO115</fs:SITE_ID>
<fs:GRID_CODE>CEK149</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.827181339</fs:POINT_X>
<fs:POINT_Y>-17.9624211559</fs:POINT_Y>
<fs:SITE_ID_OR>CO1256</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>375809.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="505"><fs:test fid="505"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.864303263,-17.9782220812</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8011856.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO127</fs:SITE_ID>
<fs:GRID_CODE>CEM638</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.864303263</fs:POINT_X>
<fs:POINT_Y>-17.9782220812</fs:POINT_Y>
<fs:SITE_ID_OR>CO1306</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>379751.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="506"><fs:test fid="506"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.857664309,-17.9782463529</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8011849.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO128</fs:SITE_ID>
<fs:GRID_CODE>CEM631</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.857664309</fs:POINT_X>
<fs:POINT_Y>-17.9782463529</fs:POINT_Y>
<fs:SITE_ID_OR>CO1307</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>379048.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="507"><fs:test fid="507"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.856648403,-17.9776258376</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8011917.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO129</fs:SITE_ID>
<fs:GRID_CODE>CEL630</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.856648403</fs:POINT_X>
<fs:POINT_Y>-17.9776258376</fs:POINT_Y>
<fs:SITE_ID_OR>CO1308</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>378940.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="508"><fs:test fid="508"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.849712916,-17.9724065262</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012490.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO130</fs:SITE_ID>
<fs:GRID_CODE>CEL473</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.849712916</fs:POINT_X>
<fs:POINT_Y>-17.9724065262</fs:POINT_Y>
<fs:SITE_ID_OR>CO1309</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>378202.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="509"><fs:test fid="509"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.763490598,-17.93947862</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016075.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1397</fs:SITE_ID>
<fs:GRID_CODE>CCX291</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.763490598</fs:POINT_X>
<fs:POINT_Y>-17.93947862</fs:POINT_Y>
<fs:SITE_ID_OR>COKP16</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>369047.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="510"><fs:test fid="510"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.758438287,-17.9383077455</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016201.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1440</fs:SITE_ID>
<fs:GRID_CODE>CCX226</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.758438287</fs:POINT_X>
<fs:POINT_Y>-17.9383077455</fs:POINT_Y>
<fs:SITE_ID_OR>COKP2</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>368511.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="511"><fs:test fid="511"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.734874017,-17.9514942126</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014725.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1446</fs:SITE_ID>
<fs:GRID_CODE>CCW681</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.734874017</fs:POINT_X>
<fs:POINT_Y>-17.9514942126</fs:POINT_Y>
<fs:SITE_ID_OR>COKP204</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>366025.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="512"><fs:test fid="512"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.754865413,-17.9429479527</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015685.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1480</fs:SITE_ID>
<fs:GRID_CODE>CCX402</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.754865413</fs:POINT_X>
<fs:POINT_Y>-17.9429479527</fs:POINT_Y>
<fs:SITE_ID_OR>COKP235</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>368136.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="513"><fs:test fid="513"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.921363351,-17.9965773153</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009861.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1486</fs:SITE_ID>
<fs:GRID_CODE>CFZ141</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.921363351</fs:POINT_X>
<fs:POINT_Y>-17.9965773153</fs:POINT_Y>
<fs:SITE_ID_OR>COKP240</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>385805.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="514"><fs:test fid="514"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.864654625,-17.9779168731</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8011890.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1521</fs:SITE_ID>
<fs:GRID_CODE>CEM638</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.864654625</fs:POINT_X>
<fs:POINT_Y>-17.9779168731</fs:POINT_Y>
<fs:SITE_ID_OR>COKP272</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>379788.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="515"><fs:test fid="515"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.8676424,-17.9803111287</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8011627.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO153</fs:SITE_ID>
<fs:GRID_CODE>CEM702</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.8676424</fs:POINT_X>
<fs:POINT_Y>-17.9803111287</fs:POINT_Y>
<fs:SITE_ID_OR>CO1406</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>380106.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="516"><fs:test fid="516"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.870997844,-17.9961819777</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009873.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO154</fs:SITE_ID>
<fs:GRID_CODE>CFX345</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.870997844</fs:POINT_X>
<fs:POINT_Y>-17.9961819777</fs:POINT_Y>
<fs:SITE_ID_OR>CO1407</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>380472.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="517"><fs:test fid="517"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.870413638,-17.99745282</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009732.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO155</fs:SITE_ID>
<fs:GRID_CODE>CFX375</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.870413638</fs:POINT_X>
<fs:POINT_Y>-17.99745282</fs:POINT_Y>
<fs:SITE_ID_OR>CO1408</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>380411.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="518"><fs:test fid="518"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.882314536,-17.9943407211</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010084.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO156</fs:SITE_ID>
<fs:GRID_CODE>CFX297</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.882314536</fs:POINT_X>
<fs:POINT_Y>-17.9943407211</fs:POINT_Y>
<fs:SITE_ID_OR>CO1409</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>381669.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="519"><fs:test fid="519"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.866858976,-17.9772881216</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8011961.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1588</fs:SITE_ID>
<fs:GRID_CODE>CEM611</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.866858976</fs:POINT_X>
<fs:POINT_Y>-17.9772881216</fs:POINT_Y>
<fs:SITE_ID_OR>COKP335</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>380021.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="520"><fs:test fid="520"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.866228478,-17.9769410227</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8011999.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1589</fs:SITE_ID>
<fs:GRID_CODE>CEM610</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.866228478</fs:POINT_X>
<fs:POINT_Y>-17.9769410227</fs:POINT_Y>
<fs:SITE_ID_OR>COKP336</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>379954.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="521"><fs:test fid="521"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.872826049,-17.9997894327</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009475.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO159</fs:SITE_ID>
<fs:GRID_CODE>CFX467</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.872826049</fs:POINT_X>
<fs:POINT_Y>-17.9997894327</fs:POINT_Y>
<fs:SITE_ID_OR>CO1411</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>380668.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="522"><fs:test fid="522"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.865245239,-17.9771160172</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8011979.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1590</fs:SITE_ID>
<fs:GRID_CODE>CEM609</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.865245239</fs:POINT_X>
<fs:POINT_Y>-17.9771160172</fs:POINT_Y>
<fs:SITE_ID_OR>COKP337</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>379850.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="523"><fs:test fid="523"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.911770967,-17.9960266321</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009916.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1596</fs:SITE_ID>
<fs:GRID_CODE>CFY328</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.911770967</fs:POINT_X>
<fs:POINT_Y>-17.9960266321</fs:POINT_Y>
<fs:SITE_ID_OR>COKP343</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>384789.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="524"><fs:test fid="524"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.868925945,-17.9967392396</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009810.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO160</fs:SITE_ID>
<fs:GRID_CODE>CFX343</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.868925945</fs:POINT_X>
<fs:POINT_Y>-17.9967392396</fs:POINT_Y>
<fs:SITE_ID_OR>CO1412</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>380253.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="525"><fs:test fid="525"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.869116027,-17.9832116386</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8011307.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO161</fs:SITE_ID>
<fs:GRID_CODE>CEM793</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.869116027</fs:POINT_X>
<fs:POINT_Y>-17.9832116386</fs:POINT_Y>
<fs:SITE_ID_OR>CO1413</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>380264.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="526"><fs:test fid="526"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.792125198,-17.9367939838</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016392.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1621</fs:SITE_ID>
<fs:GRID_CODE>CCY201</fs:GRID_CODE>
<fs:METHOD_OF_>BS</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.792125198</fs:POINT_X>
<fs:POINT_Y>-17.9367939838</fs:POINT_Y>
<fs:SITE_ID_OR>COKP367</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>372078.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="527"><fs:test fid="527"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.765496763,-17.9415337346</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015849.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1623</fs:SITE_ID>
<fs:GRID_CODE>CCX353</fs:GRID_CODE>
<fs:METHOD_OF_>BS</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.765496763</fs:POINT_X>
<fs:POINT_Y>-17.9415337346</fs:POINT_Y>
<fs:SITE_ID_OR>COKP369</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>369261.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="528"><fs:test fid="528"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.920460255,-17.9975392813</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009754.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1645</fs:SITE_ID>
<fs:GRID_CODE>CFZ152</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.920460255</fs:POINT_X>
<fs:POINT_Y>-17.9975392813</fs:POINT_Y>
<fs:SITE_ID_OR>COKP39</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>385710.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="529"><fs:test fid="529"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.73096857,-17.9417450461</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015801.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO172</fs:SITE_ID>
<fs:GRID_CODE>CCW347</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.73096857</fs:POINT_X>
<fs:POINT_Y>-17.9417450461</fs:POINT_Y>
<fs:SITE_ID_OR>CO143</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>365604.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="530"><fs:test fid="530"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.729364822,-17.9428912848</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015673.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO173</fs:SITE_ID>
<fs:GRID_CODE>CCW405</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.729364822</fs:POINT_X>
<fs:POINT_Y>-17.9428912848</fs:POINT_Y>
<fs:SITE_ID_OR>CO144</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>365435.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="531"><fs:test fid="531"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.73106053,-17.9420890484</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015763.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO174</fs:SITE_ID>
<fs:GRID_CODE>CCW377</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.73106053</fs:POINT_X>
<fs:POINT_Y>-17.9420890484</fs:POINT_Y>
<fs:SITE_ID_OR>CO145</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>365614.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="532"><fs:test fid="532"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.73189413,-17.9430252906</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015660.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO175</fs:SITE_ID>
<fs:GRID_CODE>CCW408</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.73189413</fs:POINT_X>
<fs:POINT_Y>-17.9430252906</fs:POINT_Y>
<fs:SITE_ID_OR>CO146</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>365703.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="533"><fs:test fid="533"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.732914579,-17.9429144693</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015673.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO176</fs:SITE_ID>
<fs:GRID_CODE>CCW409</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.732914579</fs:POINT_X>
<fs:POINT_Y>-17.9429144693</fs:POINT_Y>
<fs:SITE_ID_OR>CO147</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>365811.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="534"><fs:test fid="534"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.733094727,-17.9428072015</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015685.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO177</fs:SITE_ID>
<fs:GRID_CODE>CCW409</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.733094727</fs:POINT_X>
<fs:POINT_Y>-17.9428072015</fs:POINT_Y>
<fs:SITE_ID_OR>CO148</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>365830.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="535"><fs:test fid="535"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.737071728,-17.9451555791</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015428.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO179</fs:SITE_ID>
<fs:GRID_CODE>CCW473</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.737071728</fs:POINT_X>
<fs:POINT_Y>-17.9451555791</fs:POINT_Y>
<fs:SITE_ID_OR>CO150</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>366253.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="536"><fs:test fid="536"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.917912972,-17.9970822441</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009803.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO181</fs:SITE_ID>
<fs:GRID_CODE>CFZ137</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.917912972</fs:POINT_X>
<fs:POINT_Y>-17.9970822441</fs:POINT_Y>
<fs:SITE_ID_OR>CO1502</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>385440.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="537"><fs:test fid="537"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.901426128,-17.9904103286</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010531.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO182</fs:SITE_ID>
<fs:GRID_CODE>CFY137</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.901426128</fs:POINT_X>
<fs:POINT_Y>-17.9904103286</fs:POINT_Y>
<fs:SITE_ID_OR>CO1503</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>383690.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="538"><fs:test fid="538"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.921648373,-18.00096201</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009376.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO183</fs:SITE_ID>
<fs:GRID_CODE>CFZ201</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.921648373</fs:POINT_X>
<fs:POINT_Y>-18.00096201</fs:POINT_Y>
<fs:SITE_ID_OR>CO1504</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>385838.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="539"><fs:test fid="539"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.92139405,-17.9946344582</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010076.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO184</fs:SITE_ID>
<fs:GRID_CODE>CFZ117</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.92139405</fs:POINT_X>
<fs:POINT_Y>-17.9946344582</fs:POINT_Y>
<fs:SITE_ID_OR>CO1505</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>385807.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="540"><fs:test fid="540"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.785048398,-17.9666172456</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013087.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1883</fs:SITE_ID>
<fs:GRID_CODE>CEJ284</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.785048398</fs:POINT_X>
<fs:POINT_Y>-17.9666172456</fs:POINT_Y>
<fs:SITE_ID_OR>COKP609</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>371350.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="541"><fs:test fid="541"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.747806019,-17.9479271128</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015129.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1886</fs:SITE_ID>
<fs:GRID_CODE>CCX544</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.747806019</fs:POINT_X>
<fs:POINT_Y>-17.9479271128</fs:POINT_Y>
<fs:SITE_ID_OR>COKP611</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>367392.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="542"><fs:test fid="542"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.794582966,-17.9614261843</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013668.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1887</fs:SITE_ID>
<fs:GRID_CODE>CEJ114</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.794582966</fs:POINT_X>
<fs:POINT_Y>-17.9614261843</fs:POINT_Y>
<fs:SITE_ID_OR>COKP612</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>372356.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="543"><fs:test fid="543"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.746740969,-17.9449832425</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015454.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1889</fs:SITE_ID>
<fs:GRID_CODE>CCX453</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.746740969</fs:POINT_X>
<fs:POINT_Y>-17.9449832425</fs:POINT_Y>
<fs:SITE_ID_OR>COKP614</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>367277.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="544"><fs:test fid="544"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.736728826,-17.9442496595</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015528.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO189</fs:SITE_ID>
<fs:GRID_CODE>CCW443</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.736728826</fs:POINT_X>
<fs:POINT_Y>-17.9442496595</fs:POINT_Y>
<fs:SITE_ID_OR>CO151</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>366216.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="545"><fs:test fid="545"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.748176132,-17.9476583907</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015159.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO1890</fs:SITE_ID>
<fs:GRID_CODE>CCX545</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.748176132</fs:POINT_X>
<fs:POINT_Y>-17.9476583907</fs:POINT_Y>
<fs:SITE_ID_OR>COKP615</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>367431.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="546"><fs:test fid="546"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.908964019,-17.9947998497</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010050.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO190</fs:SITE_ID>
<fs:GRID_CODE>CFY295</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.908964019</fs:POINT_X>
<fs:POINT_Y>-17.9947998497</fs:POINT_Y>
<fs:SITE_ID_OR>CO1510</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>384491.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="547"><fs:test fid="547"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.737770745,-17.9451059011</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015434.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO191</fs:SITE_ID>
<fs:GRID_CODE>CCW474</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.737770745</fs:POINT_X>
<fs:POINT_Y>-17.9451059011</fs:POINT_Y>
<fs:SITE_ID_OR>CO152</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>366327.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="548"><fs:test fid="548"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.738925327,-17.946053238</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015330.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO192</fs:SITE_ID>
<fs:GRID_CODE>CCW505</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.738925327</fs:POINT_X>
<fs:POINT_Y>-17.946053238</fs:POINT_Y>
<fs:SITE_ID_OR>CO153</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>366450.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="549"><fs:test fid="549"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.737701627,-17.9442017617</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015534.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO193</fs:SITE_ID>
<fs:GRID_CODE>CCW444</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.737701627</fs:POINT_X>
<fs:POINT_Y>-17.9442017617</fs:POINT_Y>
<fs:SITE_ID_OR>CO154</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>366319.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="550"><fs:test fid="550"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.739693601,-17.9442237321</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015533.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO194</fs:SITE_ID>
<fs:GRID_CODE>CCW446</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.739693601</fs:POINT_X>
<fs:POINT_Y>-17.9442237321</fs:POINT_Y>
<fs:SITE_ID_OR>CO156</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>366530.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="551"><fs:test fid="551"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.738846349,-17.9438748311</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015571.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO195</fs:SITE_ID>
<fs:GRID_CODE>CCW445</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.738846349</fs:POINT_X>
<fs:POINT_Y>-17.9438748311</fs:POINT_Y>
<fs:SITE_ID_OR>CO157</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>366440.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="552"><fs:test fid="552"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.732300034,-17.9377323218</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016246.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO196</fs:SITE_ID>
<fs:GRID_CODE>CCW228</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.732300034</fs:POINT_X>
<fs:POINT_Y>-17.9377323218</fs:POINT_Y>
<fs:SITE_ID_OR>CO158</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>365742.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="553"><fs:test fid="553"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.96144655,-17.986918363</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010954.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO200</fs:SITE_ID>
<fs:GRID_CODE>CGA21</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.96144655</fs:POINT_X>
<fs:POINT_Y>-17.986918363</fs:POINT_Y>
<fs:SITE_ID_OR>CO1602</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>390043.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="554"><fs:test fid="554"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.964835548,-17.9855537578</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8011107.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO201</fs:SITE_ID>
<fs:GRID_CODE>CEP865</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.964835548</fs:POINT_X>
<fs:POINT_Y>-17.9855537578</fs:POINT_Y>
<fs:SITE_ID_OR>CO1603</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>390401.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="555"><fs:test fid="555"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.978566864,-17.9954955098</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010015.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO202</fs:SITE_ID>
<fs:GRID_CODE>CGB279</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.978566864</fs:POINT_X>
<fs:POINT_Y>-17.9954955098</fs:POINT_Y>
<fs:SITE_ID_OR>CO1604</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>391861.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="556"><fs:test fid="556"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.980178741,-17.9976910682</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009773.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO203</fs:SITE_ID>
<fs:GRID_CODE>CGB371</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.980178741</fs:POINT_X>
<fs:POINT_Y>-17.9976910682</fs:POINT_Y>
<fs:SITE_ID_OR>CO1605</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>392033.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="557"><fs:test fid="557"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.736635367,-17.9427850739</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015690.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO210</fs:SITE_ID>
<fs:GRID_CODE>CCW413</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.736635367</fs:POINT_X>
<fs:POINT_Y>-17.9427850739</fs:POINT_Y>
<fs:SITE_ID_OR>CO167</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>366205.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="558"><fs:test fid="558"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.73828923,-17.9452177123</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015422.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO211</fs:SITE_ID>
<fs:GRID_CODE>CCW474</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.73828923</fs:POINT_X>
<fs:POINT_Y>-17.9452177123</fs:POINT_Y>
<fs:SITE_ID_OR>CO168</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>366382.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="559"><fs:test fid="559"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.728588979,-17.9418017835</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015793.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO212</fs:SITE_ID>
<fs:GRID_CODE>CCW374</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.728588979</fs:POINT_X>
<fs:POINT_Y>-17.9418017835</fs:POINT_Y>
<fs:SITE_ID_OR>CO169</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>365352.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="560"><fs:test fid="560"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.729143275,-17.942184959</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015751.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO213</fs:SITE_ID>
<fs:GRID_CODE>CCW375</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.729143275</fs:POINT_X>
<fs:POINT_Y>-17.942184959</fs:POINT_Y>
<fs:SITE_ID_OR>CO170</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>365411.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="561"><fs:test fid="561"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.00030891,-18.0038420662</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009104.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO214</fs:SITE_ID>
<fs:GRID_CODE>CGC542</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>146.00030891</fs:POINT_X>
<fs:POINT_Y>-18.0038420662</fs:POINT_Y>
<fs:SITE_ID_OR>CO1701</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>394168.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="562"><fs:test fid="562"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.00200309,-18.0065801322</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8008802.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO215</fs:SITE_ID>
<fs:GRID_CODE>CGC634</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>146.00200309</fs:POINT_X>
<fs:POINT_Y>-18.0065801322</fs:POINT_Y>
<fs:SITE_ID_OR>CO1702</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>394349.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="563"><fs:test fid="563"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.02025762,-18.01062274</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8008365.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO216</fs:SITE_ID>
<fs:GRID_CODE>CGC803</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>146.02025762</fs:POINT_X>
<fs:POINT_Y>-18.01062274</fs:POINT_Y>
<fs:SITE_ID_OR>CO1703</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>396284.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="564"><fs:test fid="564"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.739341433,-17.9486224199</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015046.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO217</fs:SITE_ID>
<fs:GRID_CODE>CCW595</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.739341433</fs:POINT_X>
<fs:POINT_Y>-17.9486224199</fs:POINT_Y>
<fs:SITE_ID_OR>CO171</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>366496.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="565"><fs:test fid="565"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.742128484,-17.9497068457</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014928.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO218</fs:SITE_ID>
<fs:GRID_CODE>CCW628</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.742128484</fs:POINT_X>
<fs:POINT_Y>-17.9497068457</fs:POINT_Y>
<fs:SITE_ID_OR>CO172</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>366792.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="566"><fs:test fid="566"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.734225623,-17.9457515631</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015360.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO219</fs:SITE_ID>
<fs:GRID_CODE>CCW500</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.734225623</fs:POINT_X>
<fs:POINT_Y>-17.9457515631</fs:POINT_Y>
<fs:SITE_ID_OR>CO173</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>365952.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="567"><fs:test fid="567"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.751344451,-17.9441995632</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015544.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO310</fs:SITE_ID>
<fs:GRID_CODE>CCX428</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.751344451</fs:POINT_X>
<fs:POINT_Y>-17.9441995632</fs:POINT_Y>
<fs:SITE_ID_OR>CO255</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>367764.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="568"><fs:test fid="568"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.749666033,-17.9452370522</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015428.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO311</fs:SITE_ID>
<fs:GRID_CODE>CCX456</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.749666033</fs:POINT_X>
<fs:POINT_Y>-17.9452370522</fs:POINT_Y>
<fs:SITE_ID_OR>CO256</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>367587.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="569"><fs:test fid="569"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.748006096,-17.9463288662</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015306.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO312</fs:SITE_ID>
<fs:GRID_CODE>CCX485</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.748006096</fs:POINT_X>
<fs:POINT_Y>-17.9463288662</fs:POINT_Y>
<fs:SITE_ID_OR>CO257</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>367412.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="570"><fs:test fid="570"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.749265147,-17.9404810429</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015954.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO313</fs:SITE_ID>
<fs:GRID_CODE>CCX306</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.749265147</fs:POINT_X>
<fs:POINT_Y>-17.9404810429</fs:POINT_Y>
<fs:SITE_ID_OR>CO258</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>367541.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="571"><fs:test fid="571"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.742523578,-17.9459048639</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015349.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO314</fs:SITE_ID>
<fs:GRID_CODE>CCW509</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.742523578</fs:POINT_X>
<fs:POINT_Y>-17.9459048639</fs:POINT_Y>
<fs:SITE_ID_OR>CO259</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>366831.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="572"><fs:test fid="572"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.743304504,-17.9462894682</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015307.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO315</fs:SITE_ID>
<fs:GRID_CODE>CCW510</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.743304504</fs:POINT_X>
<fs:POINT_Y>-17.9462894682</fs:POINT_Y>
<fs:SITE_ID_OR>CO260</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>366914.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="573"><fs:test fid="573"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.742459269,-17.9469888772</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015229.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO325</fs:SITE_ID>
<fs:GRID_CODE>CCW539</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.742459269</fs:POINT_X>
<fs:POINT_Y>-17.9469888772</fs:POINT_Y>
<fs:SITE_ID_OR>CO261</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>366825.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="574"><fs:test fid="574"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.746056659,-17.942945518</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015679.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO327</fs:SITE_ID>
<fs:GRID_CODE>CCX393</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.746056659</fs:POINT_X>
<fs:POINT_Y>-17.942945518</fs:POINT_Y>
<fs:SITE_ID_OR>CO262</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>367203.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="575"><fs:test fid="575"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.751816693,-17.941482478</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015845.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO328</fs:SITE_ID>
<fs:GRID_CODE>CCX339</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.751816693</fs:POINT_X>
<fs:POINT_Y>-17.941482478</fs:POINT_Y>
<fs:SITE_ID_OR>CO263</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>367812.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="576"><fs:test fid="576"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.752022614,-17.9390438253</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016115.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO329</fs:SITE_ID>
<fs:GRID_CODE>CCX249</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.752022614</fs:POINT_X>
<fs:POINT_Y>-17.9390438253</fs:POINT_Y>
<fs:SITE_ID_OR>CO264</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>367832.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="577"><fs:test fid="577"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.758367322,-17.9417142276</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015824.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO330</fs:SITE_ID>
<fs:GRID_CODE>CCX346</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.758367322</fs:POINT_X>
<fs:POINT_Y>-17.9417142276</fs:POINT_Y>
<fs:SITE_ID_OR>CO265</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>368506.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="578"><fs:test fid="578"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.760095445,-17.9403064599</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015981.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO331</fs:SITE_ID>
<fs:GRID_CODE>CCX317</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.760095445</fs:POINT_X>
<fs:POINT_Y>-17.9403064599</fs:POINT_Y>
<fs:SITE_ID_OR>CO266</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>368688.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="579"><fs:test fid="579"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.761100385,-17.9397073931</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016048.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO343</fs:SITE_ID>
<fs:GRID_CODE>CCX288</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.761100385</fs:POINT_X>
<fs:POINT_Y>-17.9397073931</fs:POINT_Y>
<fs:SITE_ID_OR>CO273</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>368794.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="580"><fs:test fid="580"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.754606042,-17.9408858651</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015913.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO344</fs:SITE_ID>
<fs:GRID_CODE>CCX312</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.754606042</fs:POINT_X>
<fs:POINT_Y>-17.9408858651</fs:POINT_Y>
<fs:SITE_ID_OR>CO274</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>368107.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="581"><fs:test fid="581"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.754865477,-17.9429389161</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015686.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO345</fs:SITE_ID>
<fs:GRID_CODE>CCX402</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.754865477</fs:POINT_X>
<fs:POINT_Y>-17.9429389161</fs:POINT_Y>
<fs:SITE_ID_OR>CO275</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>368136.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="582"><fs:test fid="582"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.748756384,-17.9389866725</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016119.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO346</fs:SITE_ID>
<fs:GRID_CODE>CCX245</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.748756384</fs:POINT_X>
<fs:POINT_Y>-17.9389866725</fs:POINT_Y>
<fs:SITE_ID_OR>CO276</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>367486.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="583"><fs:test fid="583"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.757397414,-17.9386444968</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016163.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO347</fs:SITE_ID>
<fs:GRID_CODE>CCX255</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.757397414</fs:POINT_X>
<fs:POINT_Y>-17.9386444968</fs:POINT_Y>
<fs:SITE_ID_OR>CO277</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>368401.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="584"><fs:test fid="584"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.744076759,-17.9465655705</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015277.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO348</fs:SITE_ID>
<fs:GRID_CODE>CCW540</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.744076759</fs:POINT_X>
<fs:POINT_Y>-17.9465655705</fs:POINT_Y>
<fs:SITE_ID_OR>CO278</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>366996.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="585"><fs:test fid="585"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.742863831,-17.9471903082</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015207.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO349</fs:SITE_ID>
<fs:GRID_CODE>CCW539</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.742863831</fs:POINT_X>
<fs:POINT_Y>-17.9471903082</fs:POINT_Y>
<fs:SITE_ID_OR>CO279</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>366868.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="586"><fs:test fid="586"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.915241934,-17.9967871531</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009834.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO3638</fs:SITE_ID>
<fs:GRID_CODE>CFZ134</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.915241934</fs:POINT_X>
<fs:POINT_Y>-17.9967871531</fs:POINT_Y>
<fs:SITE_ID_OR>H0490</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>385157.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="587"><fs:test fid="587"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.911828575,-17.9958733212</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009933.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO3639</fs:SITE_ID>
<fs:GRID_CODE>CFY328</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.911828575</fs:POINT_X>
<fs:POINT_Y>-17.9958733212</fs:POINT_Y>
<fs:SITE_ID_OR>H05556</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>384795.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="588"><fs:test fid="588"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.91192202,-17.9960365176</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009915.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO3640</fs:SITE_ID>
<fs:GRID_CODE>CFY329</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.91192202</fs:POINT_X>
<fs:POINT_Y>-17.9960365176</fs:POINT_Y>
<fs:SITE_ID_OR>H05557</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>384805.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="589"><fs:test fid="589"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.921929514,-17.9919985336</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010368.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO3641</fs:SITE_ID>
<fs:GRID_CODE>CFZ81</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.921929514</fs:POINT_X>
<fs:POINT_Y>-17.9919985336</fs:POINT_Y>
<fs:SITE_ID_OR>H05572</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>385862.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="590"><fs:test fid="590"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.766294541,-17.9422165759</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015774.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO400</fs:SITE_ID>
<fs:GRID_CODE>CCX384</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.766294541</fs:POINT_X>
<fs:POINT_Y>-17.9422165759</fs:POINT_Y>
<fs:SITE_ID_OR>CO331</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>369346.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="591"><fs:test fid="591"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.770914407,-17.9417759335</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015826.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO401</fs:SITE_ID>
<fs:GRID_CODE>CCX359</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.770914407</fs:POINT_X>
<fs:POINT_Y>-17.9417759335</fs:POINT_Y>
<fs:SITE_ID_OR>CO332</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>369835.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="592"><fs:test fid="592"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.772703914,-17.9410371748</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015909.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO402</fs:SITE_ID>
<fs:GRID_CODE>CCY301</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.772703914</fs:POINT_X>
<fs:POINT_Y>-17.9410371748</fs:POINT_Y>
<fs:SITE_ID_OR>CO333</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>370024.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="593"><fs:test fid="593"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.77327236,-17.9407515805</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015941.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO403</fs:SITE_ID>
<fs:GRID_CODE>CCY301</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.77327236</fs:POINT_X>
<fs:POINT_Y>-17.9407515805</fs:POINT_Y>
<fs:SITE_ID_OR>CO334</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>370084.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="594"><fs:test fid="594"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.778250464,-17.9431325715</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015681.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO404</fs:SITE_ID>
<fs:GRID_CODE>CCY397</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.778250464</fs:POINT_X>
<fs:POINT_Y>-17.9431325715</fs:POINT_Y>
<fs:SITE_ID_OR>CO335</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>370613.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="595"><fs:test fid="595"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.777543031,-17.9485322547</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015083.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO405</fs:SITE_ID>
<fs:GRID_CODE>CCY576</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.777543031</fs:POINT_X>
<fs:POINT_Y>-17.9485322547</fs:POINT_Y>
<fs:SITE_ID_OR>CO336</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>370542.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="596"><fs:test fid="596"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.772320606,-17.9418571203</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015818.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO406</fs:SITE_ID>
<fs:GRID_CODE>CCX360</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.772320606</fs:POINT_X>
<fs:POINT_Y>-17.9418571203</fs:POINT_Y>
<fs:SITE_ID_OR>CO337</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>369984.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="597"><fs:test fid="597"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.767005229,-17.9432061189</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015665.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO407</fs:SITE_ID>
<fs:GRID_CODE>CCX415</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.767005229</fs:POINT_X>
<fs:POINT_Y>-17.9432061189</fs:POINT_Y>
<fs:SITE_ID_OR>CO338</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>369422.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="598"><fs:test fid="598"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.779778486,-17.9433500264</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015658.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO408</fs:SITE_ID>
<fs:GRID_CODE>CCY398</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.779778486</fs:POINT_X>
<fs:POINT_Y>-17.9433500264</fs:POINT_Y>
<fs:SITE_ID_OR>CO339</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>370775.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="599"><fs:test fid="599"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.765067346,-17.9421907052</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015776.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO409</fs:SITE_ID>
<fs:GRID_CODE>CCX383</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.765067346</fs:POINT_X>
<fs:POINT_Y>-17.9421907052</fs:POINT_Y>
<fs:SITE_ID_OR>CO340</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>369216.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="600"><fs:test fid="600"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.765716263,-17.9425563082</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015736.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO410</fs:SITE_ID>
<fs:GRID_CODE>CCX383</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.765716263</fs:POINT_X>
<fs:POINT_Y>-17.9425563082</fs:POINT_Y>
<fs:SITE_ID_OR>CO341</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>369285.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="601"><fs:test fid="601"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.764193073,-17.9402873804</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015986.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO422</fs:SITE_ID>
<fs:GRID_CODE>CCX322</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.764193073</fs:POINT_X>
<fs:POINT_Y>-17.9402873804</fs:POINT_Y>
<fs:SITE_ID_OR>CO353</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>369122.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="602"><fs:test fid="602"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.768446074,-17.9437394036</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015607.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO423</fs:SITE_ID>
<fs:GRID_CODE>CCX416</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.768446074</fs:POINT_X>
<fs:POINT_Y>-17.9437394036</fs:POINT_Y>
<fs:SITE_ID_OR>CO354</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>369575.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="603"><fs:test fid="603"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.776226984,-17.9408244347</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015935.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO424</fs:SITE_ID>
<fs:GRID_CODE>CCY304</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.776226984</fs:POINT_X>
<fs:POINT_Y>-17.9408244347</fs:POINT_Y>
<fs:SITE_ID_OR>CO355</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>370397.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="604"><fs:test fid="604"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.795522494,-17.9356221766</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016524.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO449</fs:SITE_ID>
<fs:GRID_CODE>CCY145</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.795522494</fs:POINT_X>
<fs:POINT_Y>-17.9356221766</fs:POINT_Y>
<fs:SITE_ID_OR>CO425</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>372437.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="605"><fs:test fid="605"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.797106532,-17.9387226664</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016182.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO450</fs:SITE_ID>
<fs:GRID_CODE>CCY267</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.797106532</fs:POINT_X>
<fs:POINT_Y>-17.9387226664</fs:POINT_Y>
<fs:SITE_ID_OR>CO426</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>372607.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="606"><fs:test fid="606"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.804828521,-17.9444907931</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015549.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO451</fs:SITE_ID>
<fs:GRID_CODE>CCZ425</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.804828521</fs:POINT_X>
<fs:POINT_Y>-17.9444907931</fs:POINT_Y>
<fs:SITE_ID_OR>CO427</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>373429.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="607"><fs:test fid="607"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.808219727,-17.9470600883</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015267.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO452</fs:SITE_ID>
<fs:GRID_CODE>CCZ518</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.808219727</fs:POINT_X>
<fs:POINT_Y>-17.9470600883</fs:POINT_Y>
<fs:SITE_ID_OR>CO428</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>373790.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="608"><fs:test fid="608"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.796202561,-17.9369729139</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016375.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO461</fs:SITE_ID>
<fs:GRID_CODE>CCY206</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.796202561</fs:POINT_X>
<fs:POINT_Y>-17.9369729139</fs:POINT_Y>
<fs:SITE_ID_OR>CO438</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>372510.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="609"><fs:test fid="609"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.799902244,-17.9399599585</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016047.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO462</fs:SITE_ID>
<fs:GRID_CODE>CCY300</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.799902244</fs:POINT_X>
<fs:POINT_Y>-17.9399599585</fs:POINT_Y>
<fs:SITE_ID_OR>CO439</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>372904.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="610"><fs:test fid="610"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.794444867,-17.9372150557</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016347.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO463</fs:SITE_ID>
<fs:GRID_CODE>CCY204</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.794444867</fs:POINT_X>
<fs:POINT_Y>-17.9372150557</fs:POINT_Y>
<fs:SITE_ID_OR>CO440</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>372324.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="611"><fs:test fid="611"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.797669266,-17.960234361</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013802.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO471</fs:SITE_ID>
<fs:GRID_CODE>CEJ57</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.797669266</fs:POINT_X>
<fs:POINT_Y>-17.960234361</fs:POINT_Y>
<fs:SITE_ID_OR>CO508</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>372682.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="612"><fs:test fid="612"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.808367754,-17.9559715679</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014281.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO472</fs:SITE_ID>
<fs:GRID_CODE>CCZ819</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.808367754</fs:POINT_X>
<fs:POINT_Y>-17.9559715679</fs:POINT_Y>
<fs:SITE_ID_OR>CO509</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>373812.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="613"><fs:test fid="613"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.80548856,-17.9614936035</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013668.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO473</fs:SITE_ID>
<fs:GRID_CODE>CEK96</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.80548856</fs:POINT_X>
<fs:POINT_Y>-17.9614936035</fs:POINT_Y>
<fs:SITE_ID_OR>CO510</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>373511.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="614"><fs:test fid="614"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.78761181,-17.9645818738</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013314.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO504</fs:SITE_ID>
<fs:GRID_CODE>CEJ197</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.78761181</fs:POINT_X>
<fs:POINT_Y>-17.9645818738</fs:POINT_Y>
<fs:SITE_ID_OR>CO513</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>371620.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="615"><fs:test fid="615"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.790482747,-17.960361419</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013783.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO515</fs:SITE_ID>
<fs:GRID_CODE>CEJ80</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.790482747</fs:POINT_X>
<fs:POINT_Y>-17.960361419</fs:POINT_Y>
<fs:SITE_ID_OR>CO514</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>371921.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="616"><fs:test fid="616"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.791387948,-17.9605477979</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013763.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO518</fs:SITE_ID>
<fs:GRID_CODE>CEJ81</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.791387948</fs:POINT_X>
<fs:POINT_Y>-17.9605477979</fs:POINT_Y>
<fs:SITE_ID_OR>CO515</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>372017.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="617"><fs:test fid="617"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.817699594,-17.9569504033</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014179.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO86</fs:SITE_ID>
<fs:GRID_CODE>CCZ859</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.817699594</fs:POINT_X>
<fs:POINT_Y>-17.9569504033</fs:POINT_Y>
<fs:SITE_ID_OR>CO1227</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>374801.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="618"><fs:test fid="618"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.829956797,-17.9696947261</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012777.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO87</fs:SITE_ID>
<fs:GRID_CODE>CEL362</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.829956797</fs:POINT_X>
<fs:POINT_Y>-17.9696947261</fs:POINT_Y>
<fs:SITE_ID_OR>CO1228</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>376108.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="619"><fs:test fid="619"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.840597573,-17.961236556</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013720.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO88</fs:SITE_ID>
<fs:GRID_CODE>CEL73</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.840597573</fs:POINT_X>
<fs:POINT_Y>-17.961236556</fs:POINT_Y>
<fs:SITE_ID_OR>CO1229</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>377229.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="620"><fs:test fid="620"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.811415891,-17.9562252165</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8014255.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO91</fs:SITE_ID>
<fs:GRID_CODE>CCZ822</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.811415891</fs:POINT_X>
<fs:POINT_Y>-17.9562252165</fs:POINT_Y>
<fs:SITE_ID_OR>CO1231</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>374135.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="621"><fs:test fid="621"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.812898262,-17.9590628972</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013942.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO92</fs:SITE_ID>
<fs:GRID_CODE>CEK13</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.812898262</fs:POINT_X>
<fs:POINT_Y>-17.9590628972</fs:POINT_Y>
<fs:SITE_ID_OR>CO1232</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>374294.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="622"><fs:test fid="622"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.821285017,-17.9701663914</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012719.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO93</fs:SITE_ID>
<fs:GRID_CODE>CEK382</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.821285017</fs:POINT_X>
<fs:POINT_Y>-17.9701663914</fs:POINT_Y>
<fs:SITE_ID_OR>CO1233</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>375190.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="623"><fs:test fid="623"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.839408456,-17.9669228615</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013090.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO94</fs:SITE_ID>
<fs:GRID_CODE>CEL282</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.839408456</fs:POINT_X>
<fs:POINT_Y>-17.9669228615</fs:POINT_Y>
<fs:SITE_ID_OR>CO1234</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>377107.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="624"><fs:test fid="624"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.842424185,-17.9721914669</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012509.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO95</fs:SITE_ID>
<fs:GRID_CODE>CEL435</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.842424185</fs:POINT_X>
<fs:POINT_Y>-17.9721914669</fs:POINT_Y>
<fs:SITE_ID_OR>CO1235</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>377430.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="625"><fs:test fid="625"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.855775886,-17.9650047647</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013313.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO134</fs:SITE_ID>
<fs:GRID_CODE>CEL209</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.855775886</fs:POINT_X>
<fs:POINT_Y>-17.9650047647</fs:POINT_Y>
<fs:SITE_ID_OR>CO1312</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/31</fs:DISCOVERY_>
<fs:LATITUDE__>378839.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="626"><fs:test fid="626"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.887661259,-17.9941545886</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010108.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1994</fs:YEAR>
<fs:SITE_ID>CO152</fs:SITE_ID>
<fs:GRID_CODE>CFY243</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.887661259</fs:POINT_X>
<fs:POINT_Y>-17.9941545886</fs:POINT_Y>
<fs:SITE_ID_OR>CO1405</fs:SITE_ID_OR>
<fs:DISCOVERY_>1994/10/31</fs:DISCOVERY_>
<fs:LATITUDE__>382235.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="627"><fs:test fid="627"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.730202726,-17.9868430277</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010810.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1995</fs:YEAR>
<fs:SITE_ID>CO2P4128</fs:SITE_ID>
<fs:GRID_CODE>CFS46</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>1</fs:MONTH>
<fs:POINT_X>145.730202726</fs:POINT_X>
<fs:POINT_Y>-17.9868430277</fs:POINT_Y>
<fs:SITE_ID_OR>None</fs:SITE_ID_OR>
<fs:DISCOVERY_>1995/01/01</fs:DISCOVERY_>
<fs:LATITUDE__>365557.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="628"><fs:test fid="628"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.755510157,-17.9385059016</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016177.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1995</fs:YEAR>
<fs:SITE_ID>CO361</fs:SITE_ID>
<fs:GRID_CODE>CCX253</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.755510157</fs:POINT_X>
<fs:POINT_Y>-17.9385059016</fs:POINT_Y>
<fs:SITE_ID_OR>CO289</fs:SITE_ID_OR>
<fs:DISCOVERY_>1995/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>368201.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="629"><fs:test fid="629"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.798613222,-17.9602763537</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013798.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1995</fs:YEAR>
<fs:SITE_ID>CO2P534</fs:SITE_ID>
<fs:GRID_CODE>CEJ88</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.798613222</fs:POINT_X>
<fs:POINT_Y>-17.9602763537</fs:POINT_Y>
<fs:SITE_ID_OR>CO521</fs:SITE_ID_OR>
<fs:DISCOVERY_>1995/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372782.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="630"><fs:test fid="630"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.728680372,-17.997659178</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009612.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1995</fs:YEAR>
<fs:SITE_ID>CO2P820</fs:SITE_ID>
<fs:GRID_CODE>CFS405</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.728680372</fs:POINT_X>
<fs:POINT_Y>-17.997659178</fs:POINT_Y>
<fs:SITE_ID_OR>CO830</fs:SITE_ID_OR>
<fs:DISCOVERY_>1995/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365404.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>2P</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="631"><fs:test fid="631"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.76171,-17.9389340993</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016134.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1996</fs:YEAR>
<fs:SITE_ID>CO426</fs:SITE_ID>
<fs:GRID_CODE>CCX259</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.76171</fs:POINT_X>
<fs:POINT_Y>-17.9389340993</fs:POINT_Y>
<fs:SITE_ID_OR>CO357</fs:SITE_ID_OR>
<fs:DISCOVERY_>1996/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>368858.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="632"><fs:test fid="632"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.885677448,-17.7291403649</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8039431.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1996</fs:YEAR>
<fs:SITE_ID>CO495</fs:SITE_ID>
<fs:GRID_CODE>BQO479</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.885677448</fs:POINT_X>
<fs:POINT_Y>-17.7291403649</fs:POINT_Y>
<fs:SITE_ID_OR>CO5121</fs:SITE_ID_OR>
<fs:DISCOVERY_>1996/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>381850.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="633"><fs:test fid="633"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.002418378,-17.8769020877</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8023151.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1996</fs:YEAR>
<fs:SITE_ID>CO224</fs:SITE_ID>
<fs:GRID_CODE>BYQ844</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.002418378</fs:POINT_X>
<fs:POINT_Y>-17.8769020877</fs:POINT_Y>
<fs:SITE_ID_OR>CO1803</fs:SITE_ID_OR>
<fs:DISCOVERY_>1996/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>394316.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="634"><fs:test fid="634"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.001867073,-17.877595163</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8023074.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1996</fs:YEAR>
<fs:SITE_ID>CO225</fs:SITE_ID>
<fs:GRID_CODE>BYQ873</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.001867073</fs:POINT_X>
<fs:POINT_Y>-17.877595163</fs:POINT_Y>
<fs:SITE_ID_OR>CO1804</fs:SITE_ID_OR>
<fs:DISCOVERY_>1996/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>394258.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="635"><fs:test fid="635"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.000762694,-17.8776075793</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8023072.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1996</fs:YEAR>
<fs:SITE_ID>CO226</fs:SITE_ID>
<fs:GRID_CODE>BYQ872</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.000762694</fs:POINT_X>
<fs:POINT_Y>-17.8776075793</fs:POINT_Y>
<fs:SITE_ID_OR>CO1805</fs:SITE_ID_OR>
<fs:DISCOVERY_>1996/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>394141.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="636"><fs:test fid="636"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.000349736,-17.8771897307</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8023118.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1996</fs:YEAR>
<fs:SITE_ID>CO227</fs:SITE_ID>
<fs:GRID_CODE>BYQ841</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.000349736</fs:POINT_X>
<fs:POINT_Y>-17.8771897307fs:POINT_Y>
<fs:SITE_ID_OR>CO1806</fs:SITE_ID_OR>
<fs:DISCOVERY_>1996/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>394097.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="637"><fs:test fid="637"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.999412718,-17.8776548792</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8023066.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1996</fs:YEAR>
<fs:SITE_ID>CO228</fs:SITE_ID>
<fs:GRID_CODE>BYP900</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.999412718</fs:POINT_X>
<fs:POINT_Y>-17.8776548792</fs:POINT_Y>
<fs:SITE_ID_OR>CO1807</fs:SITE_ID_OR>
<fs:DISCOVERY_>1996/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>393998.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="638"><fs:test fid="638"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.999670789,-17.8770777957</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8023130.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1996</fs:YEAR>
<fs:SITE_ID>CO229</fs:SITE_ID>
<fs:GRID_CODE>BYQ841</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.999670789</fs:POINT_X>
<fs:POINT_Y>-17.8770777957</fs:POINT_Y>
<fs:SITE_ID_OR>CO1808</fs:SITE_ID_OR>
<fs:DISCOVERY_>1996/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>394025.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="639"><fs:test fid="639"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.721673476,-17.860749681</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8024757.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1996</fs:YEAR>
<fs:SITE_ID>CO42</fs:SITE_ID>
<fs:GRID_CODE>BYG366</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.721673476</fs:POINT_X>
<fs:POINT_Y>-17.860749681</fs:POINT_Y>
<fs:SITE_ID_OR>CO1107</fs:SITE_ID_OR>
<fs:DISCOVERY_>1996/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>364558.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="640"><fs:test fid="640"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.723331779,-17.8611129829</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8024718.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1996</fs:YEAR>
<fs:SITE_ID>CO43</fs:SITE_ID>
<fs:GRID_CODE>BYG368</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.723331779</fs:POINT_X>
<fs:POINT_Y>-17.8611129829</fs:POINT_Y>
<fs:SITE_ID_OR>CO1108</fs:SITE_ID_OR>
<fs:DISCOVERY_>1996/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>364734.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="641"><fs:test fid="641"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.723557717,-17.8598673645</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8024856.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1996</fs:YEAR>
<fs:SITE_ID>CO44</fs:SITE_ID>
<fs:GRID_CODE>BYG338</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.723557717</fs:POINT_X>
<fs:POINT_Y>-17.8598673645</fs:POINT_Y>
<fs:SITE_ID_OR>CO1109</fs:SITE_ID_OR>
<fs:DISCOVERY_>1996/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>364757.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="642"><fs:test fid="642"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.926043314,-17.7364960017</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8038642.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1996</fs:YEAR>
<fs:SITE_ID>CO699</fs:SITE_ID>
<fs:GRID_CODE>BQQ288</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.926043314</fs:POINT_X>
<fs:POINT_Y>-17.7364960017</fs:POINT_Y>
<fs:SITE_ID_OR>CO6102</fs:SITE_ID_OR>
<fs:DISCOVERY_>1996/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>386135.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="643"><fs:test fid="643"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.925100253,-17.7349092619</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8038817.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1996</fs:YEAR>
<fs:SITE_ID>CO700</fs:SITE_ID>
<fs:GRID_CODE>BQQ263</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.925100253</fs:POINT_X>
<fs:POINT_Y>-17.7349092619</fs:POINT_Y>
<fs:SITE_ID_OR>CO6103</fs:SITE_ID_OR>
<fs:DISCOVERY_>1996/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>386034.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="644"><fs:test fid="644"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.92578507,-17.7339369525</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8038925.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1996</fs:YEAR>
<fs:SITE_ID>CO701</fs:SITE_ID>
<fs:GRID_CODE>BQQ252</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.92578507</fs:POINT_X>
<fs:POINT_Y>-17.7339369525</fs:POINT_Y>
<fs:SITE_ID_OR>CO6104</fs:SITE_ID_OR>
<fs:DISCOVERY_>1996/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>386106.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="645"><fs:test fid="645"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.927377802,-17.7341173777</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8038906.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1996</fs:YEAR>
<fs:SITE_ID>CO702</fs:SITE_ID>
<fs:GRID_CODE>BQQ721</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.927377802</fs:POINT_X>
<fs:POINT_Y>-17.7341173777</fs:POINT_Y>
<fs:SITE_ID_OR>CO6105</fs:SITE_ID_OR>
<fs:DISCOVERY_>1996/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>386275.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="646"><fs:test fid="646"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.86613543,-17.9929905667</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010223.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1996</fs:YEAR>
<fs:SITE_ID>CO1459</fs:SITE_ID>
<fs:GRID_CODE>CFX220</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.86613543</fs:POINT_X>
<fs:POINT_Y>-17.9929905667</fs:POINT_Y>
<fs:SITE_ID_OR>COKP216</fs:SITE_ID_OR>
<fs:DISCOVERY_>1996/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>379955.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="647"><fs:test fid="647"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.864681348,-17.9929368684</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010228.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1996</fs:YEAR>
<fs:SITE_ID>CO170</fs:SITE_ID>
<fs:GRID_CODE>CFX219</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.864681348</fs:POINT_X>
<fs:POINT_Y>-17.9929368684</fs:POINT_Y>
<fs:SITE_ID_OR>CO1421</fs:SITE_ID_OR>
<fs:DISCOVERY_>1996/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>379801.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="648"><fs:test fid="648"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.870012544,-17.9966642441</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009819.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1996</fs:YEAR>
<fs:SITE_ID>CO171</fs:SITE_ID>
<fs:GRID_CODE>CFX344</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.870012544</fs:POINT_X>
<fs:POINT_Y>-17.9966642441</fs:POINT_Y>
<fs:SITE_ID_OR>CO1422</fs:SITE_ID_OR>
<fs:DISCOVERY_>1996/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>380368.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="649"><fs:test fid="649"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.730724396,-17.9389149057</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016114.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1996</fs:YEAR>
<fs:SITE_ID>CO221</fs:SITE_ID>
<fs:GRID_CODE>CCW256</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.730724396</fs:POINT_X>
<fs:POINT_Y>-17.9389149057</fs:POINT_Y>
<fs:SITE_ID_OR>CO175</fs:SITE_ID_OR>
<fs:DISCOVERY_>1996/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365576.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="650"><fs:test fid="650"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.064122086,-17.8238490084</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029055.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1996</fs:YEAR>
<fs:SITE_ID>CO693</fs:SITE_ID>
<fs:GRID_CODE>BVO879</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.064122086</fs:POINT_X>
<fs:POINT_Y>-17.8238490084</fs:POINT_Y>
<fs:SITE_ID_OR>CO6073</fs:SITE_ID_OR>
<fs:DISCOVERY_>1996/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>400824.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="651"><fs:test fid="651"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.726110246,-17.9596604632</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013815.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1996</fs:YEAR>
<fs:SITE_ID>CO697</fs:SITE_ID>
<fs:GRID_CODE>CEH42</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.726110246</fs:POINT_X>
<fs:POINT_Y>-17.9596604632</fs:POINT_Y>
<fs:SITE_ID_OR>CO610</fs:SITE_ID_OR>
<fs:DISCOVERY_>1996/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>365103.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="652"><fs:test fid="652"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.889257083,-18.0348945971</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8005601.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>murray river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO4631</fs:SITE_ID>
<fs:GRID_CODE>CHI695</fs:GRID_CODE>
<fs:METHOD_OF_>GS</fs:METHOD_OF_>
<fs:MONTH>1</fs:MONTH>
<fs:POINT_X>145.889257083</fs:POINT_X>
<fs:POINT_Y>-18.0348945971</fs:POINT_Y>
<fs:SITE_ID_OR>None</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/01/01</fs:DISCOVERY_>
<fs:LATITUDE__>382431.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>murray</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="653"><fs:test fid="653"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.826999752,-17.9684749342</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012910.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO104</fs:SITE_ID>
<fs:GRID_CODE>CEK328</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.826999752</fs:POINT_X>
<fs:POINT_Y>-17.9684749342</fs:POINT_Y>
<fs:SITE_ID_OR>CO1243</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>375794.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="654"><fs:test fid="654"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.825530113,-17.9665230632</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013125.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO105</fs:SITE_ID>
<fs:GRID_CODE>CEK267</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.825530113</fs:POINT_X>
<fs:POINT_Y>-17.9665230632</fs:POINT_Y>
<fs:SITE_ID_OR>CO1244</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>375637.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="655"><fs:test fid="655"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.84070335,-17.9638398917</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013432.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO106</fs:SITE_ID>
<fs:GRID_CODE>CEL163</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.84070335</fs:POINT_X>
<fs:POINT_Y>-17.9638398917</fs:POINT_Y>
<fs:SITE_ID_OR>CO1245</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>377242.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="656"><fs:test fid="656"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.819046472,-17.9289977306</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8017273.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO101</fs:SITE_ID>
<fs:GRID_CODE>CBO830</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.819046472</fs:POINT_X>
<fs:POINT_Y>-17.9289977306</fs:POINT_Y>
<fs:SITE_ID_OR>CO1240</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>374924.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="657"><fs:test fid="657"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.81629386,-17.9312221985</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8017025.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO102</fs:SITE_ID>
<fs:GRID_CODE>CBO887</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.81629386</fs:POINT_X>
<fs:POINT_Y>-17.9312221985</fs:POINT_Y>
<fs:SITE_ID_OR>CO1241</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>374634.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="658"><fs:test fid="658"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.854398687,-17.9647797472</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013337.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO135</fs:SITE_ID>
<fs:GRID_CODE>CEL207</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.854398687</fs:POINT_X>
<fs:POINT_Y>-17.9647797472</fs:POINT_Y>
<fs:SITE_ID_OR>CO1313</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>378693.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="659"><fs:test fid="659"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.951732917,-17.8706351625</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8023815.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO222</fs:SITE_ID>
<fs:GRID_CODE>BYO640</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.951732917</fs:POINT_X>
<fs:POINT_Y>-17.8706351625</fs:POINT_Y>
<fs:SITE_ID_OR>CO1801</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>388942.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="660"><fs:test fid="660"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.951524174,-17.870823828</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8023794.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO233</fs:SITE_ID>
<fs:GRID_CODE>BYO670</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.951524174</fs:POINT_X>
<fs:POINT_Y>-17.870823828</fs:POINT_Y>
<fs:SITE_ID_OR>CO1815</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>388920.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="661"><fs:test fid="661"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.0821321,-17.9126948068</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8019234.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO282</fs:SITE_ID>
<fs:GRID_CODE>CBX238</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.0821321</fs:POINT_X>
<fs:POINT_Y>-17.9126948068</fs:POINT_Y>
<fs:SITE_ID_OR>CO2301</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>402781.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="662"><fs:test fid="662"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.081552003,-17.9135145067</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8019143.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO283</fs:SITE_ID>
<fs:GRID_CODE>CBX268</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.081552003</fs:POINT_X>
<fs:POINT_Y>-17.9135145067</fs:POINT_Y>
<fs:SITE_ID_OR>CO2302</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>402720.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="663"><fs:test fid="663"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.718430443,-17.8602946271</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8024805.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO39</fs:SITE_ID>
<fs:GRID_CODE>BYG333</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.718430443</fs:POINT_X>
<fs:POINT_Y>-17.8602946271</fs:POINT_Y>
<fs:SITE_ID_OR>CO1104</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>364214.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="664"><fs:test fid="664"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.802226191,-17.9734024188</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012348.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO470</fs:SITE_ID>
<fs:GRID_CODE>CEK482</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.802226191</fs:POINT_X>
<fs:POINT_Y>-17.9734024188</fs:POINT_Y>
<fs:SITE_ID_OR>CO507</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>373174.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="665"><fs:test fid="665"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.994868869,-17.7841459542</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8033410.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO564</fs:SITE_ID>
<fs:GRID_CODE>BTW475</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.994868869</fs:POINT_X>
<fs:POINT_Y>-17.7841459542</fs:POINT_Y>
<fs:SITE_ID_OR>CO5508</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>393461.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="666"><fs:test fid="666"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.043577661,-17.8013358336</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8031535.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO579</fs:SITE_ID>
<fs:GRID_CODE>BVN137</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.043577661</fs:POINT_X>
<fs:POINT_Y>-17.8013358336</fs:POINT_Y>
<fs:SITE_ID_OR>CO5601</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>398634.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="667"><fs:test fid="667"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.042681395,-17.8013314496</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8031535.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO580</fs:SITE_ID>
<fs:GRID_CODE>BVN136</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.042681395</fs:POINT_X>
<fs:POINT_Y>-17.8013314496</fs:POINT_Y>
<fs:SITE_ID_OR>CO5602</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>398539.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="668"><fs:test fid="668"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.077786503,-17.7997377082</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8031730.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO616</fs:SITE_ID>
<fs:GRID_CODE>BVO83</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.077786503</fs:POINT_X>
<fs:POINT_Y>-17.7997377082</fs:POINT_Y>
<fs:SITE_ID_OR>CO6001</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>402259.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="669"><fs:test fid="669"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.08064981,-17.8062042235</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8031016.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO619</fs:SITE_ID>
<fs:GRID_CODE>BVO296</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.08064981</fs:POINT_X>
<fs:POINT_Y>-17.8062042235</fs:POINT_Y>
<fs:SITE_ID_OR>CO6004</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>402566.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="670"><fs:test fid="670"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.077649066,-17.8099588823</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8030599.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO620</fs:SITE_ID>
<fs:GRID_CODE>BVO443</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.077649066</fs:POINT_X>
<fs:POINT_Y>-17.8099588823</fs:POINT_Y>
<fs:SITE_ID_OR>CO6005</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>402250.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="671"><fs:test fid="671"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.073315556,-17.8141500303</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8030133.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO622</fs:SITE_ID>
<fs:GRID_CODE>BVO558</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.073315556</fs:POINT_X>
<fs:POINT_Y>-17.8141500303</fs:POINT_Y>
<fs:SITE_ID_OR>CO6007</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>401793.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="672"><fs:test fid="672"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.074833978,-17.8161093967</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029917.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO623</fs:SITE_ID>
<fs:GRID_CODE>BVO620</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.074833978</fs:POINT_X>
<fs:POINT_Y>-17.8161093967</fs:POINT_Y>
<fs:SITE_ID_OR>CO6008</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>401955.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="673"><fs:test fid="673"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.07416801,-17.8007147824</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8031620.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO653</fs:SITE_ID>
<fs:GRID_CODE>BVO109</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.07416801</fs:POINT_X>
<fs:POINT_Y>-17.8007147824</fs:POINT_Y>
<fs:SITE_ID_OR>CO6035</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>401876.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="674"><fs:test fid="674"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.076293313,-17.8002277464</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8031675.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO654</fs:SITE_ID>
<fs:GRID_CODE>BVO112</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.076293313</fs:POINT_X>
<fs:POINT_Y>-17.8002277464</fs:POINT_Y>
<fs:SITE_ID_OR>CO6036</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>402101.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="675"><fs:test fid="675"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.076547487,-17.7985027142</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8031866.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO655</fs:SITE_ID>
<fs:GRID_CODE>BVO52</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.076547487</fs:POINT_X>
<fs:POINT_Y>-17.7985027142</fs:POINT_Y>
<fs:SITE_ID_OR>CO6037</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>402127.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="676"><fs:test fid="676"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.077623881,-17.7983360722</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8031885.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO656</fs:SITE_ID>
<fs:GRID_CODE>BVO53</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.077623881</fs:POINT_X>
<fs:POINT_Y>-17.7983360722</fs:POINT_Y>
<fs:SITE_ID_OR>CO6038</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>402241.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="677"><fs:test fid="677"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.078296917,-17.80322873</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8031344.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO661</fs:SITE_ID>
<fs:GRID_CODE>BVO204</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.078296917</fs:POINT_X>
<fs:POINT_Y>-17.80322873</fs:POINT_Y>
<fs:SITE_ID_OR>CO6042</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>402315.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="678"><fs:test fid="678"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.06062019,-17.8168730899</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029825.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO671</fs:SITE_ID>
<fs:GRID_CODE>BVO635</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.06062019</fs:POINT_X>
<fs:POINT_Y>-17.8168730899</fs:POINT_Y>
<fs:SITE_ID_OR>CO6053</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>400449.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="679"><fs:test fid="679"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.739829952,-17.9756097518</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012060.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO678</fs:SITE_ID>
<fs:GRID_CODE>CEH596</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.739829952</fs:POINT_X>
<fs:POINT_Y>-17.9756097518</fs:POINT_Y>
<fs:SITE_ID_OR>CO606</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>366568.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="680"><fs:test fid="680"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.736896964,-17.9750755729</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012117.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO689</fs:SITE_ID>
<fs:GRID_CODE>CEH563</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.736896964</fs:POINT_X>
<fs:POINT_Y>-17.9750755729</fs:POINT_Y>
<fs:SITE_ID_OR>CO607</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>366257.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="681"><fs:test fid="681"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.232039804,-17.8326212588</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8027447.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>herbert river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO836</fs:SITE_ID>
<fs:GRID_CODE>BVZ477</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.232039804</fs:POINT_X>
<fs:POINT_Y>-17.8326212588</fs:POINT_Y>
<fs:SITE_ID_OR>CO92002</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>312639.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>herbert</fs:CATCHMENT_>
<fs:SHIRE_NAME>TABLELANDS REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="682"><fs:test fid="682"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.248304327,-17.8344664737</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8027259.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>herbert river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO1638</fs:SITE_ID>
<fs:GRID_CODE>BWA524</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.248304327</fs:POINT_X>
<fs:POINT_Y>-17.8344664737</fs:POINT_Y>
<fs:SITE_ID_OR>COKP383</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/15</fs:DISCOVERY_>
<fs:LATITUDE__>314365.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>herbert</fs:CATCHMENT_>
<fs:SHIRE_NAME>TABLELANDS REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="683"><fs:test fid="683"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.247622145,-17.8347675542</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8027225.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>herbert river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO1639</fs:SITE_ID>
<fs:GRID_CODE>BWA523</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.247622145</fs:POINT_X>
<fs:POINT_Y>-17.8347675542</fs:POINT_Y>
<fs:SITE_ID_OR>COKP384</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/15</fs:DISCOVERY_>
<fs:LATITUDE__>314293.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>herbert</fs:CATCHMENT_>
<fs:SHIRE_NAME>TABLELANDS REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="684"><fs:test fid="684"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.248920793,-17.8360622228</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8027083.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>herbert river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO1640</fs:SITE_ID>
<fs:GRID_CODE>BWA585</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.248920793</fs:POINT_X>
<fs:POINT_Y>-17.8360622228</fs:POINT_Y>
<fs:SITE_ID_OR>COKP385</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/15</fs:DISCOVERY_>
<fs:LATITUDE__>314432.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>herbert</fs:CATCHMENT_>
<fs:SHIRE_NAME>TABLELANDS REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="685"><fs:test fid="685"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.24480202,-17.8327815592</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8027442.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>herbert river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO1948</fs:SITE_ID>
<fs:GRID_CODE>BWA460</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.24480202</fs:POINT_X>
<fs:POINT_Y>-17.8327815592</fs:POINT_Y>
<fs:SITE_ID_OR>COKP668</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/15</fs:DISCOVERY_>
<fs:LATITUDE__>313992.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>herbert</fs:CATCHMENT_>
<fs:SHIRE_NAME>TABLELANDS REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="686"><fs:test fid="686"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.248304327,-17.8344664737</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8027259.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>herbert river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO1949</fs:SITE_ID>
<fs:GRID_CODE>BWA524</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.248304327</fs:POINT_X>
<fs:POINT_Y>-17.8344664737</fs:POINT_Y>
<fs:SITE_ID_OR>COKP669</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/15</fs:DISCOVERY_>
<fs:LATITUDE__>314365.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>herbert</fs:CATCHMENT_>
<fs:SHIRE_NAME>TABLELANDS REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="687"><fs:test fid="687"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.247622145,-17.8347675542</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8027225.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>herbert river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO1951</fs:SITE_ID>
<fs:GRID_CODE>BWA523</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.247622145</fs:POINT_X>
<fs:POINT_Y>-17.8347675542</fs:POINT_Y>
<fs:SITE_ID_OR>COKP670</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/15</fs:DISCOVERY_>
<fs:LATITUDE__>314293.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>herbert</fs:CATCHMENT_>
<fs:SHIRE_NAME>TABLELANDS REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="688"><fs:test fid="688"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.248920793,-17.8360622228</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8027083.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>herbert river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO1952</fs:SITE_ID>
<fs:GRID_CODE>BWA585</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.248920793</fs:POINT_X>
<fs:POINT_Y>-17.8360622228</fs:POINT_Y>
<fs:SITE_ID_OR>COKP671</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/15</fs:DISCOVERY_>
<fs:LATITUDE__>314432.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>herbert</fs:CATCHMENT_>
<fs:SHIRE_NAME>TABLELANDS REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="689"><fs:test fid="689"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.240453408,-17.8375492087</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026910.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>herbert river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO863</fs:SITE_ID>
<fs:GRID_CODE>BWA606</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.240453408</fs:POINT_X>
<fs:POINT_Y>-17.8375492087</fs:POINT_Y>
<fs:SITE_ID_OR>CO92027</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/15</fs:DISCOVERY_>
<fs:LATITUDE__>313536.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>herbert</fs:CATCHMENT_>
<fs:SHIRE_NAME>TABLELANDS REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="690"><fs:test fid="690"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.243578664,-17.8343969175</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8027262.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>herbert river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO864</fs:SITE_ID>
<fs:GRID_CODE>BWA519</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.243578664</fs:POINT_X>
<fs:POINT_Y>-17.8343969175</fs:POINT_Y>
<fs:SITE_ID_OR>CO92028</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/15</fs:DISCOVERY_>
<fs:LATITUDE__>313864.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>herbert</fs:CATCHMENT_>
<fs:SHIRE_NAME>TABLELANDS REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="691"><fs:test fid="691"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.245983279,-17.8344998502</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8027253.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>herbert river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO867</fs:SITE_ID>
<fs:GRID_CODE>BWA522</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.245983279</fs:POINT_X>
<fs:POINT_Y>-17.8344998502</fs:POINT_Y>
<fs:SITE_ID_OR>CO92030</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/15</fs:DISCOVERY_>
<fs:LATITUDE__>314119.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>herbert</fs:CATCHMENT_>
<fs:SHIRE_NAME>TABLELANDS REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="692"><fs:test fid="692"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.248920156,-17.8370922458</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026969.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>herbert river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO868</fs:SITE_ID>
<fs:GRID_CODE>BWA615</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.248920156</fs:POINT_X>
<fs:POINT_Y>-17.8370922458</fs:POINT_Y>
<fs:SITE_ID_OR>CO92031</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/15</fs:DISCOVERY_>
<fs:LATITUDE__>314433.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>herbert</fs:CATCHMENT_>
<fs:SHIRE_NAME>TABLELANDS REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="693"><fs:test fid="693"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.249137754,-17.8360641685</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8027083.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>herbert river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO871</fs:SITE_ID>
<fs:GRID_CODE>BWA585</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.249137754</fs:POINT_X>
<fs:POINT_Y>-17.8360641685</fs:POINT_Y>
<fs:SITE_ID_OR>CO92034</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/06/15</fs:DISCOVERY_>
<fs:LATITUDE__>314455.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>herbert</fs:CATCHMENT_>
<fs:SHIRE_NAME>TABLELANDS REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="694"><fs:test fid="694"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.81750765,-17.9346817703</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016643.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO103</fs:SITE_ID>
<fs:GRID_CODE>CCZ108</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.81750765</fs:POINT_X>
<fs:POINT_Y>-17.9346817703</fs:POINT_Y>
<fs:SITE_ID_OR>CO1242</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>374765.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="695"><fs:test fid="695"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.804082838,-17.9837613016</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8011203.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO245</fs:SITE_ID>
<fs:GRID_CODE>CEK814</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.804082838</fs:POINT_X>
<fs:POINT_Y>-17.9837613016</fs:POINT_Y>
<fs:SITE_ID_OR>CO2004</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>373378.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="696"><fs:test fid="696"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.064214133,-17.7935365657</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8032409.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO675</fs:SITE_ID>
<fs:GRID_CODE>BTZ759</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.064214133</fs:POINT_X>
<fs:POINT_Y>-17.7935365657</fs:POINT_Y>
<fs:SITE_ID_OR>CO6057</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>400817.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="697"><fs:test fid="697"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.718887214,-17.9661827048</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013088.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO696</fs:SITE_ID>
<fs:GRID_CODE>CEH274</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.718887214</fs:POINT_X>
<fs:POINT_Y>-17.9661827048</fs:POINT_Y>
<fs:SITE_ID_OR>CO609</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>364343.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="698"><fs:test fid="698"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.996036035,-17.7237256772</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8040096.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO766</fs:SITE_ID>
<fs:GRID_CODE>BQS296</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.996036035</fs:POINT_X>
<fs:POINT_Y>-17.7237256772</fs:POINT_Y>
<fs:SITE_ID_OR>CO7001</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>393549.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="699"><fs:test fid="699"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.24480202,-17.8327815592</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8027442.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>herbert river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO1637</fs:SITE_ID>
<fs:GRID_CODE>BWA460</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.24480202</fs:POINT_X>
<fs:POINT_Y>-17.8327815592</fs:POINT_Y>
<fs:SITE_ID_OR>COKP382</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/07/15</fs:DISCOVERY_>
<fs:LATITUDE__>313992.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>herbert</fs:CATCHMENT_>
<fs:SHIRE_NAME>TABLELANDS REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="700"><fs:test fid="700"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.255908125,-17.838329392</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026839.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>herbert river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO1641</fs:SITE_ID>
<fs:GRID_CODE>BWA652</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.255908125</fs:POINT_X>
<fs:POINT_Y>-17.838329392</fs:POINT_Y>
<fs:SITE_ID_OR>COKP386</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/07/15</fs:DISCOVERY_>
<fs:LATITUDE__>315175.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>herbert</fs:CATCHMENT_>
<fs:SHIRE_NAME>TABLELANDS REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="701"><fs:test fid="701"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.259315463,-17.8381610234</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026861.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>herbert river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO1642</fs:SITE_ID>
<fs:GRID_CODE>BWA656</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.259315463</fs:POINT_X>
<fs:POINT_Y>-17.8381610234</fs:POINT_Y>
<fs:SITE_ID_OR>COKP387</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/07/15</fs:DISCOVERY_>
<fs:LATITUDE__>315536.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>herbert</fs:CATCHMENT_>
<fs:SHIRE_NAME>TABLELANDS REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="702"><fs:test fid="702"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.260143044,-17.8384304264</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026832.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>herbert river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO1643</fs:SITE_ID>
<fs:GRID_CODE>BWA657</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.260143044</fs:POINT_X>
<fs:POINT_Y>-17.8384304264</fs:POINT_Y>
<fs:SITE_ID_OR>COKP388</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/07/15</fs:DISCOVERY_>
<fs:LATITUDE__>315624.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>herbert</fs:CATCHMENT_>
<fs:SHIRE_NAME>TABLELANDS REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="703"><fs:test fid="703"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.260743043,-17.8378484726</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026897.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>herbert river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO1644</fs:SITE_ID>
<fs:GRID_CODE>BWA657</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.260743043</fs:POINT_X>
<fs:POINT_Y>-17.8378484726</fs:POINT_Y>
<fs:SITE_ID_OR>COKP389</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/07/15</fs:DISCOVERY_>
<fs:LATITUDE__>315687.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>herbert</fs:CATCHMENT_>
<fs:SHIRE_NAME>TABLELANDS REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="704"><fs:test fid="704"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.255908125,-17.838329392</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026839.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>herbert river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO1953</fs:SITE_ID>
<fs:GRID_CODE>BWA652</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.255908125</fs:POINT_X>
<fs:POINT_Y>-17.838329392</fs:POINT_Y>
<fs:SITE_ID_OR>COKP672</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/07/15</fs:DISCOVERY_>
<fs:LATITUDE__>315175.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>herbert</fs:CATCHMENT_>
<fs:SHIRE_NAME>TABLELANDS REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="705"><fs:test fid="705"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.259315463,-17.8381610234</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026861.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>herbert river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO1954</fs:SITE_ID>
<fs:GRID_CODE>BWA656</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.259315463</fs:POINT_X>
<fs:POINT_Y>-17.8381610234</fs:POINT_Y>
<fs:SITE_ID_OR>COKP673</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/07/15</fs:DISCOVERY_>
<fs:LATITUDE__>315536.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>herbert</fs:CATCHMENT_>
<fs:SHIRE_NAME>TABLELANDS REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="706"><fs:test fid="706"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.260143044,-17.8384304264</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026832.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>herbert river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO1955</fs:SITE_ID>
<fs:GRID_CODE>BWA657</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.260143044</fs:POINT_X>
<fs:POINT_Y>-17.8384304264</fs:POINT_Y>
<fs:SITE_ID_OR>COKP674</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/07/15</fs:DISCOVERY_>
<fs:LATITUDE__>315624.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>herbert</fs:CATCHMENT_>
<fs:SHIRE_NAME>TABLELANDS REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="707"><fs:test fid="707"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.260743043,-17.8378484726</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026897.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>herbert river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO1956</fs:SITE_ID>
<fs:GRID_CODE>BWA657</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.260743043</fs:POINT_X>
<fs:POINT_Y>-17.8378484726</fs:POINT_Y>
<fs:SITE_ID_OR>COKP675</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/07/15</fs:DISCOVERY_>
<fs:LATITUDE__>315687.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>herbert</fs:CATCHMENT_>
<fs:SHIRE_NAME>TABLELANDS REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="708"><fs:test fid="708"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.218259576,-17.9156649029</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8018242.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>herbert river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO1957</fs:SITE_ID>
<fs:GRID_CODE>CAT523</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.218259576</fs:POINT_X>
<fs:POINT_Y>-17.9156649029</fs:POINT_Y>
<fs:SITE_ID_OR>COKP676</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/07/15</fs:DISCOVERY_>
<fs:LATITUDE__>311266.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>herbert</fs:CATCHMENT_>
<fs:SHIRE_NAME>TABLELANDS REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="709"><fs:test fid="709"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.218755639,-17.9170247195</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8018092.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>herbert river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO1958</fs:SITE_ID>
<fs:GRID_CODE>CAT584</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.218755639</fs:POINT_X>
<fs:POINT_Y>-17.9170247195</fs:POINT_Y>
<fs:SITE_ID_OR>COKP677</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/07/15</fs:DISCOVERY_>
<fs:LATITUDE__>311320.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>herbert</fs:CATCHMENT_>
<fs:SHIRE_NAME>TABLELANDS REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="710"><fs:test fid="710"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.237987609,-17.8359909701</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8027080.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>herbert river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO860</fs:SITE_ID>
<fs:GRID_CODE>BWA573</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.237987609</fs:POINT_X>
<fs:POINT_Y>-17.8359909701</fs:POINT_Y>
<fs:SITE_ID_OR>CO92024</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/07/15</fs:DISCOVERY_>
<fs:LATITUDE__>313273.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>herbert</fs:CATCHMENT_>
<fs:SHIRE_NAME>TABLELANDS REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="711"><fs:test fid="711"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.238704164,-17.8360335764</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8027076.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>herbert river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO861</fs:SITE_ID>
<fs:GRID_CODE>BWA574</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.238704164</fs:POINT_X>
<fs:POINT_Y>-17.8360335764</fs:POINT_Y>
<fs:SITE_ID_OR>CO92025</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/07/15</fs:DISCOVERY_>
<fs:LATITUDE__>313349.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>herbert</fs:CATCHMENT_>
<fs:SHIRE_NAME>TABLELANDS REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="712"><fs:test fid="712"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.239003001,-17.8363434721</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8027042.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>herbert river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO862</fs:SITE_ID>
<fs:GRID_CODE>BWA574</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.239003001</fs:POINT_X>
<fs:POINT_Y>-17.8363434721</fs:POINT_Y>
<fs:SITE_ID_OR>CO92026</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/07/15</fs:DISCOVERY_>
<fs:LATITUDE__>313381.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>herbert</fs:CATCHMENT_>
<fs:SHIRE_NAME>TABLELANDS REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="713"><fs:test fid="713"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.245309907,-17.8348642487</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8027212.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>herbert river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO865</fs:SITE_ID>
<fs:GRID_CODE>BWA521</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.245309907</fs:POINT_X>
<fs:POINT_Y>-17.8348642487</fs:POINT_Y>
<fs:SITE_ID_OR>CO92029</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/07/15</fs:DISCOVERY_>
<fs:LATITUDE__>314048.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>herbert</fs:CATCHMENT_>
<fs:SHIRE_NAME>TABLELANDS REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="714"><fs:test fid="714"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.260816756,-17.8399724445</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026662.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>herbert river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO869</fs:SITE_ID>
<fs:GRID_CODE>BWA717</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.260816756</fs:POINT_X>
<fs:POINT_Y>-17.8399724445</fs:POINT_Y>
<fs:SITE_ID_OR>CO92032</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/07/15</fs:DISCOVERY_>
<fs:LATITUDE__>315697.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>herbert</fs:CATCHMENT_>
<fs:SHIRE_NAME>TABLELANDS REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="715"><fs:test fid="715"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.260460397,-17.8378098129</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026901.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>herbert river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO870</fs:SITE_ID>
<fs:GRID_CODE>BWA627</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.260460397</fs:POINT_X>
<fs:POINT_Y>-17.8378098129</fs:POINT_Y>
<fs:SITE_ID_OR>CO92033</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/07/15</fs:DISCOVERY_>
<fs:LATITUDE__>315657.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>herbert</fs:CATCHMENT_>
<fs:SHIRE_NAME>TABLELANDS REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="716"><fs:test fid="716"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.260490627,-17.8376113038</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026923.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>herbert river</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO872</fs:SITE_ID>
<fs:GRID_CODE>BWA627</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.260490627</fs:POINT_X>
<fs:POINT_Y>-17.8376113038</fs:POINT_Y>
<fs:SITE_ID_OR>CO92035</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/07/15</fs:DISCOVERY_>
<fs:LATITUDE__>315660.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>herbert</fs:CATCHMENT_>
<fs:SHIRE_NAME>TABLELANDS REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="717"><fs:test fid="717"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.082864798,-17.8140233409</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8030152.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1997</fs:YEAR>
<fs:SITE_ID>CO664</fs:SITE_ID>
<fs:GRID_CODE>BVO569</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>146.082864798</fs:POINT_X>
<fs:POINT_Y>-17.8140233409</fs:POINT_Y>
<fs:SITE_ID_OR>CO6045</fs:SITE_ID_OR>
<fs:DISCOVERY_>1997/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>402805.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="718"><fs:test fid="718"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.043740449,-17.8433442058</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026887.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1383</fs:SITE_ID>
<fs:GRID_CODE>BXC647</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>1</fs:MONTH>
<fs:POINT_X>146.043740449</fs:POINT_X>
<fs:POINT_Y>-17.8433442058</fs:POINT_Y>
<fs:SITE_ID_OR>COKP147</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/01/01</fs:DISCOVERY_>
<fs:LATITUDE__>398675.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="719"><fs:test fid="719"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.045804506,-17.8456047071</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026638.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1388</fs:SITE_ID>
<fs:GRID_CODE>BXC709</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>1</fs:MONTH>
<fs:POINT_X>146.045804506</fs:POINT_X>
<fs:POINT_Y>-17.8456047071</fs:POINT_Y>
<fs:SITE_ID_OR>COKP151</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/01/01</fs:DISCOVERY_>
<fs:LATITUDE__>398895.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="720"><fs:test fid="720"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.047137167,-17.848765395</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026289.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1427</fs:SITE_ID>
<fs:GRID_CODE>BXC831</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>1</fs:MONTH>
<fs:POINT_X>146.047137167</fs:POINT_X>
<fs:POINT_Y>-17.848765395</fs:POINT_Y>
<fs:SITE_ID_OR>COKP188</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/01/01</fs:DISCOVERY_>
<fs:LATITUDE__>399038.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="721"><fs:test fid="721"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.047129566,-17.8501933236</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026131.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1428</fs:SITE_ID>
<fs:GRID_CODE>BXC861</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>1</fs:MONTH>
<fs:POINT_X>146.047129566</fs:POINT_X>
<fs:POINT_Y>-17.8501933236</fs:POINT_Y>
<fs:SITE_ID_OR>COKP189</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/01/01</fs:DISCOVERY_>
<fs:LATITUDE__>399038.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="722"><fs:test fid="722"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.048913151,-17.8502020237</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026131.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1430</fs:SITE_ID>
<fs:GRID_CODE>BXC863</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>1</fs:MONTH>
<fs:POINT_X>146.048913151</fs:POINT_X>
<fs:POINT_Y>-17.8502020237</fs:POINT_Y>
<fs:SITE_ID_OR>COKP190</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/01/01</fs:DISCOVERY_>
<fs:LATITUDE__>399227.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="723"><fs:test fid="723"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.050123384,-17.8497741052</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026179.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1431</fs:SITE_ID>
<fs:GRID_CODE>BXC864</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>1</fs:MONTH>
<fs:POINT_X>146.050123384</fs:POINT_X>
<fs:POINT_Y>-17.8497741052</fs:POINT_Y>
<fs:SITE_ID_OR>COKP191</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/01/01</fs:DISCOVERY_>
<fs:LATITUDE__>399355.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="724"><fs:test fid="724"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.046569464,-17.8508141932</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026062.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1432</fs:SITE_ID>
<fs:GRID_CODE>BXC890</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>1</fs:MONTH>
<fs:POINT_X>146.046569464</fs:POINT_X>
<fs:POINT_Y>-17.8508141932</fs:POINT_Y>
<fs:SITE_ID_OR>COKP192</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/01/01</fs:DISCOVERY_>
<fs:LATITUDE__>398979.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="725"><fs:test fid="725"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.048080536,-17.8506046635</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026086.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1433</fs:SITE_ID>
<fs:GRID_CODE>BXC892</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>1</fs:MONTH>
<fs:POINT_X>146.048080536</fs:POINT_X>
<fs:POINT_Y>-17.8506046635</fs:POINT_Y>
<fs:SITE_ID_OR>COKP193</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/01/01</fs:DISCOVERY_>
<fs:LATITUDE__>399139.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="726"><fs:test fid="726"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.047918328,-17.8509382693</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026049.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1434</fs:SITE_ID>
<fs:GRID_CODE>BXC892</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>1</fs:MONTH>
<fs:POINT_X>146.047918328</fs:POINT_X>
<fs:POINT_Y>-17.8509382693</fs:POINT_Y>
<fs:SITE_ID_OR>COKP194</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/01/01</fs:DISCOVERY_>
<fs:LATITUDE__>399122.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="727"><fs:test fid="727"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.047108094,-17.8506812576</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026077.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1435</fs:SITE_ID>
<fs:GRID_CODE>BXC891</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>1</fs:MONTH>
<fs:POINT_X>146.047108094</fs:POINT_X>
<fs:POINT_Y>-17.8506812576</fs:POINT_Y>
<fs:SITE_ID_OR>COKP195</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/01/01</fs:DISCOVERY_>
<fs:LATITUDE__>399036.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="728"><fs:test fid="728"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.044125791,-17.8489404627</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026268.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1436</fs:SITE_ID>
<fs:GRID_CODE>BXC828</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>1</fs:MONTH>
<fs:POINT_X>146.044125791</fs:POINT_X>
<fs:POINT_Y>-17.8489404627</fs:POINT_Y>
<fs:SITE_ID_OR>COKP196</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/01/01</fs:DISCOVERY_>
<fs:LATITUDE__>398719.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="729"><fs:test fid="729"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.043834043,-17.8505567909</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026089.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1437</fs:SITE_ID>
<fs:GRID_CODE>BXC887</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>1</fs:MONTH>
<fs:POINT_X>146.043834043</fs:POINT_X>
<fs:POINT_Y>-17.8505567909</fs:POINT_Y>
<fs:SITE_ID_OR>COKP197</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/01/01</fs:DISCOVERY_>
<fs:LATITUDE__>398689.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="730"><fs:test fid="730"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.046964802,-17.8492345168</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026237.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1438</fs:SITE_ID>
<fs:GRID_CODE>BXC831</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>1</fs:MONTH>
<fs:POINT_X>146.046964802</fs:POINT_X>
<fs:POINT_Y>-17.8492345168</fs:POINT_Y>
<fs:SITE_ID_OR>COKP198</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/01/01</fs:DISCOVERY_>
<fs:LATITUDE__>399020.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="731"><fs:test fid="731"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.045946907,-17.8525283238</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8025872.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1439</fs:SITE_ID>
<fs:GRID_CODE>BYR50</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>1</fs:MONTH>
<fs:POINT_X>146.045946907</fs:POINT_X>
<fs:POINT_Y>-17.8525283238</fs:POINT_Y>
<fs:SITE_ID_OR>COKP199</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/01/01</fs:DISCOVERY_>
<fs:LATITUDE__>398914.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="732"><fs:test fid="732"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.047137167,-17.848765395</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026289.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1442</fs:SITE_ID>
<fs:GRID_CODE>BXC831</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>1</fs:MONTH>
<fs:POINT_X>146.047137167</fs:POINT_X>
<fs:POINT_Y>-17.848765395</fs:POINT_Y>
<fs:SITE_ID_OR>COKP200</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/01/01</fs:DISCOVERY_>
<fs:LATITUDE__>399038.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="733"><fs:test fid="733"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.046876303,-17.8481314782</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026359.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1443</fs:SITE_ID>
<fs:GRID_CODE>BXC801</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>1</fs:MONTH>
<fs:POINT_X>146.046876303</fs:POINT_X>
<fs:POINT_Y>-17.8481314782</fs:POINT_Y>
<fs:SITE_ID_OR>COKP201</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/01/01</fs:DISCOVERY_>
<fs:LATITUDE__>399010.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="734"><fs:test fid="734"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.047918328,-17.8509382693</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026049.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1444</fs:SITE_ID>
<fs:GRID_CODE>BXC892</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>1</fs:MONTH>
<fs:POINT_X>146.047918328</fs:POINT_X>
<fs:POINT_Y>-17.8509382693</fs:POINT_Y>
<fs:SITE_ID_OR>COKP202</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/01/01</fs:DISCOVERY_>
<fs:LATITUDE__>399122.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="735"><fs:test fid="735"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.042495958,-17.8572381606</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8025349.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO596</fs:SITE_ID>
<fs:GRID_CODE>BYR196</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>1</fs:MONTH>
<fs:POINT_X>146.042495958</fs:POINT_X>
<fs:POINT_Y>-17.8572381606</fs:POINT_Y>
<fs:SITE_ID_OR>CO5801</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/01/01</fs:DISCOVERY_>
<fs:LATITUDE__>398551.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="736"><fs:test fid="736"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.043758125,-17.8559338783</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8025494.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO597</fs:SITE_ID>
<fs:GRID_CODE>BYR167</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>1</fs:MONTH>
<fs:POINT_X>146.043758125</fs:POINT_X>
<fs:POINT_Y>-17.8559338783</fs:POINT_Y>
<fs:SITE_ID_OR>CO5802</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/01/01</fs:DISCOVERY_>
<fs:LATITUDE__>398684.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="737"><fs:test fid="737"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.043817791,-17.8553647928</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8025557.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO598</fs:SITE_ID>
<fs:GRID_CODE>BYR137</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>1</fs:MONTH>
<fs:POINT_X>146.043817791</fs:POINT_X>
<fs:POINT_Y>-17.8553647928</fs:POINT_Y>
<fs:SITE_ID_OR>CO5803</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/01/01</fs:DISCOVERY_>
<fs:LATITUDE__>398690.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="738"><fs:test fid="738"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.04579046,-17.8553202238</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8025563.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO600</fs:SITE_ID>
<fs:GRID_CODE>BYR139</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>1</fs:MONTH>
<fs:POINT_X>146.04579046</fs:POINT_X>
<fs:POINT_Y>-17.8553202238</fs:POINT_Y>
<fs:SITE_ID_OR>CO5805</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/01/01</fs:DISCOVERY_>
<fs:LATITUDE__>398899.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="739"><fs:test fid="739"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.046246332,-17.8565515867</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8025427.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO601</fs:SITE_ID>
<fs:GRID_CODE>BYR170</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>1</fs:MONTH>
<fs:POINT_X>146.046246332</fs:POINT_X>
<fs:POINT_Y>-17.8565515867</fs:POINT_Y>
<fs:SITE_ID_OR>CO5806</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/01/01</fs:DISCOVERY_>
<fs:LATITUDE__>398948.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="740"><fs:test fid="740"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.048732211,-17.8540602648</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8025704.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO602</fs:SITE_ID>
<fs:GRID_CODE>BYR83</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>1</fs:MONTH>
<fs:POINT_X>146.048732211</fs:POINT_X>
<fs:POINT_Y>-17.8540602648</fs:POINT_Y>
<fs:SITE_ID_OR>CO5807</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/01/01</fs:DISCOVERY_>
<fs:LATITUDE__>399210.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="741"><fs:test fid="741"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.044411637,-17.8572656287</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8025347.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO612</fs:SITE_ID>
<fs:GRID_CODE>BYR198</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>2</fs:MONTH>
<fs:POINT_X>146.044411637</fs:POINT_X>
<fs:POINT_Y>-17.8572656287</fs:POINT_Y>
<fs:SITE_ID_OR>CO5817</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/02/01</fs:DISCOVERY_>
<fs:LATITUDE__>398754.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="742"><fs:test fid="742"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.81218886,-18.0128833483</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8007986.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>murray river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>COSQ242</fs:SITE_ID>
<fs:GRID_CODE>CHF13</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.81218886</fs:POINT_X>
<fs:POINT_Y>-18.0128833483</fs:POINT_Y>
<fs:SITE_ID_OR>CO2001</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>374257.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>SQ</fs:SPECIES>
<fs:CATCHMENT_>murray</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="743"><fs:test fid="743"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.677403288,-17.8022212019</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8031201.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1</fs:SITE_ID>
<fs:GRID_CODE>BVA229</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.677403288</fs:POINT_X>
<fs:POINT_Y>-17.8022212019</fs:POINT_Y>
<fs:SITE_ID_OR>CO1001</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>359821.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="744"><fs:test fid="744"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.694387229,-17.8199211027</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029255.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO11</fs:SITE_ID>
<fs:GRID_CODE>BVB817</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.694387229</fs:POINT_X>
<fs:POINT_Y>-17.8199211027</fs:POINT_Y>
<fs:SITE_ID_OR>CO1010</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361635.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="745"><fs:test fid="745"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.835960112,-17.9671823589</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013059.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO116</fs:SITE_ID>
<fs:GRID_CODE>CEL278</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.835960112</fs:POINT_X>
<fs:POINT_Y>-17.9671823589</fs:POINT_Y>
<fs:SITE_ID_OR>CO1257</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>376742.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="746"><fs:test fid="746"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.696911848,-17.824347956</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8028767.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO12</fs:SITE_ID>
<fs:GRID_CODE>BWQ70</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.696911848</fs:POINT_X>
<fs:POINT_Y>-17.824347956</fs:POINT_Y>
<fs:SITE_ID_OR>CO1011</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361906.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="747"><fs:test fid="747"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.694606726,-17.8234650283</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8028863.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO13</fs:SITE_ID>
<fs:GRID_CODE>BWQ37</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.694606726</fs:POINT_X>
<fs:POINT_Y>-17.8234650283</fs:POINT_Y>
<fs:SITE_ID_OR>CO1012</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361661.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="748"><fs:test fid="748"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.692376105,-17.8214258526</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029087.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO14</fs:SITE_ID>
<fs:GRID_CODE>BVB875</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.692376105</fs:POINT_X>
<fs:POINT_Y>-17.8214258526</fs:POINT_Y>
<fs:SITE_ID_OR>CO1013</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361423.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="749"><fs:test fid="749"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.994297608,-17.7850829413</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8033306.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1458</fs:SITE_ID>
<fs:GRID_CODE>BTW505</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.994297608</fs:POINT_X>
<fs:POINT_Y>-17.7850829413</fs:POINT_Y>
<fs:SITE_ID_OR>COKP215</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>393401.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="750"><fs:test fid="750"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.993500106,-17.7826205891</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8033578.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1468</fs:SITE_ID>
<fs:GRID_CODE>BTW444</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.993500106</fs:POINT_X>
<fs:POINT_Y>-17.7826205891</fs:POINT_Y>
<fs:SITE_ID_OR>COKP224</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>393315.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="751"><fs:test fid="751"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.694795322,-17.8221830504</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029005.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO15</fs:SITE_ID>
<fs:GRID_CODE>BVB877</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.694795322</fs:POINT_X>
<fs:POINT_Y>-17.8221830504</fs:POINT_Y>
<fs:SITE_ID_OR>CO1014</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361680.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="752"><fs:test fid="752"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.688515573,-17.8165019983</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029629.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO17</fs:SITE_ID>
<fs:GRID_CODE>BVB691</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.688515573</fs:POINT_X>
<fs:POINT_Y>-17.8165019983</fs:POINT_Y>
<fs:SITE_ID_OR>CO1016</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361010.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="753"><fs:test fid="753"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.698733329,-17.8268723519</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8028489.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO18</fs:SITE_ID>
<fs:GRID_CODE>BWQ162</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.698733329</fs:POINT_X>
<fs:POINT_Y>-17.8268723519</fs:POINT_Y>
<fs:SITE_ID_OR>CO1017</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>362101.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="754"><fs:test fid="754"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.697280008,-17.8269168878</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8028483.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO19</fs:SITE_ID>
<fs:GRID_CODE>BWQ160</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.697280008</fs:POINT_X>
<fs:POINT_Y>-17.8269168878</fs:POINT_Y>
<fs:SITE_ID_OR>CO1018</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361947.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="755"><fs:test fid="755"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.689312764,-17.8184412365</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029415.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO2</fs:SITE_ID>
<fs:GRID_CODE>BVB751</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.689312764</fs:POINT_X>
<fs:POINT_Y>-17.8184412365</fs:POINT_Y>
<fs:SITE_ID_OR>CO1002</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361096.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="756"><fs:test fid="756"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.699587109,-17.8236337906</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8028848.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO20</fs:SITE_ID>
<fs:GRID_CODE>BWQ42</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.699587109</fs:POINT_X>
<fs:POINT_Y>-17.8236337906</fs:POINT_Y>
<fs:SITE_ID_OR>CO1019</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>362189.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="757"><fs:test fid="757"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.689445669,-17.8131645923</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029999.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO23</fs:SITE_ID>
<fs:GRID_CODE>BVB602</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.689445669</fs:POINT_X>
<fs:POINT_Y>-17.8131645923</fs:POINT_Y>
<fs:SITE_ID_OR>CO1021</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361106.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="758"><fs:test fid="758"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.808547326,-17.9784840294</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8011790.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO246</fs:SITE_ID>
<fs:GRID_CODE>CEK669</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.808547326</fs:POINT_X>
<fs:POINT_Y>-17.9784840294</fs:POINT_Y>
<fs:SITE_ID_OR>CO2005</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>373847.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="759"><fs:test fid="759"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.870072913,-17.9470772968</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015306.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO258</fs:SITE_ID>
<fs:GRID_CODE>CDB494</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.870072913</fs:POINT_X>
<fs:POINT_Y>-17.9470772968</fs:POINT_Y>
<fs:SITE_ID_OR>CO2101</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>380341.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="760"><fs:test fid="760"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.089928048,-17.9426555052</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015923.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO271</fs:SITE_ID>
<fs:GRID_CODE>CDJ307</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.089928048</fs:POINT_X>
<fs:POINT_Y>-17.9426555052</fs:POINT_Y>
<fs:SITE_ID_OR>CO2201</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>403623.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="761"><fs:test fid="761"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.67250644,-17.7882893641</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8032739.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO28</fs:SITE_ID>
<fs:GRID_CODE>BTL673</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.67250644</fs:POINT_X>
<fs:POINT_Y>-17.7882893641</fs:POINT_Y>
<fs:SITE_ID_OR>CO1026</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>359291.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="762"><fs:test fid="762"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.701038406,-17.8173537576</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029544.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO2980</fs:SITE_ID>
<fs:GRID_CODE>BVB734</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.701038406</fs:POINT_X>
<fs:POINT_Y>-17.8173537576</fs:POINT_Y>
<fs:SITE_ID_OR>H0478</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>362338.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="763"><fs:test fid="763"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.692023216,-17.8128926742</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8030031.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO2981</fs:SITE_ID>
<fs:GRID_CODE>BVB574</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.692023216</fs:POINT_X>
<fs:POINT_Y>-17.8128926742</fs:POINT_Y>
<fs:SITE_ID_OR>H0481</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361379.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="764"><fs:test fid="764"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.70011051,-17.8295202937</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8028197.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO2982</fs:SITE_ID>
<fs:GRID_CODE>BWQ253</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.70011051</fs:POINT_X>
<fs:POINT_Y>-17.8295202937</fs:POINT_Y>
<fs:SITE_ID_OR>H0499</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>362249.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="765"><fs:test fid="765"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.698307965,-17.8230830597</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8028908.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO2983</fs:SITE_ID>
<fs:GRID_CODE>BWQ11</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.698307965</fs:POINT_X>
<fs:POINT_Y>-17.8230830597</fs:POINT_Y>
<fs:SITE_ID_OR>H04111</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>362053.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="766"><fs:test fid="766"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.697297391,-17.8219286396</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029035.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO2984</fs:SITE_ID>
<fs:GRID_CODE>BVB880</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.697297391</fs:POINT_X>
<fs:POINT_Y>-17.8219286396</fs:POINT_Y>
<fs:SITE_ID_OR>H04112</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361945.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="767"><fs:test fid="767"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.691213753,-17.8126342241</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8030059.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO2985</fs:SITE_ID>
<fs:GRID_CODE>BVB573</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.691213753</fs:POINT_X>
<fs:POINT_Y>-17.8126342241</fs:POINT_Y>
<fs:SITE_ID_OR>H04115</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361293.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="768"><fs:test fid="768"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.689528065,-17.813508546</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029961.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO2986</fs:SITE_ID>
<fs:GRID_CODE>BVB602</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.689528065</fs:POINT_X>
<fs:POINT_Y>-17.813508546</fs:POINT_Y>
<fs:SITE_ID_OR>H04116</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361115.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="769"><fs:test fid="769"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.701034172,-17.821845072</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029047.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO2987</fs:SITE_ID>
<fs:GRID_CODE>BVB884</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.701034172</fs:POINT_X>
<fs:POINT_Y>-17.821845072</fs:POINT_Y>
<fs:SITE_ID_OR>H04117</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>362341.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="770"><fs:test fid="770"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.68998285,-17.8184095816</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029419.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO2988</fs:SITE_ID>
<fs:GRID_CODE>BVB752</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.68998285</fs:POINT_X>
<fs:POINT_Y>-17.8184095816</fs:POINT_Y>
<fs:SITE_ID_OR>H0546</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361167.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="771"><fs:test fid="771"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.690177732,-17.8188536946</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029370.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO2989</fs:SITE_ID>
<fs:GRID_CODE>BVB782</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.690177732</fs:POINT_X>
<fs:POINT_Y>-17.8188536946</fs:POINT_Y>
<fs:SITE_ID_OR>H0547</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361188.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="772"><fs:test fid="772"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.690622327,-17.8161094628</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029674.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO2990</fs:SITE_ID>
<fs:GRID_CODE>BVB693</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.690622327</fs:POINT_X>
<fs:POINT_Y>-17.8161094628</fs:POINT_Y>
<fs:SITE_ID_OR>H0548</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361233.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="773"><fs:test fid="773"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.690707299,-17.8161009951</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029675.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO2991</fs:SITE_ID>
<fs:GRID_CODE>BVB693</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.690707299</fs:POINT_X>
<fs:POINT_Y>-17.8161009951</fs:POINT_Y>
<fs:SITE_ID_OR>H0549</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361242.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="774"><fs:test fid="774"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.693710623,-17.8169615197</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029582.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO2992</fs:SITE_ID>
<fs:GRID_CODE>BVB726</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.693710623</fs:POINT_X>
<fs:POINT_Y>-17.8169615197</fs:POINT_Y>
<fs:SITE_ID_OR>H0550</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361561.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="775"><fs:test fid="775"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.693802002,-17.8173687903</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029537.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO2993</fs:SITE_ID>
<fs:GRID_CODE>BVB726</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.693802002</fs:POINT_X>
<fs:POINT_Y>-17.8173687903</fs:POINT_Y>
<fs:SITE_ID_OR>H0551</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361571.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="776"><fs:test fid="776"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.693848448,-17.8174685064</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029526.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO2994</fs:SITE_ID>
<fs:GRID_CODE>BVB726</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.693848448</fs:POINT_X>
<fs:POINT_Y>-17.8174685064</fs:POINT_Y>
<fs:SITE_ID_OR>H0552</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361576.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="777"><fs:test fid="777"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.694224825,-17.8176065746</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029511.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO2995</fs:SITE_ID>
<fs:GRID_CODE>BVB727</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.694224825</fs:POINT_X>
<fs:POINT_Y>-17.8176065746</fs:POINT_Y>
<fs:SITE_ID_OR>H0555</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361616.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="778"><fs:test fid="778"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.694452532,-17.8161350827</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029674.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO2996</fs:SITE_ID>
<fs:GRID_CODE>BVB697</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.694452532</fs:POINT_X>
<fs:POINT_Y>-17.8161350827</fs:POINT_Y>
<fs:SITE_ID_OR>H0556</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361639.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="779"><fs:test fid="779"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.694467321,-17.8166954686</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029612.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO2997</fs:SITE_ID>
<fs:GRID_CODE>BVB697</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.694467321</fs:POINT_X>
<fs:POINT_Y>-17.8166954686</fs:POINT_Y>
<fs:SITE_ID_OR>H0557</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361641.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="780"><fs:test fid="780"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.694499334,-17.8174818918</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029525.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO2998</fs:SITE_ID>
<fs:GRID_CODE>BVB727</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.694499334</fs:POINT_X>
<fs:POINT_Y>-17.8174818918</fs:POINT_Y>
<fs:SITE_ID_OR>H0558</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361645.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="781"><fs:test fid="781"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.694604096,-17.8173470382</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029540.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO2999</fs:SITE_ID>
<fs:GRID_CODE>BVB727</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.694604096</fs:POINT_X>
<fs:POINT_Y>-17.8173470382</fs:POINT_Y>
<fs:SITE_ID_OR>H0559</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361656.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="782"><fs:test fid="782"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.691460634,-17.8162958142</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029654.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO3</fs:SITE_ID>
<fs:GRID_CODE>BVB694</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.691460634</fs:POINT_X>
<fs:POINT_Y>-17.8162958142</fs:POINT_Y>
<fs:SITE_ID_OR>CO1003</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361322.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="783"><fs:test fid="783"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.694603542,-17.8161270543</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029675.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO3000</fs:SITE_ID>
<fs:GRID_CODE>BVB697</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.694603542</fs:POINT_X>
<fs:POINT_Y>-17.8161270543</fs:POINT_Y>
<fs:SITE_ID_OR>H0560</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361655.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="784"><fs:test fid="784"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.695828846,-17.8162888607</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029658.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO3001</fs:SITE_ID>
<fs:GRID_CODE>BVB698</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.695828846</fs:POINT_X>
<fs:POINT_Y>-17.8162888607</fs:POINT_Y>
<fs:SITE_ID_OR>H0561</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361785.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="785"><fs:test fid="785"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.695837295,-17.8164244704</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029643.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO3002</fs:SITE_ID>
<fs:GRID_CODE>BVB698</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.695837295</fs:POINT_X>
<fs:POINT_Y>-17.8164244704</fs:POINT_Y>
<fs:SITE_ID_OR>H0562</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361786.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="786"><fs:test fid="786"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.697248592,-17.8169580218</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029585.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO3003</fs:SITE_ID>
<fs:GRID_CODE>BVB730</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.697248592</fs:POINT_X>
<fs:POINT_Y>-17.8169580218</fs:POINT_Y>
<fs:SITE_ID_OR>H0563</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361936.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="787"><fs:test fid="787"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.697436945,-17.8170044615</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029580.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO3004</fs:SITE_ID>
<fs:GRID_CODE>BVB730</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.697436945</fs:POINT_X>
<fs:POINT_Y>-17.8170044615</fs:POINT_Y>
<fs:SITE_ID_OR>H0564</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361956.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="788"><fs:test fid="788"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.698071297,-17.8192950234</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029327.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO3005</fs:SITE_ID>
<fs:GRID_CODE>BVB791</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.698071297</fs:POINT_X>
<fs:POINT_Y>-17.8192950234</fs:POINT_Y>
<fs:SITE_ID_OR>H0565</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>362025.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="789"><fs:test fid="789"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.698090363,-17.8192680397</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029330.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO3006</fs:SITE_ID>
<fs:GRID_CODE>BVB791</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.698090363</fs:POINT_X>
<fs:POINT_Y>-17.8192680397</fs:POINT_Y>
<fs:SITE_ID_OR>H0566</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>362027.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="790"><fs:test fid="790"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.698713609,-17.8191908583</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029339.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO3007</fs:SITE_ID>
<fs:GRID_CODE>BVB791</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.698713609</fs:POINT_X>
<fs:POINT_Y>-17.8191908583</fs:POINT_Y>
<fs:SITE_ID_OR>H0567</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>362093.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="791"><fs:test fid="791"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.699585611,-17.8212390022</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029113.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO3008</fs:SITE_ID>
<fs:GRID_CODE>BVB852</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.699585611</fs:POINT_X>
<fs:POINT_Y>-17.8212390022</fs:POINT_Y>
<fs:SITE_ID_OR>H0568</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>362187.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="792"><fs:test fid="792"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.699595045,-17.821239065</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029113.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO3009</fs:SITE_ID>
<fs:GRID_CODE>BVB852</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.699595045</fs:POINT_X>
<fs:POINT_Y>-17.821239065</fs:POINT_Y>
<fs:SITE_ID_OR>H0569</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>362188.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="793"><fs:test fid="793"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.699695218,-17.8217367611</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029058.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO3010</fs:SITE_ID>
<fs:GRID_CODE>BVB882</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.699695218</fs:POINT_X>
<fs:POINT_Y>-17.8217367611</fs:POINT_Y>
<fs:SITE_ID_OR>H0570</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>362199.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="794"><fs:test fid="794"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.699695218,-17.8217367611</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029058.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO3011</fs:SITE_ID>
<fs:GRID_CODE>BVB882</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.699695218</fs:POINT_X>
<fs:POINT_Y>-17.8217367611</fs:POINT_Y>
<fs:SITE_ID_OR>H0571</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>362199.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="795"><fs:test fid="795"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.699897334,-17.8224881687</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8028975.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO3012</fs:SITE_ID>
<fs:GRID_CODE>BWQ13</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.699897334</fs:POINT_X>
<fs:POINT_Y>-17.8224881687</fs:POINT_Y>
<fs:SITE_ID_OR>H0574</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>362221.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="796"><fs:test fid="796"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.700101352,-17.8229775186</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8028921.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO3013</fs:SITE_ID>
<fs:GRID_CODE>BWQ13</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.700101352</fs:POINT_X>
<fs:POINT_Y>-17.8229775186</fs:POINT_Y>
<fs:SITE_ID_OR>H0575</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>362243.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="797"><fs:test fid="797"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.700729634,-17.8169992659</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029583.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO3014</fs:SITE_ID>
<fs:GRID_CODE>BVB734</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.700729634</fs:POINT_X>
<fs:POINT_Y>-17.8169992659</fs:POINT_Y>
<fs:SITE_ID_OR>H0576</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>362305.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="798"><fs:test fid="798"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.700728193,-17.8171980683</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029561.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO3015</fs:SITE_ID>
<fs:GRID_CODE>BVB734</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.700728193</fs:POINT_X>
<fs:POINT_Y>-17.8171980683</fs:POINT_Y>
<fs:SITE_ID_OR>H0577</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>362305.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="799"><fs:test fid="799"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.688121196,-17.8162463194</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029657.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO3016</fs:SITE_ID>
<fs:GRID_CODE>BVA720</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.688121196</fs:POINT_X>
<fs:POINT_Y>-17.8162463194</fs:POINT_Y>
<fs:SITE_ID_OR>H0656</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>360968.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="800"><fs:test fid="800"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.690728343,-17.8145106452</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029851.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO3017</fs:SITE_ID>
<fs:GRID_CODE>BVB633</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.690728343</fs:POINT_X>
<fs:POINT_Y>-17.8145106452</fs:POINT_Y>
<fs:SITE_ID_OR>H0657</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361243.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="801"><fs:test fid="801"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.691726236,-17.8160987807</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029676.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO3018</fs:SITE_ID>
<fs:GRID_CODE>BVB694</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.691726236</fs:POINT_X>
<fs:POINT_Y>-17.8160987807</fs:POINT_Y>
<fs:SITE_ID_OR>H0658</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361350.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="802"><fs:test fid="802"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.691972047,-17.8160281307</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029684.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO3019</fs:SITE_ID>
<fs:GRID_CODE>BVB694</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.691972047</fs:POINT_X>
<fs:POINT_Y>-17.8160281307</fs:POINT_Y>
<fs:SITE_ID_OR>H0659</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361376.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="803"><fs:test fid="803"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.696745519,-17.819972991</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029251.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO3020</fs:SITE_ID>
<fs:GRID_CODE>BVB819</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.696745519</fs:POINT_X>
<fs:POINT_Y>-17.819972991</fs:POINT_Y>
<fs:SITE_ID_OR>H0660</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361885.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="804"><fs:test fid="804"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.697252036,-17.8229766169</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8028919.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO3021</fs:SITE_ID>
<fs:GRID_CODE>BWQ10</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.697252036</fs:POINT_X>
<fs:POINT_Y>-17.8229766169</fs:POINT_Y>
<fs:SITE_ID_OR>H0661</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361941.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="805"><fs:test fid="805"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.697455824,-17.8208994898</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029149.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO3022</fs:SITE_ID>
<fs:GRID_CODE>BVB850</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.697455824</fs:POINT_X>
<fs:POINT_Y>-17.8208994898</fs:POINT_Y>
<fs:SITE_ID_OR>H0662</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361961.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="806"><fs:test fid="806"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.697671171,-17.8211268474</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029124.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO3023</fs:SITE_ID>
<fs:GRID_CODE>BVB850</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.697671171</fs:POINT_X>
<fs:POINT_Y>-17.8211268474</fs:POINT_Y>
<fs:SITE_ID_OR>H0663</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361984.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="807"><fs:test fid="807"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.698890892,-17.8194631457</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029309.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO3024</fs:SITE_ID>
<fs:GRID_CODE>BVB792</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.698890892</fs:POINT_X>
<fs:POINT_Y>-17.8194631457</fs:POINT_Y>
<fs:SITE_ID_OR>H0664</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>362112.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="808"><fs:test fid="808"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.711051184,-17.8563149501</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8025240.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO36</fs:SITE_ID>
<fs:GRID_CODE>BYF235</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.711051184</fs:POINT_X>
<fs:POINT_Y>-17.8563149501</fs:POINT_Y>
<fs:SITE_ID_OR>CO1101</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>363429.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="809"><fs:test fid="809"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.714329989,-17.8622828728</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8024582.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO37</fs:SITE_ID>
<fs:GRID_CODE>BYF448</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.714329989</fs:POINT_X>
<fs:POINT_Y>-17.8622828728</fs:POINT_Y>
<fs:SITE_ID_OR>CO1102</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>363781.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="810"><fs:test fid="810"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.716799469,-17.8613864078</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8024683.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO38</fs:SITE_ID>
<fs:GRID_CODE>BYG391</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.716799469</fs:POINT_X>
<fs:POINT_Y>-17.8613864078</fs:POINT_Y>
<fs:SITE_ID_OR>CO1103</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>364042.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="811"><fs:test fid="811"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.693867952,-17.8160859929</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029679.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO4</fs:SITE_ID>
<fs:GRID_CODE>BVB696</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.693867952</fs:POINT_X>
<fs:POINT_Y>-17.8160859929</fs:POINT_Y>
<fs:SITE_ID_OR>CO1004</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361577.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="812"><fs:test fid="812"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.696338809,-17.8162199674</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029666.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO5</fs:SITE_ID>
<fs:GRID_CODE>BVB699</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.696338809</fs:POINT_X>
<fs:POINT_Y>-17.8162199674</fs:POINT_Y>
<fs:SITE_ID_OR>CO1005</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361839.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="813"><fs:test fid="813"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.996019491,-17.7825069957</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8033592.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO566</fs:SITE_ID>
<fs:GRID_CODE>BTW446</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.996019491</fs:POINT_X>
<fs:POINT_Y>-17.7825069957</fs:POINT_Y>
<fs:SITE_ID_OR>CO5510</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>393582.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="814"><fs:test fid="814"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.037751045,-17.8498129114</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026168.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO593</fs:SITE_ID>
<fs:GRID_CODE>BXC851</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.037751045</fs:POINT_X>
<fs:POINT_Y>-17.8498129114</fs:POINT_Y>
<fs:SITE_ID_OR>CO5702</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>398044.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="815"><fs:test fid="815"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.045169146,-17.8550279762</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8025595.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO599</fs:SITE_ID>
<fs:GRID_CODE>BYR139</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.045169146</fs:POINT_X>
<fs:POINT_Y>-17.8550279762</fs:POINT_Y>
<fs:SITE_ID_OR>CO5804</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>398833.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="816"><fs:test fid="816"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.69171392,-17.8203731427</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029203.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO6</fs:SITE_ID>
<fs:GRID_CODE>BVB814</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.69171392</fs:POINT_X>
<fs:POINT_Y>-17.8203731427</fs:POINT_Y>
<fs:SITE_ID_OR>CO1006</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361352.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="817"><fs:test fid="817"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.046781073,-17.8500650931</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026145.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO603</fs:SITE_ID>
<fs:GRID_CODE>BXC861</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.046781073</fs:POINT_X>
<fs:POINT_Y>-17.8500650931</fs:POINT_Y>
<fs:SITE_ID_OR>CO5808</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>399001.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="818"><fs:test fid="818"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.046409034,-17.8525848091</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8025866.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO604</fs:SITE_ID>
<fs:GRID_CODE>BYR50</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.046409034</fs:POINT_X>
<fs:POINT_Y>-17.8525848091</fs:POINT_Y>
<fs:SITE_ID_OR>CO5809</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>398963.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="819"><fs:test fid="819"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.04681858,-17.8501104651</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026140.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO605</fs:SITE_ID>
<fs:GRID_CODE>BXC861</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.04681858</fs:POINT_X>
<fs:POINT_Y>-17.8501104651</fs:POINT_Y>
<fs:SITE_ID_OR>CO5810</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>399005.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="820"><fs:test fid="820"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.043185308,-17.8501017239</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026139.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO606</fs:SITE_ID>
<fs:GRID_CODE>BXC857</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.043185308</fs:POINT_X>
<fs:POINT_Y>-17.8501017239</fs:POINT_Y>
<fs:SITE_ID_OR>CO5811</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>398620.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="821"><fs:test fid="821"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.043551831,-17.8486213295</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026303.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO607</fs:SITE_ID>
<fs:GRID_CODE>BXC797</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.043551831</fs:POINT_X>
<fs:POINT_Y>-17.8486213295</fs:POINT_Y>
<fs:SITE_ID_OR>CO5812</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>398658.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="822"><fs:test fid="822"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.044662938,-17.847316297</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026448.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO608</fs:SITE_ID>
<fs:GRID_CODE>BXC768</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.044662938</fs:POINT_X>
<fs:POINT_Y>-17.847316297</fs:POINT_Y>
<fs:SITE_ID_OR>CO5813</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>398775.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="823"><fs:test fid="823"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.046420151,-17.8434115398</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026881.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO609</fs:SITE_ID>
<fs:GRID_CODE>BXC650</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.046420151</fs:POINT_X>
<fs:POINT_Y>-17.8434115398</fs:POINT_Y>
<fs:SITE_ID_OR>CO5814</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>398959.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="824"><fs:test fid="824"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.051495287,-17.8508924228</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026056.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO610</fs:SITE_ID>
<fs:GRID_CODE>BXC896</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.051495287</fs:POINT_X>
<fs:POINT_Y>-17.8508924228</fs:POINT_Y>
<fs:SITE_ID_OR>CO5815</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>399501.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="825"><fs:test fid="825"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.026735294,-17.8849691562</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8022272.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO614</fs:SITE_ID>
<fs:GRID_CODE>CAG239</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.026735294</fs:POINT_X>
<fs:POINT_Y>-17.8849691562</fs:POINT_Y>
<fs:SITE_ID_OR>CO5901</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>396897.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="826"><fs:test fid="826"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.692007213,-17.8163808045</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029645.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO7</fs:SITE_ID>
<fs:GRID_CODE>BVB694</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.692007213</fs:POINT_X>
<fs:POINT_Y>-17.8163808045</fs:POINT_Y>
<fs:SITE_ID_OR>CO1007</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361380.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="827"><fs:test fid="827"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.698115923,-17.8183464463</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029432.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO8</fs:SITE_ID>
<fs:GRID_CODE>BVB761</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.698115923</fs:POINT_X>
<fs:POINT_Y>-17.8183464463</fs:POINT_Y>
<fs:SITE_ID_OR>CO1008</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>362029.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="828"><fs:test fid="828"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.692310299,-17.8175124428</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029520.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO9</fs:SITE_ID>
<fs:GRID_CODE>BVB725</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.692310299</fs:POINT_X>
<fs:POINT_Y>-17.8175124428</fs:POINT_Y>
<fs:SITE_ID_OR>CO1009</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>361413.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="829"><fs:test fid="829"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.84668054,-17.9682133482</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8012952.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO138</fs:SITE_ID>
<fs:GRID_CODE>CEL319</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.84668054</fs:POINT_X>
<fs:POINT_Y>-17.9682133482</fs:POINT_Y>
<fs:SITE_ID_OR>CO1316</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>377878.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="830"><fs:test fid="830"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.893147712,-17.7181658995</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8040650.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1382</fs:SITE_ID>
<fs:GRID_CODE>BQP97</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.893147712</fs:POINT_X>
<fs:POINT_Y>-17.7181658995</fs:POINT_Y>
<fs:SITE_ID_OR>COKP146</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>382635.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="831"><fs:test fid="831"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.872686074,-17.7089216822</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8041660.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1384</fs:SITE_ID>
<fs:GRID_CODE>BOY705</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.872686074</fs:POINT_X>
<fs:POINT_Y>-17.7089216822</fs:POINT_Y>
<fs:SITE_ID_OR>COKP148</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>380459.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="832"><fs:test fid="832"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.871207831,-17.7040510362</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8042198.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1385</fs:SITE_ID>
<fs:GRID_CODE>BOY553</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.871207831</fs:POINT_X>
<fs:POINT_Y>-17.7040510362</fs:POINT_Y>
<fs:SITE_ID_OR>COKP149</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>380299.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="833"><fs:test fid="833"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.877666793,-17.7207260307</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8040357.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1395</fs:SITE_ID>
<fs:GRID_CODE>BQO200</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.877666793</fs:POINT_X>
<fs:POINT_Y>-17.7207260307</fs:POINT_Y>
<fs:SITE_ID_OR>COKP158</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>380995.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="834"><fs:test fid="834"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.894839863,-17.7128613641</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8041238.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1420</fs:SITE_ID>
<fs:GRID_CODE>BOZ819</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.894839863</fs:POINT_X>
<fs:POINT_Y>-17.7128613641</fs:POINT_Y>
<fs:SITE_ID_OR>COKP181</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>382811.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="835"><fs:test fid="835"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.893441434,-17.7040961296</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8042207.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1426</fs:SITE_ID>
<fs:GRID_CODE>BOZ517</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.893441434</fs:POINT_X>
<fs:POINT_Y>-17.7040961296</fs:POINT_Y>
<fs:SITE_ID_OR>COKP187</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>382657.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="836"><fs:test fid="836"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.967491034,-17.7712875227</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8034817.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1445</fs:SITE_ID>
<fs:GRID_CODE>BTV56</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.967491034</fs:POINT_X>
<fs:POINT_Y>-17.7712875227</fs:POINT_Y>
<fs:SITE_ID_OR>COKP203</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>390551.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="837"><fs:test fid="837"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.967519436,-17.7712695971</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8034819.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1447</fs:SITE_ID>
<fs:GRID_CODE>BTV56</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.967519436</fs:POINT_X>
<fs:POINT_Y>-17.7712695971</fs:POINT_Y>
<fs:SITE_ID_OR>COKP205</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>390554.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="838"><fs:test fid="838"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.910048061,-17.7115997278</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8041387.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1469</fs:SITE_ID>
<fs:GRID_CODE>BOZ805</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.910048061</fs:POINT_X>
<fs:POINT_Y>-17.7115997278</fs:POINT_Y>
<fs:SITE_ID_OR>COKP225</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>384423.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="839"><fs:test fid="839"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.967679339,-17.7680620736</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8035174.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1470</fs:SITE_ID>
<fs:GRID_CODE>BSG866</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.967679339</fs:POINT_X>
<fs:POINT_Y>-17.7680620736</fs:POINT_Y>
<fs:SITE_ID_OR>COKP226</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>390569.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="840"><fs:test fid="840"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.967956876,-17.7657227831</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8035433.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1471</fs:SITE_ID>
<fs:GRID_CODE>BSG776</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.967956876</fs:POINT_X>
<fs:POINT_Y>-17.7657227831</fs:POINT_Y>
<fs:SITE_ID_OR>COKP227</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>390597.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="841"><fs:test fid="841"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.893610309,-17.7088508203</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8041681.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1666</fs:SITE_ID>
<fs:GRID_CODE>BOZ697</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.893610309</fs:POINT_X>
<fs:POINT_Y>-17.7088508203</fs:POINT_Y>
<fs:SITE_ID_OR>COKP410</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>382678.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="842"><fs:test fid="842"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.888443937,-17.7240046753</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8040001.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1839</fs:SITE_ID>
<fs:GRID_CODE>BQP272</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.888443937</fs:POINT_X>
<fs:POINT_Y>-17.7240046753</fs:POINT_Y>
<fs:SITE_ID_OR>COKP569</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>382140.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="843"><fs:test fid="843"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.885362257,-17.7160522848</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8040879.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1841</fs:SITE_ID>
<fs:GRID_CODE>BQO59</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.885362257</fs:POINT_X>
<fs:POINT_Y>-17.7160522848</fs:POINT_Y>
<fs:SITE_ID_OR>COKP570</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>381808.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="844"><fs:test fid="844"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.879087836,-17.7272592047</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8039635.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1842</fs:SITE_ID>
<fs:GRID_CODE>BQO412</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.879087836</fs:POINT_X>
<fs:POINT_Y>-17.7272592047</fs:POINT_Y>
<fs:SITE_ID_OR>COKP571</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>381150.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="845"><fs:test fid="845"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.879096816,-17.7273315558</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8039627.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1843</fs:SITE_ID>
<fs:GRID_CODE>BQO412</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.879096816</fs:POINT_X>
<fs:POINT_Y>-17.7273315558</fs:POINT_Y>
<fs:SITE_ID_OR>COKP572</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>381151.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="846"><fs:test fid="846"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.892147845,-17.7182144875</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8040644.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1844</fs:SITE_ID>
<fs:GRID_CODE>BQP96</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.892147845</fs:POINT_X>
<fs:POINT_Y>-17.7182144875</fs:POINT_Y>
<fs:SITE_ID_OR>COKP573</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>382529.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="847"><fs:test fid="847"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.900219786,-17.7182237005</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8040648.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1845</fs:SITE_ID>
<fs:GRID_CODE>BQP104</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.900219786</fs:POINT_X>
<fs:POINT_Y>-17.7182237005</fs:POINT_Y>
<fs:SITE_ID_OR>COKP574</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>383385.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="848"><fs:test fid="848"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.900708087,-17.7185608228</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8040611.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1846</fs:SITE_ID>
<fs:GRID_CODE>BQP105</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.900708087</fs:POINT_X>
<fs:POINT_Y>-17.7185608228</fs:POINT_Y>
<fs:SITE_ID_OR>COKP575</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>383437.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="849"><fs:test fid="849"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.882406188,-17.7320047246</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8039112.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1850</fs:SITE_ID>
<fs:GRID_CODE>BQO566</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.882406188</fs:POINT_X>
<fs:POINT_Y>-17.7320047246</fs:POINT_Y>
<fs:SITE_ID_OR>COKP579</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>381505.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="850"><fs:test fid="850"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.882209945,-17.7317144078</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8039144.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1852</fs:SITE_ID>
<fs:GRID_CODE>BQO565</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.882209945</fs:POINT_X>
<fs:POINT_Y>-17.7317144078</fs:POINT_Y>
<fs:SITE_ID_OR>COKP580</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>381484.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="851"><fs:test fid="851"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.886008254,-17.7198607365</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8040458.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1853</fs:SITE_ID>
<fs:GRID_CODE>BQO179</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.886008254</fs:POINT_X>
<fs:POINT_Y>-17.7198607365</fs:POINT_Y>
<fs:SITE_ID_OR>COKP581</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>381879.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="852"><fs:test fid="852"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.869701979,-17.723174689</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8040081.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO1854</fs:SITE_ID>
<fs:GRID_CODE>BQO282</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.869701979</fs:POINT_X>
<fs:POINT_Y>-17.723174689</fs:POINT_Y>
<fs:SITE_ID_OR>COKP582</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>380152.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="853"><fs:test fid="853"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.967491034,-17.7712875227</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8034817.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO2590</fs:SITE_ID>
<fs:GRID_CODE>BTV56</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.967491034</fs:POINT_X>
<fs:POINT_Y>-17.7712875227</fs:POINT_Y>
<fs:SITE_ID_OR>COSL80</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>390551.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="854"><fs:test fid="854"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.7653806,-17.9228806475</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8017913.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO319</fs:SITE_ID>
<fs:GRID_CODE>CBM623</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.7653806</fs:POINT_X>
<fs:POINT_Y>-17.9228806475</fs:POINT_Y>
<fs:SITE_ID_OR>CO2604</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>369235.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="855"><fs:test fid="855"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.868847547,-17.7000157927</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8042643.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO474</fs:SITE_ID>
<fs:GRID_CODE>BOY401</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.868847547</fs:POINT_X>
<fs:POINT_Y>-17.7000157927</fs:POINT_Y>
<fs:SITE_ID_OR>CO5101</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>380046.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="856"><fs:test fid="856"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.871651593,-17.7084819461</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8041708.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO475</fs:SITE_ID>
<fs:GRID_CODE>BOY674</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.871651593</fs:POINT_X>
<fs:POINT_Y>-17.7084819461</fs:POINT_Y>
<fs:SITE_ID_OR>CO5102</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>380349.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="857"><fs:test fid="857"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.872996165,-17.710604431</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8041474.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO476</fs:SITE_ID>
<fs:GRID_CODE>BOY765</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.872996165</fs:POINT_X>
<fs:POINT_Y>-17.710604431</fs:POINT_Y>
<fs:SITE_ID_OR>CO5103</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>380493.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="858"><fs:test fid="858"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.870126503,-17.7186312915</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8040584.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO477</fs:SITE_ID>
<fs:GRID_CODE>BQO132</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.870126503</fs:POINT_X>
<fs:POINT_Y>-17.7186312915</fs:POINT_Y>
<fs:SITE_ID_OR>CO5104</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>380194.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="859"><fs:test fid="859"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.875255043,-17.7354704106</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8038724.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO478</fs:SITE_ID>
<fs:GRID_CODE>BQO678</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.875255043</fs:POINT_X>
<fs:POINT_Y>-17.7354704106</fs:POINT_Y>
<fs:SITE_ID_OR>CO5105</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>380749.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="860"><fs:test fid="860"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.876827271,-17.7131930128</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8041190.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO479</fs:SITE_ID>
<fs:GRID_CODE>BOY860</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.876827271</fs:POINT_X>
<fs:POINT_Y>-17.7131930128</fs:POINT_Y>
<fs:SITE_ID_OR>CO5106</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>380901.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="861"><fs:test fid="861"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.886667025,-17.7139629833</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8041111.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO480</fs:SITE_ID>
<fs:GRID_CODE>BOY870</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.886667025</fs:POINT_X>
<fs:POINT_Y>-17.7139629833</fs:POINT_Y>
<fs:SITE_ID_OR>CO5107</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>381945.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="862"><fs:test fid="862"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.889444006,-17.7147378521</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8041027.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO481</fs:SITE_ID>
<fs:GRID_CODE>BOZ873</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.889444006</fs:POINT_X>
<fs:POINT_Y>-17.7147378521</fs:POINT_Y>
<fs:SITE_ID_OR>CO5108</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>382240.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="863"><fs:test fid="863"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.882305127,-17.7300520538</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8039328.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO482</fs:SITE_ID>
<fs:GRID_CODE>BQO505</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.882305127</fs:POINT_X>
<fs:POINT_Y>-17.7300520538</fs:POINT_Y>
<fs:SITE_ID_OR>CO5109</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>381493.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="864"><fs:test fid="864"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.883641971,-17.7304211603</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8039288.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO484</fs:SITE_ID>
<fs:GRID_CODE>BQO537</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.883641971</fs:POINT_X>
<fs:POINT_Y>-17.7304211603</fs:POINT_Y>
<fs:SITE_ID_OR>CO5110</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>381635.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="865"><fs:test fid="865"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.888269617,-17.7232174259</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8040088.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO485</fs:SITE_ID>
<fs:GRID_CODE>BQP272</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.888269617</fs:POINT_X>
<fs:POINT_Y>-17.7232174259</fs:POINT_Y>
<fs:SITE_ID_OR>CO5111</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>382121.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="866"><fs:test fid="866"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.889714715,-17.7228460269</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8040130.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO486</fs:SITE_ID>
<fs:GRID_CODE>BQP243</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.889714715</fs:POINT_X>
<fs:POINT_Y>-17.7228460269</fs:POINT_Y>
<fs:SITE_ID_OR>CO5112</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>382274.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="867"><fs:test fid="867"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.891021085,-17.7220309957</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8040221.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO487</fs:SITE_ID>
<fs:GRID_CODE>BQP215</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.891021085</fs:POINT_X>
<fs:POINT_Y>-17.7220309957</fs:POINT_Y>
<fs:SITE_ID_OR>CO5113</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>382412.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="868"><fs:test fid="868"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.893337596,-17.7102681761</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8041524.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO488</fs:SITE_ID>
<fs:GRID_CODE>BOZ727</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.893337596</fs:POINT_X>
<fs:POINT_Y>-17.7102681761</fs:POINT_Y>
<fs:SITE_ID_OR>CO5114</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>382650.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="869"><fs:test fid="869"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.900440993,-17.7144201359</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8041069.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO489</fs:SITE_ID>
<fs:GRID_CODE>BOZ885</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.900440993</fs:POINT_X>
<fs:POINT_Y>-17.7144201359</fs:POINT_Y>
<fs:SITE_ID_OR>CO5115</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>383406.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="870"><fs:test fid="870"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.873376475,-17.720674353</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8040360.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO497</fs:SITE_ID>
<fs:GRID_CODE>BQO196</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.873376475</fs:POINT_X>
<fs:POINT_Y>-17.720674353</fs:POINT_Y>
<fs:SITE_ID_OR>CO5123</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>380540.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="871"><fs:test fid="871"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.906519454,-17.7150324672</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8041005.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO525</fs:SITE_ID>
<fs:GRID_CODE>BOZ891</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.906519454</fs:POINT_X>
<fs:POINT_Y>-17.7150324672</fs:POINT_Y>
<fs:SITE_ID_OR>CO5201</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>384051.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="872"><fs:test fid="872"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.906562369,-17.7235099274</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8040067.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO529</fs:SITE_ID>
<fs:GRID_CODE>BQP291</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.906562369</fs:POINT_X>
<fs:POINT_Y>-17.7235099274</fs:POINT_Y>
<fs:SITE_ID_OR>CO5205</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>384061.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="873"><fs:test fid="873"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.903915263,-17.7230523299</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8040116.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO530</fs:SITE_ID>
<fs:GRID_CODE>BQP258</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.903915263</fs:POINT_X>
<fs:POINT_Y>-17.7230523299</fs:POINT_Y>
<fs:SITE_ID_OR>CO5206</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>383780.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="874"><fs:test fid="874"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.902033826,-17.7238461597</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8040027.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO531</fs:SITE_ID>
<fs:GRID_CODE>BQP286</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.902033826</fs:POINT_X>
<fs:POINT_Y>-17.7238461597</fs:POINT_Y>
<fs:SITE_ID_OR>CO5207</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>383581.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="875"><fs:test fid="875"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.903479752,-17.7217846431</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8040256.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO532</fs:SITE_ID>
<fs:GRID_CODE>BQP228</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.903479752</fs:POINT_X>
<fs:POINT_Y>-17.7217846431</fs:POINT_Y>
<fs:SITE_ID_OR>CO5208</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>383733.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="876"><fs:test fid="876"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.901669061,-17.7171563429</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8040767.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO533</fs:SITE_ID>
<fs:GRID_CODE>BQP76</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.901669061</fs:POINT_X>
<fs:POINT_Y>-17.7171563429</fs:POINT_Y>
<fs:SITE_ID_OR>CO5209</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>383538.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="877"><fs:test fid="877"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.900905598,-17.7170978472</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8040773.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO535</fs:SITE_ID>
<fs:GRID_CODE>BQP75</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.900905598</fs:POINT_X>
<fs:POINT_Y>-17.7170978472</fs:POINT_Y>
<fs:SITE_ID_OR>CO5210</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>383457.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="878"><fs:test fid="878"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.954900904,-17.743204103</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8037917.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO542</fs:SITE_ID>
<fs:GRID_CODE>BSG12</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.954900904</fs:POINT_X>
<fs:POINT_Y>-17.743204103</fs:POINT_Y>
<fs:SITE_ID_OR>CO5301</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>389199.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="879"><fs:test fid="879"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.956423764,-17.7440707865</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8037822.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO543</fs:SITE_ID>
<fs:GRID_CODE>BSG44</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.956423764</fs:POINT_X>
<fs:POINT_Y>-17.7440707865</fs:POINT_Y>
<fs:SITE_ID_OR>CO5302</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>389361.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="880"><fs:test fid="880"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.960376813,-17.7438477593</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8037849.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO544</fs:SITE_ID>
<fs:GRID_CODE>BSG48</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.960376813</fs:POINT_X>
<fs:POINT_Y>-17.7438477593</fs:POINT_Y>
<fs:SITE_ID_OR>CO5303</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>389780.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="881"><fs:test fid="881"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.955766417,-17.7712163412</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8034818.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO549</fs:SITE_ID>
<fs:GRID_CODE>BTV44</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.955766417</fs:POINT_X>
<fs:POINT_Y>-17.7712163412</fs:POINT_Y>
<fs:SITE_ID_OR>CO5401</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>389308.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="882"><fs:test fid="882"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.962693557,-17.7706205071</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8034888.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO550</fs:SITE_ID>
<fs:GRID_CODE>BTV51</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.962693557</fs:POINT_X>
<fs:POINT_Y>-17.7706205071</fs:POINT_Y>
<fs:SITE_ID_OR>CO5402</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>390042.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="883"><fs:test fid="883"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.967069282,-17.7691704895</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8035051.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO551</fs:SITE_ID>
<fs:GRID_CODE>BSG896</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.967069282</fs:POINT_X>
<fs:POINT_Y>-17.7691704895</fs:POINT_Y>
<fs:SITE_ID_OR>CO5403</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>390505.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="884"><fs:test fid="884"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.964781147,-17.7684715521</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8035127.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO552</fs:SITE_ID>
<fs:GRID_CODE>BSG863</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.964781147</fs:POINT_X>
<fs:POINT_Y>-17.7684715521</fs:POINT_Y>
<fs:SITE_ID_OR>CO5404</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>390262.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="885"><fs:test fid="885"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.963484941,-17.7675157468</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8035232.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO553</fs:SITE_ID>
<fs:GRID_CODE>BSG832</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.963484941</fs:POINT_X>
<fs:POINT_Y>-17.7675157468</fs:POINT_Y>
<fs:SITE_ID_OR>CO5405</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>390124.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="886"><fs:test fid="886"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.93747459,-17.8876659319</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8021922.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO223</fs:SITE_ID>
<fs:GRID_CODE>CAD193</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.93747459</fs:POINT_X>
<fs:POINT_Y>-17.8876659319</fs:POINT_Y>
<fs:SITE_ID_OR>CO1802</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>387442.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="887"><fs:test fid="887"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.964709647,-17.759587165</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8036110.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1998</fs:YEAR>
<fs:SITE_ID>CO554</fs:SITE_ID>
<fs:GRID_CODE>BSG563</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.964709647</fs:POINT_X>
<fs:POINT_Y>-17.759587165</fs:POINT_Y>
<fs:SITE_ID_OR>CO5406</fs:SITE_ID_OR>
<fs:DISCOVERY_>1998/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>390249.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="888"><fs:test fid="888"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.051983023,-17.9456462905</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8015572.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO294</fs:SITE_ID>
<fs:GRID_CODE>CDH447</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>2</fs:MONTH>
<fs:POINT_X>146.051983023</fs:POINT_X>
<fs:POINT_Y>-17.9456462905</fs:POINT_Y>
<fs:SITE_ID_OR>CO2401</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/02/01</fs:DISCOVERY_>
<fs:LATITUDE__>399606.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="889"><fs:test fid="889"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.033875439,-17.8352520486</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8027777.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO592</fs:SITE_ID>
<fs:GRID_CODE>BXC367</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>4</fs:MONTH>
<fs:POINT_X>146.033875439</fs:POINT_X>
<fs:POINT_Y>-17.8352520486</fs:POINT_Y>
<fs:SITE_ID_OR>CO5701</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/04/01</fs:DISCOVERY_>
<fs:LATITUDE__>397625.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="890"><fs:test fid="890"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.867594992,-17.5942063926</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8054350.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>north johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO1450</fs:SITE_ID>
<fs:GRID_CODE>BIW489</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.867594992</fs:POINT_X>
<fs:POINT_Y>-17.5942063926</fs:POINT_Y>
<fs:SITE_ID_OR>COKP208</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>379843.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="891"><fs:test fid="891"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.867251538,-17.5948822412</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8054275.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>north johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO1451</fs:SITE_ID>
<fs:GRID_CODE>BIW519</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.867251538</fs:POINT_X>
<fs:POINT_Y>-17.5948822412</fs:POINT_Y>
<fs:SITE_ID_OR>COKP209</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>379807.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="892"><fs:test fid="892"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.721076397,-17.8624266354</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8024571.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO41</fs:SITE_ID>
<fs:GRID_CODE>BYG425</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.721076397</fs:POINT_X>
<fs:POINT_Y>-17.8624266354</fs:POINT_Y>
<fs:SITE_ID_OR>CO1106</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>364496.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="893"><fs:test fid="893"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.076147071,-17.7956448582</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8032182.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO657</fs:SITE_ID>
<fs:GRID_CODE>BTZ861</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>146.076147071</fs:POINT_X>
<fs:POINT_Y>-17.7956448582</fs:POINT_Y>
<fs:SITE_ID_OR>CO6039</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>402083.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="894"><fs:test fid="894"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.077307363,-17.7919990328</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8032586.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO659</fs:SITE_ID>
<fs:GRID_CODE>BTZ743</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>146.077307363</fs:POINT_X>
<fs:POINT_Y>-17.7919990328</fs:POINT_Y>
<fs:SITE_ID_OR>CO6040</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>402204.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="895"><fs:test fid="895"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.077926712,-17.7926436408</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8032515.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO660</fs:SITE_ID>
<fs:GRID_CODE>BTZ743</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>146.077926712</fs:POINT_X>
<fs:POINT_Y>-17.7926436408</fs:POINT_Y>
<fs:SITE_ID_OR>CO6041</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>402270.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="896"><fs:test fid="896"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.871271211,-17.5940285979</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8054372.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>north johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO753</fs:SITE_ID>
<fs:GRID_CODE>BIW493</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.871271211</fs:POINT_X>
<fs:POINT_Y>-17.5940285979</fs:POINT_Y>
<fs:SITE_ID_OR>CO6507</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>380233.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="897"><fs:test fid="897"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.976101505,-17.7782194156</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8034055.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO1835</fs:SITE_ID>
<fs:GRID_CODE>BTW275</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.976101505</fs:POINT_X>
<fs:POINT_Y>-17.7782194156</fs:POINT_Y>
<fs:SITE_ID_OR>COKP565</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>391468.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="898"><fs:test fid="898"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.977923279,-17.7796749583</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8033895.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO1836</fs:SITE_ID>
<fs:GRID_CODE>BTW337</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.977923279</fs:POINT_X>
<fs:POINT_Y>-17.7796749583</fs:POINT_Y>
<fs:SITE_ID_OR>COKP566</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>391662.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="899"><fs:test fid="899"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.933287357,-17.887055613</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8021987.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO230</fs:SITE_ID>
<fs:GRID_CODE>CAD188</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.933287357</fs:POINT_X>
<fs:POINT_Y>-17.887055613</fs:POINT_Y>
<fs:SITE_ID_OR>CO1809</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>386998.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="900"><fs:test fid="900"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.793882067,-17.9881714422</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010708.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO243</fs:SITE_ID>
<fs:GRID_CODE>CFU84</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.793882067</fs:POINT_X>
<fs:POINT_Y>-17.9881714422</fs:POINT_Y>
<fs:SITE_ID_OR>CO2002</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>372301.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="901"><fs:test fid="901"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.718747333,-17.8608479612</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8024744.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO40</fs:SITE_ID>
<fs:GRID_CODE>BYG363</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.718747333</fs:POINT_X>
<fs:POINT_Y>-17.8608479612</fs:POINT_Y>
<fs:SITE_ID_OR>CO1105</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>364248.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="902"><fs:test fid="902"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.973971239,-17.7812358816</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8033720.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO560</fs:SITE_ID>
<fs:GRID_CODE>BTW363</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.973971239</fs:POINT_X>
<fs:POINT_Y>-17.7812358816</fs:POINT_Y>
<fs:SITE_ID_OR>CO5504</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>391244.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="903"><fs:test fid="903"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.975172076,-17.7790912072</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8033958.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO562</fs:SITE_ID>
<fs:GRID_CODE>BTW304</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.975172076</fs:POINT_X>
<fs:POINT_Y>-17.7790912072</fs:POINT_Y>
<fs:SITE_ID_OR>CO5506</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>391370.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="904"><fs:test fid="904"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.995163761,-17.7853946706</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8033272.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO563</fs:SITE_ID>
<fs:GRID_CODE>BTW535</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.995163761</fs:POINT_X>
<fs:POINT_Y>-17.7853946706</fs:POINT_Y>
<fs:SITE_ID_OR>CO5507</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>393493.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="905"><fs:test fid="905"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.995054942,-17.7812367692</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8033732.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO565</fs:SITE_ID>
<fs:GRID_CODE>BTW385</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.995054942</fs:POINT_X>
<fs:POINT_Y>-17.7812367692</fs:POINT_Y>
<fs:SITE_ID_OR>CO5509</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>393479.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="906"><fs:test fid="906"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.043079477,-17.8575392691</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8025316.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO611</fs:SITE_ID>
<fs:GRID_CODE>BYR197</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.043079477</fs:POINT_X>
<fs:POINT_Y>-17.8575392691</fs:POINT_Y>
<fs:SITE_ID_OR>CO5816</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>398613.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="907"><fs:test fid="907"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.074016388,-17.7990149473</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8031808.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO668</fs:SITE_ID>
<fs:GRID_CODE>BVO49</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.074016388</fs:POINT_X>
<fs:POINT_Y>-17.7990149473</fs:POINT_Y>
<fs:SITE_ID_OR>CO6050</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>401859.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="908"><fs:test fid="908"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.017916856,-17.6834553299</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8044564.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO758</fs:SITE_ID>
<fs:GRID_CODE>BNM739</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.017916856</fs:POINT_X>
<fs:POINT_Y>-17.6834553299</fs:POINT_Y>
<fs:SITE_ID_OR>CO6801</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>395846.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="909"><fs:test fid="909"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.024682455,-17.6754543252</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8045453.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO759</fs:SITE_ID>
<fs:GRID_CODE>BNM476</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.024682455</fs:POINT_X>
<fs:POINT_Y>-17.6754543252</fs:POINT_Y>
<fs:SITE_ID_OR>CO6802</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>396559.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="910"><fs:test fid="910"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.73955947,-17.8549649347</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8025410.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO234</fs:SITE_ID>
<fs:GRID_CODE>BYG175</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.73955947</fs:POINT_X>
<fs:POINT_Y>-17.8549649347</fs:POINT_Y>
<fs:SITE_ID_OR>CO1901</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366449.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="911"><fs:test fid="911"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.740590222,-17.8533178218</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8025593.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO235</fs:SITE_ID>
<fs:GRID_CODE>BYG146</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.740590222</fs:POINT_X>
<fs:POINT_Y>-17.8533178218</fs:POINT_Y>
<fs:SITE_ID_OR>CO1902</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366557.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="912"><fs:test fid="912"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.740597766,-17.8509049937</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8025860.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO236</fs:SITE_ID>
<fs:GRID_CODE>BYG56</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.740597766</fs:POINT_X>
<fs:POINT_Y>-17.8509049937</fs:POINT_Y>
<fs:SITE_ID_OR>CO1903</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366556.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="913"><fs:test fid="913"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.736995318,-17.8492460168</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026041.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO237</fs:SITE_ID>
<fs:GRID_CODE>BWR892</fs:GRID_CODE>
<fs:METHOD_OF_>AS</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.736995318</fs:POINT_X>
<fs:POINT_Y>-17.8492460168</fs:POINT_Y>
<fs:SITE_ID_OR>CO1904</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>366173.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="914"><fs:test fid="914"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.799065493,-17.9911496954</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8010382.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO244</fs:SITE_ID>
<fs:GRID_CODE>CFU209</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.799065493</fs:POINT_X>
<fs:POINT_Y>-17.9911496954</fs:POINT_Y>
<fs:SITE_ID_OR>CO2003</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>372852.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="915"><fs:test fid="915"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.905439727,-17.7189216376</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8040574.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO526</fs:SITE_ID>
<fs:GRID_CODE>BQP140</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.905439727</fs:POINT_X>
<fs:POINT_Y>-17.7189216376</fs:POINT_Y>
<fs:SITE_ID_OR>CO5202</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>383939.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="916"><fs:test fid="916"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.905746517,-17.7165374342</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8040838.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO527</fs:SITE_ID>
<fs:GRID_CODE>BQP50</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.905746517</fs:POINT_X>
<fs:POINT_Y>-17.7165374342</fs:POINT_Y>
<fs:SITE_ID_OR>CO5203</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>383970.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="917"><fs:test fid="917"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.908398231,-17.7193357551</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8040530.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO528</fs:SITE_ID>
<fs:GRID_CODE>BQP143</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.908398231</fs:POINT_X>
<fs:POINT_Y>-17.7193357551</fs:POINT_Y>
<fs:SITE_ID_OR>CO5204</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>384253.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="918"><fs:test fid="918"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.968175011,-17.7655160657</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8035456.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO555</fs:SITE_ID>
<fs:GRID_CODE>BSG777</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.968175011</fs:POINT_X>
<fs:POINT_Y>-17.7655160657</fs:POINT_Y>
<fs:SITE_ID_OR>CO5407</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>390620.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="919"><fs:test fid="919"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.977770832,-17.778282362</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8034049.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO557</fs:SITE_ID>
<fs:GRID_CODE>BTW277</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.977770832</fs:POINT_X>
<fs:POINT_Y>-17.778282362</fs:POINT_Y>
<fs:SITE_ID_OR>CO5501</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>391645.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="920"><fs:test fid="920"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.976073887,-17.7797556738</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8033885.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO558</fs:SITE_ID>
<fs:GRID_CODE>BTW335</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.976073887</fs:POINT_X>
<fs:POINT_Y>-17.7797556738</fs:POINT_Y>
<fs:SITE_ID_OR>CO5502</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>391466.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="921"><fs:test fid="921"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.979901953,-17.7834087951</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8033483.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO559</fs:SITE_ID>
<fs:GRID_CODE>BTW459</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.979901953</fs:POINT_X>
<fs:POINT_Y>-17.7834087951</fs:POINT_Y>
<fs:SITE_ID_OR>CO5503</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>391874.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="922"><fs:test fid="922"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.974072328,-17.7800524783</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8033851.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO561</fs:SITE_ID>
<fs:GRID_CODE>BTW333</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.974072328</fs:POINT_X>
<fs:POINT_Y>-17.7800524783</fs:POINT_Y>
<fs:SITE_ID_OR>CO5505</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>391254.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="923"><fs:test fid="923"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.999951312,-17.8014972601</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8031493.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO567</fs:SITE_ID>
<fs:GRID_CODE>BVM151</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.999951312</fs:POINT_X>
<fs:POINT_Y>-17.8014972601</fs:POINT_Y>
<fs:SITE_ID_OR>CO5511</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>394010.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="924"><fs:test fid="924"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.958411021,-17.7771410267</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8034164.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO556</fs:SITE_ID>
<fs:GRID_CODE>BTV256</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>8</fs:MONTH>
<fs:POINT_X>145.958411021</fs:POINT_X>
<fs:POINT_Y>-17.7771410267</fs:POINT_Y>
<fs:SITE_ID_OR>CO5408</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/08/01</fs:DISCOVERY_>
<fs:LATITUDE__>389592.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="925"><fs:test fid="925"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.07965773,-17.8138365506</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8030171.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO665</fs:SITE_ID>
<fs:GRID_CODE>BVO565</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>146.07965773</fs:POINT_X>
<fs:POINT_Y>-17.8138365506</fs:POINT_Y>
<fs:SITE_ID_OR>CO6047</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>402465.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="926"><fs:test fid="926"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.083043798,-17.815922132</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029942.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>1999</fs:YEAR>
<fs:SITE_ID>CO666</fs:SITE_ID>
<fs:GRID_CODE>BVO629</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>146.083043798</fs:POINT_X>
<fs:POINT_Y>-17.815922132</fs:POINT_Y>
<fs:SITE_ID_OR>CO6049</fs:SITE_ID_OR>
<fs:DISCOVERY_>1999/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>402825.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="927"><fs:test fid="927"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.904509516,-17.7121563658</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8041322.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO537</fs:SITE_ID>
<fs:GRID_CODE>BOZ799</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>1</fs:MONTH>
<fs:POINT_X>145.904509516</fs:POINT_X>
<fs:POINT_Y>-17.7121563658</fs:POINT_Y>
<fs:SITE_ID_OR>CO5212</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/01/02</fs:DISCOVERY_>
<fs:LATITUDE__>383836.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="928"><fs:test fid="928"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.089976741,-17.8163431576</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029899.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO670</fs:SITE_ID>
<fs:GRID_CODE>BVP636</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>2</fs:MONTH>
<fs:POINT_X>146.089976741</fs:POINT_X>
<fs:POINT_Y>-17.8163431576</fs:POINT_Y>
<fs:SITE_ID_OR>CO6052</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/02/01</fs:DISCOVERY_>
<fs:LATITUDE__>403560.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="929"><fs:test fid="929"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.030178158,-17.7650645157</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8035541.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO760</fs:SITE_ID>
<fs:GRID_CODE>BSJ722</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>2</fs:MONTH>
<fs:POINT_X>146.030178158</fs:POINT_X>
<fs:POINT_Y>-17.7650645157</fs:POINT_Y>
<fs:SITE_ID_OR>CO6901</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/02/01</fs:DISCOVERY_>
<fs:LATITUDE__>397193.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="930"><fs:test fid="930"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.94996006,-17.712232816</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8041341.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO713</fs:SITE_ID>
<fs:GRID_CODE>BPB787</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>3</fs:MONTH>
<fs:POINT_X>145.94996006</fs:POINT_X>
<fs:POINT_Y>-17.712232816</fs:POINT_Y>
<fs:SITE_ID_OR>CO6201</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/03/01</fs:DISCOVERY_>
<fs:LATITUDE__>388656.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="931"><fs:test fid="931"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.949936327,-17.7146909326</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8041069.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO714</fs:SITE_ID>
<fs:GRID_CODE>BPB877</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>3</fs:MONTH>
<fs:POINT_X>145.949936327</fs:POINT_X>
<fs:POINT_Y>-17.7146909326</fs:POINT_Y>
<fs:SITE_ID_OR>CO6202</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/03/01</fs:DISCOVERY_>
<fs:LATITUDE__>388655.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="932"><fs:test fid="932"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.071656782,-17.7973769512</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8031988.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO676</fs:SITE_ID>
<fs:GRID_CODE>BVO17</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>146.071656782</fs:POINT_X>
<fs:POINT_Y>-17.7973769512</fs:POINT_Y>
<fs:SITE_ID_OR>CO6058</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>401608.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="933"><fs:test fid="933"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.989348864,-17.8396539797</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8027265.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO777</fs:SITE_ID>
<fs:GRID_CODE>BXA530</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.989348864</fs:POINT_X>
<fs:POINT_Y>-17.8396539797</fs:POINT_Y>
<fs:SITE_ID_OR>CO7101</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>392909.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="934"><fs:test fid="934"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.679724897,-17.8072252312</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8030649.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO16</fs:SITE_ID>
<fs:GRID_CODE>BVA411</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.679724897</fs:POINT_X>
<fs:POINT_Y>-17.8072252312</fs:POINT_Y>
<fs:SITE_ID_OR>CO1015</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>360071.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="935"><fs:test fid="935"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.889144936,-17.9381048108</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8016311.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO259</fs:SITE_ID>
<fs:GRID_CODE>CDC184</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.889144936</fs:POINT_X>
<fs:POINT_Y>-17.9381048108</fs:POINT_Y>
<fs:SITE_ID_OR>CO2102</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>382355.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="936"><fs:test fid="936"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.759665876,-17.8744691964</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8023266.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO305</fs:SITE_ID>
<fs:GRID_CODE>BYH826</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.759665876</fs:POINT_X>
<fs:POINT_Y>-17.8744691964</fs:POINT_Y>
<fs:SITE_ID_OR>CO2501</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>368594.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="937"><fs:test fid="937"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.772670794,-17.9033525931</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8020079.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO316</fs:SITE_ID>
<fs:GRID_CODE>BZX900</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.772670794</fs:POINT_X>
<fs:POINT_Y>-17.9033525931</fs:POINT_Y>
<fs:SITE_ID_OR>CO2601</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>369993.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="938"><fs:test fid="938"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.742452867,-17.8970597668</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8020754.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO317</fs:SITE_ID>
<fs:GRID_CODE>BZW688</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.742452867</fs:POINT_X>
<fs:POINT_Y>-17.8970597668</fs:POINT_Y>
<fs:SITE_ID_OR>CO2602</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>366787.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="939"><fs:test fid="939"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.739975889,-17.9029719907</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8020098.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO318</fs:SITE_ID>
<fs:GRID_CODE>BZW896</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.739975889</fs:POINT_X>
<fs:POINT_Y>-17.9029719907</fs:POINT_Y>
<fs:SITE_ID_OR>CO2603</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>366529.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="940"><fs:test fid="940"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.719485299,-17.8632204813</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8024482.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO47</fs:SITE_ID>
<fs:GRID_CODE>BYG454</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.719485299</fs:POINT_X>
<fs:POINT_Y>-17.8632204813</fs:POINT_Y>
<fs:SITE_ID_OR>CO1111</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>364328.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="941"><fs:test fid="941"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.706194619,-17.8467217688</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8026298.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO48</fs:SITE_ID>
<fs:GRID_CODE>BWQ830</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.706194619</fs:POINT_X>
<fs:POINT_Y>-17.8467217688</fs:POINT_Y>
<fs:SITE_ID_OR>CO1112</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>362907.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="942"><fs:test fid="942"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.994990744,-17.7994564339</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8031716.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO568</fs:SITE_ID>
<fs:GRID_CODE>BVL85</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.994990744</fs:POINT_X>
<fs:POINT_Y>-17.7994564339</fs:POINT_Y>
<fs:SITE_ID_OR>CO5512</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>393483.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="943"><fs:test fid="943"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.970309307,-17.7782523108</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8034048.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO572</fs:SITE_ID>
<fs:GRID_CODE>BTV299</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.970309307</fs:POINT_X>
<fs:POINT_Y>-17.7782523108</fs:POINT_Y>
<fs:SITE_ID_OR>CO5516</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>390854.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="944"><fs:test fid="944"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.035099192,-17.8024871842</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8031403.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO581</fs:SITE_ID>
<fs:GRID_CODE>BVN158</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>146.035099192</fs:POINT_X>
<fs:POINT_Y>-17.8024871842</fs:POINT_Y>
<fs:SITE_ID_OR>CO5603</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>397736.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="945"><fs:test fid="945"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.890505419,-17.6724210864</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8045710.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO716</fs:SITE_ID>
<fs:GRID_CODE>BNI364</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.890505419</fs:POINT_X>
<fs:POINT_Y>-17.6724210864</fs:POINT_Y>
<fs:SITE_ID_OR>CO6301</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>382325.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="946"><fs:test fid="946"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.892359804,-17.6821197841</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8044638.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO717</fs:SITE_ID>
<fs:GRID_CODE>BNI696</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.892359804</fs:POINT_X>
<fs:POINT_Y>-17.6821197841</fs:POINT_Y>
<fs:SITE_ID_OR>CO6302</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>382528.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="947"><fs:test fid="947"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.899364395,-17.6806407797</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8044806.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO718</fs:SITE_ID>
<fs:GRID_CODE>BNI643</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.899364395</fs:POINT_X>
<fs:POINT_Y>-17.6806407797</fs:POINT_Y>
<fs:SITE_ID_OR>CO6303</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>383270.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="948"><fs:test fid="948"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.951023381,-17.685017018</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8044353.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO742</fs:SITE_ID>
<fs:GRID_CODE>BNK788</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.951023381</fs:POINT_X>
<fs:POINT_Y>-17.685017018</fs:POINT_Y>
<fs:SITE_ID_OR>CO6401</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>388752.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="949"><fs:test fid="949"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.94779824,-17.6818908331</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8044697.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO743</fs:SITE_ID>
<fs:GRID_CODE>BNK695</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.94779824</fs:POINT_X>
<fs:POINT_Y>-17.6818908331</fs:POINT_Y>
<fs:SITE_ID_OR>CO6402</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>388408.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="950"><fs:test fid="950"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.95539957,-17.6961837778</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8043120.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO744</fs:SITE_ID>
<fs:GRID_CODE>BPB253</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.95539957</fs:POINT_X>
<fs:POINT_Y>-17.6961837778</fs:POINT_Y>
<fs:SITE_ID_OR>CO6403</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>389223.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="951"><fs:test fid="951"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.894737983,-17.5827647816</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8055633.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>north johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO747</fs:SITE_ID>
<fs:GRID_CODE>BIX98</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.894737983</fs:POINT_X>
<fs:POINT_Y>-17.5827647816</fs:POINT_Y>
<fs:SITE_ID_OR>CO6501</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>382716.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="952"><fs:test fid="952"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.872272694,-17.596646174</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8054083.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>north johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO748</fs:SITE_ID>
<fs:GRID_CODE>BIW584</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.872272694</fs:POINT_X>
<fs:POINT_Y>-17.596646174</fs:POINT_Y>
<fs:SITE_ID_OR>CO6502</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>380341.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="953"><fs:test fid="953"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.873860156,-17.595950297</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8054161.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>north johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO749</fs:SITE_ID>
<fs:GRID_CODE>BIW556</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.873860156</fs:POINT_X>
<fs:POINT_Y>-17.595950297</fs:POINT_Y>
<fs:SITE_ID_OR>CO6503</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>380509.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="954"><fs:test fid="954"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.866999425,-17.5945102559</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8054316.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>north johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO750</fs:SITE_ID>
<fs:GRID_CODE>BIW488</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.866999425</fs:POINT_X>
<fs:POINT_Y>-17.5945102559</fs:POINT_Y>
<fs:SITE_ID_OR>CO6504</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>379780.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="955"><fs:test fid="955"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.861543974,-17.6034260685</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8053326.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>north johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO751</fs:SITE_ID>
<fs:GRID_CODE>BIW783</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.861543974</fs:POINT_X>
<fs:POINT_Y>-17.6034260685</fs:POINT_Y>
<fs:SITE_ID_OR>CO6505</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>379207.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="956"><fs:test fid="956"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.853417172,-17.6129317125</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8052269.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>north johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO752</fs:SITE_ID>
<fs:GRID_CODE>BKH234</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.853417172</fs:POINT_X>
<fs:POINT_Y>-17.6129317125</fs:POINT_Y>
<fs:SITE_ID_OR>CO6506</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>378351.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="957"><fs:test fid="957"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.984749834,-17.8535751717</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8025722.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO778</fs:SITE_ID>
<fs:GRID_CODE>BYP75</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>6</fs:MONTH>
<fs:POINT_X>145.984749834</fs:POINT_X>
<fs:POINT_Y>-17.8535751717</fs:POINT_Y>
<fs:SITE_ID_OR>CO7102</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/06/01</fs:DISCOVERY_>
<fs:LATITUDE__>392430.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="958"><fs:test fid="958"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.096187529,-17.8719909917</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8023745.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO1834</fs:SITE_ID>
<fs:GRID_CODE>BYT673</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.096187529</fs:POINT_X>
<fs:POINT_Y>-17.8719909917</fs:POINT_Y>
<fs:SITE_ID_OR>COKP564</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>404248.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="959"><fs:test fid="959"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.970406879,-17.7826270454</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8033564.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO569</fs:SITE_ID>
<fs:GRID_CODE>BTV449</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>145.970406879</fs:POINT_X>
<fs:POINT_Y>-17.7826270454</fs:POINT_Y>
<fs:SITE_ID_OR>CO5513</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>390867.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="960"><fs:test fid="960"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.007486564,-17.7986164545</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8031816.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO570</fs:SITE_ID>
<fs:GRID_CODE>BVM39</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.007486564</fs:POINT_X>
<fs:POINT_Y>-17.7986164545</fs:POINT_Y>
<fs:SITE_ID_OR>CO5514</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>394807.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="961"><fs:test fid="961"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.037089436,-17.8008159645</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8031589.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO591</fs:SITE_ID>
<fs:GRID_CODE>BVN130</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.037089436</fs:POINT_X>
<fs:POINT_Y>-17.8008159645</fs:POINT_Y>
<fs:SITE_ID_OR>CO5613</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>397946.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="962"><fs:test fid="962"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.095880318,-17.8711490482</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8023838.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO755</fs:SITE_ID>
<fs:GRID_CODE>BYT643</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>7</fs:MONTH>
<fs:POINT_X>146.095880318</fs:POINT_X>
<fs:POINT_Y>-17.8711490482</fs:POINT_Y>
<fs:SITE_ID_OR>CO6601</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/07/01</fs:DISCOVERY_>
<fs:LATITUDE__>404215.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="963"><fs:test fid="963"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.075816662,-17.7901844251</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8032786.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO677</fs:SITE_ID>
<fs:GRID_CODE>BTZ681</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>8</fs:MONTH>
<fs:POINT_X>146.075816662</fs:POINT_X>
<fs:POINT_Y>-17.7901844251</fs:POINT_Y>
<fs:SITE_ID_OR>CO6059</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/08/01</fs:DISCOVERY_>
<fs:LATITUDE__>402045.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="964"><fs:test fid="964"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.905165782,-17.7143380737</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8041081.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO536</fs:SITE_ID>
<fs:GRID_CODE>BOZ890</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>9</fs:MONTH>
<fs:POINT_X>145.905165782</fs:POINT_X>
<fs:POINT_Y>-17.7143380737</fs:POINT_Y>
<fs:SITE_ID_OR>CO5211</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/09/01</fs:DISCOVERY_>
<fs:LATITUDE__>383907.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="965"><fs:test fid="965"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.933336216,-17.8883572754</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8021843.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>2000</fs:YEAR>
<fs:SITE_ID>CO231</fs:SITE_ID>
<fs:GRID_CODE>CAD207</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>10</fs:MONTH>
<fs:POINT_X>145.933336216</fs:POINT_X>
<fs:POINT_Y>-17.8883572754</fs:POINT_Y>
<fs:SITE_ID_OR>CO1810</fs:SITE_ID_OR>
<fs:DISCOVERY_>2000/10/01</fs:DISCOVERY_>
<fs:LATITUDE__>387004.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="966"><fs:test fid="966"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.032203047,-17.8600884796</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8025028.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO595</fs:SITE_ID>
<fs:GRID_CODE>BYR275</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>4</fs:MONTH>
<fs:POINT_X>146.032203047</fs:POINT_X>
<fs:POINT_Y>-17.8600884796</fs:POINT_Y>
<fs:SITE_ID_OR>CO5704</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/04/30</fs:DISCOVERY_>
<fs:LATITUDE__>397462.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="967"><fs:test fid="967"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.051588663,-17.7814916337</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8033735.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO1448</fs:SITE_ID>
<fs:GRID_CODE>BTY385</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>146.051588663</fs:POINT_X>
<fs:POINT_Y>-17.7814916337</fs:POINT_Y>
<fs:SITE_ID_OR>COKP206</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>399472.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="968"><fs:test fid="968"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.859467696,-18.0003438604</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009405.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO1494</fs:SITE_ID>
<fs:GRID_CODE>CFX453</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.859467696</fs:POINT_X>
<fs:POINT_Y>-18.0003438604</fs:POINT_Y>
<fs:SITE_ID_OR>COKP248</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>379254.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="969"><fs:test fid="969"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.831756546,-17.9228207983</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8017965.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO1597</fs:SITE_ID>
<fs:GRID_CODE>CBP603</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.831756546</fs:POINT_X>
<fs:POINT_Y>-17.9228207983</fs:POINT_Y>
<fs:SITE_ID_OR>COKP344</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>376266.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="970"><fs:test fid="970"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.009511429,-17.8197659229</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029477.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO1603</fs:SITE_ID>
<fs:GRID_CODE>BVM761</fs:GRID_CODE>
<fs:METHOD_OF_>G</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>146.009511429</fs:POINT_X>
<fs:POINT_Y>-17.8197659229</fs:POINT_Y>
<fs:SITE_ID_OR>COKP35</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>395034.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="971"><fs:test fid="971"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.859931094,-17.9973100942</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009741.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO164</fs:SITE_ID>
<fs:GRID_CODE>CFX364</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.859931094</fs:POINT_X>
<fs:POINT_Y>-17.9973100942</fs:POINT_Y>
<fs:SITE_ID_OR>CO1416</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>379301.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="972"><fs:test fid="972"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.858787794,-17.9988577593</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009569.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO165</fs:SITE_ID>
<fs:GRID_CODE>CFX422</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.858787794</fs:POINT_X>
<fs:POINT_Y>-17.9988577593</fs:POINT_Y>
<fs:SITE_ID_OR>CO1417</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>379181.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="973"><fs:test fid="973"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.860654706,-18.0022848016</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009191.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO166</fs:SITE_ID>
<fs:GRID_CODE>CFX544</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.860654706</fs:POINT_X>
<fs:POINT_Y>-18.0022848016</fs:POINT_Y>
<fs:SITE_ID_OR>CO1418</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>379381.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="974"><fs:test fid="974"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.859732138,-18.000345417</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009405.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO167</fs:SITE_ID>
<fs:GRID_CODE>CFX453</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.859732138</fs:POINT_X>
<fs:POINT_Y>-18.000345417</fs:POINT_Y>
<fs:SITE_ID_OR>CO1419</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>379282.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="975"><fs:test fid="975"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.859889323,-18.0008704985</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8009347.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO169</fs:SITE_ID>
<fs:GRID_CODE>CFX483</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.859889323</fs:POINT_X>
<fs:POINT_Y>-18.0008704985</fs:POINT_Y>
<fs:SITE_ID_OR>CO1420</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>379299.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="976"><fs:test fid="976"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.710966766,-17.8260949434</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8028584.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO22</fs:SITE_ID>
<fs:GRID_CODE>BWQ144</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.710966766</fs:POINT_X>
<fs:POINT_Y>-17.8260949434</fs:POINT_Y>
<fs:SITE_ID_OR>CO1020</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>363397.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="977"><fs:test fid="977"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.736023666,-17.8505410514</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8025897.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO238</fs:SITE_ID>
<fs:GRID_CODE>BYG51</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.736023666</fs:POINT_X>
<fs:POINT_Y>-17.8505410514</fs:POINT_Y>
<fs:SITE_ID_OR>CO1905</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>366071.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="978"><fs:test fid="978"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.909802193,-17.9613393456</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8013753.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO260</fs:SITE_ID>
<fs:GRID_CODE>CEN86</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.909802193</fs:POINT_X>
<fs:POINT_Y>-17.9613393456</fs:POINT_Y>
<fs:SITE_ID_OR>CO2103</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>384558.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="979"><fs:test fid="979"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.827827218,-17.9274422567</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8017451.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO336</fs:SITE_ID>
<fs:GRID_CODE>CBO779</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.827827218</fs:POINT_X>
<fs:POINT_Y>-17.9274422567</fs:POINT_Y>
<fs:SITE_ID_OR>CO2701</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>375853.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="980"><fs:test fid="980"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.828501933,-17.9282054453</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8017367.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO337</fs:SITE_ID>
<fs:GRID_CODE>CBO810</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.828501933</fs:POINT_X>
<fs:POINT_Y>-17.9282054453</fs:POINT_Y>
<fs:SITE_ID_OR>CO2702</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>375925.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="981"><fs:test fid="981"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.792857909,-17.9108621355</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8019262.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO351</fs:SITE_ID>
<fs:GRID_CODE>CBN232</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.792857909</fs:POINT_X>
<fs:POINT_Y>-17.9108621355</fs:POINT_Y>
<fs:SITE_ID_OR>CO2801</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>372137.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="982"><fs:test fid="982"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.830651351,-17.9243595126</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8017794.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO3642</fs:SITE_ID>
<fs:GRID_CODE>CBP662</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.830651351</fs:POINT_X>
<fs:POINT_Y>-17.9243595126</fs:POINT_Y>
<fs:SITE_ID_OR>H05273</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>376150.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="983"><fs:test fid="983"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.830679968,-17.9243144989</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8017799.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>tully river</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO3643</fs:SITE_ID>
<fs:GRID_CODE>CBP662</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.830679968</fs:POINT_X>
<fs:POINT_Y>-17.9243144989</fs:POINT_Y>
<fs:SITE_ID_OR>H05274</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>376153.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>tully</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="984"><fs:test fid="984"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.871969471,-17.7028805369</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8042328.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO490</fs:SITE_ID>
<fs:GRID_CODE>BOY494</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.871969471</fs:POINT_X>
<fs:POINT_Y>-17.7028805369</fs:POINT_Y>
<fs:SITE_ID_OR>CO5116</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>380379.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="985"><fs:test fid="985"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.869416352,-17.7010312616</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8042531.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO491</fs:SITE_ID>
<fs:GRID_CODE>BOY432</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.869416352</fs:POINT_X>
<fs:POINT_Y>-17.7010312616</fs:POINT_Y>
<fs:SITE_ID_OR>CO5117</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>380107.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="986"><fs:test fid="986"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.866464906,-17.6995592329</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8042692.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO492</fs:SITE_ID>
<fs:GRID_CODE>BOY398</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.866464906</fs:POINT_X>
<fs:POINT_Y>-17.6995592329</fs:POINT_Y>
<fs:SITE_ID_OR>CO5118</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>379793.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="987"><fs:test fid="987"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.876844548,-17.7043544519</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8042168.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO493</fs:SITE_ID>
<fs:GRID_CODE>BOY559</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.876844548</fs:POINT_X>
<fs:POINT_Y>-17.7043544519</fs:POINT_Y>
<fs:SITE_ID_OR>CO5119</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>380897.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="988"><fs:test fid="988"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.881321109,-17.726015733</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8039774.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO494</fs:SITE_ID>
<fs:GRID_CODE>BQO384</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.881321109</fs:POINT_X>
<fs:POINT_Y>-17.726015733</fs:POINT_Y>
<fs:SITE_ID_OR>CO5120</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>381386.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="989"><fs:test fid="989"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.00371925,-17.7906531586</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8032695.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO571</fs:SITE_ID>
<fs:GRID_CODE>BTX695</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>146.00371925</fs:POINT_X>
<fs:POINT_Y>-17.7906531586</fs:POINT_Y>
<fs:SITE_ID_OR>CO5515</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>394403.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="990"><fs:test fid="990"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.977729657,-17.7788876707</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8033982.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO573</fs:SITE_ID>
<fs:GRID_CODE>BTW307</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.977729657</fs:POINT_X>
<fs:POINT_Y>-17.7788876707</fs:POINT_Y>
<fs:SITE_ID_OR>CO5517</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>391641.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="991"><fs:test fid="991"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">145.974350049,-17.7842835559</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8033383.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO574</fs:SITE_ID>
<fs:GRID_CODE>BTW483</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>145.974350049</fs:POINT_X>
<fs:POINT_Y>-17.7842835559</fs:POINT_Y>
<fs:SITE_ID_OR>CO5518</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>391286.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="992"><fs:test fid="992"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.031201905,-17.802630601</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8031385.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO582</fs:SITE_ID>
<fs:GRID_CODE>BVN184</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>146.031201905</fs:POINT_X>
<fs:POINT_Y>-17.802630601</fs:POINT_Y>
<fs:SITE_ID_OR>CO5604</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>397323.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="993"><fs:test fid="993"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.040041135,-17.8257476158</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8028832.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO583</fs:SITE_ID>
<fs:GRID_CODE>BXC43</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>146.040041135</fs:POINT_X>
<fs:POINT_Y>-17.8257476158</fs:POINT_Y>
<fs:SITE_ID_OR>CO5605</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>398273.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="994"><fs:test fid="994"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.034265998,-17.8030343766</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8031342.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO584</fs:SITE_ID>
<fs:GRID_CODE>BVN187</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>146.034265998</fs:POINT_X>
<fs:POINT_Y>-17.8030343766</fs:POINT_Y>
<fs:SITE_ID_OR>CO5606</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>397648.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="995"><fs:test fid="995"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.03339842,-17.8029577892</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8031350.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO585</fs:SITE_ID>
<fs:GRID_CODE>BVN186</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>146.03339842</fs:POINT_X>
<fs:POINT_Y>-17.8029577892</fs:POINT_Y>
<fs:SITE_ID_OR>CO5607</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>397556.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="996"><fs:test fid="996"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.031298253,-17.7987629139</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8031813.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO586</fs:SITE_ID>
<fs:GRID_CODE>BVN34</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>146.031298253</fs:POINT_X>
<fs:POINT_Y>-17.7987629139</fs:POINT_Y>
<fs:SITE_ID_OR>CO5608</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>397331.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="997"><fs:test fid="997"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.033599418,-17.8006722263</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8031603.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO587</fs:SITE_ID>
<fs:GRID_CODE>BVN96</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>146.033599418</fs:POINT_X>
<fs:POINT_Y>-17.8006722263</fs:POINT_Y>
<fs:SITE_ID_OR>CO5609</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>397576.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="998"><fs:test fid="998"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.009132421,-17.8200532082</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8029445.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO594</fs:SITE_ID>
<fs:GRID_CODE>BVM760</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>146.009132421</fs:POINT_X>
<fs:POINT_Y>-17.8200532082</fs:POINT_Y>
<fs:SITE_ID_OR>CO5703</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>394994.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>
<gml:featureMember gml:id="999"><fs:test fid="999"><fs:None><gml:Point srsName="EPSG:None"><gml:coordinates decimal="." cs="," ts=" ">146.071626435,-17.7904718827</gml:coordinates></gml:Point></fs:None><fs:LONGITUDE_>8032752.0</fs:LONGITUDE_>
<fs:SUB_CATCH_>south johnstone ri</fs:SUB_CATCH_>
<fs:YEAR>2001</fs:YEAR>
<fs:SITE_ID>CO680</fs:SITE_ID>
<fs:GRID_CODE>BTZ677</fs:GRID_CODE>
<fs:METHOD_OF_>None</fs:METHOD_OF_>
<fs:MONTH>5</fs:MONTH>
<fs:POINT_X>146.071626435</fs:POINT_X>
<fs:POINT_Y>-17.7904718827</fs:POINT_Y>
<fs:SITE_ID_OR>CO6061</fs:SITE_ID_OR>
<fs:DISCOVERY_>2001/05/01</fs:DISCOVERY_>
<fs:LATITUDE__>401601.0</fs:LATITUDE__>
<fs:Max_2>None</fs:Max_2>
<fs:SPECIES>CO</fs:SPECIES>
<fs:CATCHMENT_>johnstone</fs:CATCHMENT_>
<fs:SHIRE_NAME>CASSOWARY COAST REGIONAL</fs:SHIRE_NAME></fs:test></gml:featureMember>       
<gml:featureMember gml:id="1"><fs:test fid="1"><fs:None><gml:Point srsName="EPSG:4326"><gml:coordinates decimal="." cs="," ts=" ">10.665622,47.908719</gml:coordinates></gml:Point></fs:None><fs:name>None</fs:name></fs:test></gml:featureMember>
<gml:featureMember gml:id="2"><fs:test fid="2"><fs:None><gml:Point srsName="EPSG:4326"><gml:coordinates decimal="." cs="," ts=" ">11.522555,47.761224</gml:coordinates></gml:Point></fs:None><fs:name>None</fs:name></fs:test></gml:featureMember>
<gml:featureMember gml:id="3"><fs:test fid="3"><fs:None><gml:Point srsName="EPSG:4326"><gml:coordinates decimal="." cs="," ts=" ">11.083102,47.420393</gml:coordinates></gml:Point></fs:None><fs:name>None</fs:name></fs:test></gml:featureMember>
<gml:featureMember gml:id="4"><fs:test fid="4"><fs:None><gml:Point srsName="EPSG:4326"><gml:coordinates decimal="." cs="," ts=" ">10.467868,46.611449</gml:coordinates></gml:Point></fs:None><fs:name>None</fs:name></fs:test></gml:featureMember>
<gml:featureMember gml:id="5"><fs:test fid="5"><fs:None><gml:Point srsName="EPSG:4326"><gml:coordinates decimal="." cs="," ts=" ">9.347262,47.420393</gml:coordinates></gml:Point></fs:None><fs:name>None</fs:name></fs:test></gml:featureMember>
<gml:featureMember gml:id="6"><fs:test fid="6"><fs:None><gml:Point srsName="EPSG:4326"><gml:coordinates decimal="." cs="," ts=" ">7.754245,47.494675</gml:coordinates></gml:Point></fs:None><fs:name>None</fs:name></fs:test></gml:featureMember>
<gml:featureMember gml:id="7"><fs:test fid="7"><fs:None><gml:Point srsName="EPSG:4326"><gml:coordinates decimal="." cs="," ts=" ">8.473849,47.379493</gml:coordinates></gml:Point></fs:None><fs:name>None</fs:name></fs:test></gml:featureMember>
<gml:featureMember gml:id="8"><fs:test fid="8"><fs:None><gml:Point srsName="EPSG:4326"><gml:coordinates decimal="." cs="," ts=" ">8.473849,47.099782</gml:coordinates></gml:Point></fs:None><fs:name>None</fs:name></fs:test></gml:featureMember>
<gml:featureMember gml:id="9"><fs:test fid="9"><fs:None><gml:Point srsName="EPSG:4326"><gml:coordinates decimal="." cs="," ts=" ">9.632907,46.683098</gml:coordinates></gml:Point></fs:None><fs:name>None</fs:name></fs:test></gml:featureMember>
<gml:featureMember gml:id="10"><fs:test fid="10"><fs:None><gml:Point srsName="EPSG:4326"><gml:coordinates decimal="." cs="," ts=" ">10.649142,46.987484</gml:coordinates></gml:Point></fs:None><fs:name>None</fs:name></fs:test></gml:featureMember>
<gml:featureMember gml:id="11"><fs:test fid="11"><fs:None><gml:Point srsName="EPSG:4326"><gml:coordinates decimal="." cs="," ts=" ">10.484347,47.234227</gml:coordinates></gml:Point></fs:None><fs:name>None</fs:name></fs:test></gml:featureMember>
<gml:featureMember gml:id="12"><fs:test fid="12"><fs:None><gml:Point srsName="EPSG:4326"><gml:coordinates decimal="." cs="," ts=" ">9.918551,47.077341</gml:coordinates></gml:Point></fs:None><fs:name>None</fs:name></fs:test></gml:featureMember>
<gml:featureMember gml:id="13"><fs:test fid="13"><fs:None><gml:Point srsName="EPSG:4326"><gml:coordinates decimal="." cs="," ts=" ">7.413669,46.641629</gml:coordinates></gml:Point></fs:None><fs:name>None</fs:name></fs:test></gml:featureMember>
<gml:featureMember gml:id="14"><fs:test fid="14"><fs:None><gml:Point srsName="EPSG:4326"><gml:coordinates decimal="." cs="," ts=" ">6.935763,47.032431</gml:coordinates></gml:Point></fs:None><fs:name>None</fs:name></fs:test></gml:featureMember>
<gml:featureMember gml:id="15"><fs:test fid="15"><fs:None><gml:Point srsName="EPSG:4326"><gml:coordinates decimal="." cs="," ts=" ">7.737765,47.092303</gml:coordinates></gml:Point></fs:None><fs:name>None</fs:name></fs:test></gml:featureMember>
<gml:featureMember gml:id="16"><fs:test fid="16"><fs:None><gml:Point srsName="EPSG:4326"><gml:coordinates decimal="." cs="," ts=" ">8.951754,46.964996</gml:coordinates></gml:Point></fs:None><fs:name>None</fs:name></fs:test></gml:featureMember>
<gml:featureMember gml:id="17"><fs:test fid="17"><fs:None><gml:Point srsName="EPSG:4326"><gml:coordinates decimal="." cs="," ts=" ">8.204684,47.676224</gml:coordinates></gml:Point></fs:None><fs:name>None</fs:name></fs:test></gml:featureMember>
<gml:featureMember gml:id="18"><fs:test fid="18"><fs:None><gml:Point srsName="EPSG:4326"><gml:coordinates decimal="." cs="," ts=" ">9.144015,47.624417</gml:coordinates></gml:Point></fs:None><fs:name>None</fs:name></fs:test></gml:featureMember>
<gml:featureMember gml:id="19"><fs:test fid="19"><fs:None><gml:Point srsName="EPSG:4326"><gml:coordinates decimal="." cs="," ts=" ">9.281344,47.245416</gml:coordinates></gml:Point></fs:None><fs:name>None</fs:name></fs:test></gml:featureMember>
</wfs:FeatureCollection>

	';*/

?>