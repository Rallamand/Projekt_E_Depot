<?php
include 'db.php';
$typeid = 0;

$dbtype = $db->query("SELECT * FROM type");
$dbstatus = $db->query("SELECT * FROM status");
if ($db->connect_errno) {
    echo "fejl";
}

?>






<div class="accordion" id="accordionExample">

  <table> 
    <tr style="text-align:center">
      <th></th>
      <th>Antal</th>
      <th>Navn</th>
      <th>Status</th>
      <th>Bygning</th>
      <th>Lokation</th>
    </tr>  
  
            
    <?php
      while ($row = $dbtype->fetch_assoc()){
        $type = $row['navn'];
        $typeid = $row['type_id'];
                  
    ?>
        
    <!-- tabel for grej type-->

    <tr style="text-align:center" id="heading<?php echo $typeid?>">
      <td>
      <button class="btn btn-primary collapsed" type="button" data-toggle="collapse" data-target="#collapse<?php echo $typeid?>" aria-expanded="false" aria-controls="collapse<?php echo $typeid?>">
      klik mig
      </button>
      </td>

      <!-- Antal -->
      <td> 1 </td> 
      
      <!-- Type -->  
      <td> <?php echo $type ?> </td>
      
      <!-- Status -->
      <!-- <td><?php //echo $status ?></td> -->
      
      <!-- Bygning -->
      <!-- <td><?php //echo $bygning ?></td> -->

      <!-- Lokation -->
      <!-- <td><?php //echo $lokation ?></td> -->  

    </tr>
   


    <!-- skjult tabel for hver enkelt grej af typen -->
    <div id="collapse<?php echo $typeid?>" class="collapse" aria-labelledby="heading<?php echo $typeid?>" data-parent="#accordionExample">

        <?php
          $dbgrej = $db->query("SELECT * FROM grej WHERE type_id='$typeid'");
        while ($row = $dbgrej->fetch_assoc()){
          $grej =$row['navn'];
        
        ?>
        <tr style="text-align:center" id="collapse<?php echo $typeid?>" class="collapse" aria-labelledby="heading<?php echo $typeid?>" data-parent="#accordionExample">
          <td></td>
          <!-- Antal -->
          <td> 1 </td> 
          
          <!-- Grej -->  
          <td> <?php echo $grej ?> </td>
          
          <!-- Status -->
          <!-- <td><?php //echo $status ?></td> -->
          
          <!-- Bygning -->
          <!-- <td><?php //echo $bygning ?></td> -->

          <!-- Lokation -->
          <!-- <td><?php //echo $lokation ?></td> -->
        </tr>
          
          <?php
        }
        ?>
  </div>

                  
              <?php
              }
              ?>
          
  
      

  
  
  </table>






<div class="card">
  <div class="card-header" id="headingThree">
    <h2 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Collapsible Group Item #3
      </button>
    </h2>
  </div>
  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
    <div class="card-body">
      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
    </div>
  </div>
</div>
</div>
