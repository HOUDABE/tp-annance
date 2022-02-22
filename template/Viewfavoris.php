<?php include "header.php"; ?>

   
<?php

   
 foreach ( $myFavoris->favoris as $entry ) {  ?>
    <tr>
      <th scope="row"><?=$entry->annonce->id; ?></th>
      <td> <img src="http://localhost:3000/img/<?=$entry->annonce->image; ?>" width="100px"></td>
      <td><?=$entry->annonce->titre; ?></td>
      <td><?=$entry->annonce->message; ?></td>
     
    </tr> 
    <?php } ?>   

  </tbody>
</table>