<head>
<meta charset="utf8"/>
<?php include("connect.php"); ?>
	<script src='js/jquery.js'></script>
    <script src='js/multifilter.js'></script>

<script type='text/javascript'>
    //<![CDATA[
      $(document).ready(function() {
        $('.filter').multifilter()
      })
  </script>

</head>
<body>
<div class='filter-container' style="float:left;">
      <input autocomplete='off' class='filter' name='name' placeholder='AD'  data-col="AD" style="width:200px; border:1px solid #ddd; border-radius:5px; height:27px; padding-left:10px;"/>
      <input autocomplete='off' class='filter' name='name' placeholder='SOYAD'   data-col='SOYAD' style="width:200px; border:1px solid #ddd; border-radius:5px; height:27px; padding-left:10px;"/>
      <input autocomplete='off' class='filter' name='name' placeholder='TEL' data-col='TEL'  style="width:200px; border:1px solid #ddd; border-radius:5px; height:27px; padding-left:10px;"/>
      <input autocomplete='off' class='filter' name='name' placeholder='EMAİL' data-col='EMAİL'  style="width:200px; border:1px solid #ddd; border-radius:5px; height:27px; padding-left:10px;"/>
 </div>
    <table cellpadding="0" cellspacing="5" width="100%" >
		<thead>
			<th><a href="#">AD</a></th>
          	<th><a href="#">SOYAD</a></th>
          	<th><a href="#">TEL</a></th>
          	<th><a href="#">EMAİL</a></th>
          	<th><a href="#">NOT</a></th>
            <th width="400"><a href="#"></a></th>
		</thead>
  <tbody>
		<tr  style="border-bottom:1px solid #000;">
   <?php 
									  
		$ara=$db->prepare(' SELECT * FROM  tabloadi ' );
		$ara->execute();
		$liste =$ara->fetchAll(PDO::FETCH_ASSOC);
        foreach($liste as $row ){
        ?>
        
		<td  style="border-bottom:1px solid #303030; "><?=$row["ad"]; ?></td>
      	<td  style="border-bottom:1px solid #000;"><?=$row["soyad"]; ?></td>
      	<td  style="border-bottom:1px solid #000;"><?=$row["tel"]; ?></td>
      	<td  style="border-bottom:1px solid #000;"><?=$row["email"]; ?></td>
      	<td  style="border-bottom:1px solid #000;"><?=$row["notlar"]; ?></td>
		<td  >
         &nbsp;
         <a href="update.php"><img src="images/24.png" title="Güncelle" /></a>&nbsp;
         <a href="delete.php"><img src="images/01.png" title="Sil"/></a>
         </td>
	</tr>
       <?php
      }
      ?>
	</tbody>
	</table>
</body>